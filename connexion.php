<?php
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    if(!empty($name) && !empty($email) && !empty($phone) && !empty($message))

{
 
    $link = mysqli_connect('localhost' ,'root' ,'' ,'portfolio') ;

    if ($link){
        header('Location: modal.php?id='.$name);
               }
    else{
    echo "error";
        }
  

    $sql = "INSERT INTO `form1`(`id`, `Name`, `E-mail`, `Number`, `Message`) VALUES (null, '$name','$email','$phone','$message')";

    //mysqli_query : Exécute une requête sur la base de données
    mysqli_query($link,$sql);
}else{
    header('Location: index.php');
        }
}
    //echo "message enregistre avec succes - Merci- pour votre visite"; 

    
?>