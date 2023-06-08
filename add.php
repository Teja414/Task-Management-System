<?php
$taskname = $_POST['taskname'];
$email = $_POST['Email'];
$desc = $_POST['description'];
$due = $_POST['due'];
$status = $_POST['status'];
$connect = mysqli_connect("sql108.infinityfree.com","epiz_34350751","2d7jdfGPQA","epiz_34350751_tms");
$query = "INSERT into task(TASKNAME,EMAIL,DESCRIPTION,DUEDATE,STATUS)values('$taskname','$email','$desc','$due','$status')";
$res = mysqli_query($connect,$query);
echo '<script>alert("TASK  ADDED SUCCESSFULLY");</script>';
?>
<alert><a href = "add1.php?EMAIL=<?php echo $email?>" target=1>CLICK HERE TO ADD ANOTHERE TASK</a></button></alert>