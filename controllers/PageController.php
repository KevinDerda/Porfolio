<?php

namespace Controllers;

class PageController {
    function goToContact() {
        require 'views/front/contact.php';
    }

    function goToReferences() {
        require 'views/front/references.php';
    }

    function goToCookies() {
        require 'views/front/cookies.php';
    }

    function goToLegales() {
        require 'views/front/legale.php';
    }

    function goToParcours() {
        require 'views/front/parcours.php';
    }

    function goToConfidentialite() {
        require 'views/front/confidentialite.php';
    }

    /**
     * Send an email
     */
    function sendEmail() {
        $errors = [];
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['content'];
            $rgpd = $_POST['rgpd'];
            if (!empty($name)) {
                $errors[] = 'Le nom est vide';
            }
            if (empty($email)) {
                $errors[] = 'Email vide';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email invalide';
            }
            if (empty($message)) {
                $errors[] = 'Message vide';
            }
            if (empty($rgpd)) {
                $errors[] = 'Cache RGPD non coché';
            }
            if (!empty($errors)) {
                $allErrors = join('<br/', $errors);
                $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
            } else {
                $toEmail = 'reykozz15@gmail.com';
                $emailSubject = 'Nouveau message depuis le site';
                $headers = ['From' => $email, 'Reply-To' => $email, 'Content-Type' => 'text/html; charset=iso-8859-1'];
                $bodyParagraphs = ["Nom: {$name}", "Email: {$email}", "Message: ", $message];
                $body = join(PHP_EOL, $bodyParagraphs);
                if (mail($toEmail, $emailSubject, $body, $headers)) {
                    header('Location: /');
                } else {
                    $errorMessage = "Oops, l'email n'est pas parti";
                    header('Location: /');
                }
            }
        }
    }
}