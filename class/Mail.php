<?php
class Mail{
    public $mail = "johan.wisniewski@gmail.com";
    public $from;
    public $message;
    public $subject;

    public function __construct($from, $message, $subject){
        $this->from = $from;
        $this->message = $message;
        $this->subject = $subject;
    }

    public function sendMail(){
        mail($this->mail, $this->message, $this->subject);
    }
}