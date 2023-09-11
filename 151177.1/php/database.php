<?php
//constatats
$servername='localhost';
$username="root";
$password='';
$dbname='151177';

//create the db connection
$conn = new mysqli($servername,$username,$password,$dbname);

//verify the db connection

if($conn->connect_error){
    die("connection failed.".$conn->connect_error);

}else{
    print 'connection successful';
}