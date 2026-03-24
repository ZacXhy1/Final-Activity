<?php
include 'db/dbconnect.php';

$aid=$_SESSION['aid'];

$sql = "SELECT account.aid, account.firstname, account.lastname, post.pid, post.content, post.post_date, post.post_time "
        . "FROM account INNER join post ON account.aid=post.aid";


$result= $con->query($sql);

while ($row= mysqli_fetch_assoc($result)){
    echo "<div class-'account-post'>";
    echo $row['firstname'];
    echo "<br>";
    echo $row['content'];
    echo "</div>";
}
