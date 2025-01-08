<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-danger" style="background-color:#4682B4;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white;"><img src="images/Shopping.png" alt="" width="35px" height="30px" style="margin-right:20px;">Atex mart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index5.php" style="color:white;">Home</a>
</li>
      </ul>
      <a href="logout.php" class="btn"style="color:red;background-color:blue;margin-right:30px;">LOG OUT</a>
      <div>
        <?php
        $count = 0;
        if(isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']); 
        }
        ?>
        <a href="my_cart4.php" class="btn btn-outline-info" style="background-color:red;">My cart(<?php echo $count; ?>)</a>
      </div>
    </div>
  </div>
</nav>
</body>
</html>
