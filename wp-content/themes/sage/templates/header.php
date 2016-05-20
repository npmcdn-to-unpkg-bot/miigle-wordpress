<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
        <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <?php if(!is_front_page()): ?>
        <form class="navbar-form navbar-center" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
      <?php endif; ?>
      
      <ul class="nav navbar-nav navbar-right">        
        <?php if(is_front_page()): ?>
          <li><a href="#story" class="btn btn-primary navbar-btn">Read Our Story</a></li>
        <?php endif; ?>
        <?php if(is_user_logged_in()): ?>
          <li><a href="/product-post" class="btn btn-default navbar-btn">Post</a></li>
          <li><a href="/profile-product"><i class="fa fa-user"></i></a></li>
        <?php else: ?>
          <li><a href="/login" class="btn btn-default navbar-btn">Login</a></li>
          <li><a href="/sign-up" class="btn btn-primary navbar-btn">Signup</a></li>
        <?php endif; ?>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>