<?php 

require_once "config/dbconnection.php";
$dbconnection = DbConnection::getPdo();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     if(
          !$_POST['firstname'] ||
          !$_POST['lastname'] ||
          !$_POST['team'] ||
          !$_POST['car'] 
     )
          {
               echo 'un des champs est vide';
          }
     else {
          $query=$dbconnection->prepare('INSERT INTO licence (firstname,lastname,team,car)   
          
          VALUES (
               :firstname,
               :lastname,
               :car,
               :team
               )       
               ');
               $query->bindParam(':firstname', $_POST['firstname']);
               $query->bindParam(':lastname', $_POST['lastname']);
               $query->bindParam('car', $_POST['car']);
               $query->bindParam('team', $_POST['team']);
              
               $query->execute();
            header('location:index.php');
  
          }
     }
else {
     }
                                                       
?>