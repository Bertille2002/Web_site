<?php
// require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
// require_once(__DIR__ . '/variables.php');
// require_once(__DIR__ . '/comptes_site/comptes.php');
include 'comptes_site/header.php';
// require_once(__DIR__ . '/comptes_site/registration.php');
// require_once(__DIR__ . '/index.php');

$user_id = $_SESSION['user_id'];
$username = null;

$stmt = $pdo->prepare("SELECT username FROM users WHERE ID = :ID");
$stmt->bindParam(':ID',$user_id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
    $username = $user['username'];
}

// session_start(); 

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Portfolio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/styles.css'>
</head>

<body style="overflow: visible;">
    <nav id="mysidenav" class="sidenav">
        <div id="mysidenavcontent" class="sidenavcontent">
            <img src="assets/img/nat.jpg" alt="Profile Picture" class="profile-picture" loading="lazy">
            <p class="sidebarname">Natasha Garcia</p>
            <hr>
            <p class="sidebarcitation">Our greatest weakness lies in giving up. The most certain way to succeed is
                always to try just one more time.</p>
            <p class="sidebarauthor"> - Thomas Edison</p>
            <hr>
            <div class="row">
                <div class="column">
                    <a href="linkedin link" target="_blank">
                        <img id="linkedin"
                            src="https://i.pinimg.com/736x/b9/e4/92/b9e4922fd97d6beeed86af3b3912b56e.jpg">
                    </a>
                </div>
                <div class="column">
                    <a href="github link" target="_blank">
                        <img id="github"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8VadhL4Flnl4qpYNSYY43Dp_7Td9THWE4kA&s">
                    </a>
                </div>
                <div class="column">
                    <a href="fb link" target="_blank">
                        <img id="facebook"
                            src="https://i.pinimg.com/736x/a5/ff/7f/a5ff7f2222ea3d7392c3a13b5e9b47e2.jpg">
                    </a>
                </div>
                <div class="column">
                    <a href="ig link" target="_blank">
                        <img id="insta" src="https://i.pinimg.com/736x/e9/2c/ac/e92cac3b8f440493a2580f3c23f04986.jpg">
                    </a>
                </div>
            </div>
            <div class="nav_buttons">
                <button id="btn_aboutme" onClick="document.getElementById('about_me').scrollIntoView();">ABOUT
                    ME</button>
                <br>
                <button id="btn_skills" onClick="document.getElementById('my_skills').scrollIntoView();">SKILLS</button>
                <br>
                <button id="btn_experience" onClick="document.getElementById('work_experience').scrollIntoView();">WORK
                    EXPERIENCE</button>
                <br>
                <button id="btn_education"
                    onClick="document.getElementById('education').scrollIntoView();">EDUCATION</button>
                <br>
                <a id="btn_projects" onClick="document.getElementById('projects').scrollIntoView();" target="_blank">
                    <button>MY PROJECTS</button>
                </a>
                <br>
            </div>
            <div class="nav_bottom_buttons">
                <p id="moreinfo">FOR MORE INFORMATION</p>
                <div class="column_btn">
                    <button onclick="location.href='mailto:natashagarcia@mit.edu.com'" id="btn_contactme">E-MAIL</button>
                </div>
                <div class="column_btn">
                    <button
                        onclick="location.href='https://github.com/Bertille2002/Web_site/blob/main/assets/img/Cv_Natasha_Garcia.jpg'"
                        id="btn_contactme">MY CV</button>
                </div>
            </div>
            <br>
            <a href='index.php' target="_blank">
                <button class="login">Logout</button>
            </a>
            <br>
        </div>
    </nav>
    <div id="mycontent" class="content">
        <div id="user-id" class="user">
            <h1 class="user-id"> Connected as  <?php echo htmlspecialchars($username) ?> </h1>
        </div>
        <br>
        <section id="about_me" class="scroll-element">
            <div id="title"></div>
            <div id="container">
                <img id="console" class="console_img" src="Assets/img/console.png" loading="lazy">
                <div id="typed_text" class="typedtextclass">
                    > Bonjour !
                    <br>
                    > Je m'appelle Natasha, j'ai 28 ans.
                    <br>
                    > Je suis passionée d'informatique et plus particulièrement par le développement web.
                    <br>
                    > Étant hautement qualifiée dans le dommaine du web,
                    <br>
                    > Je recherche l'opportunité de travailler là où je serai mise à l'épreuve quotidiennement.
                    <br>
                    > Si vous voulez plus d'informations, vous êtes au bon endroit :))
                </div>
            </div>
        </section>
        <section id="my_skills" class="aftertw scroll-element"
            style="visibility: visible; animation: 2s ease 0s 1 normal none running fadein;">
            <h1 class="titlehead">
                MY SKILLS
            </h1>
            <div id="skills_grid_view" class="skill-cards">
                <div id="full_stack_development" class="card">
                    <h3 class="card_title">Full Stack Developer</h3>
                    <img id="full_stack_logo" alt="Full Stack Platform"
                        src="https://www.fullstack.co.za/img/fullstack-logo.png" class="card_logo" loading="lazy">
                    <ul class="card_list">
                        <li>HTML, CSS, Java Script</li>
                        <li>Frameworks et bibliothèques JavaScript</li>
                        <li>Languages de codes Backend</li>
                        <li>Bases de données (SQL et NoSQL)</li>
                    </ul>
                </div>
                <div id="Machine_Learning" class="card">
                    <h3 class="card_title">Machine Learning</h3>
                    <img id="LLM_logo" alt="LLM"
                        src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Hey_Machine_Learning_Logo.png"
                        class="card_logo" loading="lazy">
                    <ul class="card_list">
                        <li>Programmation Python</li>
                        <li>Conception et entraînement de modèles</li>
                        <li>Maths et Stats appliquées</li>
                    </ul>
                </div>
                <div id="Cloud_Computing" class="card">
                    <h3 class="card_title">Cloud Computing</h3>
                    <img id="Cloud_logo" alt=""
                        src="https://img.favpng.com/8/14/19/cloud-computing-computer-icons-cloud-storage-png-favpng-L6Msg7y7MaH4gzB6Y7FXtq71t.jpg"
                        class="card_logo" loading="lazy">
                    <ul class="card_list">
                        <li>Maîtrise des plateformes cloud (Amazon Web Services, Microsoft Azure, Google Cloud
                            Plateform)</li>
                        <li>Virtualisation et conteneurisation</li>
                        <li>Conception d'architecture cloud</li>
                        <li>Sécurisation de cloud</li>
                    </ul>
                </div>
                <div id="c_cpp_development" class="card">
                    <h3 class="card_title"> C/C++ Developer</h3>
                    <img id="c_cpp_logo" alt="C/C++"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1822px-ISO_C%2B%2B_Logo.svg.png"
                        class="card_logo" loading="lazy">
                    <ul class="card_list">
                        <li>Low-level development bibliothèques</li>
                        <li>Systèmes inteégré</li>
                        <li>Prototypes Arduino et Raspberry Pi</li>
                    </ul>
                </div>
                <div id="API_design_development" class="card">
                    <h3 class="card_title">API Design et Developpement</h3>
                    <img id="API_logo" alt="API"
                        src="https://media.licdn.com/dms/image/C5112AQF49DOfOhCFSA/article-cover_image-shrink_720_1280/0/1579816811751?e=2147483647&v=beta&t=e47GGJDzoqsm4dl3qV2EjVWrxyMzIwsPmEE9Gywo83w"
                        class="card_logo" loading="lazy">
                    <ul class="card_list">
                        <li>Maîtrise des protocoles et standards API</li>
                        <li>Conception et documentation API</li>
                        <li>Sécurisation des API</li>
                        <li>Windows API</li>
                    </ul>
                </div>
        </section>
        <section id="work_experience" class="aftertw scroll-element"
            style="visibility: visible; animation: 2s ease 0s 1 normal none running fadein;">
            <h1 class="titlehead">
                WORK EXPERIENCE
            </h1>
            <div class="we_timeline">
                <div class="we_container left">
                    <div class="we_date">Sep 2023 - Nov 2024</div>
                    <img class="icon" alt="Google AI Logo" src="https://cdn.worldvectorlogo.com/logos/google-ai-1.svg"
                        loading="lazy">
                    <div class="we_content">
                        <h2>Développeur en chef Full Stack Quantum - Google AI Studio, Paris</h2>
                        <h3>Cheffe de projet sur le déploiment des fonctionnalités de Google AI Studio.</h3>
                        <h4>Conception de l'API Cloud AI pour l'integration de modèles Machine Learning.</h4>
                        <h5>Optimisation des Back-ends avec Kubernetes, réduisant les latences de 20%.</h5>
                    </div>
                </div>
                <div class="we_container right">
                    <div class="we_date">Mar 2020 - Aug 2023</div>
                    <img class="icon" alt="Tesla Logo"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Tesla_logo.png/1024px-Tesla_logo.png"
                        loading="lazy">
                    <div class="we_content">
                        <h2>Développeur Full Stack - Tesla, Palo Alto</h2>
                        <h3>Développement d'une plateforme de gestion des véhicules connectés avec Node.js et GraphQL.
                        </h3>
                        <h4>Mise en place de micro-services pour la mise à jour logicielle via Docker et Kubernetes.
                        </h4>
                        <h5>Création de Dashboard en React pour suivre la performance des véhicules.</h5>
                    </div>
                </div>
            </div>
        </section>
        <section id="education" class="aftertw scroll-element"
            style="visibility: visible; animation: 2s ease 0s 1 normal none running fadein;"></section>
        <h1 class="titlehead">
            EDUCATION
        </h1>
        <div class="we_timeline">
            <div class="we_container left">
                <div class="we_date_education">2017 - 2019</div>
                <img class="icon" alt="MIT logo"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/MIT_logo.svg/2560px-MIT_logo.svg.png"
                    loading="lazy">
                <div class="we_content">
                    <h2>Master expert en ingénierie et développement d'applications au MIT</h2>
                    <h3>Massachusetts Institute of Technology</h3>
                </div>
            </div>
            <div class="we_container right">
                <div class="we_date_education">2014 - 2017</div>
                <img class="icon" alt="MIT Logo"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/MIT_logo.svg/2560px-MIT_logo.svg.png"
                    loading="lazy">
                <div class="we_content">
                    <h2>Bachelor développeur de logiciels web et mobile</h2>
                    <h3>Massachusetts Institute of Technology</h3>
                </div>
            </div>
            <div class="we_container left">
                <div class="we_date_education">2012 - 2014</div>
                <img class="icon" alt="Henri IV Logo"
                    src="https://upload.wikimedia.org/wikipedia/fr/1/10/Lyc%C3%A9e_Henri-IV_logo.png" loading="lazy">
                <div class="we_content">
                    <h2>Baccalauréat Scientifique</h2>
                    <h3>Lycée Henri IV</h3>
                </div>
            </div>
        </div>
        </section>
        <section id="projects" class="aftertw scroll-element"
            style="visibility: visible; animation: 2s ease 0s 1 normal none running fadein;">
            <h1 class="titlehead">PROJECTS</h1>
            <a href="projects/project1.html" target="_blank">
                <button class="container">
                    <div class="bubbles">
                        <div class="bubble red"></div>
                        <div class="bubble orange"></div>
                        <div class="bubble green"></div>
                    </div>
                    <img src="projects/assets_proj/img_proj/resto.jpeg" alt="Image 1" class="image">
                    <div class="texte">
                        <h1>Restaurant Flottant Autonome</h1>
                        <p>Code utilisé : HTML, Python, SQL</p>
                    </div>
                </button>
            </a>
            <a href="projects/project2.html" target="_blank">
                <button class="container">
                    <div class="bubbles">
                        <div class="bubble red"></div>
                        <div class="bubble orange"></div>
                        <div class="bubble green"></div>
                    </div>
                    <img src="projects/assets_proj/img_proj/hotel.jpg" alt="Image 2" class="image">
                    <div class="texte">
                        <h1>Hôtel Flottant Écologique</h1>
                        <p>Codes utilisés : HTML/CSS/JS, Python, PHP, Ruby, Java, C#, Go, SQL</p>
                    </div>
                </button>
            </a>
            <a href="projects/project3.html" target="_blank">
                <button class="container">
                    <div class="bubbles">
                        <div class="bubble red"></div>
                        <div class="bubble orange"></div>
                        <div class="bubble green"></div>
                    </div>
                    <img src="projects/assets_proj/img_proj/bibli.jpg" alt="Image 3" class="image">
                    <div class="texte">
                        <h1>La Bibliothèque du Futur</h1>
                        <p>Codes utilisés : C#, C++, Python, SQL, HTML/CSS/JS</p>
                    </div>
                </button>
            </a>
            <a href="projects/project4.html" target="_blank">
                <button class="container">
                    <div class="bubbles">
                        <div class="bubble red"></div>
                        <div class="bubble orange"></div>
                        <div class="bubble green"></div>
                    </div>
                    <img src="projects/assets_proj/img_proj/village.jpg" alt="Image 1" class="image">
                    <div class="texte">
                        <h1>Eco-Village Intelligent</h1>
                        <p>Codes utilisés : Python, HTML/CSS/JS</p>
                    </div>
                </button>
            </a>
            <a href="projects/project5.html" target="_blank">
                <button class="container">
                    <div class="bubbles">
                        <div class="bubble red"></div>
                        <div class="bubble orange"></div>
                        <div class="bubble green"></div>
                    </div>
                    <img src="projects/assets_proj/img_proj/spatial.webp" alt="Image 1" class="image">
                    <div class="texte">
                        <h1>Centre Spatial Intéractif</h1>
                        <p>Codes utilisés : C#, C++, JS, Python, R</p>
                    </div>
                </button>
            </a>
        </section>
    </div>
    <script src='assets/source.js'></script>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>
