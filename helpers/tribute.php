<?php

function get_service($id, $hashed = true, \PDO $db = null) {
    if (!is_string($id) && !is_int($id)) {
        return false;
    }
    $id = trim(strval($id));
    if (empty($id)) {
        return false;
    }
    if (!$db) {
        $db = $GLOBALS['db'];
    }
    $sql = 'SELECT * FROM `servicios` WHERE ';
    if ($hashed) {
        $id = strval($id);
        $sql .= "md5(id) = ?";
    } else {
        $id = intval($id);
        $sql .= "id = ?";
    }
    $sql .= ' LIMIT 1';
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
