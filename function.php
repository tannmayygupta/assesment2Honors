<?php

function connectToDatabase(){
    
    try{

    return new PDO('mysql:host=localhost;dbname=cms' ,'root' ,'123456') ;

    }
    catch(PDOException $e){

        echo $e -> getMessage();
        exit ; 

    }

}

?>