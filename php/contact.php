 <?php



    if(isset($_GET['page']) && ($_GET['page'] == 'contact')){

        $modifClass = 'modif-contact-php';

    }else{

        $modifClass = '';

    }



    $dbhost = 'weltyev219.mysql.db';

    $dbname = 'weltyev219';

    $dbuser = 'weltyev219';

    $dbpassword = 'AjgKfh6J1fgvv45ZZc012';

    

    if(isset($_POST['submit'])){



        try{



            $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpassword,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

        }catch(PDOexception $e){

            die('can\'t connect to database2');

        }



        $name = htmlspecialchars(trim($_POST['name']));

        $email = htmlspecialchars(trim($_POST['email']));

        $subject = htmlspecialchars(trim($_POST['subject']));

        $message = htmlspecialchars(trim($_POST['message']));





        $query =$db->prepare("INSERT INTO contact(name,email,subject,message) VALUES(:name,:email,:subject,:message)");

        $query->bindParam('name',$name,PDO::PARAM_STR);

        $query->bindParam('email', $email,PDO::PARAM_STR);

        $query->bindParam('subject', $subject,PDO::PARAM_STR);

        $query->bindParam('message', $message,PDO::PARAM_STR);

        $query->execute();



        $toEmail = 'welty.alex67@gmail.com';

        $mailHeaders = "From: " . $name . "<". $email .">\r\n";

        if(mail($toEmail, $subject, $message, $mailHeaders)) {

            $sucess = 'sucess';

        }

    }



        

 ?>

 

 <!--section contact start-->

 <div id="section-contact" class="<?php echo ($modifClass == 'modif-contact-php') ? $modifClass : '' ; ?>">

     <div class="hand margin-l40">

         < h2>

     </div>

     <h2 class="h2-blue">Contact</h2>

     <div class="hand margin-l40">

         < /h2>

     </div>



     <!--<iframe src="https://snazzymaps.com/embed/316820" width="100%" height="600px" style="border:none;"></iframe>-->

     <div class="contact-container">

         <div class="map-container">

             <div class="location">

                 Welty Alexandre,<br>

                 Strasbourg. France<br>

                 <span class="text-blue">@</span> : welty.alex67@gmail.com

             </div>

         </div>

         <div class="form-contact-container">

             <div class="hand margin-l40">

                 < form>

             </div>

             <form class="form-contact" method="post" id="regForm">

                 <div class="field">

                     <label for="name" class="field-label">Votre nom</label>

                     <input class="field-input" type="text" name="name" id="name" />

                 </div>

                 <div class="field">

                     <label for="email" class="field-label">Votre adresse mail</label>

                     <input class="field-input" type="email" name="email" id="email" />

                 </div>

                 <div class="field">

                     <label for="subject" class="field-label">Votre Sujet</label>

                     <input class="field-input" type="text" name="subject" id="subject" />

                 </div>

                 <div class="field field-big">

                     <label for="message" class="field-label">Votre message</label>

                     <textarea class="field-input field-input-big" name="message" id="message" cols="20" rows="5"></textarea>

                 </div>

                 



                 <button type="submit" name="submit" class="btn btn-600"><span></span>Envoyez</button>

             </form>

             <div class="hand margin-l40 margin-top-form">

                 < /form>

             </div>

         </div>

     </div>



 </div>