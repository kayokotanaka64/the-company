<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>profile</title>
</head>
<body>
    <?php
      require "../classes/User.php";

      session_start();
      include "nav.php";

      $u = new User;
      $user = $u->getUser($_SESSION['user_id']);


    ?>
    <div class="container">
        <div class="card w-50 my-5 mx-auto">
            <div class="card-header">
                <img src="../images/<?= $user['photo']?>" alt="<?=$user['username']?>'s photo" class="img-thumbnail">
            </div>
            <div class="card-body">
                <form action="../actions/uploadPhoto.php" method="post" enctype="multipart/form-data">
                    <label for="photo" class="form-label">Choose Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">

                    <button type="submit" class="btn btn-online-secondary mt-1">Upload Photo</button>
                </form>
            </div>
            <div class="card-footer border-1">
                <h2 class="h4"><?=$user['first_name']." ".$user['last_name']?></h2>
                <h3 class="h5">Username<?=$user['username']?></h3>
            </div>
        </div>
    </div>
    
</body>
</html>