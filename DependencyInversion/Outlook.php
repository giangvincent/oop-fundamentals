<?php

class Outlook implements IMailer {
    public function Send() {
        echo "Sending email via Outlook...\n";
    }
}