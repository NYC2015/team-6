<?php
    $servername = "  ";
    $username = "    ";
    $password = "   ";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS team6_FTC";
    if ($conn->query($sql) === TRUE) {
        echo "Database team6_FTC created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    $conn->close();
    
  
    
    
    ?>
