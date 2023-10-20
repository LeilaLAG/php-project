<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <title>phpproject</title>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <li class="navbar-item">
            <a class="navbar-link" href="">

            </a>
        </li>
        <a href="#projects">projects</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <section style="background-color: #FCA652; color:#AC4B1C; height: 100vh;" class="d-flex align-items-center justify-content-center">

        <h2 class="m-heding  py-1 ">Hello,we are the GYM</h2>
        <div class="home-content"></div>
        <!--PROJECT-->
    </section>
    <section class="projects" id="projects">
        <h2 class="title">projects</h2>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                    <img src="images/Capture.PNG" />
                </div>
                <div class="project-info">
                    <p class="project-category">Lorem ipsum, dolor sit amet consectetur dddddddddddddd .</p>
                    <strong class="project-title">
                        <span>Dev Books</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>

            <div class="project-card">
                <div class="project-image">
                    <img src="images/Capture.PNG" />
                </div>
                <div class="project-info">
                    <p class="project-category">Lorem ipsum, dolor sit amet consectetur dddddddddddddd .</p>
                    <strong class="project-title">
                        <span>Dev Books</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/Capture.PNG" />
                </div>
                <div class="project-info">
                    <p class="project-category">Lorem ipsum, dolor sit amet consectetur dddddddddddddd .</p>
                    <strong class="project-title">
                        <span>Dev Books</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/Capture.PNG" />
                </div>
                <div class="project-info">
                    <p class="project-category">Lorem ipsum, dolor sit amet consectetur dddddddddddddd .</p>
                    <strong class="project-title">
                        <span>Dev Books</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/Capture.PNG" />
                </div>
                <div class="project-info">
                    <p class="project-category">Lorem ipsum, dolor sit amet consectetur dddddddddddddd .</p>
                    <strong class="project-title">
                        <span>Dev Books</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/Capture.PNG" />
                </div>
                <div class="project-info">
                    <p class="project-category">Lorem ipsum, dolor sit amet consectetur dddddddddddddd .</p>
                    <strong class="project-title">
                        <span>Dev Books</span>
                        <a href="#" class="more-details">More details</a>
                    </strong>
                </div>
            </div>
        </div>
    </section>

    <!--PROJECT-->
    <section>
        <div class="container">


            <form method="POST">
                NAME: <input class="form-control" type="text" name="name" required />
                <br>
                AGE: <input class="form-control" type="date" name="age" required />
                <br>
                EMAIL: <input class="form-control" type="email" name="email" required />
                <br>
                PASSWORD: <input class="form-control" type="password" name="password" required />
                <br>
                <button class="btn btn-dark" type="submit" name="register">Register</button>
            </form>

        </div>


        <?php
        $username = "root";
        $password = "";
        $database = new PDO("mysql:host=localhost; dbname=phpproject;", $username, $password);



        if (isset($_POST['register'])) {
            $checkEmail = $database->prepare("SELECT * FROM users WHERE EMAIL = :EMAIL");
            $email = $_POST['email'];
            $checkEmail->bindParam("EMAIL", $email);
            $checkEmail->execute();

            if ($checkEmail->rowCount() > 0) {
                echo '<div class="alert alert-danger" role="alert">
        This account already exists
      </div>';
            } else {
                $name = $_POST['name'];
                $password = md5($_POST['password']);
                $hashed_str = md5($str);
                $email = $_POST['email'];
                $age = $_POST['age'];

                $addUser = $database->prepare("INSERT INTO users(NAME,AGE,PASSWORD,EMAIL)
         VALUES(:NAME,:AGE,:PASSWORD,:EMAIL)");
                $addUser->bindParam("NAME", $name);
                $addUser->bindParam("AGE", $age);
                $addUser->bindParam("PASSWORD", $password);
                $addUser->bindParam("EMAIL", $email);
                if ($addUser->execute()) {
                    echo '<div class="alert alert-success" role="alert">
            Created succesfully
          </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
            unexpcted error!!         </div>';
                }
            }
        }
        ?>
    </section>

    <footer class="footer">
        <p class="footer-title">copyrights@ <span>LEILA LAGNAOUI</span></p>
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>