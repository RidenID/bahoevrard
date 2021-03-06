<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="index.html"> <i class="fas fa-home"></i> <span>home</span> </a>
    <a href="about.html"> <i class="fas fa-user"></i> <span>about</span> </a>
    <a href="portfolio.html"> <i class="fas fa-briefcase"></i> <span>portfolio</span> </a>
    <a href="blogs.html"> <i class="fas fa-blog"></i> <span>blogs</span> </a>
    <a href="contact.html"> <i class="fas fa-address-book"></i> <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- contact section starts  -->

<section class="contact">

<h1 class="heading"> contact <span>me</span> </h1>

<div class="row">

    <div class="info-container">

        <h1>get in touch</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dolorem sunt sapiente vel minus eaque voluptate fugit corrupti omnis tempora?</p>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <div class="info">
                    <h3>address :</h3>
                    <p>Côte d'ivoire, Cocody, Bingerville</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <h3>email :</h3>
                    <p>bahophilomeevrard@gmail.com</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <div class="info">
                    <h3>number :</h3>
                    <p>(+225) 07 67 79 52 13</p>
                </div>
            </div>

        </div>

        <div class="share">
            <a href="https://www.facebook.com/profile.php?id=100078543252895" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/ridenid" target="_blank" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/riden.id/" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/philomé-evrard-baho-629773204" target="_blank" class="fab fa-linkedin"></a>
        </div>

    </div>

    <form action="mail.php" method="post">

        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="tel" placeholder="your number">
        </div>

        <div class="inputBox">
            <input type="email" placeholder="your email">
            <input type="text" placeholder="your subject">
        </div>

        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="send message" class="btn">

    </form>

    <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@monsite.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('bahophilomeevrard@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</div>

</section>

<!-- contact section ends -->

</body>
</html>