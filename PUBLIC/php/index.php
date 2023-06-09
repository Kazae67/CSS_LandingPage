<?php
// Nécessaires pour la connexion à la base de données.
require_once '../../DB/db-functions.php';
// Functions
ajouterCommande(); // Incrémente à chaque clic
$value = 999; // formatValue() | MB/GB
formatValue($value);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page CSS</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>


    <!---------- SCROLL TOP ---------->
    <button onclick="scrollToTop()" id="scroll-button">
        <i class="fas fa-arrow-up"></i>
    </button>


        <!---------- LOGO ---------->
        <div class="logo-container">
            <h1>Kucra</h1>
        </div>


        <!---------- NAVBAR ---------->
        <nav class="navbar"> 
            <!-- LINKS -->
            <ul class="nav-links">
                <li><a href="#home">HOME</a></li>
                <li><a href="#features">FEATURES</a></li>
                <li><a href="#client">CLIENT</a></li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#blog">BLOG</a></li>
                <li><a href="#team">CONTACT</a></li>
            </ul>


            <!---------- SOCIAL ICONS ---------->
            <ul class="social-icons social-container">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </nav>
    </header>


    <!---------- HOME ---------->
    <section id="home" class="section">
        <div class="container-home">

            <!-- GAUCHE -->
            <div class="left-container-home">
                <h1>We are StartUp Creative Kucra Agency</h1>
                <p>Carefully crafted after analyzing the needs of different industries, and the design achieves a great balance between purpose & presentation.</p>

                <!-- FORM EMAIL -->
                <form class="email-form" action="" method="post">
                    <div class="email-container">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit" onclick="resetURL()" onclick="location.href='#home'">SUBSCRIBE</button>
                    </div>
                </form>
                <div class="message-email-notif">
                <?php
                    // POST Email & Message d'erreur
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) { // (1)
                        $email = $_POST['email']; // (2)
                        ajouterEmail($email); // (3)
                    }
                ?>
                </div>
            </div>
            
            <!-- DROITE -->
            <div class="right-container-home">
                <img src="../img/illustration.svg" alt="Chat Image">
            </div>
        </div>
    </section>


    <!---------- FEATURES ---------->
    <section id="features" class="section">
        <div class="features-title">
            <h1>Products Features</h1>
            <p>It is a long established fact that a reader will be of a page when established fact looking at it's layout</p>
        </div>

        <!-- CONTAINER -->
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


    <!---------- FAQ ---------->
    <section id="faq" class="section">
        <!-- TITLE -->
        <div class="faq-title">
            <h1>How It Works ?</h1>
            <p>It is a long established fact that a reader will be on a page when established fact looking at it's layout.</p>
        </div>
    </section>


    <!---------- TEAM ---------->
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
                    <!-- PICTURES -->
                    <img src="../img/person1.png" alt="Anna G. Wilhite" class="member-picture">
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
                <!-- PICTURES -->
                <div class="picture-container">
                    <img src="../img/person2.png" alt="William S. Blay" class="member-picture">
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
                <!-- PICTURES -->
                <div class="picture-container">
                    <img src="../img/person3.png" alt="Maria B. Morales" class="member-picture">
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
                <!-- PICTURES -->
                <div class="picture-container">
                    <img src="../img/person4.png" alt="Luke L Johnston" class="member-picture">
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
    

    <!---------- PARALLAX ---------->
    <section class="parallax" class="section">
        <!-- CONTAINER -->
        <div class="container-parallax">
            <!-- TITLE -->
            <h2 class="parallax-title">Let's get started with Kucra</h2>
            <p class="parallax-text">They are a good way to get you started if you want to buils something similar or use from existing apps which will reduce the cost, efforts and time of the developpers.</p>
            <!-- BUTTON -->
            <button class="parallax-button"><a href="#">Get Started</a></button>
        </div>
    </section>


    <!---------- CLIENT ---------->
    <section id="client" class="section">
        <!-- TITLE -->
        <div class="client-title">
            <h1>What your client says</h1>
            <p>The big Oxmox advised her not to do, because there were thousands of bad Commas, wild Question marks and devious pulvinar metus molestie sed Semikoli.</p>
        </div>
        <!-- IMG -->
        <div class="client-images">
            <img src="../img/01.png" alt="Image 1">
            <img src="../img/02.png" alt="Image 2">
            <img src="../img/03.png" alt="Image 3">
            <img src="../img/04.png" alt="Image 4">
            <img src="../img/05.png" alt="Image 5">
        </div>
    </section>


    <!---------- ABOUT ---------->
    <section id="about" class="section">

        <!-- GAUCHE -->
        <div class="left-container">
            <!-- TITLE -->
            <div class="about-title">
                <h1>We are digital creating Landing Page</h1>
                <p>The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack of will. Composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
            </div>
            <!-- INFO -->
            <div class="about-info">
                <div class="about-number">
                    <h3>4957</h3>
                    <p>Happy User</p>
                </div>
                <div class="about-task">
                    <h3>1599</h3>
                    <p>Complete Project</p>
                </div>
            </div>
            <!-- BUTTON -->
            <button class="about-btn">Learn more</button>
        </div>

        <!-- DROITE -->
        <div class="right-container">
            <img src="../img/creativity.png" alt="Creativity Image">
        </div>
    </section>


    <!---------- PRICING ---------->
    <section id="pricing" class="section">
        <!-- CONTAINER -->
        <div class="pricing-title">
            <h1>Our Pricing</h1>
            <p>It is a long established fact that a reader will be of a page when established fact looking at it's layout.</p>
        </div>
        <div class="pricing-container">
            <?php
            /** AFFICHAGE FORMULES
             * (1) Une requête SQL est exécutée pour récupérer toutes les lignes de la table pricing_db de la base de données.
             * (2) Les résultats sont stockés dans la variable $result.
             * (3) La condition if ($result->rowCount() > 0) vérifie s'il y a des résultats de la requête. (https://www.php.net/manual/fr/pdostatement.rowcount.php)
             * (4) Si c'est le cas, la boucle while est utilisée pour parcourir chaque ligne de résultat et afficher les détails de chaque formule de tarification.
             * (5) Les données sont extraites et stockées dans des variables individuelles telles que $formule, $prix, $mois, etc.
             * (6) La condition if ($afficherReduction && $reduction >= 1) vérifie si la réduction doit être affichée.
             *     Si la valeur de la $reduction > 50, alors la class blink s'activera pour clignoter. 
             * (7) Les fonctionnalités de la formule sont stockées dans un tableau $features contenant des tableaux associatifs, les valeurs et les symboles correspondants.
             * (8) Foreach utilisée pour parcourir chaque fonctionnalité du tableau $features et appeler pour afficher chaque fonctionnalité son label, sa valeur et son symbole.
             * (9) Un formulaire de commande est affiché avec la valeur de la commande extraite de la base de données, ainsi qu'un boutton.
             */
            $query = "SELECT * FROM pricing_db"; // (1)
            $result = connection()->query($query); // (2)
            
            if ($result->rowCount() > 0) { // (3)
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) { // (4)
                    $formule = $row['formule']; //(5)
                    $prix = $row['prix'];
                    $mois = $row['mois'];
                    $reduction = $row['reduction'];
                    $afficherReduction = $row['afficher_reduction'];
                    $bandwidth = formatValue($row['bandwidth']);
                    $onlinespace = formatValue($row['onlinespace']);
                    $support = $row['support'] ? 'Yes' : 'No';
                    $domain = ($row['domain'] > 0) ? $row['domain'] : '0';
                    $hidden_fees = $row['hidden_fees'] ? 'Yes' : 'No';
                    $commande = $row['commande'];

                    // Boîte de formule.
                    echo "<div class='pricing-box'>";
                    echo "<h2>$formule</h2>";
                    echo "<p><span class='prix'>$$prix<span class='month'>/$mois</span></p>";

                    // Tableau associatif de reduction (6)
                    if ($afficherReduction && $reduction >= 1) { 
                        if ($reduction >= 50) {
                            echo "<p class='reduction blink'>-$reduction%<br>sale</p>";
                        } else {
                            echo "<p class='reduction'>-$reduction%<br>sale</p>";
                        }
                    } 
                    
                    // Fonctionnalités de la formule.
                    $features = [
                        ['label' => 'Bandwidth', 'value' => $bandwidth, 'symbol' => ($bandwidth > 0 ? '<i class="fas fa-circle fa-check green"></i>' : '<i class="fas fa-circle fa-times red"></i>')],
                        ['label' => 'Onlinespace', 'value' => $onlinespace, 'symbol' => ($onlinespace > 0 ? '<i class="fas fa-circle fa-check green"></i>' : '<i class="fas fa-circle fa-times red"></i>')],
                        ['label' => 'Support', 'value' => $support, 'symbol' => ($support == 'Yes' ? '<i class="fas fa-circle fa-check green"></i>' : '<i class="fas fa-circle fa-times red"></i>')],
                        ['label' => 'Domain', 'value' => $domain, 'symbol' => ($domain > 0 ? '<i class="fas fa-circle fa-check green"></i>' : '<i class="fas fa-circle fa-times red"></i>')],
                        ['label' => 'Hidden fees', 'value' => $hidden_fees, 'symbol' => ($hidden_fees == 'Yes' ? '<i class="fas fa-circle fa-check green"></i>' : '<i class="fas fa-circle fa-times red"></i>')],
                    ];

                    // Affichage des fonctionnalités de la formule.
                    foreach ($features as $feature) { // (8)
                        echo "<div class='feature'>";
                        echo "<span class='label'>" . $feature['symbol'] . " " . $feature['label'] . "</span>";
                        echo "<span class='value'>" . $feature['value'] .  "</span>";
                        echo "</div>";
                    }
                    
                    // Formulaire de commande.
                    echo "<form method='post' action=''>"; // (9)
                    echo "<p>Order";
                    if ($commande > 1) {
                        echo "s";
                    }
                    echo " : <span id='commande-$formule'>$commande</span></p>";
                    echo "<input type='hidden' name='commande[$formule]' value='$commande'>";
                    echo "<button class='join-button' type='submit' name='update' value='Update' onclick=\"location.href='#pricing'\">Join Now</button>";
                    echo "</form>";
                    echo "</div>";
                    ?>
                    <?php
                }
            } else {
                echo "Aucune formule de la base de données pricing trouvée.";
            }
            ?>
        </div> 
    </div>
    </section>


    <!---------- BLOG ---------->
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


    <!---------- FOOTER ---------->
    <footer id="footer" class="section">
        <!-- CONTAINER -->
        <div class="footer-container">
            <!-- SOCIAL -->
            <div class="footer-social">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-google-plus"></i>
            </div>
        </div>
        <!-- LINKS -->
        <div class="footer-links">
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
        <!-- TEXT -->
        <div class="footer-text">
            2022 &copy; Kucra - Landing Page Template by Pichforest
        </div>
    </footer>


<!---------- SCRIPTS ---------->
<script src="../js/scroll.js"></script>
    
<!-- DELETE URL -->
<script>
// Fonction pour supprimer les ancres de l'URL
function resetURL() {
    history.replaceState({}, document.title, window.location.pathname);
}
// Appeler la fonction lors du chargement de la page
window.addEventListener('load', resetURL);
</script>


<!-- DELETE NAV SCROLLING -->
<script>
window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    var socialContainer = document.querySelector('.social-container');
    var logoContainer = document.querySelector('.logo-container');

    if (window.scrollY > 0) {
        navbar.classList.add('fade-out', 'hidden');
        socialContainer.classList.add('fade-out');
        logoContainer.classList.add('fade-out');
    } else {
        navbar.classList.remove('fade-out', 'hidden');
        socialContainer.classList.remove('fade-out');
        logoContainer.classList.remove('fade-out');

        navbar.classList.add('fade-in', 'visible');
        socialContainer.classList.add('fade-in');
        logoContainer.classList.add('fade-in');
    }
});
</script>
</body>
</html>
