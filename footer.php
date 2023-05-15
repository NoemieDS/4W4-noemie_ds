<!-- fermeture div calss .site du header -->
</div>
<footer class="site__footer">
<h2 class="footer_titre"><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h2>
  <div class="footer_ligne1">
    <section>
      <?php the_custom_logo() ?>
    </section>
    <section class="sidebar">
      <?php dynamic_sidebar('footer_1'); ?>
    </section>
    <section class="sidebar">
      <?php dynamic_sidebar('footer_2'); ?>
    </section>
  </div>
  <div class="footer-ligne2">
    <?php dynamic_sidebar('footer_3'); ?>
   
    <p> <?= date("Y") ?> </p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>