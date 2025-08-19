<?php    
session_start();
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$translations = [
    'en' => [
        'title' => 'Types of Skin',
        'back_home' => 'Back',
        'normal' => 'Normal Skin',
        'oily' => 'Oily Skin',
        'dry' => 'Dry Skin',
        'sensitive' => 'Sensitive Skin',
        'description' => [
            'normal' => "'Normal' is a term widely used to refer to well-balanced skin. The scientific term for well-balanced skin is eudermic. The T-zone (forehead, chin, and nose) may be a bit oily, but overall sebum and moisture is balanced, and the skin is neither too oily nor too dry.",
            'oily' => "Oily skin is characterized by excess sebum production, making the skin appear shiny and greasy. It is more prone to acne and clogged pores.",
            'dry' => "Dry skin produces less sebum than normal skin, which can lead to flakiness, tightness, and sensitivity.",
            'sensitive' => "Sensitive skin is more reactive to external factors, often leading to redness, itching, or irritation."
        ],
        'identify' => 'How to identify',
        'has' => 'has:',
        'features' => [
            'normal' => ['Fine pores', 'Good blood circulation', 'A velvety, soft and smooth texture', 'No blemishes', 'Not prone to sensitivity'],
            'oily' => ['Enlarged pores', 'Shiny and greasy skin', 'Prone to acne and blackheads', 'Thicker texture', 'Less prone to wrinkles'],
            'dry' => ['Tight and rough texture', 'Flaky or scaly skin', 'More visible fine lines', 'Dull complexion', 'Easily irritated'],
            'sensitive' => ['Prone to redness', 'Easily irritated by skincare products', 'Feels itchy or burns with certain products', 'Requires gentle products']
        ],
        'did_you_know' => 'Did You Know?',
        'fun_facts' => [
            'normal' => "Only about 30% of people have truly normal skin throughout their lifetime.",
            'oily' => "Oily skin actually ages slower than other skin types due to more natural moisture.",
            'dry' => "Drinking water alone isn't enough to hydrate dry skin—you need topical moisturizers.",
            'sensitive' => "Sensitive skin often has a thinner protective outer layer than other skin types."
        ],
        'dos_donts_title' => "Quick Do's & Don'ts",
        'dos' => [
            'normal' => ["Use a gentle cleanser", "Apply light moisturizer", "Use sunscreen daily"],
            'oily' => ["Cleanse twice daily", "Use oil-free products", "Try clay masks weekly"],
            'dry' => ["Use cream-based cleansers", "Apply rich moisturizers", "Take shorter showers"],
            'sensitive' => ["Patch test all products", "Use fragrance-free items", "Apply gentle moisturizers"]
        ],
        'donts' => [
            'normal' => ["Over-exfoliate", "Skip moisturizer", "Use harsh products"],
            'oily' => ["Touch face frequently", "Use alcohol-based products", "Over-wash face"],
            'dry' => ["Use hot water", "Skip moisturizing", "Use harsh exfoliants"],
            'sensitive' => ["Try too many products", "Use products with fragrance", "Exfoliate aggressively"]
        ],
        'do' => "DO",
        'dont' => "DON'T"
    ],
    'ms' => [
        'title' => 'Jenis Kulit',
        'back_home' => 'Kembali',
        'normal' => 'Kulit Normal',
        'oily' => 'Kulit Berminyak',
        'dry' => 'Kulit Kering',
        'sensitive' => 'Kulit Sensitif',
        'description' => [
            'normal' => "'Normal' digunakan untuk kulit yang seimbang dengan baik. Kulit ini tidak terlalu berminyak atau kering.",
            'oily' => "Kulit berminyak menghasilkan sebum berlebihan, menjadikannya kelihatan berkilat dan berminyak.",
            'dry' => "Kulit kering menghasilkan sebum yang lebih sedikit, menyebabkan kekeringan dan kerengsaan.",
            'sensitive' => "Kulit sensitif lebih mudah terdedah kepada faktor luaran, menyebabkan kemerahan, gatal, atau kerengsaan."
        ],
        'identify' => 'Cara mengenal pasti',
        'has' => 'mempunyai:',
        'features' => [
            'normal' => ['Pori halus', 'Peredaran darah yang baik', 'Tekstur yang lembut dan halus', 'Tiada cela', 'Tidak mudah sensitif'],
            'oily' => ['Pori besar', 'Kulit berkilat dan berminyak', 'Cenderung kepada jerawat', 'Tekstur lebih tebal', 'Kurang mudah berkedut'],
            'dry' => ['Tekstur ketat dan kasar', 'Kulit bersisik', 'Garis halus lebih ketara', 'Kulit kusam', 'Mudah teriritasi'],
            'sensitive' => ['Cenderung kemerahan', 'Mudah teriritasi oleh produk penjagaan kulit', 'Berasa gatal atau pedih dengan produk tertentu', 'Memerlukan produk yang lembut']
        ],

        'did_you_know' => 'Tahukah Anda?',
        'fun_facts' => [
            'normal' => "Hanya sekitar 30% orang mempunyai kulit normal sepanjang hayat mereka.",
            'oily' => "Kulit berminyak sebenarnya menua lebih lambat berbanding jenis kulit lain kerana kelembapan semula jadi.",
            'dry' => "Minum air sahaja tidak cukup untuk melembapkan kulit kering—anda memerlukan pelembap topikal.",
            'sensitive' => "Kulit sensitif sering mempunyai lapisan pelindung luar yang lebih nipis daripada jenis kulit lain."
        ],
        'dos_donts_title' => "Yang Patut & Tidak Patut",
        'dos' => [
            'normal' => ["Gunakan pembersih lembut", "Sapukan pelembap ringan", "Gunakan pelindung matahari setiap hari"],
            'oily' => ["Bersihkan dua kali sehari", "Gunakan produk bebas minyak", "Cuba topeng tanah liat setiap minggu"],
            'dry' => ["Gunakan pembersih berasaskan krim", "Sapukan pelembap kaya", "Mandi lebih singkat"],
            'sensitive' => ["Uji semua produk", "Gunakan barang tanpa wangian", "Sapukan pelembap lembut"]
        ],
        'donts' => [
            'normal' => ["Pengelupasan berlebihan", "Langkau pelembap", "Gunakan produk keras"],
            'oily' => ["Sentuh muka sering", "Gunakan produk berasaskan alkohol", "Terlalu kerap mencuci muka"],
            'dry' => ["Gunakan air panas", "Langkau pelembapan", "Gunakan pengelupasan keras"],
            'sensitive' => ["Cuba terlalu banyak produk", "Gunakan produk dengan wangian", "Pengelupasan agresif"]
        ],
        'do' => "LAKUKAN",
        'dont' => "JANGAN"
    ],
    'zh' => [
        'title' => '皮肤类型',
        'back_home' => '返回',
        'normal' => '正常皮肤',
        'oily' => '油性皮肤',
        'dry' => '干性皮肤',
        'sensitive' => '敏感性皮肤',
        'description' => [
            'normal' => "'正常' 是指皮肤处于平衡状态，不太油也不太干。",
            'oily' => "油性皮肤由于皮脂分泌过多，导致皮肤看起来油亮，容易长粉刺和毛孔堵塞。",
            'dry' => "干性皮肤皮脂分泌较少，容易干燥、紧绷，并可能出现脱皮。",
            'sensitive' => "敏感性皮肤对外部因素更敏感，容易出现发红、瘙痒或刺激。"
        ],
        'identify' => '如何识别',
        'has' => '具有:',
        'features' => [
            'normal' => ['细腻毛孔', '良好的血液循环', '光滑柔软的肌肤', '无瑕疵', '不易敏感'],
            'oily' => ['毛孔粗大', '皮肤油亮', '容易长粉刺和黑头', '较厚的皮肤', '较少皱纹'],
            'dry' => ['皮肤紧绷和粗糙', '容易脱皮', '细纹较明显', '肤色暗沉', '易受刺激'],
            'sensitive' => ['容易发红', '易受护肤品刺激', '使用特定产品时感到刺痛或瘙痒', '需要温和产品']
        ],
        
        'did_you_know' => '你知道吗？',
        'fun_facts' => [
            'normal' => "一生中只有约30%的人拥有真正的正常皮肤。",
            'oily' => "油性皮肤实际上比其他皮肤类型老化更慢，因为天然水分更多。",
            'dry' => "单靠喝水不足以滋润干性皮肤—你需要外用保湿霜。",
            'sensitive' => "敏感性皮肤的保护外层往往比其他皮肤类型更薄。"
        ],
        'dos_donts_title' => "快速宜忌指南",
        'dos' => [
            'normal' => ["使用温和洁面产品", "使用轻薄保湿霜", "每天使用防晒霜"],
            'oily' => ["每天清洁两次", "使用无油产品", "每周使用泥面膜"],
            'dry' => ["使用乳霜型洁面产品", "使用滋润保湿霜", "缩短淋浴时间"],
            'sensitive' => ["对所有产品进行测试", "使用无香料产品", "使用温和保湿产品"]
        ],
        'donts' => [
            'normal' => ["过度去角质", "跳过保湿步骤", "使用刺激性产品"],
            'oily' => ["频繁触摸脸部", "使用含酒精产品", "过度洗脸"],
            'dry' => ["使用热水", "忽略保湿", "使用刺激性去角质产品"],
            'sensitive' => ["尝试太多产品", "使用含香料产品", "激进去角质"]
        ],
        'do' => "应该",
        'dont' => "不应该"
    ]
];
$trans = $translations[$lang];


