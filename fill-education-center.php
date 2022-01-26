<?php 

$title = "Edward Lin | FILL Education"
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
            <img src="img/fill-preview.png" alt="Fill Preview"/>
            <a class="project-anchor" target="_blank" href="https://fill.edwardlin.ca/" title="FILL Education Live Site"></a>
        </section>
        <section class="project-info section">
            <div class="project-title">
                <h3>BootStrap</h3>
                <h2>FILL Education Center</h2>
            </div>
            <div class="project-overview">
                <h4>Project Overview</h4>
                <p>FILL is a tutoring center with aims to help students K-12 and 1st and 2nd Year. Because this is someone’s business most of the goals will be more oriented towards the owner. Endorse Virtual learning Website for Business Credibility Helpful SEO for organic searches Replacing a pdf instead of a website</p>
            </div>
            <div class="project-details">
                <div class="detail-item">
                    <h4>Language</h4>
                    <p>HTML, CSS, JS</p>
                </div>
                <div class="detail-item">
                    <h4>Plugins</h4>
                    <p>BootStrap</p>
                </div>
                <div class="detail-item">
                    <h4>Tools</h4>
                    <p>VS Code, Photoshop, Illustrator</p>
                </div>
            </div>
            <div class="site-links">
                <a href="https://fill.edwardlin.ca/" target="_blank" title="FILL Education Live Site">Live Site</a>
                <a href="https://github.com/EdwardOfLinster/fill-education-center" target="_blank" title="FILL Education Live Site">View Code</a>
            </div>
        </section>
        <?php include_once "components/footer.php" ?>
    </div>
</body>
<script src="js/main.js"></script>
</html>