<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .error {
            font-weight: bold;
            color: #c00;
        }
    </style>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/15
 * Time: 21:38
 */
/*$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];*/
if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
} else {
    $name = null;
    echo "<p class='error'>You forgot to enter your name!</p>";
}
if (!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
} else {
    $email = null;
    echo "<p class='error'>You forgot to enter your email adress!</p>";
}
if (!empty($_REQUEST['comments'])) {
    $comments = $_REQUEST['commemts'];
} else {
    $comments = null;
    echo "<p class='error'>You forgot to enter your comments!</p>";
}
if (isset($_REQUEST['gender'])) {
    $gender = $_REQUEST['gender'];

    if ($gender == 'M') {
        echo '<p><b>Good day,Sir!</b></p>';
    } else if ($gender == 'F') {
        echo '<p><b>Good day,Madam!</b></p>';
    } else {
        $gender = null;
        echo "<p class='error'>Gender should be either 'M' or 'F'!</p>";
    }
} else {
    $gender = null;
    echo "<p class='error'>You forgot to enter your gender!</p>";
}
if ($name && $email && $comments && $gender) {
    echo "<p>Thank you,<b>$name</b>,for the followling comments:<br>
    <tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";
} else {
    echo "<p class='error'>Please go back and fill out the form again.</p>";
}
?>
</body>
</html>
