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
<div style=" ;
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
$email = $_POST['EMAIL'];
$filter = $_POST['filter'];
$connect = mysqli_connect("sql108.infinityfree.com","epiz_34350751","2d7jdfGPQA","epiz_34350751_tms");
$query = "SELECT ID,TASKNAME,DESCRIPTION,DUEDATE,STATUS from task where EMAIL='$email' and STATUS='$filter'";
$res = mysqli_query($connect,$query);
?>
<h3 style="color:red">Data Based On Filter Applied</h3>
<table>
<tr>
<th>ID</th>
<th>TASK NAME</th>
<th>DESCRIPTION</th>
<th>DUE DATE</th>
<th>STATUS</th>

</tr>

<?php while($row = mysqli_fetch_assoc($res)){
?>
<tr>

<td><?php echo $row['ID'];?></td>
<td><?php echo $row['TASKNAME'];?></td>
<td><?php echo $row['DESCRIPTION'];?></td>
<td><?php echo $row['DUEDATE'];?></td>
<td style="color:black"><?php echo $row['STATUS'];?></td>
</tr>
<?php }?>
</table>
</body>
</html>
