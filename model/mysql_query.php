<?php
//reject sql
function escape($str)
{
    return mysql_escape_string($str);
}
/*Insert data*/
function insert($table, $data = array())
{
    //processing data $data
    $values = array();
    foreach ($data as $key => $value) {
        $value    = escape($value);
        $values[] = "`$key`='$value'";
    }
    
    //insert
    
    $sql   = "INSERT INTO `$table` SET " . implode(',', $values);
    $check = mysql_query($sql);
    return $check;
    
}
/*Check available of $data in database*/
function checkAvailable($table, $data)
{
    
    foreach ($data as $key => $value) {
        $colum   = $key;
        $valueOf = $value;
    }
    return mysql_num_rows(mysql_query("SELECT * FROM `$table` WHERE  $colum = '$valueOf'"));
    
}
/*Check account avalible*/
function checkAccount($username, $password)
{
    $password = md5($password);
    return mysql_num_rows(mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'"));
}

/*Get all data from $table with $where*/
function getAll($table, $where)
{
    foreach ($where as $key => $value) {
        $colum   = $key;
        $valueOf = $value;
    }
    $data  = array();
    $query = mysql_query("SELECT * FROM $table WHERE $colum = '$valueOf'");
    
    while ($row = mysql_fetch_array($query))
        $data[] = $row;
    return $data;
}

/*Get id by username*/
function getIdBy($username)
{
    
    $query = mysql_query("SELECT id FROM users WHERE username = '$username'");
    $row   = mysql_fetch_array($query);
    return $row['id'];
}

/*Get last ID of table*/
function getLastId($table)
{
    $query = mysql_query("SELECT MAX(id) FROM $table");
    $row   = mysql_fetch_array($query);
    return $row;
}

/*Delete by id of table*/
function deleteById($table, $id)
{
    return $query = mysql_query("DELETE FROM $table WHERE id = '$id'");
}
?>


