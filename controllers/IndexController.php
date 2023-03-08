<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function testAction () {
    echo 'IndexController.php > testAction' . '<br />';
}

function indexAction ($smarty) {
    $responseCategories = getAllMainCatsWithChildren();
    $responseProducts = getLastProducts(16);

    $smarty -> assign('pageTitle', 'Главная страница сайта');
    $smarty -> assign('responseCategories', $responseCategories);
    $smarty -> assign('responseProducts', $responseProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}