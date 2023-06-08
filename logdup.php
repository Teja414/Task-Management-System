<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            background-color:gray;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        /* Additional styles for specific columns */
        td:first-child {
            font-weight: bold;
        }
        
        td:last-child {
            color: #888;
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
error_reporting(0);
$connect = mysqli_connect("sql108.infinityfree.com","epiz_34350751","2d7jdfGPQA","epiz_34350751_tms");
// if(!$connect)
// {
//     die("connection failed. ".mysqli_connect_error());
// }
// echo "coonection succesful";
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * from login where email='$email'";
$num2 = 0;
$res = mysqli_query($connect,$query);
$num = mysqli_num_rows($res);
if($num==0)
{
   
    $query = "INSERT into login(email,password)values('$email','$password')";
    $res  = mysqli_query($connect,$query);
    echo '<script>alert("EMAIL not exixsted and sign in SUCESSFUL.PLEASE LOGIN"); location.replace(document.referrer);</script>';
}
if($num==1){
    $query = "SELECT * from login where email='$email' and password = '$password'";
    $res = mysqli_query($connect,$query);
    $num2  = mysqli_num_rows($res);
}
if($num2 == 0)
    {
        echo '<script>alert("INCORRECT PASSWORD OR USE ANOTHER MAIL FOR SIGNUP"); location.replace(document.referrer);</script>';

    }
?>
<?php if($num2==1){
    ?>
        <h3 style="margin-left:500px;color:red"> EMAIL : <?php echo $email ?> </h3>
        <hr>
        <?php
        $query1 = "SELECT * from task WHERE EMAIL='$email' ORDER BY DUEDATE ASC";
        $res1 = mysqli_query($connect,$query1);
        ?>
        <button style="background-color:green;margin-left:1000px;"><a href = "add1.php?EMAIL=<?php echo $email?>" target=1>ADD</a></button>

        <form style="margin-left:900px" action='filter.php' method="POST">
            <input type="text" name="EMAIL" value="<?php echo $email ?>">
            <select id="country" name="filter">
    <option value="completed">Completed</option>
    <option value="pending">Pending</option>

</select>
<input type="submit" value="filter" style="background-color:green;">
</form>
<form style="margin-left:800px" action='search.php' method="POST">
            <input type="text" name="EMAIL" value="<?php echo $email ?>">
            <input type="search" placeholder="taskname to search" name="taskname" required>
<input type="submit" value="search" style="background-color:green;">
</form>
        <table>
            <tr>
            <th>ID</th>
            <th>TASK NAME</th>
            <th>DESCRIPTION</th>
            <th>DUE DATE</th>
            <th>STATUS</th>
           
    </tr>

    <?php while($row = mysqli_fetch_assoc($res1)){
    ?>
    <tr>
            
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['TASKNAME'];?></td>
            <td><?php echo $row['DESCRIPTION'];?></td>
            <td><?php echo $row['DUEDATE'];?></td>
            <td><?php echo $row['STATUS'];?></td>
            <td><button><a href="edit.php?ID=<?php echo $row['ID']?>" target=1> edit</a></button>
        </tr>
        <?php }?>
    </table>
<?php } ?>

</body>
</html>