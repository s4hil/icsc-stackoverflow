<?php

// DB connection
require_once 'config.php';

// Clean String
function clean($str)
{
    return preg_replace('/[^\.\@\,\-\_\!\$\&A-Za-z0-9 ]/', '', $str);
}

function validateRollNumber($rollNumber)
{
    if (strlen($rollNumber) == 8 && ctype_digit($rollNumber)) {
        return true;
    }
    else {
        return false;
    }
}
function getNameByRollNumber($rollNumber)
{
    global $conn;

    $rollNumber = clean($rollNumber);

    $sql = "SELECT * FROM `_students` WHERE `roll_no` = '$rollNumber' LIMIT 1";
    $res = mysqli_query($conn, $sql);
    $result = array();
    if (mysqli_num_rows($res) > 0) {
        $student = mysqli_fetch_array($res);
        $name = ucwords(strtolower($student['student_name']));
        return $name;
    }
    else {
        return false;
    }
}
function checkDuplicateUser($rollNumber)
{
    global $conn;
    $sql = "SELECT * FROM `_users` WHERE `roll_no` = '$rollNumber'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) == 0) {
        return true;
    }
    else {
        return false;
    }
}
?>