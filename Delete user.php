<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>User type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include('we d.php');
        
        $id = $_GET['id'] ?? null;
        if($id !== null) {
            $sql = "DELETE FROM userates WHERE userid=$id";
            $result = $conn->query($sql);
            header('location: del user.php');
            exit;
        }
        
        $sql = "SELECT * FROM userates";
        $result = $conn->query($sql);
        $x = 0;
        while($row = $result->fetch_assoc()) {
            $x++;
        ?>
            <tr>
                <td><?php echo $x; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['userpass']; ?></td>
                <td><?php echo $row['usertype']; ?></td>
                <td><a href="del user.php?id=<?php echo $row['userid']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>
