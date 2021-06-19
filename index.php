<?php include_once('includes/header.php'); ?>
<script src="scripts/slideshow.js"></script>
<style>
    body::after{
        position:absolute; width:0; height:0; overflow:hidden; z-index:-1;
        content:url("imgs/header_images/image_1.jpg") url("imgs/header_images/image_2.jpg") 
        url("imgs/header_images/image_3.jpg") url("imgs/header_images/image_4.jpg")
        url("imgs/header_images/image_5.jpg") url("imgs/header_images/image_6.jpg")
        url("imgs/header_images/image_7.jpg");
    }
</style>
    </head>
    <body>
        <div class="footer-wrapper">
            <header class="header__home" id="landingpage-header">
                <?php include_once('includes/navbar.php'); ?>
                <div class="flex-center">
                    <img class="header-logo" src="./imgs/logo-light.png" alt="tuinaanleg4u logo">
                    <!-- <h1 class="heading-primary">Tuinaanleg4u</h1> -->
                    <!-- <span class="heading-subtext">Gardening services</span> -->
                </div>
            </header>
            
            <main>
                
            </main>
        </div>

        <?php include_once('includes/footer.php'); ?>

    </body>
</html>
