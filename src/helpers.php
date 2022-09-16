<?php

$cn = new mysqli();

function mysql_connect($hostname, $db_user, $db_password, $database)
{
    global $cn;
    $cn = mysqli_connect($hostname, $db_user, $db_password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
}

function mysql_escape_string($string)
{
    global $cn;
    return mysqli_escape_string($cn, $string);
}

function mysql_query($query, $con = null)
{
    global $cn;
    try {
        $result = mysqli_query($cn, $query);
        return $result;
    } catch (Exception $e) {
        return null;
    }
}

function mysql_close()
{
    global $cn;
    mysqli_close($cn);
}

function mysql_fetch_assoc($result)
{
    if ($result == null) {
        return;
    }
    try {
        return mysqli_fetch_assoc($result);
    } catch (Exception $e) {
        return false;
    }

}

function mysql_affected_rows()
{
    global $cn;
    return mysqli_affected_rows($cn);
}

function mysql_num_fields($result){
    return mysqli_num_fields($result);
}

function mysql_num_rows($result)
{
    if ($result == null) {
        return 0;
    }
    try {
        return mysqli_num_rows($result);
    } catch (Exception $e) {
        return false;
    }
}

function mysql_fetch_array($result)
{
    if ($result == null) {
        return;
    }
    try {
        return mysqli_fetch_array($result);
    } catch (Exception $e) {
        return false;
    }

}

function mysql_error()
{

    try {
        global $cn;
        return mysqli_error($cn);
    } catch (Exception $e) {
        return false;
    }

}

function mysql_real_escape_string($string)
{
    if ($string == null) {
        return;
    }
    try {
        global $cn;
        return mysqli_real_escape_string($cn, $string);
    } catch (Exception $e) {
        return false;
    }

}