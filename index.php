<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "Insert into `contact_form` (name,email,number,date)
    values('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appoinment mede successfully!';
    } else {
        $message[] = 'appoinmente failed';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />
</head>

<body>
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">dental<span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">make appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis accusantium, molestiae quos
                        sapiente sit possimus.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-4 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h3>True Healthcore for you Family</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis voluptas enim quia, excepturi ex
                        labore provident! Fugiat, eligendi. Nemo, eaque.</p>
                    <a href="#contact" class="link-btn">make appoinyment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Aligment specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum dignissimos accusamus eveniet
                    omnis? Praesentium nulla, laboriosam molestiae doloribus laborum officia.</p>
            </div>
            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Aligment specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum dignissimos accusamus eveniet
                    omnis? Praesentium nulla, laboriosam molestiae doloribus laborum officia.</p>
            </div>
            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Aligment specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum dignissimos accusamus eveniet
                    omnis? Praesentium nulla, laboriosam molestiae doloribus laborum officia.</p>
            </div>
            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Aligment specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum dignissimos accusamus eveniet
                    omnis? Praesentium nulla, laboriosam molestiae doloribus laborum officia.</p>
            </div>
            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Aligment specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum dignissimos accusamus eveniet
                    omnis? Praesentium nulla, laboriosam molestiae doloribus laborum officia.</p>
            </div>
            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Aligment specialist</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum dignissimos accusamus eveniet
                    omnis? Praesentium nulla, laboriosam molestiae doloribus laborum officia.</p>
            </div>
        </div>
    </section>

    <section class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Comestic Dentestry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, id modi saepe aliquid sed ipsa.</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Pedriatric Dentestry</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, id modi saepe aliquid sed ipsa.</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, id modi saepe aliquid sed ipsa.</p>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews">
        <h1 class="heading">satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim similique, qui quod placeat molestiae
                    autem reiciendis recusandae iste magni ea.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Jota Belt</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim similique, qui quod placeat molestiae
                    autem reiciendis recusandae iste magni ea.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Jota Belt</h3>
                <span>satisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim similique, qui quod placeat molestiae
                    autem reiciendis recusandae iste magni ea.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Jota Belt</h3>
                <span>satisfied client</span>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading">make appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" class="box" required>
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" class="box" required>
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" class="box" required>
            <span>appoinment date</span>
            <input type="datetime-local" name="date" class="box">
            <input type="submit" class="link-btn" value="make appoinment" name="submit" required>
        </form>
    </section>

    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+56987204455</p>
                <p>+56987204455</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Santiago, Recoleta 564</p>
            </div>
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>9:30-18:00</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>jdev@gg.com</p>
                <p>jdev@gg.com</p>
            </div>
        </div>
        <div class="credit">created by <span>jotaDev</span></div>
    </section>

    <script src="js/main.js"></script>
</body>

</html>