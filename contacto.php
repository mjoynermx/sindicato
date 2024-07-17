<?php
if(isset($_POST['submit'])){
    $name = $_POST['nombre'];
    $mailForm = $_POST['mail'];
    $tel = $_POST['tel'];
    $msj = $_POST['mensaje'];

    $mailTo = "ljuarez@ikeasistencia.com";
    $headers = "De: ".$mailFrom;
    $text = "Tiene un mensaje de: ".$nombre;
    $text1 = "Teléfono de contacto: ".$tel;
    $text2 = "Mensaje:".$msj;

    mail($mailTo, $text, $text1, $text2, $headers );
}


?>