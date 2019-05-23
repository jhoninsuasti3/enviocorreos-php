<?php
/**
 * Created by PhpStorm.
 * User: elporfirio
 * Date: 2019-02-26
 * Time: 23:04
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'Constantes.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'jhoninzaghi1@gmail.com';
    $mail->Password = EMAIL_PASSWORD;

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    ## MENSAJE A ENVIAR

    $mail->setFrom('jhoninzaghi1@gmail.com');
    $mail->addAddress('rauleduardo1992@hotmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Esta es una prueba de email';
    $mail->Body = 'Hola mundo desde <b>phpmailer</b>';

    $mail->send();

} catch (Exception $exception) {
    echo 'Algo salio mal', $exception->getMessage();
}