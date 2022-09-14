<?php

if(empty($_POST['nomPrenomForm']) AND empty($_POST['emailForm']) AND empty($_POST['sujetForm']) AND empty($_POST['messageForm']) AND !isset($_POST['submitForm'])) {
    header('HTTP/1.1 403 Forbidden'); 
    die('Accès Refusé !'); 
} 

$Zonestexte = array($_POST['nomPrenomForm'], $_POST['emailForm'], $_POST['sujetForm'], $_POST['messageForm']);

foreach($Zonestexte as $Zonetexte) {
    if(preg_match('/\//ism',$Zonetexte)){ header('Location: index.php?errorlink1'); exit(); }
    if(preg_match('/www/ism',$Zonetexte)){ header('Location: index.php?errorlink2'); exit(); }
    if(preg_match('/http(s?)/ism',$Zonetexte)){ header('Location: index.php?errorlink3'); exit(); }
    if(preg_match('/</ism',$Zonetexte)){ header('Location: index.php?errorlink4'); exit(); }
    if(preg_match('/>/ism',$Zonetexte)){ header('Location: index.php?errorlink4'); exit(); }
}

if (strlen($_POST['nomPrenomForm']) >= 50){ header('Location: index.php?errorlength1'); exit(); }
if (strlen($_POST['emailForm']) >= 100){ header('Location: index.php?errorlength2'); exit(); }
if (strlen($_POST['sujetForm']) >= 60){ header('Location: index.php?errorlength3'); exit(); }
if (strlen($_POST['messageForm']) >= 800){ header('Location: index.php?errorlength4'); exit(); }

if (isset($_POST['submitForm'])) {
    if(!empty($_POST['nomPrenomForm']) AND !empty($_POST['emailForm']) AND !empty($_POST['sujetForm']) AND !empty($_POST['messageForm'])) {
        $header="MIME-Version: 1.0\r\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
          <body>

            <table style="background-color:#DB3427" >
              <tr><td style="background-color:white;border:solid white 2px;padding:5px;"><b>Nom de l\'expéditeur : </b><span style="color:blue">'.$_POST['nomPrenomForm'].'</span></td></tr>
              <tr><td style="background-color:white;border:solid white 2px;padding:5px;"><b>Mail de l\'expéditeur : </b><span style="color:blue">'.$_POST['emailForm'].'</span></td></tr>
              <tr><td style="background-color:white;border:solid white 2px;padding:5px;"><b>Sujet : </b><span style="color:blue">'.nl2br($_POST['sujetForm']).'</span></td></tr>
              <tr><td style="background-color:white;border:solid white 2px;padding:5px;"><b>Message : </b><span style="color:blue">'.nl2br($_POST['messageForm']).'</span></td></tr>
              <tr><td style="background-color:white;border:solid white 2px;padding:5px;"><b>Message en provenant du site : </b><span style="color:blue"> Appetee - Formulaire</span></td></tr>
            </div>

          </body>
        </html>';

        mail("...", "Message de contact", $message, $header);
        header('Location: index.php?success');
        exit();
    } else {
        header('Location: index.php?error');
        exit();
    }
    header('Location: index.php?error2');
    exit();
}
