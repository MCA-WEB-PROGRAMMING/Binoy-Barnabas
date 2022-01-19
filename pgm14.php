<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $students = array("arun", "adarsh", "don", "chandrakanth");
    print_r($students);

    asort($students);
    echo "ascending order <br>";
    foreach ($students as $value) {
        echo $value . "<br>";
    }
    arsort($students);
    echo "descending order <br>";
    foreach ($students as $key => $value) {
        echo $key . "-" . $value . "<br>";
    }



    ?>
</body>

</html>