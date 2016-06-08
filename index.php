<?php include('inc/head.php'); ?>
<section id="home" class="hero is-fullheight has-flxs-hero-2">
  <div class="hero-head is-white">
    <?php include('inc/header.php'); ?>
  </div>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title animated fadeInDownBig"><img src="../art/flexspace-logo-lrg-white.svg" width="400"></h1>
      <h2 class="subtitle animated fadeInUpBig" style="color: #ffffff;">Yet another website framework.</h2>
    </div>
  </div>
  <div class="hero-foot">
    <div class="container has-text-centered">
      <div class="block animated zoomIn"> <a class="button is-primary is-inverted" href="/page.php">page</a> <a class="button is-primary is-inverted" href="/grid.php">grid</a> <a class="button is-primary is-inverted" href="/modules.php">modules</a> <a class="button is-primary is-inverted" href="/ui.php">ui</a> <a class="button is-primary is-inverted" href="/combos.php">combos</a></span> <a class="button is-primary is-inverted" href="/art.php">art</a> <a class="button is-primary is-inverted" href="/animations.php">animations</a> <a class="button is-primary is-inverted" href="/variables.php">variables</a> </div>
    </div>
  </div>
</section>
<section id="about" class="hero is-large has-flxs-hero-1">
  <div class="hero-body">
    <div class="container">
      <div class="column is-2-3 is-offset-1-6">
        <div class="content">
	       <h1 style="font-weight: 500; color: #2957a6;">About  <img src="../art/flexspace-logo-lrg.svg" width="200" style="margin-bottom: -10px;"></h1> 
		   <p>After trying a number of different frameworks and never finding exactly what I wanted, I decided to create my own.</p>
          <p> This is the very beginning and at this point is still just for preview, but after a little more refining and additions I will post it on github. The core will be SCSS and built in a way so that parts (even whole libraries) can get easily added or removed. You will be able to develop with as many animation and effect libraries as you want, but when the site is done get a final css file that will only include the code you need. For the jobs that CSS can't handle, there will be JavaScript functions available.</p>
          <p>This modular approach will allow Flexspace to be...</p>
          <div class="columns">
            <div class="column">
              <h1 style="font-weight: 500; color: #2957a6;">Flexable</h1>
              <p>Flexspace can serve as a html/css/js design core for any number of backends. HTML & WordPress templates are already in the works.</p>
            </div>
            <div class="column">
              <h1 style="font-weight: 500; color: #2957a6;">Extendable</h1>
              <p>Flexspace will keep up with the constant change of best practices in designing and developing for the www as well as experiment with new and different ways of doing things.</p>
            </div>
          </div>
          <div class="columns"><i class="icon ics-codepen"></i></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>
