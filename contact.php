<?php include_once('includes/header.php'); ?>
    </head>
    <body class="contact-body">
        <div class="footer-wrapper">
            <header class="header__dark">
                <?php include_once('includes/navbar.php'); ?>
            </header>
            
            <main>
                <section class="contact">
                    <div class="flex-center">
                        <h1 class="heading-secondary heading-dark">Contact</h1>
                    </div>
                    <form action="contact_request.php" class="contact__form" method="POST" name="contactForm">
                        <div class="form__container">
                            <div class="form__group">
                                <input type="text" class="contact__form--control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form__group">
                                <input type="email" class="contact__form--control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form__group">
                                <input type="text" class="contact__form--control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form__group">
                                <textarea class="contact__form--control" name="message" id="message" cols="30" rows="4" placeholder="Write your message here"></textarea>
                            </div>
                            <div class="form__group">
                                <input type="submit" class="btn-contact" value="Send Message">
                            </div>
                        </div>
                    </form>
                </section>
            </main>
        </div>

        <?php include_once('includes/footer.php'); ?>
        
    </body>
</html>
