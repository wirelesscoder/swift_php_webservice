<?php

//
// Created by rigerd
// Copyright © 2016 wirelesscoder. All rights reserved.
//
// build a connection to MySql-database
//
// just replace DBUser, DBPassword, DBName, DBHost,DBTable


  // db constant 
  define('DB_USER', 'DBUser');         
  define('DB_PASSWORD','DBPassword');   
  define('DB_NAME','DBName');
  define('DB_HOST', 'DBHost');

  $tableName = 'DBTable';
  
  //Connection to MySQL-database
  $dbcon = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not connect to MySQL!' . mysqli_connect_error());
   
?>

