<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/01/2019
 * Time: 14:24
 */

class mail
{
private $destinataire;
private $objet;
private $message;
private $emetteur;

    public function __construct()
    {


            $this->destinataire = $_POST['destinataire'];
            $this->objet = $_POST['objet'];
            $this->message = $_POST['message'];
            $this->emetteur = $_POST['expediteur'];

    }

    public function envoiMail () {


            $headers = 'From:'.$this->emetteur . "\r\n" .
                'Reply-To:'.$this->emetteur . "\r\n" .
                'X-Mailer: PHP/' . phpversion();


            mail($this->destinataire, $this->objet, $this->message, $headers);
            echo'message envoyé';

        }
}