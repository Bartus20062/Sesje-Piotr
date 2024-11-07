<?php
session_start();

if (isset($_POST['login']) && !empty($_POST['login'])) {
   $_SESSION['auth']['login'] = $_POST['login'];

   header("Location: index1.php");
   exit();
}

if (isset($_POST['action'])) {
   if ($_POST['action'] === 'destroy') {
 
       session_unset();
       session_destroy();
   
       header("Location: index1.php");
       exit();
   } elseif ($_POST['action'] === 'save') {

       $session_id = session_id();
       $session_data = print_r($_SESSION, true);
       $content = "SESSION_ID: $session_id\n" . $session_data;

       file_put_contents('sesja.txt', $content);

       header("Location: index1.php");
       exit();
   }
}
?>