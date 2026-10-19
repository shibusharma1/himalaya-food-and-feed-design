# Himalayan Food and Feed &mdash; cPanel &amp; Standard PHP Production Deployment Guide

## 1. Prerequisites &amp; Hosting Requirements
- **PHP Version:** PHP 8.2 or later (PHP 8.2 / 8.3 recommended).
- **PHP Extensions Required:** `curl`, `gd`, `openssl`, `mbstring`, `session`.
- **Web Server:** Apache 2.4+ with `mod_rewrite`, `mod_headers`, `mod_expires`, and `mod_deflate` enabled.
- **SSL Certificate:** Free cPanel AutoSSL / Let's Encrypt SSL active for `https://www.himalayanfoodandfeed.com`.
- **Database:** None required. The website operates on a high-performance, maintainable flat-file PHP architecture.

---

## 2. Step-by-Step cPanel Deployment

### Step A: Prepare Files
1. In your local development workspace, ensure temporary scratch files (e.g., `scratch_test.php`, test logs) are deleted.
2. Compress the project folder contents into a `.zip` file (excluding `.git` repository folder to minimize file size).

### Step B: Upload to cPanel File Manager
1. Log in to your cPanel dashboard.
2. Open **File Manager** and navigate to your domain's document root (typically `public_html/` or a dedicated addon domain folder).
3. Click **Upload** and upload the project `.zip` archive.
4. Select the uploaded `.zip` archive and click **Extract**.
5. Verify that `.htaccess` is present. (If hidden, click **Settings** in the top right of File Manager and check *Show Hidden Files (dotfiles)*).

### Step C: Set Directory Permissions
- Directories: `755` (`drwxr-xr-x`).
- Files: `644` (`-rw-r--r--`).
- Writable log directory: Ensure `storage/logs/` is set to `755` (or `775` depending on server PHP-FPM execution user).

### Step D: Select PHP 8.2+ in cPanel
1. In cPanel, find **MultiPHP Manager** or **Select PHP Version**.
2. Select the domain `himalayanfoodandfeed.com` and set the PHP version to **PHP 8.2** or **PHP 8.3**.
3. Under **MultiPHP INI Editor**, ensure:
   - `display_errors = Off` (Production security)
   - `log_errors = On`
   - `max_execution_time = 60`
   - `upload_max_filesize = 10M`
   - `post_max_size = 12M`

---

## 3. Email Configuration &amp; Deliverability (SPF, DKIM, DMARC)

The quote form transmits submissions to `kumar@himalayanfoodandfeed.com`.

### 1. Creating the System Mailbox
1. In cPanel, open **Email Accounts** &rarr; **Create**.
2. Create `no-reply@himalayanfoodandfeed.com` (or use `kumar@himalayanfoodandfeed.com`).

### 2. DNS Authentication Records (Critical for Inbox Delivery)
To ensure enquiry notifications and client replies do not land in spam:
- **SPF Record (TXT):**
  ```text
  v=spf1 +a +mx +ip4:YOUR_SERVER_IP include:_spf.google.com ~all
  ```
- **DKIM (DomainKeys Identified Mail):**
  In cPanel, open **Email Deliverability** and click **Install / Manage** on `himalayanfoodandfeed.com` to enable DKIM signing.
- **DMARC Record (TXT):**
  ```text
  v=DMARC1; p=quarantine; rua=mailto:postmaster@himalayanfoodandfeed.com; pct=100
  ```

### 3. Setting Environment Variables
You can configure environment variables via cPanel **File Manager** in a `.env` file or within `.htaccess`:
```apache
SetEnv MAIL_MODE mail
SetEnv MAIL_RECIPIENT kumar@himalayanfoodandfeed.com
SetEnv MAIL_SENDER no-reply@himalayanfoodandfeed.com
```

---

## 4. Pre-Launch Verification Checklist

Before publishing:
- [ ] Test that `https://www.himalayanfoodandfeed.com` enforces HTTPS.
- [ ] Submit a test quotation through `contact.php#quote-form`. Verify that:
  - Form validation blocks missing fields.
  - Honeypot stops automated spambots.
  - CSRF token verifies properly.
  - Success message displays upon completion.
  - Notification arrives in `kumar@himalayanfoodandfeed.com`.
- [ ] Check `storage/logs/enquiries.log` to confirm transactions are safely audited.
- [ ] Test the mobile navigation drawer on an iOS or Android device.
- [ ] Verify that `sitemap.xml` returns valid XML and is submitted to Google Search Console.
- [ ] Test that `404.php` correctly displays for non-existent URLs and returns HTTP status 404.
