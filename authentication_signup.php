<html>
    <head>
        <title>Login - Mysore</title>

        <script>
          function validation() {
            var email = document.forms["t"]["t1"].value;
            var pass = document.forms["t"]["t2"].value;

            if(email=="" && pass=="") {
              alert("Email and Password fields cannot be empty!!!");
              return false;
            }
            else if(email=="") {
              alert("Email field cannot be empty!!!");
              return false;
            }
            else if(pass==""){
              alert("Password field cannot be empty!!!");
              return false;
            }
          }
        </script>

        <link rel="shortcut icon" href="img/ganda.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Kalam&family=Catamaran:wght@300&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css" >
    </head>
    <body class="bg-light">
        <div class="container" id="login" data-aos="zoom-out-up">
        <main class="form-signin w-50 m-auto p-4 p-md-5 border rounded-3 bg-white shadow-lg p-3 mb-5 rounded">
        <?php 
            include "connection.php";

            if(isset($_POST["submit"])) {
                $name = $_POST["t1"];
                $email = $_POST["t2"];
                $pass = $_POST["t3"];

                $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";

                $result = $con->query($sql);
                if ($result == TRUE) {
                    echo "User registered Successfully!!! Kindly Login below with the registered credentials";
                }
                else{
                    echo "Error:". $sql . "<br>". $con->error;
                }
                $con->close();
            }
        ?>
            <form name="t" action="after_login.php" method="post">
            <a href="index.html"><img class="mb-4" src="img/Mysore light.png" alt="logo" height="100"></a>
              <h1 class="h3 mb-3 fw-bold text-dark">Sign-In</h1>
          
              <div class="form-floating w-100">
                <input type="email" class="form-control" id="floatingInput user" name="t1">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating w-100">
                <input type="password" class="form-control" id="floatingPassword pass" name="t2">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="btn btn-warning w-25 py-2" type="submit" onclick="return validation()">Sign In</button>
            </form>
            <p>Not Registered ? <a href="signup.html">Click here</a></p>
          </main>
        </div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>