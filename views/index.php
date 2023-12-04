<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="../actions/login.php" method="post" class="border rounded-2 my-5 p-3 mx-auto w-50">
            <h1 class="display-6 text-uppercase text-center mb-2">Login</h1>

            <input type="text" name="username" id="" class="form-control mb-3" placeholder="USERNAME">

            <input type="password" name="password" id="" class="form-control mb-4" placeholder="PASSWORD">

            <button type="submit" class="btn btn-primary w-100 mb-3">Log In</button>
            <p class="text-primary text-center">
                <a href="register.php" class="text-decoration-none">Create account</a>
            </p>
        </form>
    </div>
</body>
</html>