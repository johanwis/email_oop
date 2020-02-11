
<?php
require "class/Mail.php";

$newMail = new Mail($_POST['mail'],$_POST['subject'],$_POST['message']);

$newMail->sendMail();