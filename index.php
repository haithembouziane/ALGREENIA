<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algreenia</title>
    <!-- <meta http-equiv="refresh" content="10"> Each two seconds, the page will refresh -->
    <link rel="stylesheet" href="./css/nav-footer.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php
        include "./includes/nav.php" 
    ?>
    <div class="page">
        <section id="hero" class=" glass-theme">
            <h1 class="section-title">Where every tree tells a story...</h1>
            <h2>Join Us Greening Algeria</h2>
            <p>Join Algeria’s green movement! Algreenia empowers you to plant, track, and care for trees, restoring our landscapes one project at a time. Discover personalized tree recommendations, local afforestation events, and tools to make a lasting impact.</p>
            <div id="hero-btns">
                <button class="btn btn-success">Join Us</button>
                <button class="btn btn-secondary">Read more</button>
            </div>

        </section>
        <!-- <img src="..\images\branch4.png" alt="branch" id="branch1"> -->

        <section id="How-it-works" class="glass-theme">
            <h2 class="section-title">How Algreenia works</h2>
            <p class="short-description">
                Algreenia connects communities across Algeria to impactful afforestation initiatives. Our platform empowers individuals and organizations to participate in tree-planting projects, providing the tools and resources needed to restore and preserve our green spaces. Join us in cultivating a sustainable future, one tree at a time!
            </p>
            <!-- Steps -->

            <!-- Some images provided below are temporary -->
            <div class="card-container">
                <div class="card ">
                    <img src="./images/log-in.jpg" alt="Sign-up Image" class="card-img">
                    <div class="card-content">
                        <h3 class="card-title"> Sign Up and Join the Community</h3>
                        <p class="card-description">Create an account to become part of Algreenia, gaining access to afforestation tools and projects.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="./images/afforestation.png" alt="Afforestaion Image" class="card-img">
                    <div class="card-content">
                        <h3 class="card-title">Discover Afforestation Projects</h3>
                        <p class="card-description">Explore ongoing afforestation efforts and projects you can join based on location or interest.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="./images/project.jpg" alt="Project Image" class="card-img" height="300px">
                    <div class="card-content">
                        <h3 class="card-title">Choose a Project to Support</h3>
                        <p class="card-description">Select from a list of afforestation projects that match your preferences, whether through planting trees or donating.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="./images/treeIdentification.jpg" alt="Tree Identification Image" class="card-img">
                    <div class="card-content">
                        <h3 class="card-title">Get Personalized Tree Recommendations</h3>
                        <p class="card-description">Based on your location and preferences, the platform recommends tree species suitable for planting, enhancing the sustainability of local ecosystems.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/treeStats.webp" alt="Track Image" class="card-img">
                    <div class="card-content">
                        <h3 class="card-title">Track Your Impact and Progress</h3>
                        <p class="card-description">After joining a project, monitor your personal and community contributions, including the number of trees planted and the overall impact.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
                </div>
                <div class="card ">
                    <img src="./images/social-media-post.jpeg" alt="Media Image" class="card-img">
                    <div class="card-content">
                        <h3 class="card-title">Share Your Achievements </h3>
                        <p class="card-description">Share your progress on social media, inspiring friends, family, and others to join Algreenia’s mission and participate in afforestation efforts.</p>
                        <button class="btn-learn">Learn More</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="glass-theme">
            <h2 class="section-title">Afforestation Campaigns</h2>
            <p class="short-description">
                Browse our current afforestation campaigns. Sign up for a project and make a real difference in your community by planting trees.
            </p>
            
            <div class="project-card-container">
                <button class="prev-btn">&#10094;</button>

                <div class="project-card">
                    <div class="project-card-img">
                        <div class="dots"></div>
                        <h1>Green future</h1>
                    </div>
                    <div class="project-card-content">
                        <p><b class="green">Organized by:</b> Eldjazayer Elkhadra</p>
                        <p><b class="green">Location:</b> Biskra</p>
                        <p><b class="green">Goal:</b> 500 tree</p>
                        <p><b class="green">Start date:</b> 01/12/2024</p>
                    </div>
                </div>
    
                <div class="project-card">
                    <div class="project-card-img">
                        <div class="dots"></div>
                        <h1>Green future</h1>
                    </div>
                    <div class="project-card-content">
                        <p><b class="green">Organized by:</b> Eldjazayer Elkhadra</p>
                        <p><b class="green">Location:</b> Biskra</p>
                        <p><b class="green">Goal:</b> 500 tree</p>
                        <p><b class="green">Start date:</b> 01/12/2024</p>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-card-img">
                        <div class="dots"></div>
                        <h1>Green future</h1>
                    </div>
                    <div class="project-card-content">
                        <p><b class="green">Organized by:</b> Eldjazayer Elkhadra</p>
                        <p><b class="green">Location:</b> Biskra</p>
                        <p><b class="green">Goal:</b> 500 tree</p>
                        <p><b class="green">Start date:</b> 01/12/2024</p>
                    </div>
                </div>

                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section id="success-stories" class="success-stories-section glass-theme">
            <h2 class="section-title">Success Stories</h2>
            <p class="short-description">
                Discover how Algreenia has made a difference in communities across Algeria.
            </p>
            <div class="story-container">
                <div class="story-card">
                    <img class="story-img" src="./images/story1.jpeg" alt="Story Image">
                    <h3 class="story-title">Community Greening Initiative in Oran</h3>
                    <p class="story-description">"Our neighborhood has transformed into a green oasis thanks to Algreenia's support and guidance!" – Participant Name</p>
                </div>
                <div class="story-card">
                    <img class="story-img" src="./images/story2.jpeg" alt="Story Image">
                    <h3 class="story-title">Restoring Biodiversity in Djelfa</h3>
                    <p class="story-description">"Thanks to the afforestation efforts, we have seen a significant return of local wildlife." – Participant Name</p>
                </div>
                <div class="story-card">
                    <img class="story-img" src="./images/story3.jpeg" alt="Story Image">
                    <h3 class="story-title">Restoring Biodiversity in Djelfa</h3>
                    <p class="story-description">"Thanks to the afforestation efforts, we have seen a significant return of local wildlife." – Participant Name</p>
                </div>
            </div>
        </section>
        
        
        <section id="resources" class="glass-theme">
            <h2 class="section-title">Educational Resources</h2>
            <p class="short-description">Learn how you can contribute to afforestation efforts and help create a sustainable future.</p>
            
            <div class="resource-container">
                <!-- Guide Download Card -->
                <div class="resource-card glass-theme">
                    <img class="resource-img" src="./images/guide.jpeg" alt="Planting Guide">
                    <h3 class="resource-title">Tree Planting Guide</h3>
                    <p class="resource-description">Step-by-step guide on planting and caring for trees in Algeria’s unique climate.</p>
                    <a href="https://treecouncil.org.uk/wp-content/uploads/2019/12/Tree-planting-guide-2019-updates_1.pdf" download class="btn-learn">Download Guide</a>
                </div>
                
                <!-- Video Card -->
                <div class="resource-card glass-theme">
                    <div>
                        <h3 class="resource-title">Why Trees Matter</h3>
                        <p class="resource-description">Watch our video on the environmental and social benefits of afforestation.</p>
                    <div>
                    <div class="video-wrapper">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/5yqogs7va_k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>



        <section id="stat" class="glass-theme">
            <h2 class="section-title">Our impact </h2>
            <p class="short-description">
                Discover how your contributions are making a difference. Together, we are restoring our green spaces!
            </p>
            <div class="stat-container">
                <div class="stat-card glass-theme">
                    <i class="fas fa-tree far-icon"></i>
                    <h3 class="stat-title">Trees Planted</h3>
                    <p class="stat-value" data-value="1000">0</p>
                </div>
                <div class="stat-card glass-theme">
                    <i class="fas fa-users far-icon"></i>
                    <h3 class="stat-title">Community Participants</h3>
                    <p class="stat-value" data-value="120">0</p>
                </div>
                <div class="stat-card glass-theme">
                    <i class="fas fa-cloud far-icon"></i>
                    <h3 class="stat-title">Tonnes of CO2 captured</h3>
                    <p class="stat-value" data-value="70">0</p>
                </div>
            </div>
        </section>

        <section id="sustainability" class="glass-theme">
            <h2 class="section-title">Sustainability Tips</h2>

            <div class="eco-friendly-practices">
                <h3><i class="fas fa-leaf fas-icon"></i> Eco-Friendly Practices</h3>
                <hr/>
                <ul>
                    <li>Reduce single-use plastics by carrying reusable bags and bottles.</li>
                    <li>Start composting kitchen scraps and yard waste.</li>
                    <li>Choose native plants for your garden to conserve water.</li>
                    <li>Participate in local afforestation efforts: Join community tree-planting events organized by Algreenia to help restore natural habitats and improve air quality.</li>
                    <li>Utilize our tree identification feature: Learn about the different tree species in your area by using Algreenia's mobile-friendly feature to identify and understand the benefits of planting them.</li>
                    <li>Get personalized tree recommendations: Use Algreenia’s questionnaire to receive tailored suggestions for tree species that suit your local environment and specific gardening needs.</li>
                </ul>
            </div>

            <div class="resource-guides ">
                <h3><i class="fas fa-book fas-icon"></i> More Guides</h3>
                <hr/>
                <div class="guide-card">
                    <h4>Sustainable Gardening Checklist</h4>
                    <p>Learn how to create a thriving garden while protecting the environment.</p>
                    <a class="download-button" href="#">Download</a>
                </div>
                <div class="guide-card">
                    <h4>Composting Basics PDF</h4>
                    <p>A step-by-step guide to composting kitchen and yard waste.</p>
                    <a class="download-button" href="#">Download</a>
                </div>
                <div class="guide-card">
                    <h4>Water Conservation Techniques</h4>
                    <p>Tips for saving water in your home and garden.</p>
                    <a class="download-button" href="#">Download</a>
                </div>
            </div>

            <div class="challenges">
                <h3><i class="fas fa-trophy fas-icon"></i> This Month’s Challenge: Conserve Water!</h3>
                <hr />
                <div class="challenge-card">
                    <p class="challenge-intro">Take part in our monthly eco-challenge!</p>
                    <img src="./images/challenge.jpg" alt="Water Conservation Challenge Image" class="challenge-img">
                    <p class="challenge-description">Reduce your water usage and track your progress over the month.</p>
                    <div class="challenge-stats">
                        <p><strong><span id="challenge-progress">45%</span></strong> of users are participating!</p>
                        <p><strong><span id="total-savings">1000L</span></strong> water saved so far!</p>
                    </div>
                    <div class="challenge-actions">
                        <a href="#" class="challenge-cta">Join the Challenge</a>
                        <a href="#" class="share-progress">Share Your Progress and Inspire Others!</a>
                    </div>
                </div>
            </div>

        

            <div class="community-sharing glass-theme">
                <h3><i class="fas fa-users fas-icon"></i> Community Sharing Tips</h3>
                <hr />
                <div class="tips-grid">
                    <div class="tip-card">
                        <h1 class="tip-title">Save Water in the Kitchen</h1>
                        <p>Use leftover water from washing vegetables to water plants!</p>
                    </div>
                    <div class="tip-card">
                        <h1 class="tip-title">Limit Shower Time</h1>
                        <p>Try setting a 5-minute timer to reduce water usage.</p>
                    </div>
                    <!-- Add more .tip-card items as needed -->
                </div>
            </div>


        </section>


    </div>  

    <?php
        include "./includes/footer.php" 
    ?>
<!-- 
    <script src="./Scripts/home.js"></script> -->

</body>
</html>