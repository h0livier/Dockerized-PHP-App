<?php

    include 'db/QueryManager.php';
    $queries = new QueryManager();

    echo "<h1>Test db connection</h1>";

    echo "<h2>Queries without params</h2>";
    $withoutParams = $queries->request('SELECT * FROM test');

    foreach($withoutParams as $row) {
        printf("value: $row[0]<br />");
    }

    echo "<h2>Queries with params</h2>";
    $withParams = $queries->request('SELECT * FROM test where value=?', array('oui'));

    foreach($withParams as $row) {
        printf("value: $row[0]<br />");
    }