<!--/includes/header.php -->
<!DOCTYPE html>
<html lang="en">
    <meta charset = "UTF-8">
    <meta name = "viewport" content= "width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Welcome to MC website</title>
    <body>
        <header>
            <nav>
                <ul>
                    <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>           
                    <li class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><a href="about.php">About</a></li>
                    <li class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><a href="about.php">Contact us</a></li>
                </ul>
            </nav>
        </header>
    </body>
</html>   