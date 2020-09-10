<?php
include("partials/header.php");
?>
<body>

  <div class="container">
    <div class="jumbotron d-flex align-items-center min-vh-100">
      <div class="container">
        <h1 class="display-4">CLASSIFY TOPIC</h1>
        <hr class="my-4">
        <div class="content">
            <?php 
            $sql = "SELECT classified_content FROM posts WHERE id='".$_SESSION['post_id']."'";
            $res=$Database->query($sql);
            if ($res->num_rows > 0) {
              $row = $res->fetch_assoc();
              echo $row["classified_content"].trim();
            }else{
              echo 'Something Went Wrong! Please Try Again.';
            }
            
            ?>
        </div>

        <div class="panel hide">
          <hr class="my-4">
          <div id="selection" data-id="understood" class="btn btn-success mt-6 ">Understood</div>
          <div id="selection" data-id="somewhatUnderstood" class="btn btn-warning mt-6 ">Somewhat Understood</div>
          <div id="selection" data-id="notClear" class="btn btn-info mt-6">Not Clear</div>
          <div id="selection" data-id="rubbish" class="btn btn-danger mt-6">Rubbish</div>
        </div>
        <hr class="my-4">

        <div type="submit" id="saveClassification" class="btn btn-primary mt-6 btn-lg btn-block">Save</div>

      </div>
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