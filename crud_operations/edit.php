<!DOCTYPE html>
<head>
    <title>Edit Pet</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <h1>Edit Pet</h1>
            <form action="controller.php" method="POST" enctype="multipart/form-data">
                <?php 
                    getPetById($_GET['id']);
                ?>
            <button type="submit" class="btn btn-primary" name="update_pet">Update Pet</button>
        </form>
    </div>
</body>
</html>

<?php
    function getPetById($recno) {
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM petstblcrud WHERE id='$recno'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
                echo"
                    <input type='hidden' name ='txtid' value ='".$row['id']."'>
                    <div class='form-group'>
                        <label for='name'>Name:</label>
                        <input type='text' class='form-control' name='txtpetName' value='".$row['petName']."' required>
                    </div>
                    <div class='form-group'>
                        <label for='type'>Type:</label>
                        <input type='text' class='form-control' name='txtpetType' value='".$row['petType']."' required>
                    </div>
                    <div class='form-group'>
                        <label for='description'>Description:</label>
                        <textarea class='form-control' name='txtpetDescription' rows='5'>".$row['petDescription']."</textarea>
                    </div>
                    <div class='form-group'>
                        <label for='image'>Image:</label>
                        <input type='file' name='txtpetImage'>
                        <br>
                        <img src='uploads/".$row['petImage']."' width='300'>
                        <input type='hidden' name='txtold_petImage' value ='".$row['petImage']."'>
                    </div>
                ";
            }

        }
        else{
            echo "no record found";
        }

        $conn->close();
    }
?>