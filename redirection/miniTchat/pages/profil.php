<?php

    if(isLogged() == 0){
        header("Location:index.php?page=home");
    }
?>

<h2 class="header">Votre profile</h2>

<?php

    foreach(get_membres() as $membre){
        if($membre->email == $_SESSION['tchat']){
        ?>
            <div class="membre">
                <div class="profil-change">
                    <span>Votre Nom :</span>
                    <strong><?= $membre->name ?> </strong><br>
                </div>
                <br>
                <div class="profil-change">
                    <span>Votre Mail :</span>
                    <strong><span><?= $membre->email ?></span></strong><br>
                </div>
                <br>
                <div class="profil-change">
                    <span>Votre id :</span>
                    <strong><span><?= $membre->id ?></span></strong><br>
                </div>
                
            </div>
        <?php
        }
    }
?>

<?php
    if(isset($_POST['submit'])){       
        foreach(get_membres() as $membre){
            if($membre->email == $_SESSION['tchat']){
                if($_POST['name'] == ''){
                    $name = $membre->name;
                }else{
                    $name = htmlspecialchars(trim($_POST['name']));
                }
                if($_POST['email'] == ''){
                    $email = $membre->email;
                }else{
                    $email = htmlspecialchars(trim($_POST['email']));
                }
                
                if($_POST['password'] == ''){
                    $password = $membre->password;
                }else{
                    $password = sha1(htmlspecialchars(trim($_POST['password'])));
                }
                $id = $membre->id;
        
                if(email_taken($email) == 1 && $_SESSION['tchat'] != $email){
                    $error_email = "L'adresse email est déjà utilisée...";
                }else{
                    change_messages($_SESSION['tchat'], $email);
                    change($name, $email, $password, $id);
                    $_SESSION['tchat'] = $email;
                    session_destroy();
                    header("Location:index.php?page=members");
                }
            }
        }       
    }
?>

<form method="post" id="regForm">
    <div class="field">
        <label for="name" class="field-label">Votre nom</label>
        <input class="field-input" type="text" name="name" id="name"/>
    </div>
    <div class="field">
        <label for="" class="field-label">Votre adresse mail</label>
        <input class="field-input" type="email" name="email" id="email"/>
    </div>
    <div class="field">
        <label for="password" class="field-label">Votre mot de passe</label>
        <input class="field-input" type="password" name="password" id="password"/>
    </div>

    <p class="error"><?php echo(isset($error_email)) ? $error_email : ''; ?></p>

    <button type="submit" name="submit">Modifier</button>
</form>