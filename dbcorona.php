<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';
 
$con = mysqli_connect($server,$user,$password,$db);

if($con)
{
    ?>

    <script>
        alert("Connection Successfully")
    </script>
    <?php
}
else
{
    ?>

    <script>
        alert("Connection Doesn't Successfully")
    </script>
    <?php
}

?>