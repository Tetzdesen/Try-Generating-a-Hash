<?php
    include "hash.php";
    $algoritmo = $_POST['select'];
    $message = $_POST['message'];

    if($algoritmo == "none"){
      $hash = "Please select a hash algorithm";
    } else {
      $hash = generate_hash($algoritmo, $message); 
    }

    header("Location:index.php?msg=$hash&algoritmo=$algoritmo");  

    die();
    exit();

 
?>