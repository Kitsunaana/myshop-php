<?php

function getChildrenForCat ($categoryId) {
    $sql = "SELECT * FROM categories WHERE parent_id = '{$categoryId}'";
    $db = mysqli_connect("127.0.0.1", "root", "", "shop");

    $response = mysqli_query($db, $sql);

    return createSmartyResponseArray($response);
}

function getAllMainCatsWithChildren () {
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';
    $db = mysqli_connect("127.0.0.1", "root", "", "shop");

    $response = mysqli_query($db, $sql);

    $smartyResponse = array();
    while ($row = mysqli_fetch_assoc($response)) {
        $responseChildren = getChildrenForCat($row['id']);
        if ($responseChildren) { $row['children'] = $responseChildren; }
        $smartyResponse[] = $row;
    }

    return $smartyResponse;
}