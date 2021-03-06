<footer class="footer">
  <div class="footer__top">
    <div class="footer__contact">
      <h3 class="footer__text">Contact</h3>
      <p><i class="far fa-envelope"></i>ronnie@tuinaanleg4u.nl</p>
      <p><i class="fas fa-mobile-alt"></i>+32 07958 584832</p>
    </div>
    <div class="footer__links">
      <h3 class="footer__text">Links</h3>
      <ul class="footer__list">
        <?php if ($page != "services.php" && $page != "index.php") { echo "<li class=\"footer__item\"><a href=\"services.php\">Diensten</a></li>"; } ?>
        <?php if ($page != "projects.php" && $page != "project.php") { echo "<li class=\"footer__item\"><a href=\"projects.php\">Projecten</a></li>"; } ?>
        <?php if ($page != "contact.php") { echo "<li class=\"footer__item\"><a href=\"contact.php\">Contact</a></li>"; } ?>
      </ul>
    </div>
  </div>
  <div class="footer__bottom">
    <p class="footer__text">Copyright &#169; 2009-2021 tuinaanleg4u.nl</p>
  </div>
</footer>