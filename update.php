<?php
$id = $_POST['ID'];
$taskname = $_POST['taskname'];
$desc = $_POST['description'];
$due = $_POST['due'];
$status = $_POST['status'];
#echo $id,$taskname,$desc,$due,$status;
$connect = mysqli_connect("sql108.infinityfree.com","epiz_34350751","2d7jdfGPQA","epiz_34350751_tms");
$query = "UPDATE task SET TASKNAME='$taskname',DESCRIPTION='$desc',DUEDATE='$due',STATUS='$status' WHERE ID = '$id'";
$res = mysqli_query($connect,$query);
echo '<script>alert("TASK  UPDATED SUCCESSFULLY");</script>';
?>
<h3 style="color:red">Go Back To Admin And Refresh </h3>