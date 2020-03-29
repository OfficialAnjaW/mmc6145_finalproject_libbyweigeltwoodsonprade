<footer>

  <!-- Footer Widgets -->
  <div class ="container">
    <div class="row">

      <!-- Widget Area 7: Left Footer -->
      <div class="col-lg-4 d-flex align-items-center">
        <?php dynamic_sidebar('left-footer'); ?>
      </div>

      <!-- Widget Area 8: Middle Footer -->
      <div class="col-lg-4 d-flex align-items-center">
        <?php dynamic_sidebar('middle-footer'); ?>
      </div>

      <!-- Widget Area 9: Right Footer -->
      <div class="col-lg-4 d-flex align-items-center">
        <?php dynamic_sidebar('right-footer'); ?>
      </div>

    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
