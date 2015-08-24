<?php 
/*Insert data*/
function insert($table, $data = array()) {
    //processing data $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = escape($value);
        $values[] = "`$key`='$value'";
    }

    //insert
  
     $sql = "INSERT INTO `$table` SET " . implode(',', $values);
     $check = mysql_query($sql);
     return $check;

}

 ?>
