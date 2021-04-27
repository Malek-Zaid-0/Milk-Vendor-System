<?php
include('config.php');
if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];

    $query="update orders set status=1 where oid=".$id;
    $result=mysqli_query($con,$query);
    if($result)
    {
        header('Location:order.php'); 
    }
}
else
{
    header('Location:order.php');
}
?>