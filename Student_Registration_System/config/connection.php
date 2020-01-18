<?php

/**
 * Database connection
 * Author: Amritha S Pillai
*/

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "student_system"; 

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );