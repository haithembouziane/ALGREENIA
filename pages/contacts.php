<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contacts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>
    <?php
    include "../includes/nav.php" 
    ?>

    <section class="contact glass-theme">
        <div class="content">
            <h2 class="section-title">Contact Us</h2>
            <p style="font-size:2rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, 
                asperiores nisi quam vel, nemo quibusdam non quos 
                repudiandae itaque neque ratione eos dignissimos iusto eaque molestiae. 
                Eligendi ullam perspiciatis eum.</p>
        </div>
        <div class="container ">
            <div class="contactInfo">

                <div class="box">
                    <div class="icon"><ion-icon name="map-outline"></ion-icon></div>
                    <div class="text">
                        <h3 class="section-title">Address</h3>
                        <p>Algiers<br>higher national of artificial intelligence<br>Algeria</p>
                    </div>
                </div>

                

                <div class="box">
                    <div class="icon"><ion-icon name="call-outline"></ion-icon></div>
                    <div class="text">
                        <h3 class="section-title">Phone</h3>
                        <p>+213&nbsp;550361356</p>
                    </div>
                </div>
                <!--
                    <div class="box">
                        <h3>phone</h3>
                    </div>

                    <div class="box">
                        <h3>intagram</h3>
                    </div>

                    <div class="box">
                        <h3>facebook</h3>
                    </div>

                    <div class="box">
                        <h3>twitter</h3>
                    </div>

                    <div class="box">
                        <h3>linkedin</h3>
                    </div>
                -->

                <div class="box">
                    <div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
                    <div class="text">
                        <h3 class="section-title">Email</h3>
                        <p>algreenia@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm glass-theme">
                <form>
                    <h2 class="section-title" style="color:white;">Send a Message!</h2>
                    <div class="inputBox">
                        <input class="contact-input" type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input class="contact-input" type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea class="contact-input " required="required"></textarea>
                        <span>Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 

    <?php
        include "../includes/footer.php" 
    ?>
</body>
</html>

