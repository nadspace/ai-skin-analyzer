<?php 
$products = [
    // 🌿 NORMAL SKIN
    [
        "name" => "Wardah Hydrating Aloe Vera Gel",
        "brand" => "Wardah",
        "description" => "A lightweight gel that soothes and hydrates the skin.",
        "price" => "25.00",
        "image" => "images/wardah_aloe_gel.webp",
        "suitable_for" => ["normal", "oily", "combination", "sensitive"],
        "ingredients" => ["Aloe Vera", "Glycerin", "Panthenol"]
    ],
    [
        "name" => "Hada Labo Premium Hydrating Lotion",
        "brand" => "Hada Labo",
        "description" => "Deep hydration with five types of Hyaluronic Acid.",
        "price" => "55.00",
        "image" => "images/hada_labo_premium.png",
        "suitable_for" => ["normal", "dry", "sensitive"],
        "ingredients" => ["Hyaluronic Acid", "Glycerin", "Butylene Glycol"]
    ],
    [
        "name" => "The Ordinary Niacinamide 10% + Zinc 1%",
        "brand" => "The Ordinary",
        "description" => "Controls oil production and minimizes pores.",
        "price" => "45.00",
        "image" => "images/ordinary_niacinamide.jpeg",
        "suitable_for" => ["normal", "oily", "combination"],
        "ingredients" => ["Niacinamide", "Zinc PCA", "Tamarindus Indica Seed Gum"]
    ],
	[
        "name" => "Simple Hydrating Light Moisturizer",
        "brand" => "Simple",
        "description" => "Lightweight moisturizer that provides instant hydration.",
        "price" => "30.00",
        "image" => "images/simple_moisturizer.jpg",
        "suitable_for" => ["normal", "sensitive", "dry"],
        "ingredients" => ["Glycerin", "Borage Seed Oil", "Vitamin B5"]
    ],
    
    [
        "name" => "COSRX Advanced Snail 92 All in One Cream",
        "brand" => "COSRX",
        "description" => "Hydrates and soothes damaged skin with snail mucin.",
        "price" => "80.00",
        "image" => "images/cosrx_snail_cream.avif",
        "suitable_for" => ["normal", "dry", "combination"],
        "ingredients" => ["Snail Secretion Filtrate", "Hyaluronic Acid", "Panthenol"]
    ],

    // 💦 OILY SKIN
    [
        "name" => "Cosrx Salicylic Acid Daily Gentle Cleanser",
        "brand" => "Cosrx",
        "description" => "Gently removes excess oil and controls acne breakouts.",
        "price" => "40.00",
        "image" => "images/cosrx_cleanser.jpeg",
        "suitable_for" => ["oily", "combination"],
        "ingredients" => ["Salicylic Acid", "Tea Tree Oil", "Glycerin"]
    ],
    [
        "name" => "Some By Mi AHA BHA PHA Miracle Toner",
        "brand" => "Some By Mi",
        "description" => "Exfoliates dead skin cells and clears acne.",
        "price" => "50.00",
        "image" => "images/somebymi_toner.webp",
        "suitable_for" => ["oily", "combination", "sensitive"],
        "ingredients" => ["AHA", "BHA", "PHA", "Niacinamide"]
    ],
    [
        "name" => "Innisfree Super Volcanic Clay Mask",
        "brand" => "Innisfree",
        "description" => "Absorbs excess oil and deeply cleanses pores.",
        "price" => "60.00",
        "image" => "images/innisfree_mask.webp",
        "suitable_for" => ["oily", "combination"],
        "ingredients" => ["Volcanic Ash", "Kaolin Clay", "Bentonite"]
    ],
	[
        "name" => "The Body Shop Tea Tree Mattifying Lotion",
        "brand" => "The Body Shop",
        "description" => "Mattifying moisturizer that controls oil and prevents breakouts.",
        "price" => "45.00",
        "image" => "images/bodyshop_tea_tree.jpeg",
        "suitable_for" => ["oily", "combination"],
        "ingredients" => ["Tea Tree Oil", "Glycerin", "Salicylic Acid"]
    ],
    
    [
        "name" => "La Roche-Posay Effaclar Duo (+)",
        "brand" => "La Roche-Posay",
        "description" => "Anti-imperfection cream that targets acne and blemishes.",
        "price" => "75.00",
        "image" => "images/la_roche_effaclar.webp",
        "suitable_for" => ["oily", "combination", "sensitive"],
        "ingredients" => ["Niacinamide", "Salicylic Acid", "Zinc PCA"]
    ],

    // 🌗 COMBINATION SKIN
    [
        "name" => "Clinique Dramatically Different Hydrating Jelly",
        "brand" => "Clinique",
        "description" => "Lightweight hydration that balances skin moisture.",
        "price" => "100.00",
        "image" => "images/clinique_hydrating.avif",
        "suitable_for" => ["combination", "oily", "normal"],
        "ingredients" => ["Glycerin", "Hyaluronic Acid", "Sucrose"]
    ],
	[
        "name" => "Laneige Water Sleeping Mask",
        "brand" => "Laneige",
        "description" => "Hydrating overnight mask for fresh and plump skin.",
        "price" => "90.00",
        "image" => "images/laneige_mask.webp",
        "suitable_for" => ["combination", "normal", "dry"],
        "ingredients" => ["Beta-Glucan", "Ceramide", "Glycerin"]
    ],
    [
        "name" => "Neutrogena Hydro Boost Water Gel",
        "brand" => "Neutrogena",
        "description" => "Gel-based moisturizer with Hyaluronic Acid.",
        "price" => "45.00",
        "image" => "images/neutrogena_hydroboost.jpeg",
        "suitable_for" => ["combination", "oily", "normal"],
        "ingredients" => ["Hyaluronic Acid", "Dimethicone", "Glycerin"]
    ],
	[
        "name" => "Kiehl's Ultra Facial Oil-Free Gel Cream",
        "brand" => "Kiehl's",
        "description" => "Hydrating gel cream that balances moisture and oil.",
        "price" => "120.00",
        "image" => "images/kiehls_gel_cream.jpeg",
        "suitable_for" => ["combination", "oily", "normal"],
        "ingredients" => ["Glycerin", "Hyaluronic Acid", "Dimethicone"]
    ],
    
    [
        "name" => "Benton Aloe Propolis Soothing Gel",
        "brand" => "Benton",
        "description" => "Calming gel that hydrates and reduces redness.",
        "price" => "50.00",
        "image" => "images/benton_aloe_gel.jpeg",
        "suitable_for" => ["combination", "sensitive", "oily"],
        "ingredients" => ["Aloe Vera", "Propolis Extract", "Betaine"]
    ],
    // 🌿 SENSITIVE SKIN
    [
        "name" => "Cetaphil Gentle Cleanser",
        "brand" => "Cetaphil",
        "description" => "Mild, soap-free formula that cleanses without irritation.",
        "price" => "35.00",
        "image" => "images/cetaphil_cleanser.webp",
        "suitable_for" => ["sensitive", "dry", "normal"],
        "ingredients" => ["Water", "Cetyl Alcohol", "Propylene Glycol"]
    ],
    [
        "name" => "Avene Thermal Spring Water Spray",
        "brand" => "Avene",
        "description" => "Soothes and refreshes sensitive skin instantly.",
        "price" => "60.00",
        "image" => "images/avene_spray.avif",
        "suitable_for" => ["sensitive", "dry"],
        "ingredients" => ["Thermal Spring Water", "Nitrogen"]
    ],
    [
        "name" => "Dr. Jart+ Cicapair Tiger Grass Cream",
        "brand" => "Dr. Jart+",
        "description" => "Reduces redness and strengthens the skin barrier.",
        "price" => "120.00",
        "image" => "images/drjart_cicapair.jpeg",
        "suitable_for" => ["sensitive", "normal", "dry"],
        "ingredients" => ["Centella Asiatica", "Niacinamide", "Madecassoside"]
    ],
	[
        "name" => "Dr. Belmeur Advanced Cica Recovery Cream",
        "brand" => "Dr. Belmeur",
        "description" => "Strengthens skin barrier and soothes irritation.",
        "price" => "67.00",
        "image" => "images/dr_belmeur_cica.webp",
        "suitable_for" => ["sensitive", "dry", "normal"],
        "ingredients" => ["Centella Asiatica", "Madecassoside", "Ceramide"]
    ],
    [
        "name" => "Vanicream Moisturizing Cream",
        "brand" => "Vanicream",
        "description" => "Fragrance-free moisturizer for sensitive and eczema-prone skin.",
        "price" => "80.00",
        "image" => "images/vanicream_moisturizer.jpeg",
        "suitable_for" => ["sensitive", "dry"],
        "ingredients" => ["Petrolatum", "Glycerin", "Dimethicone"]
    ],
	[
    "name" => "Paula's Choice Skin Perfecting 2% BHA Liquid Exfoliant",
    "brand" => "Paula's Choice",
    "description" => "Gentle exfoliant that unclogs pores and smooths skin texture.",
    "price" => "70.00",
    "image" => "images/paulas_choice_bha.jpg",
    "suitable_for" => ["oily", "combination", "sensitive"],
    "ingredients" => ["Salicylic Acid", "Green Tea Extract", "Methylpropanediol"]
],
[
    "name" => "Krave Beauty Great Barrier Relief",
    "brand" => "Krave Beauty",
    "description" => "Repairs and strengthens the skin barrier with nourishing ingredients.",
    "price" => "85.00",
    "image" => "images/krave_beauty_barrier_relief.jpg",
    "suitable_for" => ["sensitive", "dry", "normal"],
    "ingredients" => ["Tamanu Oil", "Niacinamide", "Ceramide"]
],
[
    "name" => "Glow Recipe Watermelon Glow Pink Juice Moisturizer",
    "brand" => "Glow Recipe",
    "description" => "Hydrating moisturizer with watermelon extract for a fresh glow.",
    "price" => "95.00",
    "image" => "images/glow_recipe_watermelon.jpg",
    "suitable_for" => ["normal", "combination", "oily"],
    "ingredients" => ["Watermelon Extract", "Hyaluronic Acid", "Peptides"]
],
[
    "name" => "First Aid Beauty Ultra Repair Cream",
    "brand" => "First Aid Beauty",
    "description" => "Intense hydration for dry and sensitive skin types.",
    "price" => "65.00",
    "image" => "images/fab_ultra_repair.jpg",
    "suitable_for" => ["sensitive", "dry", "normal"],
    "ingredients" => ["Colloidal Oatmeal", "Shea Butter", "Ceramide"]
],
[
    "name" => "Biossance Squalane + Vitamin C Rose Oil",
    "brand" => "Biossance",
    "description" => "Brightens and hydrates with Vitamin C and Squalane.",
    "price" => "110.00",
    "image" => "images/biossance_vitamin_c.jpg",
    "suitable_for" => ["normal", "dry", "combination"],
    "ingredients" => ["Squalane", "Vitamin C", "Rosehip Oil"]
],
[
    "name" => "Youth To The People Superfood Antioxidant Cleanser",
    "brand" => "Youth To The People",
    "description" => "Gentle cleanser packed with superfoods for a healthy glow.",
    "price" => "75.00",
    "image" => "images/youth_to_the_people_cleanser.jpg",
    "suitable_for" => ["normal", "combination", "oily"],
    "ingredients" => ["Kale", "Spinach", "Green Tea"]
],
[
    "name" => "Tatcha The Water Cream",
    "brand" => "Tatcha",
    "description" => "Lightweight, oil-free moisturizer that hydrates and refines pores.",
    "price" => "150.00",
    "image" => "images/tatcha_water_cream.jpg",
    "suitable_for" => ["normal", "combination", "oily"],
    "ingredients" => ["Japanese Wild Rose", "Leopard Lily", "Hyaluronic Acid"]
],
[
    "name" => "Sunday Riley Good Genes All-In-One Lactic Acid Treatment",
    "brand" => "Sunday Riley",
    "description" => "Exfoliates and brightens skin for a radiant complexion.",
    "price" => "180.00",
    "image" => "images/sunday_riley_good_genes.jpg",
    "suitable_for" => ["normal", "combination", "dry"],
    "ingredients" => ["Lactic Acid", "Licorice Extract", "Lemongrass"]
],
[
    "name" => "Herbivore Botanicals Blue Tansy Resurfacing Clarity Mask",
    "brand" => "Herbivore Botanicals",
    "description" => "Gentle resurfacing mask for clear and glowing skin.",
    "price" => "90.00",
    "image" => "images/herbivore_blue_tansy.jpg",
    "suitable_for" => ["combination", "oily", "sensitive"],
    "ingredients" => ["Blue Tansy", "Willow Bark", "Fruit Enzymes"]
],
[
    "name" => "Drunk Elephant Protini Polypeptide Cream",
    "brand" => "Drunk Elephant",
    "description" => "Protein-rich moisturizer that firms and hydrates the skin.",
    "price" => "130.00",
    "image" => "images/drunk_elephant_protini.jpg",
    "suitable_for" => ["normal", "dry", "combination"],
    "ingredients" => ["Signal Peptides", "Pygmy Waterlily", "Soybean Folic Acid"]
]
];
?>
