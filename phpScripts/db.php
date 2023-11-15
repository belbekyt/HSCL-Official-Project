<?php

    require('connect.php');

    function selectAll($table){
        global $conn;

        $query = "SELECT * FROM $table";

        $stmt = $conn->prepare($query);
        $stmt->execute();

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }

    $users = selectAll('users');
?>