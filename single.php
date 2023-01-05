<?php
    $id=$_GET['id'];
    $db=mysqli_connect("localhost","root","","blog");
$sql=mysqli_query($db,"SELECT* FROM blog WHERE id='$id'");
if(mysqli_num_rows($sql)>0){
    $row=mysqli_fetch_assoc($sql);
    ?>
    <img src="./images/<?php echo $row['image']?>" alt="">
    <h1><?php echo $row['title']?></h1>
    <p><?php echo $row['content']?></p>

<?php
}
else{
    echo "blog not found";
}

