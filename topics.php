<?php
include("partials/header.php");
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="container">
    <div class="jumbotron d-flex align-items-center min-vh-100">
      <div class="container">
        <h1 class="display-4">CLASSIFY TOPIC</h1>
        <hr class="my-4">
        <ul class="list-group">
          <?php 
          $table='';
          $sql = "SELECT * FROM posts WHERE user_id='".$_SESSION['id']."'";
          $result = $Database->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $table.='
              <li class="list-group-item d-flex justify-content-between align-items-center"> '. $row["topic"] .'
              <span class="badge badge-primary badge-pill">'. $row["percentage"] .' % </span>
              </li>
              ';
            }
          }
            
          echo $table;
          ?>
        </ul>
        <a href="essay.php" class="btn btn-primary float-right mt-2">Add Topic</a>
      </div>

    </div>
  </div>



  <!-- JS, Popper.js, and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
</body>

</html>