<?php
/**
 * Himalayan Food and Feed - Central Product Catalog Model
 * 
 * Centralized data store for all B2B product categories and items.
 * Note: Specifications are indicative / draft only and explicitly identified
 * as subject to final confirmation and certificate of analysis per lot.
 */

$productCatalog = [
    'animal-proteins' => [
        'id' => 'animal-proteins',
        'title' => 'Animal Proteins',
        'tagline' => 'High-protein raw materials for balanced poultry, swine, aquaculture and livestock nutrition',
        'short_desc' => 'Meat and bone meal, poultry meal, fish meal and feather meal sourced from vetted processing facilities.',
        'image' => 'assets/images/products/animal-proteins.webp',
        'icon' => 'fa-drumstick-bite',
        'url' => 'products/animal-proteins.php',
        'overview' => 'Animal protein ingredients provide critical amino acid profiles, phosphorus, and essential fatty acids for animal feed mills. Sourced through established trade channels with complete veterinary documentation, batch traceability, and specification alignment.',
        'items' => [
            [
                'id' => 'meat-bone-meal',
                'name' => 'Meat and Bone Meal (MBM)',
                'category' => 'Animal Proteins',
                'description' => 'Rendered protein ingredient providing a balanced combination of crude protein, digestible calcium, and available phosphorus for animal nutrition formulations.',
                'application' => 'Poultry feeds, swine rations, aquaculture feeds (subject to local jurisdiction & feed safety laws).',
                'specs_status' => 'Indicative parameter range: Crude Protein ~45% to 55%, Moisture max 10%. Final parameters confirmed per production lot and veterinary health certificate.',
                'grades' => ['Feed Grade Ruminant-Free', 'High-Protein MBM'],
                'packaging' => 'Bulk container liner bags, 1,000 kg jumbo bags, or 50 kg woven polypropylene bags.',
                'doc_requirements' => 'Veterinary Health Certificate, Certificate of Analysis (COA), Certificate of Origin, Non-BSE declaration where required.'
            ],
            [
                'id' => 'poultry-meal',
                'name' => 'Poultry By-Product Meal',
                'category' => 'Animal Proteins',
                'description' => 'High-quality rendered poultry meal characterized by elevated protein digestibility, low ash variants, and rich essential amino acid profile.',
                'application' => 'Aquafeed, broiler and layer diets, pet food manufacturing.',
                'specs_status' => 'Indicative parameters: Crude Protein ~60% to 65%, Digestibility >85%, Moisture max 8%. Actual values verified by laboratory report per shipment.',
                'grades' => ['Standard Feed Grade', 'Pet Food Grade / Low Ash Grade'],
                'packaging' => '1,000 kg big bags or 50 kg multi-wall bags with moisture barrier.',
                'doc_requirements' => 'Manufacturer batch COA, Veterinary health approval, Heat treatment certificate.'
            ],
            [
                'id' => 'fish-meal',
                'name' => 'Fish Meal',
                'category' => 'Animal Proteins',
                'description' => 'Marine protein source supplying high biological value protein, omega-3 fatty acids (EPA and DHA), and natural attractants for aquaculture and starter feeds.',
                'application' => 'Shrimp and fish feeds, piglet starter feeds, premium poultry diets.',
                'specs_status' => 'Indicative parameters: Crude Protein ~60% to 68%, Fat max 10%, TVN/Histamine tested. Full specification available upon request.',
                'grades' => ['Prime / Steam Dried 65%+', 'Standard Feed Grade 60%'],
                'packaging' => '50 kg bags or 1,000 kg big bags, containerized.',
                'doc_requirements' => 'Health certificate, Catch area documentation, Phytosanitary / Veterinary clearance, Antioxidant treatment confirmation.'
            ],
            [
                'id' => 'feather-meal',
                'name' => 'Hydrolyzed Feather Meal',
                'category' => 'Animal Proteins',
                'description' => 'Cost-effective high-density crude protein ingredient produced via controlled pressure hydrolysis to break down keratin and enhance digestibility.',
                'application' => 'Aquafeed, ruminant bypass protein blends, poultry developer diets.',
                'specs_status' => 'Indicative parameters: Crude Protein ~80% to 85%, Pepsin digestibility >75%. Full specifications available upon request.',
                'grades' => ['Steam Hydrolyzed Feed Grade'],
                'packaging' => '1,000 kg jumbo bags or 50 kg PP bags.',
                'doc_requirements' => 'Processing certificate, COA, Export veterinary certificate.'
            ]
        ]
    ],
    'plant-proteins' => [
        'id' => 'plant-proteins',
        'title' => 'Plant Proteins',
        'tagline' => 'Essential oilseed meals and cereal protein co-products for commercial animal feed production',
        'short_desc' => 'Soybean meal, corn gluten meal, and DDGS providing reliable amino acid and energy foundations.',
        'image' => 'assets/images/products/plant-proteins.webp',
        'icon' => 'fa-seedling',
        'url' => 'products/plant-proteins.php',
        'overview' => 'Plant proteins represent the core volume in industrial feed milling. We coordinate bulk and containerized consignments with guaranteed specification parameters, moisture control, and consistent physical meal texture.',
        'items' => [
            [
                'id' => 'soybean-meal',
                'name' => 'Soybean Meal (SBM)',
                'category' => 'Plant Proteins',
                'description' => 'The global benchmark plant protein for swine, poultry, and cattle nutrition. Offers an exceptional lysine profile and high palatability.',
                'application' => 'All commercial livestock feeds, poultry broilers, layers, swine breeding and grower feeds.',
                'specs_status' => 'Indicative parameters: Crude Protein 44% to 48% (Hi-Pro or Standard), Moisture max 12.5%, KOH protein solubility controlled. Confirmed per contract.',
                'grades' => ['Hi-Pro Dehulled (48%)', 'Standard Solvent Extracted (44-46%)'],
                'packaging' => 'Bulk vessel, containerized bulk liner, or 50 kg bags.',
                'doc_requirements' => 'Phytosanitary Certificate, Certificate of Weight & Quality (SGS/Bureau Veritas/equivalent), Non-GMO or GMO declaration.'
            ],
            [
                'id' => 'corn-gluten-meal',
                'name' => 'Corn Gluten Meal (CGM 60%)',
                'category' => 'Plant Proteins',
                'description' => 'Concentrated cereal protein co-product from corn wet milling, prized for high crude protein content, natural xanthophylls, and rich methionine.',
                'application' => 'Broiler finishing rations (skin pigmentation), layer feed (yolk color), aquaculture and pet food.',
                'specs_status' => 'Indicative parameters: Crude Protein min 60%, Moisture max 10%, Fat max 3%, Xanthophyll ~200-300 ppm. Detailed lot COA available on request.',
                'grades' => ['Golden 60% Feed Grade'],
                'packaging' => '50 kg bags or 1,000 kg big bags in sea containers.',
                'doc_requirements' => 'Certificate of Analysis, Phytosanitary Certificate, Fumigation Certificate.'
            ],
            [
                'id' => 'ddgs',
                'name' => 'Distillers Dried Grains with Solubles (DDGS)',
                'category' => 'Plant Proteins',
                'description' => 'Nutrient-rich co-product of grain ethanol production providing a valuable blend of protein, energy-dense fat, and digestible fiber.',
                'application' => 'Dairy cattle, beef cattle, swine grower-finisher rations, poultry feeds.',
                'specs_status' => 'Indicative parameters: Crude Protein ~26% to 28%, Fat min 8% to 10%, Moisture max 11%. Tested for mycotoxin levels per lot.',
                'grades' => ['Corn DDGS (Golden Color)', 'Standard Feed Grade'],
                'packaging' => 'Bulk container liner or 50 kg bags.',
                'doc_requirements' => 'Quality & Weight Certificate, Phytosanitary clearance, Mycotoxin screening report.'
            ]
        ]
    ],
    'feed-additives' => [
        'id' => 'feed-additives',
        'title' => 'Feed Additives & Micro-Ingredients',
        'tagline' => 'Synthetic amino acids, vitamins, choline, and specialized additives to balance nutrition formulas',
        'short_desc' => 'Lysine, Methionine, Threonine, Choline Chloride, and mycotoxin binders for precision feed formulation.',
        'image' => 'assets/images/products/feed-additives.webp',
        'icon' => 'fa-flask',
        'url' => 'products/feed-additives.php',
        'overview' => 'Precision nutrition requires micro-ingredient control. We supply feed-grade amino acids and protective additives that allow nutritionists to optimize crude protein levels, reduce environmental nitrogen, and improve feed conversion efficiency.',
        'items' => [
            [
                'id' => 'amino-acids',
                'name' => 'Feed-Grade Amino Acids',
                'category' => 'Feed Additives',
                'description' => 'Essential limiting amino acids including L-Lysine HCl 98.5%, L-Lysine Sulphate 70%, DL-Methionine 99%, and L-Threonine 98.5% for precise diet balancing.',
                'application' => 'Monogastric feed mills, poultry broilers, layers, swine feeds.',
                'specs_status' => 'Standard commercial purities: L-Lysine HCl min 98.5%, DL-Methionine min 99.0%, L-Threonine min 98.5%. Guaranteed manufacturer COA per batch.',
                'grades' => ['Feed Grade FAMI-QS / ISO compliant sources'],
                'packaging' => '25 kg multi-wall craft paper bags with PE inner liner or 800 kg big bags.',
                'doc_requirements' => 'Manufacturer COA, ISO/FAMI-QS quality declarations, Product Specification Sheet.'
            ],
            [
                'id' => 'choline-chloride',
                'name' => 'Choline Chloride (60% / 70% Corn Cob Base)',
                'category' => 'Feed Additives',
                'description' => 'Essential water-soluble B-complex vitamin precursor critical for fat metabolism in the liver, cell membrane structure, and nerve transmission.',
                'application' => 'Poultry feeds (prevention of perosis and fatty liver syndrome), swine, cattle.',
                'specs_status' => 'Available in 60% and 70% powder on vegetable/corn cob carrier, or 75% liquid. COA provided on request.',
                'grades' => ['60% Corn Cob Base', '70% Corn Cob Base'],
                'packaging' => '25 kg bags with airtight inner liner.',
                'doc_requirements' => 'Batch COA, MSDS, Certificate of Origin.'
            ],
            [
                'id' => 'mycotoxin-binders',
                'name' => 'Broad-Spectrum Mycotoxin Binders',
                'category' => 'Feed Additives',
                'description' => 'Synergistic blends of activated aluminosilicates, yeast cell wall beta-glucans, and organic acids designed to adsorb and neutralize polar and non-polar mycotoxins.',
                'application' => 'Poultry, swine, dairy and aquaculture feeds to prevent mycotoxicosis.',
                'specs_status' => 'Formulations tailored to targeted mycotoxin challenges (Aflatoxin, Zearalenone, DON, T-2). Full technical dossier on request.',
                'grades' => ['Mineral Base', 'Yeast-Enhanced Complex'],
                'packaging' => '25 kg bags with moisture barrier.',
                'doc_requirements' => 'Technical Data Sheet, Safety Data Sheet, Quality Certificate.'
            ]
        ]
    ],
    'minerals' => [
        'id' => 'minerals',
        'title' => 'Feed Minerals & Phosphates',
        'tagline' => 'Essential macro and trace mineral sources for skeletal development, eggshell strength, and metabolic health',
        'short_desc' => 'Dicalcium Phosphate (DCP 18%) and Monocalcium Phosphate (MCP 22%) with guaranteed high bioavailability.',
        'image' => 'assets/images/products/minerals.webp',
        'icon' => 'fa-cubes-stacked',
        'url' => 'products/minerals.php',
        'overview' => 'Inorganic feed phosphates provide bioavailable phosphorus and calcium. We supply feed-grade phosphates with strictly monitored fluorine, arsenic, and heavy metal thresholds complying with international feed safety standards.',
        'items' => [
            [
                'id' => 'dcp',
                'name' => 'Dicalcium Phosphate (DCP 18% P)',
                'category' => 'Feed Minerals',
                'description' => 'Standard feed-grade inorganic calcium phosphate providing essential phosphorus and calcium for bone formation, neuromuscular function, and energy metabolism.',
                'application' => 'Poultry feeds, cattle and swine rations, commercial premixes.',
                'specs_status' => 'Indicative parameters: Total Phosphorus min 18.0%, Calcium min 20.0%, Fluorine max 0.18%, Lead max 30 ppm. Final parameters confirmed by COA per lot.',
                'grades' => ['Granular 18%', 'Powder 18%'],
                'packaging' => '25 kg or 50 kg PP woven bags with PE inner liner; 1,000 kg jumbo bags.',
                'doc_requirements' => 'Heavy metals lab analysis, Certificate of Analysis, Phytosanitary/Mineral inspection report.'
            ],
            [
                'id' => 'mcp',
                'name' => 'Monocalcium Phosphate (MCP 21-22% P)',
                'category' => 'Feed Minerals',
                'description' => 'Highly concentrated and highly soluble phosphate source with superior biological availability, especially suited for young animal digestion and aquafeeds.',
                'application' => 'Starter feeds for poultry, piglets, aquaculture, and high-performance livestock.',
                'specs_status' => 'Indicative parameters: Total Phosphorus min 22.0%, Water-soluble P min 80%, Calcium min 15.0%, Fluorine max 0.18%. Certified per production lot.',
                'grades' => ['Feed Grade Granular 22%'],
                'packaging' => '25 kg, 50 kg bags, or 1,000 kg big bags in sea containers.',
                'doc_requirements' => 'Certificate of Origin, Laboratory Analysis Certificate, SGS verification where requested.'
            ]
        ]
    ],
    'food-ingredients' => [
        'id' => 'food-ingredients',
        'title' => 'Food Ingredients & Agricultural Commodities',
        'tagline' => 'Staple grains, whole pulses, and edible vegetable oils for human consumption, processing, and distribution',
        'short_desc' => 'Bulk and bagged rice varieties, food-grade soybeans, sorted lentils, and edible vegetable oils.',
        'image' => 'assets/images/products/food-ingredients.webp',
        'icon' => 'fa-wheat-awn',
        'url' => 'products/food-ingredients.php',
        'overview' => 'We coordinate international trade in agricultural food staples for wholesalers, food processors, packaging brands, and institutional buyers. All food lots are traded with destination-specific customs and health documentation.',
        'items' => [
            [
                'id' => 'rice',
                'name' => 'Commercial & Specialty Rice',
                'category' => 'Food Ingredients',
                'description' => 'Long-grain white rice, parboiled rice, and regional aromatic varieties supplied in bulk vessel lots or retail-ready consumer bags.',
                'application' => 'Food wholesale, institutional distribution, repackaging, industrial food manufacture.',
                'specs_status' => 'Broken percentage (5%, 10%, 15%, 25%, 100% broken), grain length, moisture, and chalkiness confirmed strictly according to sales contract specification.',
                'grades' => ['Long Grain White Rice 5% Broken', 'Parboiled Rice', '100% Broken / Brewing Grade'],
                'packaging' => '25 kg or 50 kg PP bags, printed private label bags, or 1-ton bulk bags.',
                'doc_requirements' => 'Phytosanitary Certificate, Certificate of Quality & Weight, Fumigation Certificate, Health / Food Safety Certificate.'
            ],
            [
                'id' => 'food-soybeans',
                'name' => 'Food-Grade Soybeans',
                'category' => 'Food Ingredients',
                'description' => 'Selected whole soybeans with high protein and clean seed coats, suitable for soymilk, tofu, fermentation, and traditional food processing.',
                'application' => 'Soy food processors, tofu and beverage manufacturers, flour millers.',
                'specs_status' => 'Specifications for moisture, foreign matter, splits, and protein percentage agreed per contract and verified by third-party inspection.',
                'grades' => ['Non-GMO Food Grade', 'Commercial Food Grade'],
                'packaging' => '25 kg bags, 50 kg bags, or containerized bulk liners.',
                'doc_requirements' => 'Non-GMO declaration (where applicable), Phytosanitary certificate, COA.'
            ],
            [
                'id' => 'lentils-pulses',
                'name' => 'Lentils & Pulses',
                'category' => 'Food Ingredients',
                'description' => 'Red lentils (whole and split football/dehusked), green lentils, and pulses cleaned, graded, and machine-polished.',
                'application' => 'Packaging brands, wholesale dry goods trade, canned food processors.',
                'specs_status' => 'Graded by purity (99.5%, 99.0%), size calibration, moisture max 14%. Specifications confirmed per order.',
                'grades' => ['Machine Cleaned', 'Sortex Cleaned 99.5%'],
                'packaging' => '25 kg or 50 kg polypropylene bags.',
                'doc_requirements' => 'Phytosanitary Certificate, Fumigation Certificate, Quality Inspection Certificate.'
            ],
            [
                'id' => 'vegetable-oils',
                'name' => 'Vegetable Oils & Oilseeds',
                'category' => 'Food Ingredients',
                'description' => 'Refined edible oils (soybean oil, sunflower oil, palm olein) and oilseeds for industrial food production, catering, and retail packing.',
                'application' => 'Food manufacturers, refiners, bakeries, commercial fryers.',
                'specs_status' => 'FFA (Free Fatty Acids), IV (Iodine Value), moisture, and peroxide value certified according to international Codex Alimentarius standards.',
                'grades' => ['Refined Deodorized Bleached (RBD)', 'Crude Degummed'],
                'packaging' => 'Flexitanks (24,000L), 1,000L IBCs, 200L drums, or 20L Jerry cans.',
                'doc_requirements' => 'COA, Health Certificate, Bill of Lading, Certificate of Origin.'
            ]
        ]
    ],
    'pet-food' => [
        'id' => 'pet-food',
        'title' => 'Pet Food Ingredients & Products',
        'tagline' => 'Nutritional raw materials, specialty proteins, and private-label manufacturing coordination for companion animals',
        'short_desc' => 'High-digestibility poultry meals, animal fats, plant fibers, and contract manufacturing options.',
        'image' => 'assets/images/products/pet-food.webp',
        'icon' => 'fa-paw',
        'url' => 'products/pet-food.php',
        'overview' => 'The companion animal sector demands strict sensory, chemical, and microbiological standards. We supply pet-grade protein meals, healthy fats, functional fibers, and coordinate contract packaging for private-label brand owners.',
        'items' => [
            [
                'id' => 'pet-food-ingredients',
                'name' => 'Specialty Pet Food Ingredients',
                'category' => 'Pet Food',
                'description' => 'Low-ash poultry meal, hydrolyzed proteins, refined animal fats, beet pulp fiber, and palatants tailored for dry extruded kibble and wet canned recipes.',
                'application' => 'Dog and cat dry food, wet canned pet food, functional pet treats.',
                'specs_status' => 'Low ash, low biogenic amines, verified Salmonella/Enterobacteria negative status. Specifications tailored to manufacturer recipes.',
                'grades' => ['Super-Premium Pet Grade', 'Standard Pet Grade'],
                'packaging' => 'Bulk bags with liners or 25 kg multi-wall craft bags.',
                'doc_requirements' => 'Microbiological test certificates, Veterinary certificates, COA.'
            ],
            [
                'id' => 'finished-pet-food',
                'name' => 'Finished & Private-Label Pet Food',
                'category' => 'Pet Food',
                'description' => 'Supply and contract manufacturing coordination for extruded dry dog and cat food, produced to client-approved recipes and packed in custom-branded retail packaging.',
                'application' => 'Distributors, retail supermarket chains, pet care brand owners.',
                'specs_status' => 'Formulations, nutritional profiles (AAFCO / FEDIAF compliance), bag sizes, and MOQs confirmed during commercial consultation.',
                'grades' => ['Economy', 'Standard', 'Premium & Grain-Free'],
                'packaging' => 'Pre-printed retail bags (1 kg to 20 kg) packed on wrapped pallets.',
                'doc_requirements' => 'Product registration dossiers, Veterinary import permits, Free sale certificate.'
            ]
        ]
    ],
    'fmcg' => [
        'id' => 'fmcg',
        'title' => 'FMCG Goods & Trade Products',
        'tagline' => 'Packaged consumer goods and specialty commercial products for international B2B distributors',
        'short_desc' => 'B2B sourcing and distribution of packaged food items, household staples, and confirmed trade lines.',
        'image' => 'assets/images/products/fmcg.webp',
        'icon' => 'fa-boxes-packing',
        'url' => 'products/fmcg.php',
        'overview' => 'Leveraging our dual commercial presence in Denmark and Singapore, we facilitate targeted sourcing and trade in fast-moving consumer goods and regional specialties for volume buyers and institutional trade partners.',
        'items' => [
            [
                'id' => 'packaged-commodities',
                'name' => 'Packaged Commercial Staples',
                'category' => 'FMCG',
                'description' => 'Pre-packaged food commodities, shelf-stable groceries, and retail-ready dry foodstuffs supplied for international retail distributors and supermarket importers.',
                'application' => 'Grocery wholesalers, retail chains, duty-free trade, regional distributors.',
                'specs_status' => 'Range, packaging specifications, shelf-life validation, and minimum order quantities provided upon specific commercial enquiry.',
                'grades' => ['Retail Commercial Grade'],
                'packaging' => 'Carton cases on shrink-wrapped pallets.',
                'doc_requirements' => 'Health certificate, Commercial invoice, Packing list, Certificate of origin.'
            ]
        ]
    ]
];

// Helper functions for accessing catalog
function get_all_categories(): array {
    global $productCatalog;
    return $productCatalog;
}

function get_category(string $id): ?array {
    global $productCatalog;
    return $productCatalog[$id] ?? null;
}

function get_all_products(): array {
    global $productCatalog;
    $all = [];
    foreach ($productCatalog as $cat) {
        foreach ($cat['items'] as $item) {
            $item['cat_id'] = $cat['id'];
            $item['cat_title'] = $cat['title'];
            $item['cat_image'] = $cat['image'];
            $all[] = $item;
        }
    }
    return $all;
}

function get_product(string $catId, string $productId): ?array {
    $cat = get_category($catId);
    if (!$cat) return null;
    foreach ($cat['items'] as $item) {
        if ($item['id'] === $productId) {
            $item['cat_id'] = $cat['id'];
            $item['cat_title'] = $cat['title'];
            $item['cat_image'] = $cat['image'];
            return $item;
        }
    }
    return null;
}
