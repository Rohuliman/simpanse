

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title> Login</title>
</head>
<body>
<class=" bg-success">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center"> <span class="font-weight-bold text-primary">LOGIN TO YOUR ACCOUNT</span></h5>
                    </div>
                    <div class="card-body">
                        <form action="<?=BASEURL;?>/log/login" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="username" class="form-control" placeholder="username" name="username"  required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"  class="form-control" placeholder="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Login</button>
                            </div>
                            
                            <p><class="text-center">Lupa Sandi? <a href="registrasi.php">Klik Disini</a></p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>