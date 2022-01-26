<?php 

$title = "Edward Lin | About"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="On the Edward Lin's Portfolio page you will find information about Edward Lin and some of his featured projects." />
    <meta property="og:site_name" content="Edward Lin | Web Developer Portfolio" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Edward Lin | Web Developer Portfolio" />
    <meta property="og:description" content="On the Edward Lin's Portfolio page you will find information about Edward Lin and some of his featured projects." />
    <meta property="og:url" content="https://edwardlin.ca/" />
    <meta name="keywords" content="web developer, portfolio, full stack developer, web design, website builder,web developer jobs, web designer for hire, web developer jobs Vancouver, how to hire web developer	 " />
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8TWEG37BTP"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8TWEG37BTP');
    </script>
</head>
<body>
    <div id="wrapper">
        <div class="header_space"></div>
        <?php include_once "components/header.php" ?>
        <?php include_once "components/biography.php" ?>
        <?php include_once "components/skills.php" ?>
        <?php include_once "components/education.php" ?>
        <?php include_once "components/taffy.php" ?>
        <?php include_once "components/footer.php" ?>
    </div>
</body>
<script src="js/main.js"></script>
</html>