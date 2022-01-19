<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    $arr = array(
       array("name" => "binoy","course" => "bsc cs","year"=> "2k19"),
       array("name" => "joel","course" => "bsc cs","year"=> "2k19"),
       array("name" => "gokul","course" => "bsc cs","year"=> "2k19"),
    );
    echo "<table border=1><tr><th align=center colspan=3>bsc computer science</th></tr><tr><th>name</th><th>course</th><th>year</th></tr>";
    foreach ($arr as $x) {
        echo "<tr>";
        foreach($x as $key=>$value)
        {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>