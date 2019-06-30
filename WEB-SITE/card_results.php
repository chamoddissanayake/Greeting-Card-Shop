<?php
echo "<center>";
echo "<table style='padding: 30px;'>";   
echo "<col width='220'>";

$conn = new mysqli("localhost","root","","greeting_card_shop");
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$sql = "SELECT card_detail_id,title, description,image_url,price FROM Card_Detail";

if(isset($_POST['submit'])){
    $searchkeyword = $_POST['serch_box'];
    $searchkeyword = preg_replace("/[\s]/","%",$searchkeyword);
    $sql = $sql." WHERE title like '%".$searchkeyword."%' OR description like '%".$searchkeyword."%' OR category like '%".$searchkeyword."%'";
}else if(isset($_GET['cat'])){
    $sql = $sql." WHERE category = '".$_GET['cat']."'";
}


// echo $sql;
$result= $conn->query($sql);
if ($result->num_rows>0){
    while ($row =$result -> fetch_assoc()) {
        echo "<tr height='250px'>";
        echo "<td><a href='card_detail.php?id=".$row['card_detail_id']."'>";
        echo "<img src=".$row['image_url']."  style='width:180px;' class='card'></td></a>";
        echo "<td><span>".$row['title']."</span><br>";
        echo "<span id='price'>Price $".$row['price']."</span>";
        echo "</td>";
        echo "</tr>";
    }
}
else
{
    echo "0 results";
    echo "<br><br><br><br><br><br><br><br><br><br>";
}

$conn -> close();
echo  "</table>";
echo "</center>";	      


?>