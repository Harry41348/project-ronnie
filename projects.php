<?php include_once('includes/connect.php'); ?>
<?php include_once('includes/header.php'); ?>
    </head>
    <body>
        <div class="footer-wrapper">
            <header class="header__dark">
                <?php include_once('includes/navbar.php'); ?>
                <div class="flex-center">
                    <h1 class="heading-secondary heading-dark">Projects</h1>
                    <p></p>
                </div>
            </header>
            
            <main>
                <section class="projects">
                    <div class="projects__container container">
                        <ul class="projects__list">
                            <?php 
                            
                                $query = "SELECT * FROM `projects` ORDER BY project_order";
                                $projects = mysqli_query($con, $query);
                
                                while($row = mysqli_fetch_array($projects)){
                                    echo "<li class=\"projects__item\">";
                                    echo "<a href=\"project.php?id=" . $row ['id'] . "\">";
                                    echo "<img class=\"projects-image\" src=\"imgs/" . $row ['pointer'] . "/finished.jpg\" alt=\"Project " . $row ['project_name'] . " image.\">";
                                    echo "</a>";
                                    echo "</li>";
                                }

                            ?>
                            <!-- <li class="projects__item">
                                <a href="#">
                                    <img src="imgs/project_01/finished.JPG" alt="Project 1 finished image" class="projects-image">
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </section>
            </main>
        </div>

        <?php include_once('includes/footer.php'); ?>
        
    </body>
</html>
