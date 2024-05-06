<!DOCTYPE html>
<?php session_start(); ?>
<head>
    <title>Pet Records</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <h1>Pet Records</h1>
        <?php 
        if(isset($_SESSION['status']) && $_SESSION !='')
        {
            echo "<div class='alert alert-success'>".$_SESSION['status']."</div>";
            unset($_SESSION['status']);
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include("includes/sqlconnection.php");
                $sql = "SELECT * FROM petstblcrud ORDER BY id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[petName]</td>
                            <td>$row[petType]</td>
                            <td>$row[petDescription]</td>
                            <td><img src='uploads/$row[petImage]' width='100'></td>
                            <td>
                                <a href='edit.php?id=$row[id]' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?id=$row[id]&pic=$row[petImage]' class='btn btn-danger'>Delete</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No records found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="insert.php" class="btn btn-success">Add New Pet</a>
    </div>
</body>
</html>