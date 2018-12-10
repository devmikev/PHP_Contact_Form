<?php
    if(filter_has_var(INPUT_POST, 'submit')) {
        echo 'Submitted';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" value=""></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>