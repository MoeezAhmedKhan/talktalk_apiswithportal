<?php

$Host = 'localhost';
$DB_DATABASE='sassolut_chanti';
$DB_USERNAME='sassolut_chanti';
$DB_PASSWORD='chanti123@#@';

$conn = mysqli_connect($Host, $DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
