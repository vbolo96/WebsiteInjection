<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ; ?></title>
        <link rel =stylesheet type="text/css" href="Styles/Stylesheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php"> Acasa </a></li>
                    <li><a href="CarSearch.php"> Cauta </a></li>
                    <li><a href="NewCar.php"> Adauga anunt </a></li>
                    <li><a href="login.php"> Login </a></li>
                    <li><a href="signup.php"> Creaza Cont </a></li>
                </ul> 
            </nav>
            
            <div id="contentarea">
                <?php
                echo $content; ?>
            </div>
            
<!--            <div id="sidebar">
               
            </div>-->
            
            <footer>
                
            </footer>
        </div>
    </body>
</html>
