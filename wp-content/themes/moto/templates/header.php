<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-moto" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Moto en ligne</a>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-moto">
          <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
              endif;
            ?>
       </div><!-- /.navbar-collapse -->
      </div>
    </div><!-- /.container-fluid -->
  </nav>
</header>