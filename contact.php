<?php
/*
 * Template Name: Custom contact theme
 */
get_header();
echo "contact here";
?>

<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value=""><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <input type="submit" value="Submit">
</form>