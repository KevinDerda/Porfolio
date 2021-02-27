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
}