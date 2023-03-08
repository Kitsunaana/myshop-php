<?php

function getLastProducts ($limit = null) {
    $db = mysqli_connect("127.0.0.1", "root", "", "shop");
    $sql = "SELECT * FROM `products` ORDER BY id DESC";
    if ($limit) { $sql .= " LIMIT {$limit}"; }

    $response = mysqli_query($db, $sql);

    return createSmartyResponseArray($response);
}