<?php
    include_once("connect.php");
    
    // Create connection
    
    
    $sql="CREATE TABLE IF NOT EXISTS SNAPdata
        (
    SNAPID INT(100)  UNSIGNED AUTO_INCREMENT,
    FirstName  VARCHAR(20) NOT NULL,
    LastName  VARCHAR(20) NOT NULL,
    SSN INT(20) UNSIGNED,
    PRIMARY KEY (SNAPID,SSN)
    )"
     ;
    
     mysql_query($sql);
    
    $sql1="INSERT INTO SNAPdata
    (
    SNAPID,FirstName,LastName,SSN)
    VALUES 
    (1,'Zelenia','Crawford',8646),(2,'Edan','Delgado',26558),(3,'Ginger','Dunn',880324),(4,'Lysandra','Horton',653254),(5,'Tanisha','Hancock',564403),(6,'Jolene','Kline',766364),(7,'Yuri','Ballard',939747),(8,'Gregory','Rosa',463799),(9,'Deborah','Norman',377344),(10,'Cally','Freeman',927383)"
    ;
    
    
    mysql_query($sql1);
    
    
    $sql2="CREATE TABLE IF NOT EXISTS people
    (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    SNAPID INT(100),
    username VARCHAR(10) NOT NULL,
    pwd VARCHAR(10) NOT NULL,
    addr VARCHAR(50) NOT NULL,
    phnumber VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    last1  VARCHAR(10) ,
    last1_time  VARCHAR(10) ,
    last2  VARCHAR(10) ,
    last2_time  VARCHAR(10) ,
    last3  VARCHAR(10) ,
    last3_time  VARCHAR(10)
    )"
    ;
    
    
     mysql_query($sql2);
    
    
    $sql3="INSERT INTO people
    (
    ID,username,pwd,addr,phnumber,email,last1,last1_time,last2,last2_time,last3,last3_time)
    VALUES (1,'enim','metus','P.O. Box 964  213 Justo Avenue','1-310-853-8551','vitae@Cumsociis.edu','ac','06/05/16','amet','03/14/16','congue','08/16/16'),(2,'fermentum','augue','747-9837 Bibendum St','1-707-495-3670','ac@nibhdolornonummy.ca','ridiculus','08/05/16','dui.','01/16/16','id','05/02/16'),(3,'libero','eu','1573 Et St','1-249-557-1243','semper.erat@elitpharetraut.net','rhoncus','09/19/16','mattis','02/06/15','ac','01/30/15'
    )"
    ;
    
    
    mysql_query($sql3);

    

    
    ?>

