  </div><!-- .container -->
</main><!-- .site-main -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
    <div class="site-info">
      <p class="pull-left">
        <a data-toggle="tooltip" data-placement="top" title="아카이브" href="http://akaiv.com/" target="_blank">akaiv</a>
        &copy; <?php echo date( 'Y', current_time( 'timestamp' ) ); ?>
      </p>
      <p class="pull-right">
        <a class="link-admin" href="<?php echo get_admin_url(); ?>" target="_blank"><i class="fa fa-fw fa-terminal"></i></a>
      </p>
    </div><!-- .site-info -->
  </div><!-- .container -->
</footer><!-- .site-footer -->

<?php wp_footer(); ?>
</body>
</html>
