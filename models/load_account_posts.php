<?php

include 'db/dbconnect.php';

$aid=$_SESSION['aid'];

$sql = "SELECT * FROM post WHERE aid=$aid";

$result= $con->query($sql);

while($row=mysqli_fetch_assoc($result)){
    echo "<div class'account-post'";
    echo $row['content'];
    echo "</div>";
}
