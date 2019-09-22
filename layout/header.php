
<?php include 'setting/baglanti.php';
$a=$db->prepare('SELECT * FROM ayarlar');
$a->execute();
$ayarcek=$a->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $ayarcek['site_title'];   ?></title>
    <meta name="author" content="Zeka Memmedov">
    <meta name="description" content="<?php echo $ayarcek['site_desc'];   ?>">
    <meta name="keywords" content="<?php echo $ayarcek['site_keyw'];   ?>">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>

    <link rel="stylesheet" type="text/css" href="css/main.css" media="all"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="mdi-font/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" id="extra-fonts-css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(function(){
            $(".footer-nav ul.footer li:last").css({border:"0"});
            $("#pop ul.footer li:last").css({border:"0"});
        });
    </script>
</head>
<body>
<header>
    <div class="container">
        <div id="logo">
            <a href="index.php"><img src="" alt="Zeka Memmedov" width="352px" height="68px"/></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="mdi mdi-home-circle" title="Anasayfa"> anasayfa</a></li>
                <li><a href="haqqimda.php" class="mdi mdi-account-circle" title="Hakkımda"> haqqimda</a></li>
                <li><a href="elaqe.php" class="mdi mdi-email" title="İletişim"> elaqe</a></li>
            </ul>
        </nav>
        <div style="clear:both;"></div>
    </div>
</header>

