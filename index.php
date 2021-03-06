<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP SendMail Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="card card-outline-secondary">
    <div class="card-header">
        <h1 class= "text-center mb-0">Contact Send Mail</h1>
    </div>
        <div class="card-body bg-secondary">
            <form class="form" action="/" role="form" autocomplete="on" method="GET">
                <fieldset>
                    <label for="email" class="text-white mb-0">Email</label>
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <input type="email" name="email" id="email" class="form-control" required="off" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})">
                            </div>
                        </div>
                    <label for="message" class="text-white mb-0">Message</label>
                        <div class="row mb-1">
                            <div class="col-lg-6">
                                <textarea rows="6" name="message" id="message" class="form-control" required="off" maxlength="500"></textarea>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-info btn-lg float-right">Envoi Message</button>
                </fieldset>
            </form>
        </div>
</div>
                    
<?php
// mail() Avec une exception : (pas sure que ca marche!)
try {
    if(isset($_GET["email"])!=NULL && isset($_GET["message"])>10){
        mail($_GET["email"],$_GET["message"]);
        //echo "Formulaire envoyé !";
    }else {
        throw new Exception("Veuillez completer le formulaire !");
    }	
}catch(Exception $e) {
    echo "Exception reçue : ".$e->getMessage(),"\n";
}
// Methode doc PHP mail() :
// $to = $_GET["email"];
// $subject = "sujet";
// $message = $_GET["message"];
// $headers = 'From: webmaster@example.com' . "\r\n" .
//             'Reply-to webmaster@example.com' . "\r\n" .
//             'X-Mailer: PHP/' . phpversion();

// if(isset($to, $subject, $message, $headers)){
//     mail($to, $subject, $message, $headers);
// }

// 2ème façon de faire (plus courte) :
// if(isset($_GET["email"]) && isset ($_GET["message"])){
//     mail($_GET["email"], $_GET["message"]);
// }
?>

</body>
</html>
