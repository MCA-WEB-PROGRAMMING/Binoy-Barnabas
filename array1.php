<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array(
        "lamborgini" => "gallardo",
        "ferrari" => "spider",
        "audi" => "R8v10"
    );
    echo "<table border=1><tr><th>brand</th><th>model</th></tr>";
    foreach ($arr as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>