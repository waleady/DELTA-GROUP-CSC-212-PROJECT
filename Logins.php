<?php
//initialize the session 
session_start();

//Check if the user is already logged in,if yes then redirect him to welcome page.
if(is set($_SESSION["loggedin"]) && $_SESSION ["logged in"] === true){
      header("location:index.php");
      exit;
}
//Include Config file.
require_once"dbconnect/dbconnect.php";

//Define variables and initialize with empty values.
$username = $password = "";
$username_err = $password_err = $login_err = "";

//processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] =="POST"){

     //Check if username is empty
     if(empty(trim($_POST["username"]))){
         $username_err = " please enter your username.";
        } else{
            $username = trim($_POST["username"]);
        }

      //Check if password is empty
      if(empty(trim($_POST["password"]))){
         $_password_err = "please enter your password.";
       } else{
           $password = trim($_POST["password"]);
       }
      //Validate credentials
      if(empty($username_err) && empty($password_err)){
           //prepare a select statement
           $sql = "SELECT id, username,password From admin where username = " username";

           if($stmt = $pdo->prepare($sql)){
               //Blind variables to the prepared statement as parameters
               $stmt->blindParam(":username",$param_username,PDO::PARAM_STR);

               //set parameters
               $param_username = trim($_POST["username"]);

               //Attempt to execute the prepared statement
               if($stmt->execute()){
                   //check if username exists,if yes then verify password
                   if($stmt->rowCount() == 1){
                       if($row = $stmt->fetch()){
                            $id = $row["id"];
                            $username = $row["username"];
                            $hashed_password = $row["password"];
                             if(password_verify($password, $hashed_password)){
                                //Password is correct,so start a new session
                                session_start();

                                //Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;

                                //Redirect user to welcome page
                                header("location: dashboard.php");
                        
                            } else{
                               //password is not valid, display a generic error message
                               $login_err = "Invalid username or password.;
                            }
                         }
                      } else{
                           //Username doesn't exist,display a generic error message
                           $login_err =" Invalid username or password. ";
                      }
                   } else{
                          echo " Oops! Something went wrong. Please try again later.";
                   }
     
                   //Close statement 
                       unset($stmt);
               }
           }
         //Close connection
         unset($pdo);
?>
                 
            
                      
             
                   

        
         
