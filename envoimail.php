<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/01/2019
 * Time: 14:45
 */


?>

<h1>Formulaire d'envoi de mail</h1>

<form action="envoi.php" method="post">
    <label>Expéditeur : </label><input name="expediteur" id = "expediteur">
    <label>Adresse mail du destinataire</label><input name="destinataire" id = "destinataire"><br><br>
    <label>Objet du message</label><input name="objet" id = "objet"><br><br>
    <label>Votre message</label><textarea name="message" id = "message"></textarea>br><br>
    <input type="submit" value="envoyer">
</form>