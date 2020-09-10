<?php
include("partials/header.php");
?>

<body>

    <div class="container">
        <div class="jumbotron d-flex align-items-center min-vh-100">
            <div class="container">
                <h1 class="display-4">Hello!</h1>
                <p class="lead">Please enter your name and start tracking your understanding.</p>
                <hr class="my-4">
                <form>
                    <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div  class="btn btn-primary" id="signin">Submit</div>
                </form>
            </div>

        </div>
    </div>



    <!-- JS, Popper.js, and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>

</html>