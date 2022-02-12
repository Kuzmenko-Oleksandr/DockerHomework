<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Drupal trainee</title>
</head>

<body>
  <?php
  require 'navbar.php'
  ?>
  <div class="container text-center">
    <div class="row justify-content-center align-items-center">
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="col-sm">
          <label for="name" class="form-label" style="margin-top: 20px;">Your Name</label>
          <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z]{3,}" placeholder="At least 3 characters" required>

          <label for="email" class="form-label" style="margin-top: 20px;">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="nikname@gmail.com" required>

          <label for="phone" class="form-label" style="margin-top: 20px;">Phone Number</label>
          <input type="phone" class="form-control" id="phone" name="phone" pattern="^\+380(\s+)?\(?(50|66|95|99|67|68|96|97|98|63|73)\)?(\s+)?[0-9]{7}$" placeholder="+380 00 00 00 000" required>

          <label for="password" class="form-label" style="margin-top: 20px;">Password</label>
          <input type="password" class="form-control" id="password" name="password" minlength="8" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" required>
        </div>
        <button type="submit" class="btn btn-danger" style="margin-top: 20px;">Submit</button>
      </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      echo '<br>';
      print_r($_POST);
    }
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>