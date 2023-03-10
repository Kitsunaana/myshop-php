<?php

function loadPage ($smarty, $controllerName, $actionName = 'index') {
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

function loadTemplate ($smarty, $templateName) {
    $smarty -> display($templateName . TemplatePostfix);
}

function d ($value = null, $die = 1) {
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';

    if ($die) die;
}

function createSmartyResponseArray ($response) {
    if (!$response) return false;
    $smartyResponse = array();

    while ($row = mysqli_fetch_assoc($response)) {
        $smartyResponse[] = $row;
    }

    return $smartyResponse;
}