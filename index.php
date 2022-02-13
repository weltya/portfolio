<?php
$pages = scandir('php/');
if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'] . '.php', $pages)) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Portfolio WA</title>
</head>

<body>
    <div id="container">
        <!--Navbar start-->
        <?php
        include './php/navbar.php'
        ?>
        <!--current section start-->
        <?php
        include './php/' . $page . '.php'
        ?>
    </div>
    <!--
    <footer>
        <?php
        include './php/footer.php'
        ?>
    </footer>
    -->
</body>



<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="./js/btn.js"></script>
<script src="./js/form.js"></script>
<script src="./js/tagcanvas.js"></script>
<script src="./js/carousel.js"></script>
<script src="./js/timeline.js"></script>
<script src="./js/carousel.js"></script>
<script src="./js/littleMenu.js"></script>
<script src="./js/scroll.js"></script>



</html>