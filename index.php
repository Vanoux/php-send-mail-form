<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>
<body>

<form action="" method="POST">
    <label for="mail">Mail :</label><input id="mail" type="email" name="mail"/><br>
    <textarea name="message" cols="30" rows="10" placeholder="Votre message"></textarea>
    <input type="submit" value="OK">
</form>

<?php
$to = $_POST['mail'];
$subject = 'sujet';
$message = $_POST['message'];
$headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

if (isset($to, $subject, $message, $headers)){
    mail($to, $subject, $message, $headers);

}
?>


</body>
</html>
