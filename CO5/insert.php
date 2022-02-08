<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "books";

if(isset($_POST['submit']))
{
$connect = mysqli_connect($host,$username,$password,$database);
$bookid = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

if(!$connect)
{
    die("connection error occured".mysqli_connect_error());
}
else
{
    $sql = "insert into bookdata(bookid,title,author,edition,publisher) values('$bookid','$title','$author','$edition','$publisher');";
    
    if(mysqli_query($connect,$sql))
    {
        header("Location: main.html");
    }
    else
    {
        echo "insertion failed";
    }
}

}

?>