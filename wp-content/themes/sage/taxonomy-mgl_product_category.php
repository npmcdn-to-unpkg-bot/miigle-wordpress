<?php

use Miigle\Models\User;
use Miigle\Models\Product;

$mgl_current_user = User\current();
$categories = Product\get_categories();
$is_brands = (isset($_GET['brands']) || is_post_type_archive('mgl_brand'));

?>

<div id="archive-mgl_product">

  <section id="splash">
    <div class="container text-center">
    
      <?php if($is_brands): ?>
        <h1>M+ Brands</h1>
      <?php else: ?>
        <h1>Introducing M+ Products.</h1>
        <p>Find the best products from environmentally and socially responsible brands around the world.</p>
      <?php endif; ?>
  
    </div>
  </section>
  
  <?php require_once(locate_template('templates/content-archive.php')); ?>
  
</div>