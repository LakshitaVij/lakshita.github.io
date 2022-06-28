#!/usr/local/bin/php

<?php
$db = new SQLite3('tester.db');
$db->query("CREATE TABLE IF NOT EXISTS ari_table (pname varchar(200) NOT NULL);");
$db->query("INSERT into ari_table (pname) values ('aritra');");
$db->query("INSERT into ari_table (pname) values ('lakshita');");
$sql = "SELECT * FROM ari_table;";
$result = $db->query($sql);

while ($row = $result->fetchArray()) {
    var_dump($row);
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "pname: " . $row["pname"]. " !";
    }
  } 
  else {
    echo "0 results";
  }

?>