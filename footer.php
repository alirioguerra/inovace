<!-- footer -->
<footer id="contato">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/study-people.svg" alt="">
      </div>
      <div class="col-md-6">
        <h2>Contato</h2>
        <?php echo do_shortcode('[contact-form-7 id="42" title="Formulário de contato 1"]'); ?>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->

<!-- super footer -->
  <section id="super-footer">
    <div class="container">
      <div class="row super-footer">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/svg/inovace-negative.svg" alt="">
        </div>
        <div>
          <p>todos os direitos reservados.</p>
        </div>
        <div>
          <ul class="social">
            <li class="social-item"><a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/svg/facebook.svg" alt=""></a></li>
            <li class="social-item"><a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/svg/instagram.svg" alt=""></a></li>
            <li class="social-item"><a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/svg/whatsapp.svg" alt=""></a></li>
            <li class="social-item"><a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/img/svg/behance.svg" alt=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- super footer end -->
<?php wp_footer(); ?>
</body>
</html>
