<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $cricket = array("sachin tendulkar","yuvraj singh","rahul dravid");
    echo "<table border=1><tr><th>cricket players</th></tr>";
    foreach($cricket as $x)
    {
        echo "<tr><td>".$x."</td></tr>";
    }
    
    ?>
</body>
</html>