<?php

    session_start();

    $dbhost = 'weltyev219.mysql.db';

    $dbname = 'weltyev219';

    $dbuser = 'weltyev219';

    $dbpassword = 'AjgKfh6J1fgvv45ZZc012';



    /*$dbhost = 'localhost';

    $dbname = 'tchat';

    $dbuser = 'root';

    $dbpassword = '';*/



    try{

        $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpassword,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }catch(PDOexception $e){

        die('can\'t connect to database');

    }



    function isLogged(){

        if(isset($_SESSION['tchat'])){

            $logged = 1;

        }else{

            $logged = 0;

        }



        return $logged;

    }

    ?>

   
