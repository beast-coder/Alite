<?php

namespace Vendor\Lib\Mail;

class Mail {

    const SMTPHost = 'smtp1.example.com;smtp2.example.com';
    const SMTPAuth = true;
    const SMTPUsername = 'user@example.com';
    const SMTPPassword = 'secret';
    const SMTPSecure = 'tls';
    const SMTPPort = 587;

    private $phpmailer = null;

    /**
     * 
     */
    public function __construct() {

        if ($this->phpmailer == NULL) {
            $this->phpmailer = new \PHPMailer();
        }
    }

    /**
     * 
     * @param type $address
     * @param type $name
     */
    public function setFrom($address = '', $name = '') {

        if (is_array($address)) {
            foreach ($address as $value) {
                $this->phpmailer->setFrom($value, $name);
            }
        } else {
            $this->phpmailer->setFrom($address, $name);
        }
    }

    /**
     * 
     * @param type $address
     * @param type $name
     */
    public function addAddress($address = '', $name = '') {

        if (is_array($address)) {
            foreach ($address as $value) {
                $this->phpmailer->addAddress($value, $name);
            }
        } else {
            $this->phpmailer->addAddress($address, $name);
        }
    }

    /**
     * 
     * @param type $address
     * @param type $name
     */
    public function addReplyTo($address = '', $name = '') {

        if (is_array($address)) {
            foreach ($address as $value) {
                $this->phpmailer->addReplyTo($value, $name);
            }
        } else {
            $this->phpmailer->addReplyTo($address, $name);
        }
    }

    /**
     * 
     * @param type $address
     */
    public function addCC($address = '') {

        if (is_array($address)) {
            foreach ($address as $value) {
                $this->phpmailer->addCC($value);
            }
        } else {
            $this->phpmailer->addCC($address);
        }
    }

    /**
     * 
     * @param type $address
     */
    public function addBCC($address = '') {

        if (is_array($address)) {
            foreach ($address as $value) {
                $this->phpmailer->addBCC($value);
            }
        } else {
            $this->phpmailer->addBCC($address);
        }
    }

    /**
     * 
     * @param type $attach
     * @param type $name
     */
    public function addAttachment($attach = '', $name = '') {

        if (is_array($address)) {
            foreach ($address as $value) {
                $this->phpmailer->addAttachment($value, $name);
            }
        } else {
            $this->phpmailer->addAttachment($attach, $name);
        }
    }

    /**
     * 
     */
    public function isSMTP() {

        $this->phpmailer->isSMTP();
        $this->phpmailer->Host = self::SMTPHost;       // Specify main and backup SMTP servers
        $this->phpmailer->SMTPAuth = self::SMTPHost;   // Enable SMTP authentication
        $this->phpmailer->Username = self::SMTPHost;   // SMTP username
        $this->phpmailer->Password = self::SMTPHost;   // SMTP password
        $this->phpmailer->SMTPSecure = self::SMTPHost; // Enable TLS encryption, `ssl` also accepted
        $this->phpmailer->Port = self::SMTPHost;       // TCP port to connect to
    }

    /**
     * 
     * @param type $debug
     */
    public function smtpDebug($debug = 3) {
        $this->phpmailer->SMTPDebug = $debug;      // Enable verbose debug output
    }

    /**
     * 
     * @param type $state
     */
    public function isHTML($state = true) {
        $this->phpmailer->isHTML($state);
    }

    /**
     * 
     * @param type $subject
     */
    public function subject($subject = '') {
        $this->phpmailer->Subject = $subject;
    }

    /**
     * 
     * @param type $body
     */
    public function body($body = '') {
        $this->phpmailer->Body = $body;
    }

    /**
     * 
     * @param type $altBody
     */
    public function altBody($altBody = '') {
        $this->phpmailer->AltBody = $altBody;
    }

    /**
     * 
     * @return string
     */
    public function send() {
        if (!$this->phpmailer->send()) {
            $return = 'Message could not be sent. <br/>';
            $return .= 'Mailer Error: ' . $this->phpmailer->ErrorInfo;
        } else {
            $return = 'Message has been sent';
        }
        return $return;
    }

}
