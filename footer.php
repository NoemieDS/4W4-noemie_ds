<!-- fermeture div calss .site du header -->
</div>
<footer class="site__footer">
  <section> <?php the_custom_logo() ?>    
    </section>
  <section>
    <?php wp_nav_menu(array(
      "menu" => "pied2page",
      "container" => "nav"
    )) ?>
  </section>
  <section class="footer-date">
  <?= date("Y") ?>
  </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>