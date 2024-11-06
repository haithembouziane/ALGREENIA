<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track</title>
    <link rel="stylesheet" href="../css/nav-footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/impactTrack.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include "../includes/nav.php"
    ?>

    <div class="page">
        <section class="key-statistics center">
            <h2 class="title text-shadow">Key Statistics</h2>
            <div class="stats-grid">
                <div class="stat-card glass-theme sp-around-column">
                    <h3>Total Trees Planted</h3>
                    <img src="../images/tree-image.png"/>
                    <p>10,000</p>
                </div>
                <div class="stat-card glass-theme sp-around-column">
                    <h3>Active Projects</h3>
                    <img src="../images/afforestation-impact.png"/>
                    <p>5</p>
                </div>
                <div class="stat-card glass-theme sp-around-column">
                    <h3>Carbon Offset Estimate</h3>
                    <img src="../images/carbon-offset.webp"/>
                    <p>500 metric tons</p>
                </div>
                <div class="stat-card glass-theme sp-around-column ">
                    <h3>Participation Rate</h3>
                    <img src="../images/participation.png"/>
                    <p>70%</p>
                </div>
                <div class="stat-card glass-theme sp-around-column">
                    <h3>Land Restored</h3>
                    <img src="../images/land-restored.webp"/>
                    <p>200 acres</p>
                </div>
                <div class="stat-card glass-theme sp-around-column">
                    <h3>Water Usage Reduction</h3>
                    <img src="../images/water-reduction.png"/>
                    <p>50,000 liters</p>
                </div>
            </div>
        </section>

        <section class="goals-achievements center">
            <h2 class="title text-shadow">Goals vs. Achievements</h2>
            <div class="progress-container">
                <div class="progress border" style="--i: 10; --clr: #43f94a;">
                    <h3>10<span>%</span></h3>
                    <h4>Trees Planted</h4>
                </div>
                <div class="progress border" style="--i: 30; --clr: #2ccde9;">
                    <h3>30<span>%</span></h3>
                    <h4>Carbon Offset Estimate</h4>
                </div>
                <div class="progress border" style="--i: 15; --clr: #fb297b;">
                    <h3>15<span>%</span></h3>
                    <h4>Land Restored</h4>
                </div>
                <div class="progress border" style="--i: 5; --clr: #ffe047;">
                    <h3>5<span>%</span></h3>
                    <h4>Water Usage Reduction</h4>
                </div>
            </div>
        </section>

        <section class="user-contributions center">
            <h2 class="title text-shadow">Top Contributors of the season</h2>
            <h3 class="motivation text-shadow">
                Aim to be one of Algreenia’s top contributors and earn your spot here! Keep planting and contributing to see your profile displayed as a top contributor.
            </h3>
            <li class="contributor glass-theme gold special center">
                <span class="rank text-shadow">1st</span>
                <img src="../images/salah.jpeg" class="border"/>
                <span class="name gold">Salah Badreddine</span>
                <span class="location">Algiers</span>
                <span class="trees">100 trees planted</span>
            </li>
            <ul class="contributors-list">
                <li class="contributor glass-theme silver center">
                    <span class="rank text-shadow">2nd</span>
                    <img src="../images/islem.jpeg" class="border"/>
                    <span class="name silver">Islem Gouicem</span>
                    <span class="location">Biskra</span>
                    <span class="trees">75 trees planted</span>
                </li>
                <li class="contributor glass-theme bronze center">
                    <span class="rank text-shadow">3rd</span>
                    <img src="../images/enzo.jpeg" class="border"/>
                    <span class="name bronze">Chaabnia Enzo</span>
                    <span class="location">Annaba</span>
                    <span class="trees">50 trees planted</span>
                </li>
            </ul>
        </section>
    </div>

    

    <?php
        include "../includes/footer.php"
    ?>

</body>
</html>