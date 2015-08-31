<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/8/15
 * Time: 21:38
 */
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

echo "<p>Thank you, <b>$name</b>, for the following comments:<br>
<tt>$comments</tt></p>
<p>We will replay to you at <i>$email</i>.</p>\n";
?>
</body>
</html>
