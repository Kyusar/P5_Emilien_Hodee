<?php 

function sendMail($pseudo, $messageObject, $message, $mail)
{
    $message = mail(
        'nazarick.community@gmail.com',
        'Contact de : ' . $pseudo . ' concernant : ' . $messageObject,
        $message);

    if ($message)
    {
        require('view/success_mail.php');
    }
    else
    {
        throw new Exception ('Impossible d\'envoyer le mail !');
    }
}


