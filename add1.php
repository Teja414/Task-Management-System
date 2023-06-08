<!DOCTYPE html>
<html>
<head>
  <title>Add Task</title>
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
<?php
$email = $_GET['EMAIL'];
?>
<body>
  <div class="container">
    <h2>ADD TASK</h2>
    <form action = 'add.php' method="POST">
      <div class="form-group">
        <label for="name">Task Name:</label>
        <input type="text" id="name" name="taskname" placeholder="Enter your task name">
      </div>
      <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" id="name" name="Email" placeholder="Enter your task name" value="<?php echo $email ?>">
      </div>
      <div class="form-group">
        <label for="message">Description:</label>
        <textarea id="message" name="description" placeholder="Enter your Description"></textarea>
      </div>
      <div class="form-group">
        <label for="email">Due Date:</label>
        <input type="date" id="" name="due" placeholder="">
      </div>
      <div>
        <h4>Status:</h4>
        <input type="radio" id="red" name="status" value="completed">
        <label for="red">Completed</label>
        <input type="radio" id="blue" name="status" value="pending">
        <label for="blue">pending</label><br>
      </div><br>
      <div class="form-group">
        <input type="submit" value="ADD TASK">
      </div>
    </form>
  </div>
</body>
</html>
