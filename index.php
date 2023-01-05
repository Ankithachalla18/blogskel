<?php
$db=mysqli_connect("localhost","root","","blog");
$filename=$_FILES['img']['name'];
$title =$_POST['title'];
$content=$_POST['content'];
$target="./images/";
$filetype=strtolower(pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION));
$targetfile=$target.basename(md5("abc".$_FILES['img']['name']).".".$filetype);
echo $targetfile;
$file=md5("abc".$_FILES['img']['name']).".".$filetype;
if($filetype=='png'||$filetype=='jpg'||$filetype=='jpeg'){
    if(move_uploaded_file($_FILES['img']['tmp_name'],$targetfile)){
        $sql=mysqli_query($db,"INSERT INTO `blog`(`title`,`content`,`image`) VALUES ('$title','$content','$file')");
        if($sql){
            echo"success";
         }
         else{
            echo"not success";
        }
    }
    else{
        echo"image not moved";
    }
}
else{
    echo"image not accepted";
}
?>