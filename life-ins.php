<?php require './configuration/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_name; ?> | Life Insurance</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Calendly Badge: Stylesheet -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <!-- Favicon Inserts -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
</head>
<body>
    <nav>
        <?php require 'components/Nav-Mobile.php'; ?>
        <?php require 'components/Nav-Desktop.php'; ?>
    </nav>
    <header>
        <?php require 'components/Jumbotron-LI.php'; ?>
    </header>
    <main>
        <?php require 'components/Product-LI.php'; ?>
        <?php require 'components/Contact.php'; ?>
    </main>
    <footer>
        <?php require 'components/Footer-Nav.php'; ?>
    </footer>
    <!-- Calendly Badge: JavaScript Start -->
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/securelegacyins/needs-analysis', text: 'Schedule a Meeting', color: '#00d3ff', textColor: '#fefefe' }); }</script>
    <!-- Calendly Badge: JavaScript End -->
    <script src="js/script.js"></script>
</body>
</html>