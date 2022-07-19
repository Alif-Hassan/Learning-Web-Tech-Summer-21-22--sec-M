<?php
include'index.php';
if(isset($_POST['Submit']))
{
    $title=$_POST['title'];
    $name=$_POST['n'];
    $img=$_POST['img'];
    $vdo=$_POST['vdo'];
    $sd=$_POST['sd'];
    $ed=$_POST['ed'];
   // $vdo=$_POST['vdo'];
    $pn=$_POST['pn'];
    $country=$_POST['country'];
    $location=$_POST['lc'];
    $min=$_POST['min'];
    $max=$_POST['max'];
    $ra=$_POST['ra'];
    $pda=$_POST['pda'];
    $bn=$_POST['bn'];
    $bc=$_POST['bc'];
    $nid=$_POST['nid'];
    $category=$_POST['category'];
    $amount=$_POST['ia'];
    $desc=$_POST['comment'];
    
    $sql="insert into individual_user (	title,name,link1,link2,sd,ed,phone,country,location,maxa,mina,ra,pa,postal,bankaccount,baccountno,nid,category,amount,description)
    values('$title','$name','$img','$vdo','$sd','$ed','$pn','$country','$location','$min','$max','$ra','$pda','$pda','$bn','$bc','$nid','$category','$amount','$desc')";

    if(mysqli_query($conn,$sql))
{
    echo"<script>alert('new record inserted')</script>";
}
else
{
    echo"error:".mysqli_error($conn);
}
    
   
mysqli_close($conn);
}

  
 ?>