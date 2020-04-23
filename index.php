<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
$result1 = mysqli_query($mysqli, "SELECT * FROM departemen ORDER BY id DESC");
$result2 = mysqli_query($mysqli, "SELECT * FROM company ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama Employee</th> <th>Title</th> <th>Salary</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['title']."</td>";
        echo "<td>".$user_data['salary']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>   

    
    </table> <br/><br/>

    <a href="add_departemen.php">Add New Departemen</a><br/><br/>
    <table width='50%' border=2>
    <tr>
        <th>Nama Departemen</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>

    </table>
    </br>

    <a href="add_company.php">Add New Company</a><br/><br/>
    <table width='50%' border=2>

    <tr>
        <th>Nama Company</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>