$skinColors = [
    'normal' => '#A7D7C9', // Soft mint green
    'oily' => '#B6D7F2',   // Light blue
    'dry' => '#F2D6BD',    // Soft peach
    'sensitive' => '#F2C6DE' // Soft pink
];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $trans['title']; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E0F7FA; /* Light Blue Pastel */
            color: #333;
            font-size: 18px;
            margin: 0;
            padding: 0;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: #87CEEB; /* Blue Pastel */
            border-bottom: 2px solid #5F9EA0; /* Darker Blue Pastel */
        }
        h1 {
            color: white; /* White text for contrast */
            font-size: 36px;
            font-weight: bold;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: white; /* White text for contrast */
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }
        .content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .back-button {
            position: fixed; /* Make the button fixed */
            bottom: 20px; /* Position from the bottom */
            right: 20px; /* Position from the right */
            padding: 12px 24px;
            font-size: 20px;
            color: white;
            background-color: #5F9EA0; /* Darker Blue Pastel */
            border: none;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 100;
        }
        .back-button:hover {
            background-color: #87CEEB; /* Blue Pastel on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }
        .skin-type {
            background-color: #FFFFFF; /* White */
            margin-bottom: 30px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border-top: 5px solid #5F9EA0; /* Default border color */
        }
        .skin-type:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        <?php foreach (['normal', 'oily', 'dry', 'sensitive'] as $type): ?>
        .skin-type.<?php echo $type; ?> {
            border-top-color: <?php echo $skinColors[$type]; ?>;
        }
        <?php endforeach; ?>
        .skin-type h2 {
            color: #5F9EA0; /* Darker Blue Pastel */
            font-size: 28px;
            border-bottom: 2px solid #E0F7FA;
            padding-bottom: 10px;
            margin-top: 0;
        }
        .skin-type h3 {
            color: #5F9EA0; /* Darker Blue Pastel */
            font-size: 22px;
        }
        .skin-type ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        .skin-type img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .skin-type img:hover {
            transform: scale(1.02);
        }
        .fun-fact-box {
            background-color: #F0F8FF;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            border-left: 4px solid #5F9EA0;
        }
        .fun-fact-box h4 {
            margin-top: 0;
            display: flex;
            align-items: center;
            color: #5F9EA0;
        }
        .fun-fact-box h4 i {
            margin-right: 8px;
        }
        .fun-fact-content {
            font-style: italic;
        }
        .dos-donts {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }
        .dos, .donts {
            flex: 1;
            min-width: 250px;
            padding: 15px;
            border-radius: 8px;
        }
        .dos {
            background-color: #E8F5E9;
            border-left: 4px solid #4CAF50;
        }
        .donts {
            background-color: #FFEBEE;
            border-left: 4px solid #F44336;
        }
        .dos h4, .donts h4 {
            margin-top: 0;
            display: flex;
            align-items: center;
        }
        .dos h4 i, .donts h4 i {
            margin-right: 8px;
        }
        .dos ul, .donts ul {
            margin-bottom: 0;
        }
        @media (max-width: 768px) {
            .skin-type {
                padding: 15px;
            }
            .dos-donts {
                flex-direction: column;
            }
            .dos, .donts {
                min-width: auto;
            }
        }
        #top-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #5F9EA0;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, transform 0.3s;
            z-index: 100;
        }
        #top-button:hover {
            background-color: #87CEEB;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $trans['title']; ?></h1>
        <nav>
            <a href="article.php?lang=en">English</a> | <a href="article.php?lang=ms">Bahasa Melayu</a> | <a href="article.php?lang=zh">中文</a>
        </nav>
    </header>
    <section class="content">
        <?php foreach (['normal', 'oily', 'dry', 'sensitive'] as $skinType) { ?>
            <div class="skin-type <?php echo $skinType; ?>">
                <h2><?php echo $trans[$skinType]; ?></h2>
                <p><?php echo $trans['description'][$skinType]; ?></p>
                
            
                <div class="fun-fact-box">
                    <h4><i class="fas fa-lightbulb"></i> <?php echo $trans['did_you_know']; ?></h4>
                    <div class="fun-fact-content"><?php echo $trans['fun_facts'][$skinType]; ?></div>
                </div>
                
                <h3><?php echo $trans['identify'] . ' ' . $trans[$skinType]; ?></h3>
                <strong><?php echo $trans[$skinType] . ' ' . $trans['has']; ?></strong>
                <ul>
                    <?php foreach ($trans['features'][$skinType] as $feature) { echo "<li>$feature</li>"; } ?>
                </ul>
                
            
                <h3><?php echo $trans['dos_donts_title']; ?></h3>
                <div class="dos-donts">
                    <div class="dos">
                        <h4><i class="fas fa-check-circle"></i> <?php echo $trans['do']; ?></h4>
                        <ul>
                            <?php foreach ($trans['dos'][$skinType] as $do) { echo "<li>$do</li>"; } ?>
                        </ul>
                    </div>
                    <div class="donts">
                        <h4><i class="fas fa-times-circle"></i> <?php echo $trans['dont']; ?></h4>
                        <ul>
                            <?php foreach ($trans['donts'][$skinType] as $dont) { echo "<li>$dont</li>"; } ?>
                        </ul>
                    </div>
                </div>
                
                <img src="images/skin_<?php echo $skinType; ?>.jpg" alt="<?php echo $trans[$skinType]; ?>">
            </div>
        <?php } ?>
    </section>
    <a href="ingredients.php" class="back-button">← <?php echo $trans['back_home']; ?></a>
    <a href="#" id="top-button" title="Go to top"><i class="fas fa-arrow-up"></i></a>

    <script>
    
    document.addEventListener('DOMContentLoaded', function() {
        
        document.getElementById('top-button').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                document.getElementById('top-button').style.display = 'flex';
            } else {
                document.getElementById('top-button').style.display = 'none';
            }
        });
        
        
        if (window.pageYOffset <= 300) {
            document.getElementById('top-button').style.display = 'none';
        }
    });
    </script>
</body>
</html>