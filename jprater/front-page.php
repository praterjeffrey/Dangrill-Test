<?php get_header(); ?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
       <img src= "http://localhost:8888/jprater/wp-content/themes/jprater/images/background.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>MATT CUYAR</h1>
          <p>GENUIS.</p>
        </div>
      </div>
    </div>
    <div class="item">
       <img src= "http://localhost:8888/jprater/wp-content/themes/jprater/images/background2.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>JEFF PRATER</h1>
          <p>DOES STUFF.</p>
        </div>
      </div>
    </div>
    <div class="item">
       <img src= "http://localhost:8888/jprater/wp-content/themes/jprater/images/background3.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>That's right</h1>
          <p>That's right.</p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->
    <div class="container">

<div class="col-lg- start">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_content(); ?></h1>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

</div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Web Design. <span class="text-muted">From start to finish.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="img-rounded img-responsive"src="http://localhost:8888/jprater/wp-content/themes/jprater/images/placeholder.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="img-rounded img-responsive" src="http://localhost:8888/jprater/wp-content/themes/jprater/images/placeholder2.jpg"   alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">We can meet your print needs too. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">We want to talk to you. <span class="text-muted">Here's how.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="img-rounded img-responsive" src="http://localhost:8888/jprater/wp-content/themes/jprater/images/placeholder3.jpg"   alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      
      <div class="col-md-12"></div>
     <div class="col-md-12"></div>

      
      <?php get_footer(); ?>