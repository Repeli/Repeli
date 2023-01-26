<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Etusivu</a></li>
                    <li><a href="Koulutus.php">Koulutus</a></li>
                    <li><a href="Kokemus.php">Työkokemus</a></li>
                    <li><a href="Tiedot.php">Tiedot&Taidot</a></li>
                    <li><a href="Todistukset.php">Muut todistukset&Ansiot</a></li>
                    <li><a href="Historia.php">Historia, nykyisyys ja tulevaisuus</a></li>
                    
                </ul>
            </nav>
            
            <div id="content_area">
                 <?php echo $content; ?>
            </div>
            
            
            <footer>
                <p>Samin sivut</p>
            </footer>
    </body>
</html>
