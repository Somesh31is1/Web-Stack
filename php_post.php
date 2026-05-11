<html>
<body>

<h2>User Information Form</h2>

<form method="POST">

Enter Name:
<input type="text" name="username">

<br><br>

Enter Age:
<input type="number" name="age">

<br><br>

<input type="submit" value="Submit">

</form>

<?php

if($_POST)
{
    echo "<h3>Submitted Data</h3>";

    echo "Name: ".$_POST['username'];

    echo "<br>";

    echo "Age: ".$_POST['age'];
}

?>

</body>
</html>
