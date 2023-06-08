<!DOCTYPE html>
<html>
<head>
    <title>EDIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body
style=" width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(bgimage.jpg);
    background-position: center;
    background-size: cover;
    height: 109vh"
>
<div style=" color: #ff7200;
    font-size: 25px;
    font-family: Arial;
    margin-left: 20px;
    margin-top: 20px;

    width: 120px;
    padding-left: 10px;
    text-decoration: none;
";>
     <a href="homepage.html" style="text-decoration: none; color: #ff7200;"><h2>G M S</h2></a>
    </div>
    <br>


<?php
$ID = $_GET['ID'];
#echo $ID;
$connect = mysqli_connect("sql108.infinityfree.com","epiz_34350751","2d7jdfGPQA","epiz_34350751_tms");
$query = "SELECT TASKNAME,DESCRIPTION,DUEDATE,STATUS from task where ID=$ID";
$res = mysqli_query($connect,$query);
$num = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
$taskname = $row['TASKNAME'];
$desc = $row['DESCRIPTION'];
$due = $row['DUEDATE'];
$status = $row['STATUS'];
// echo $taskname,$desc,$due,$status;
?>
<h5 style="color:white;text-decoration:underline">TASK DETAILS ARE : </h5>
<div style="color:green">
<?php
echo "TASKNAME :  $taskname";?><br>
<?php
echo "DESCRIPTION :  $desc";?><br>
<?php
echo "DUEDATE :  $due";?><br>
<?php
echo "STATUS :  $status\n";
?>
</div>
<div class="container">
    <h2>UPDATE TASK</h2>
    <form action = 'update.php' method="POST">
    <div class="form-group">
        <label for="name">Task ID:</label>
        <input type="text" id="name" name="ID" placeholder="Do not enter" value = "<?php echo $ID?>" >
      </div>
      <div class="form-group">
        <label for="name">Task Name:</label>
        <input type="text" id="name" name="taskname" placeholder="Enter your task name" value = "<?php echo $taskname?>">
      </div>
      <div class="form-group">
        <label for="message">Description:</label>
        <input type="text" id="message" name="description" placeholder="Enter your Description" value = "<?php echo $desc?>">
      </div>
      <div class="form-group">
        <label for="email">Due Date:</label>
        <input type="date" id="" name="due" placeholder="" value = "<?php echo $due?>">
      </div>
      <div>
        <h4>Status:</h4>
        <input type="radio" id="red" name="status" value="completed">
        <label for="red">Completed</label>
        <input type="radio" id="blue" name="status" value="pending">
        <label for="blue">pending</label><br>
      </div><br>
      <div class="form-group">
        <input type="submit" value="UPDATE TASK">
      </div>
    </form>
  </div>
</body>
</html>