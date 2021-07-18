<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once './vendor/autoload.php';
use FormGuide\Handlx\FormHandler;
$pp = new FormHandler(); 
$validator = $pp->getValidator();
$validator->fields(['firstname','lastname', 'email','phone'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);
$pp->sendEmailTo('realrushi.dehankar@gmail.com'); // ← Your email here
$pp->process($_POST);
echo '<br><br>';
echo '<h1 align="center">Thank You!</h1>';
echo '<h3 align="center">Your message has been successfully sent. I will contact you very soon!<br></h3>';
echo '<div align="center"><h3>to go back <a href="contact.html">click here</a></h3></div>';
echo '<h3 align="center">or wait 5 seconds to go to Homepage';
echo '<script>setTimeout(function(){window.location.href="index.html";},6000);</script>';