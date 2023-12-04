<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>
</head>
<body>
    <?php
    require "../classes/User.php";

    session_start();
    include "nav.php";

    $user_id = $_GET['id'];

    $u = new User;
    $user = $u->getUser($user_id);
    ?>

    <div class="container">
        <form action="../actions/updateUser.php" method="post" class="w-50 mx-auto my-5">
            <h2 class="display-6 text-uppercase text-center mb-2">Edit User</h2>

            <input type="hidden" name="user_id" value="<?=$user_id?>">

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" value="<?= $user['first_name']?>" id="first-name" class="form-control mb-2">

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" value="<?= $user['last_name']?>" class="form-control mb-2">

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" value="<?= $user['username']?>" class="form-control mb-3">

            <button type="submit" class="btn btn-warning">Save</button>
            <a href="dashboard.php" class="btn btn-secondary ms-2">Cancel</a>

        </form>
    </div>


</body>
</html>