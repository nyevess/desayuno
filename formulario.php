<?php


if(isset($_POST['email'])) {

 // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
    $email_to = "nyevess@gmail.es";
    $email_subject = "Formulario desayuno";
    
  
    if(!isset($_POST['hora']) ||
    !isset($_POST['lugar']) ||
    !isset($_POST['tiempo']) ||
    !isset($_POST['cafe']) ||
    !isset($_POST['azucar'])) 
    !isset($_POST['complemento'])) 
    !isset($_POST['tostada'])) 
    !isset($_POST['tostada_conque'])) 
    !isset($_POST['americano'])) 
    !isset($_POST['escribir'])) 
    
    {
    
    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
    }
    
    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Hora de desayuno: " . $_POST['hora'] . "\n";
    $email_message .= "Donde toma el desauino: " . $_POST['lugar'] . "\n";
    $email_message .= "que tiempo dedica: " . $_POST['tiempo'] . "\n";
    $email_message .= "toma cafe: " . $_POST['cafe'] . "\n";
    $email_message .= "toma azucar: " . $_POST['azucar'] . "\n\n";
    $email_message .= "toma complementos: " . $_POST['complementos'] . "\n\n";
    $email_message .= "toma tostada?: " . $_POST['tostada'] . "\n\n";
    $email_message .= "Con que toma la tostaada?: " . $_POST['tostada_conque'] . "\n\n";
    $email_message .= "Desayuno americano: " . $_POST['americano'] . "\n\n";
    $email_message .= "Americano con que: " . $_POST['Escribir'] . "\n\n";
    
    
    // Ahora se envía el e-mail usando la función mail() de PHP</bold>
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    
    echo "¡El formulario se ha enviado con éxito!";
    }
    

?>