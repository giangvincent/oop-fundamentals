<?php

class EmailProvider {

    public function sendMail(IMailer $mailer){
        $mailer->Send();
    }
}

$mail = new EmailProvider();
$mail->sendMail(new Outlook());
$mail->sendMail(new Gmail());