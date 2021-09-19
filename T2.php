
<!-- Concatenate the two strings “Hello User” and “I am Admin” using Php" -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatinate</title>
</head>
<body>
    <?php
    $text1 = "Hello User";
    $text2 = "I am admin";
    echo "$text1";
    echo "<br>";
    echo "$text2";
    echo "<br>";
    echo "Concatinate two string by first method:-";
    echo "<br>";
    echo "$text1 $text2";
    echo "<br>";
    echo "Concatinate two string by second method:-";
    echo "<br>";
    $text1 .= " i am admin";
    echo " $text1";
    ?>
</body>
</html>