<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rijschool Challenge</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="antialised">
    <!-- Header -->
    <?php
    include 'components/nav.php';
    ?>

    <?php
    if(isset($_GET['page']) && $_GET['page'] === 'over-ons')
    {
        include 'pages/over-ons.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === 'tarieven')
    {
        include 'pages/tarieven.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === 'home')
    {
        include 'pages/home.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] === 'proefles')
    
        include 'pages/proefles.php';
        
    elseif(isset($_GET['page']) && $_GET['page'] === 'contact')
    
        include 'pages/contact.php';

    elseif(isset($_GET['page']) && $_GET['page'] === 'instructeurs')
    
        include 'pages/instructeurs.php';

    elseif(isset($_GET['page']) && $_GET['page'] === 'theorie')
    
        include 'pages/theorie.php';
    ?>

    <?php
    include 'components/footer.php';
    ?>

</body>
</html>
