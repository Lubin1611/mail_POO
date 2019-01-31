<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/01/2019
 * Time: 15:29
 */

include "mail.php";

$envoiCourrier = new mail();
$envoiCourrier->envoiMail();