<?php
add_filter('pre_get_document_title', function ($title) {

    if (is_page_template('pages/accueil-page.php')) {
        return 'Accueil - AfroHairitage';
    }

    return $title;
});