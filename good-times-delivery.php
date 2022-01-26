<?php 

$title = "Edward Lin | Good Times"
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
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="On the Edward Lin's Portfolio page you will find information about Edward Lin and some of his featured projects." />
    <meta property="og:url" content="https://edwardlin.ca/" />
    <meta name="keywords" content="web developer, portfolio, full stack developer, web design, website builder,web developer jobs, web designer for hire, web developer jobs Vancouver, how to hire web developer	 " />
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css?">
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
        <?php include_once "components/header.php" ?>
        <div class="header_space"></div>
        <section class="project-banner">
            <img src="img/good-times-preview.png" alt="Good Times Preview"/>
            <a class="project-anchor" target="_blank" href="https://goodtimes.edwardlin.ca/" title="Good Times Live Site"></a>
        </section>
        <section class="project-info section">
            <div class="project-title">
                <h3>Web Development</h3>
                <h2>Good Times Delivery</h2>
            </div>
            <div class="project-overview">
                <h4>Project Overview</h4>
                <p>Good Times Delivery is an alcohol and cannabis delivery app. The website serves as their homepage with the purpose to instruct new users to download the app and information on where they deliver.</p>
            </div>
            <div class="project-details">
                <div class="detail-item">
                    <h4>Language</h4>
                    <p>HTML, CSS, JS</p>
                </div>
                <div class="detail-item">
                    <h4>Plugins</h4>
                    <p>jQuery, Slick Slider</p>
                </div>
                <div class="detail-item">
                    <h4>Tools</h4>
                    <p>VS Code, Photoshop, Adobe XD</p>
                </div>
            </div>
            <div class="site-links">
                <a href="https://goodtimes.edwardlin.ca/" target="_blank" title="Good Times Live Site">Live Site</a>
                <a href="https://github.com/EdwardOfLinster/good-times-delivery" target="_blank" title="Good Times Code">View Code</a>
            </div>
        </section>






        <?php include_once "components/footer.php" ?>
    </div>
</body>
<script src="js/main.js"></script>
</html>