<?php
    include('db.php');

//get data from DB to display
$query1 = "SELECT * FROM tbl_test order by title desc";
$result=mysqli_query($connection,$query1);
if(!$result){
    die("DB query failed");
}

if(isset($_POST['ttl'])){
    $ttle=mysql_escape_string($connection,$_POST['ttl']);
    $txt=mysql_escape_string($connection,$_POST['desc']);
    

    //SET
    $query2="INSERT into tbl_test(title,txt) values ('$ttle','$txt')";
    $result= mysql_query($connection,$query2);

    //GET
    $query2 = "SELECT * FROM tbl_test order by title desc";
    $result=mysqli_query($connection,$query2);
    

}

//GET: get data again

echo "<ul>";
while($row=mysqli_fetch_assoc($result)){
    echo "<l1><h2>".$row["title"]."</h2><h3>".$row["txt"]."</h3></li>";
}
echo "</ul>";

mysqli_free_result($result);

mysqli_close($connection);

?>