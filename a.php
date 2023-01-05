<?php
$db=mysqli_connect("localhost","root","","blog");
$sql=mysqli_query($db,"SELECT* FROM blog");
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_assoc($sql)){
?>
    <img src="./images/<?php echo $row['image']?>" alt="">
    <h1><?php echo $row['title']?></h1>
    <p><?php echo $row['content']?></p>
    <a href="./single.php?id=<?php echo $row['id']?>">Read More</a>
<?php
    }
}
else{
    echo"no blogs found";
}