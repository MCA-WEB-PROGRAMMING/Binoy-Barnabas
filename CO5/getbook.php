<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "books";
if(isset($_POST['submit']))
{
$bookname = $_POST['bookname'];  
$connection = mysqli_connect($host,$username,$password,$database);
if(!$connection)
{
    die("failed to connect".mysqli_connect_error());
}
else{
    $sql = "select * from bookdata where title='$bookname';";
    $query = mysqli_query($connection,$sql);
    if($query)
    {
      if(mysqli_num_rows($query)>0)
      {
          while($row = mysqli_fetch_assoc($query))
          { 
            echo "<h2>book number is: </h2><h2>".$row['bookid']."</h2><br>";
            echo "<h2>title of the book is: </h2><h2>".$row['title']."</h2><br>";
            echo "<h2>author of the book is: </h2><h2>".$row['author']."</h2><br>";
            echo "<h2>edition of the book is: </h2><h2>".$row['edition']."</h2><br>";
            echo "<h2>publisher of the book is: </h2><h2>".$row['publisher']."</h2><br>";
           }
               
      }     
    }
    
}
}
