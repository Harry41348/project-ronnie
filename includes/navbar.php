<?php $page = basename($_SERVER['PHP_SELF']); ?>

<div class="nav__mobile--container">
  <div class="nav__menu" onclick="myFunction(this)">
    <div class="nav__menu--bar bar1"></div>
    <div class="nav__menu--bar bar2"></div>
    <div class="nav__menu--bar bar3"></div>
  </div>

  <div class="nav__menu--overlay" id="menu">
    <ul>
      <?php if ($page != "services.php") { echo "<li class=\"nav__item\"><a href=\"services.php\">Services</a></li>"; } ?>
      <?php if ($page != "projects.php") { echo "<li class=\"nav__item\"><a href=\"projects.php\">Projects</a></li>"; } ?>
      <?php if ($page != "contact.php") { echo "<li class=\"nav__item\"><a href=\"contact.php\">Contact</a></li>"; } ?>
    </ul>
  </div>
</div>

<div class="header-container">
  <div class="nav__desktop">
      <a <?php if ($page == "services.php") { echo "class=\"nav__item--active\""; } ?> href="services.php">Services</a>
      <a <?php if ($page == "projects.php") { echo "class=\"nav__item--active\""; } ?> href="projects.php">Projects</a>
      <a <?php if ($page == "contact.php") { echo "class=\"nav__item--active\""; } ?> href="contact.php">Contact</a>
  </div>
  <a href="index.php"><img src="./imgs/logo.png" alt="tuinaanleg4u logo"></a>
</div>