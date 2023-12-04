<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>
    <?php
    require "../classes/User.php";
      session_start();
      include "nav.php";

      $u = new User;
      $all_users = $u->getAllUsers();

    ?>

    <div class="container">
        <div class="w-75 mx-auto my-5">
            <h2 class="h3">User List</h2>

            <table class="table">
                <thead class="table-secondary">
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                      while($row = $all_users->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?= $row['id']?></td>
                            <td><?= $row['first_name']?></td>
                            <td><?= $row['last_name']?></td>
                            <td><?= $row['username']?></td>
                            <td>
                            
                                <a href="edit-user.php?id=<?=$row['id']?>" class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <?php if($row['id'] != $_SESSION['user_id']){ ?>
                                    <form action="../actions/deleteUser.php" method="post" class="d-inline">
                                        <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>

                                <?php
                                    }?>

                            </td>
                        </tr>
                    <?php
                      }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>