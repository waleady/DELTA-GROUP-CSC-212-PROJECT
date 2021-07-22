<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once "dbconnect/dbconnect.php";
   
    $sql = "SELECT * FROM register WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql)){

        $stmt->bindParam(":id", $param_id);
       
        $param_id = trim($_GET["id"]);
     
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
                
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                $name = $tom["name"];
                $age = $tom["age"];
                $adress = $tom["address"];
                $phone = $tom["phone"];
                $gender = $tom["gender"];
                $section = $tom["section"];
                $date= $tom["date_issued"];
            } else{
                
                header("location: dashboard.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

}
?>