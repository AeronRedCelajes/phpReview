<!DOCTYPE html>
<head>
    <title>Add New Pet</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <h1>Add New Pet</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="txtpetName" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Type:</label>
                <input type="text" name="txtpetType" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea name="txtpetDescription" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" name="txtpetImage" required>
            </div>
            <button type="submit" name="save_pet" class="btn btn-primary">Save Pet</button>
        </form>
    </div>
</body>
</html>