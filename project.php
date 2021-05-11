<?php include_once('includes/connect.php'); ?>
<?php include_once('includes/header.php'); ?>
    </head>
    <?php 
    if(!isset($_GET["id"])) {
        header("location: projects.php");
    } else if (!ctype_digit($_GET["id"])){
        header("location: projects.php");
    } else {
        $project_id = $_GET["id"];
        $query = "SELECT pointer, num_of_photos, project_name FROM `projects` WHERE id=" . $project_id;
        $project = mysqli_query($con, $query);

        if($project->num_rows === 1){
            $row = $project->fetch_row();
        }
    } 
    ?>
    <body>
        <div class="footer-wrapper">
            <header class="header__dark">
                <?php include_once('includes/navbar.php'); ?>
                <div class="flex-center">
                    <h1 class="heading-secondary heading-dark"><?php echo $row[2]; ?></h1>
                    <p></p>
                </div>
            </header>
            
            <main>
                <section class="projects">
                    <div class="projects__container container">
                        <ul class="projects__list">
                            <?php
                                
                                $pointer = $row[0] ?? false;
                                $number_of_photos = $row[1] ?? false;

                                echo "<li class=\"projects__item\">";
                                echo "<img class=\"projects-image\" src=\"imgs/" . $pointer . "/start.jpg\" alt=\"Start of project.\">";
                                echo "</li>";

                                for ($i = 1; $i <= $number_of_photos; $i++){
                                    echo "<li class=\"projects__item\">";
                                    echo "<img class=\"projects-image\" src=\"imgs/" . $pointer . "/image_" . $i . ".jpg\" alt=\"Image " . $i . ".\">";
                                    echo "</li>";
                                }

                                echo "<li class=\"projects__item\">";
                                echo "<img class=\"projects-image\" src=\"imgs/" . $pointer . "/finished.jpg\" alt=\"Start of project.\">";
                                echo "</li>";

                            ?>
                        </ul>
                    </div>
                </section>
            </main>
        </div>

        <?php include_once('includes/footer.php'); ?>
        
    </body>
</html>
