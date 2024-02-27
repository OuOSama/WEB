<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <div class="content">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-6">
                        <div class="card shadow p-3 mb-5">
                            <div class="card-body p-5 text-center">
                                <form action="login.php" method="post">
                                    <h3 class="mb-5">Food online</h3>
                                    <input type="text" name="mem_user" class="form-control my-4" placeholder="username">
                                    <input type="text" name="mem_pass" class="form-control my-4" placeholder="password">
                                    <button type="submit" class="btn btn-lg btn-primary form-control">Login</button>
                                    <hr>
                                    <button type="button" class="btn btn-lg btn-danger form-control" onclick="location.href = 'register/register.php';">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>