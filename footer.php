<footer class="l-footer p-footer">
  <div class="p-footer__inner l-inner">
    <h3 class="p-footer__title u-hide--pc">Code:<br>HOSHI</h3><!-- /.p-footer__title -->
    <nav class="p-footer__nav">
      <ul class="p-footer__navList">
        <?php
        if (is_front_page()) {
          $page_link = null;
        } else {
          $page_link = home_url('/');
        } ?>
        <li class="p-footer__navItem"><a href="<?php echo ($page_link); ?>" class="p-footer__navLink">Home</a></li><!-- /.p-footer__navItem -->
        <li class="p-footer__navItem"><a href="<?php echo ($page_link . '#profile'); ?>" class="p-footer__navLink">Profile</a></li><!-- /.p-footer__navItem -->
        <li class="p-footer__navItem"><a href="<?php echo ($page_link . '#skills'); ?>" class="p-footer__navLink">Skills</a></li><!-- /.p-footer__navItem -->
        <li class="p-footer__navItem"><a href="<?php echo ($page_link . '#works'); ?>" class="p-footer__navLink">Works</a></li><!-- /.p-footer__navItem -->
        <li class="p-footer__navItem"><a href="<?php echo ($page_link . '#check'); ?>" class="p-footer__navLink">Check</a></li><!-- /.p-footer__navItem -->
        <li class="p-footer__navItem"><a href="<?php echo home_url('/contact/'); ?>" class="p-footer__navLink">Contact</a></li><!-- /.p-footer__navItem -->
      </ul><!-- /.p-footer__navList -->
    </nav><!-- /.p-footer__nav -->
  </div><!-- /.p-footer__inner -->
  <div class="p-footer__copyright">
    <small>&copy; 2024 Hoshi</small>
  </div><!-- /.p-footer__copyright -->
</footer><!-- /.l-footer -->


<?php wp_footer(); ?>
</body>

</html>