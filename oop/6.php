<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
   <?php include('links.php'); ?>
</head>
<body>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <br><br><br>
                    <div class="card">
                         <div class="card-body">
                          <h4>User Table</h4>
                          <br>
                          <a href="useradd.php" class="btn btn-primary">Add User</a>
                          <br> <br>
                          <?php include('usertable.php'); ?>
                         </div>
                    </div>
            
        </div>
        <div class="col-2"></div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

