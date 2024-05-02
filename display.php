<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
      .table {
        border: none;
        box-shadow: 10px 10px 10px 10px gray;
        font-family: 'Poppins', sans serif;
        font-weight: 500;
        border-style: hidden;
        border-radius: 20px;
        border-width: 100%;
        color: white;
        cursor: pointer;
      }
    </style>
</head>
<body>
    <table class="table" style="width: 100%; height: 100%; text-align: center;">
    <colgroup>
      <col span="1" style="width: 15%">
      <col span="1" style="width: 40%">
    </colgroup>
      <thead style="color: black">
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Password</th>
          <th>User type</th>
        </tr>
      </thead>
      <tbody style="background: #333">
        <?php

          include('we d.php');
              $sql = "SELECT * from userates";
              $result = $conn -> query($sql);
              $x =0;
              while($row = $result ->fetch_assoc()){
                $x++;
        ?>

            <tr>
                <td><?php echo $x ;?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['userpass'];?></td>
                <td><?php echo $row['usertype'];?></td>
            </tr>    
         <?php   
              }
         ?>
      </tbody>
    </table>
</body>
</html>
