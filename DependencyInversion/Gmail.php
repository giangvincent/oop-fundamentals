<?php

class Gmail implements IMailer {
    public function Send() {
        echo "Sending email via Gmail...\n";
    }
}