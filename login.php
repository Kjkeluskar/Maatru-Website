<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <?php include 'plugins.php'; ?>

</head>
<body style="background-color:powderblue">
    <div class="container">
    <?php include 'header.php'; ?>
    <br>
    <form action="" method="">
        <div class="form-control">
        <label for="txtusername">USERNAME:</label>
        <input class="form-control"type="text" name="txtusername" id="txtusername">
</div>
            <br>
        <br>
        <div class="form-control">
        <label for="txtpassword">PASSWORD:</label>
        <input class="form-control"type="text" name="txtpassword" id="txtpassword">
            </div>
            <br>
            <br>
            <div class="form-control">
                    <input class="btn btn-success" type="submit" value="LOGIN" name="btnlogin id">
                        </div>
</form>
                        <?php include 'footer.php'; ?>
</div>
</body>
</html>