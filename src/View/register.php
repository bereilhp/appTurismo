<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register - MadWay</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" type="image/png" href="./images/Favi.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link href="signing.css" rel="stylesheet" />
</head>

<body class="text-center" style="background-color: rgb(5, 110, 133)">

  <?php
  require_once '../Controller/Controller.php';

  
  session_start();

  $backgroundColor = "white";
  
  $array = $_SESSION['WRONG_INPUT'];

  //var_dump($array);
  ?>

  <main class="form-signin">
    <div class="row justify-content-sm-center h-200">
      <div style="
            width: 900;
            height: 450px;
            background-color: rgba(22, 178, 218);
          " class="card shadow-lg">
        <form action="../Controller/ControllerSignUp.php" method="post">
          <img src="./images/logoMadWaySinFondo(1).png" alt="MadWayLogo" width="100%" style="padding-top: 30px" />

          <br />
          <h1 class="h3 mb-3 fw-normal">Register!</h1>

          <div>
            <input
            <?php
            if ($array[3][0]) echo " class='form-control error' ";
            else              echo " class='form-control' "; 
            ?>
             type="name" id="name" name="name" placeholder="Marie Clarie" value="<?= $array[0] ?>" required />
          </div>

          <div style="padding-top: 4%"></div>

          <div>
            <input  
            <?php
            if ($array[3][1]) echo " class='form-control error' ";
            else              echo " class='form-control' "; 
            ?>
            type="last name" id="last name" name="surname" placeholder="Stuart Miller" value="<?= $array[1] ?>" required />
          </div>

          <div style="padding-top: 4%"></div>

          <div>
            <input
            <?php
            if ($array[3][2] || $array[3][3]) echo " class='form-control error' ";
            else              echo " class='form-control' "; 
            ?>
            type="email" id="email" name="email" placeholder="marie@example.com" value="<?= $array[2] ?>" required />
          </div>

          <div style="padding-top: 4%"></div>

          <div>
            <input class="form-control" type="password" id="pass" name="password" placeholder="Password" required />
          </div>

          <br />

          <button class="btn btn-warning" type="submit">Register</button>
        </form>
      </div>
    </div>
  </main>

  <?php
  $_SESSION['WRONG_INPUT']="";
  ?> 
</body>

</html>