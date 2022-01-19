<?php

    if(isLogged() == 0){
        header("Location:index.php?page=home");
    }
?>

<h2 class="header">Supprimer votre compte</h2>
<h3>ETES VOUS SUR DE VOULOIR SUPPRIMER VOTRE COMPTE ?</h3>
<form method="post">
    <button type="submit" name="submitt">Supprimer</button>
</form>

<?php
 if(isset($_POST['submitt'])){       
    delete($_SESSION['tchat']);
    session_destroy();
    header("Location:index.php?page=signin");
 }
?>



