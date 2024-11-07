<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Algreenia - Profile</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/profile.css">
        <link rel="stylesheet" href="../css/nav-footer.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    

<body>
    <?php
    include "../includes/nav.php" 
    ?>


    <div class="container">
    <section class=" glass-theme main-section    hover_effect"> 
        <div class="profile-img-container">
            <img src="../images/WIN_20231022_00_10_27_Pro.jpg" class="profile_img" alt="Profile Image">
        </div>
        

        <h3 class="section-title">My Profile</h3>
        
        <div class="field">
            <label for="firstname-input">First Name</label>
            <input type="text" id="firstname-input" name="firstname" class="profile-input" placeholder="First Name" value="ENZO" disabled>
        </div>
        
        <div class="field">
            <label for="lastname-input">Last Name</label>
            <input type="text" id="lastname-input" name="lastname" class="profile-input" placeholder="Last Name" value="CHAABNIA" disabled>
        </div>
        
        <div class="field">
            <label for="email-input">Email</label>
            <input type="email" id="email-input" name="email" class="profile-input" placeholder="Email" value="enzo.chaabnia@ensia.edu.dz" disabled>
        </div>
        
        <div class="field">
            <label for="phone-input">Phone</label>
            <input type="number" id="phone-input" name="phone" class="profile-input" placeholder="Phone" value="0550361356" disabled>
        </div>
        
        
        <div class="radio-container ">
            <span class="alert-text"> Email Alerts</span>
            <span> <input id="alert-email" type="radio" name="radio-examples" data-toggle="false"></span>
          </div>
          
          
          
          <script>
            document.getElementById('alert-email').addEventListener('click', function() {
              if (this.getAttribute('data-toggle') === 'true') {
                this.checked = false;
                this.setAttribute('data-toggle', 'false');
              } else {
                this.setAttribute('data-toggle', 'true');
              }
            });
          </script>
          
        
        

        <div class="button-container">
        <button class="editSaveButton buttons" onclick="toggleEdit()"> Edit</button>
        <button class="logout buttons">Logout</button>
        </div>
        
    </section>
    
    <script src="../Scripts/profile.js"></script>


    <section class="side-section ">


    <div class=" participations  hover_effect" style="--i: 15; --clr: #fb297b;">

                <h4 class="section-title" style="font-size:2rem;">Your participations</h4>
                <h3 style="font-size:2rem;">15</h3>

    </div>

        <div class="glass-theme availability  hover_effect">
            <h2 class="section-title" >change your availibility settings</h2>
            <button class="avl_button buttons">Availability</button>
        </div>



    </section>
    </div>  



    <?php
        include "../includes/footer.php" 
    ?>
</body>

</html>
