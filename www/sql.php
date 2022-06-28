<?php
/*
    Page: SQL
*/
require_once('./templates/Template.php');

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to startpage
if (!isset($_SESSION["loggedIn"]) && !$_SESSION["loggedIn"] === true) {
    header("location: ../");
    exit;
}

// Templates
$tpl = new Template('./templates/');
// Header
print $tpl->render('tmp-header', array());
// Body
print $tpl->render('/sql/tmp-sql', array());
// Footer
print $tpl->render('tmp-footer', array(
    'page_javascript' => '/templates/sql/sql.js'
));
