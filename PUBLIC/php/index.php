<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page CSS</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <!-- SCROLL TOP -->
    <button onclick="scrollToTop()" id="scroll-button">
        <i class="fas fa-arrow-up"></i>
    </button>


        <!-- LOGO -->
        <div class="logo-container">
            <h1>Kucra</h1>
        </div>
        <!-- NAVBAR -->
        <nav class="navbar"> 
            <ul class="nav-links">
                <li><a href="#home">HOME</a></li>
                <li><a href="#features">FEATURES</a></li>
                <li><a href="#client">CLIENT</a></li>
                <li><a href="pricing.php">PRICING</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#blog">BLOG</a></li>
                <li><a href="#team">CONTACT</a></li>
            </ul>

            <!-- SOCIAL ICONS -->
            <ul class="social-icons social-container">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- HOME -->
    <section id="home" class="section">
        <div class="container-home">
            <!-- GAUCHE -->
            <div class="left-container-home">
                <h1>We are StartUp Creative Kucra Agency</h1>
                <p>Carefully crafted after analyzing the needs of different industries, and the design achieves a great balance between purpose & presentation.</p>
                <form class="email-form" action="" method="post">
                    <div class="email-container">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                </form>
            </div>

            <!-- DROITE -->
            <div class="right-container-home">
                <img src="../img/illustration.svg" alt="Chat Image">
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="features" class="section">
        <div class="features-title">
            <h1>Products Features</h1>
            <p>It is a long established fact that a reader will be of a page when established fact looking at it's layout</p>
        </div>
        <div class="container-features">
            <!-- GAUCHE -->
            <div class="left-container-features">
                <i class="fa-sharp fa-solid fa-globe"></i>
                <h2>Digital Design</h2>
                <p>Some quick example text to build on the card title and make up the build of the card the platform.</p>
            </div>
            <!-- MILLIEU -->
            <div class="middle-container-features">
                <i class="fa-sharp fa-solid fa-brush"></i>
                <h2>Unlimited Colors</h2>
                <p>Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt laoreet.</p>
            </div>
            <!-- DROITE -->
            <div class="right-container-features">
                <i class="fa-solid fa-chess"></i>
                <h2>Strategy Solutions</h2>
                <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean regelialia.</p>
            </div>
        </div>
    </section>

    <!-- FAQ ? -->
    <section id="faq" class="section">
        <div class="faq-title">
            <h1>How It Works ?</h1>
            <p>It is a long established fact that a reader will be on a page when established fact looking at it's layout.</p>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section">
        <!-- TITLE -->
        <div class="team-title">
            <h1>We'r dynamic team of talentend people of innovative & marketing expert</h1>
            <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words, if several languages of the resulting language.</p>
        </div>
        <!-- CONTAINER TEAM -->
        <div class="container-team">

            <!-- MEMBRE 1 -->
            <div class="team-member">
                <p class="subscribe-number">1499+</p>
                <p class="member-description">Complete Projects</p>
                <div class="picture-container">
                    <img src="../img/person1.png" class="member-picture">
                    <div class="team-icons">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-skype"></i>
                    </div>
                </div>
                <p class="name-member">Anna G. Wilhite</p>
                <p class="job-member">CEO/Founder</p>
            </div>

            <!-- MEMBRE 2 -->
            <div class="team-member">
                <p class="subscribe-number">1080K</p>
                <p class="member-description">Satisfied Clients</p>
                <div class="picture-container">
                    <img src="../img/person2.png" class="member-picture">
                    <div class="team-icons">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-skype"></i>
                    </div>
                </div>
                <p class="name-member">William S. Blay</p>
                <p class="job-member">CTO/Co-Founder</p>
            </div>

            <!-- MEMBRE 3 -->
            <div class="team-member">
                <p class="subscribe-number">608</p>
                <p class="member-description">Team Members</p>
                <div class="picture-container">
                    <img src="../img/person3.png" class="member-picture">
                    <div class="team-icons">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-skype"></i>
                    </div>
                </div>
                <p class="name-member">Maria B. Morales</p>
                <p class="job-member">Web Designer</p>
            </div>

            <!-- MEMBRE 4 -->
            <div class="team-member">
                <p class="subscribe-number">252</p>
                <p class="member-description">Employee</p>
                <div class="picture-container">
                    <img src="../img/person4.png" class="member-picture">
                    <div class="team-icons">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-skype"></i>
                    </div>
                </div>
                <p class="name-member">Luke L Johnston</p>
                <p class="job-member">Web Developer</p>
            </div>
        </div>
    </section>
    
    <!-- PARALLAX -->
    <section class="parallax" class="section">
        <div class="container-parallax">
            <h2 class="parallax-title">Let's get started with Kucra</h2>
            <p class="parallax-text">They are a good way to get you started if you want to buils something similar or use from existing apps which will reduce the cost, efforts and time of the developpers.</p>
            <button class="parallax-button"><a href="#">Get Started</a></button>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section">

        <!-- GAUCHE -->
        <div class="left-container">
            <div class="about-title">
                <h1>We are digital creating Landing Page</h1>
                <p>The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack of will. Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
            </div>
            <div class="about-info">
                <div class="about-number">
                    <h3>4957</h3>
                    <p>Happy User</p>
                </div>
                <div class="about-task">
                    <h3>1599+</h3>
                    <p>Complete Project</p>
                </div>
            </div>
            <button class="learn-more-btn">Learn more</button>
        </div>

    <!-- DROITE -->
        <div class="right-container">
            <img src="../img/creativity.png" alt="Creativity Image">
        </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="section">
        <!-- TITLE -->
        <div class="blog-title">
            <h1>Our Blog</h1>
            <p>It is a long established fact that a reader will be of a page when established fact looking at it's layout.</p>
        </div>

        <!-- CONTAINER -->
        <div class="blog-container">

            <!-- GAUCHE -->
            <div class="blog-cards">
                <div class ="image-hover">
                    <div class="blog-picture">
                        <img src="../img/blog1.png" class="blog-image">
                        <div class="blog-description">
                            <div class="blog-name"><i class="fa-regular fa-user"></i> Calvin Carlo</div>
                            <div class="blog-date"><i class="fa-regular fa-clock"></i> 20th March 2021</div>
                        </div> 
                    </div>
                </div>
                <div class="card-description">   
                    <h3>Doing a cross country road trip</h3>
                    <p>We craft digital, graphic and dimensional thinking, to create category leading brand.</p>
                    <a href="readmore">Read more</a>
                </div>    
            </div> 

            <!-- MILLIEU -->
            <div class="blog-cards">
                <div class ="image-hover">
                    <div class="blog-picture">
                        <img src="../img/blog2.png" class="blog-image">
                        <div class="blog-description">
                            <div class="blog-name"><i class="fa-regular fa-user"></i> Ruben Reed</div>
                            <div class="blog-date"><i class="fa-regular fa-clock"></i> 01th July 2021</div>
                        </div> 
                    </div>
                </div>
                <div class="card-description">   
                    <h3>New exhibition at our Museum</h3>
                    <p>Even the all-powerful Pointing has no control about the blind almost unorthographic.</p>
                    <a href="readmore">Read more</a>
                </div>
            </div> 

            <!-- DROITE -->
            <div class="blog-cards">
                <div class ="image-hover">
                    <div class="blog-picture">
                        <img src="../img/blog3.png" class="blog-image">
                        <div class="blog-description">
                            <div class="blog-name"><i class="fa-regular fa-user"></i> Theresa Sinclair</div>
                            <div class="blog-date"><i class="fa-regular fa-clock"></i> 25th July 2021</div>
                        </div> 
                    </div>
                </div>
                <div class="card-description">   
                    <h3>Design your apps in your own way</h3>
                    <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                    <a href="readmore">Read more</a>
                </div>
            </div>    
    </section>


    <!-- FOOTER -->
    <footer id="footer" class="section">
        <div class="footer-container">
            <div class="footer-social">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-google-plus"></i>
            </div>
        </div>
        <div class="footer-links">
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="footer-text">
            2022 &copy; Kucra - Landing Page Template by Pichforest
        </div>
    </footer>

    <script src="../js/scroll.js"></script>
</body>
</html>
