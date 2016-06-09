<?php include('inc/head.php'); ?>
<div class="loading is-primary">
  <div class="loading-circles"></div>
</div>
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
      <div class="column animated zoomIn"> <a class="button is-primary is-inverted" href="/page.php">page</a> <a class="button is-primary is-inverted" href="/copy.php">copy</a></span> <a class="button is-primary is-inverted" href="/grid.php">grid</a> <a class="button is-primary is-inverted" href="/modules.php">modules</a> <a class="button is-primary is-inverted" href="/ui.php">ui</a> <a class="button is-primary is-inverted" href="/art.php">art</a> <a class="button is-primary is-inverted" href="/animations.php">animations</a> <a class="button is-primary is-inverted" href="/variables.php">variables</a> </div>
    </div>
  </div>
</section>
<section id="about" class="hero has-flxs-hero-1">
	  <div class="hero-body">

    <div class="container">
      <div class="content">
        <div class="columns">
          <div class="column">
            <h1 style="font-weight: 500; color: #2957a6;">About <img src="../art/flexspace-logo-lrg.svg" width="200" style="margin-bottom: -10px;"></h1>
            <p>After trying a number of different frameworks and never finding exactly what I wanted, I decided the best thing to do was create and maintain my own.</p>
            <p>The core will be SCSS and built in a way so that parts (even whole libraries) can get easily added or removed. You will be able to develop with as many animation and effect libraries as you want, but when the site is done get a final css file that will only include the code you need. For the jobs that CSS can't handle, there will be JavaScript functions available.</p>
            <p>This modular approach will allow Flexspace to be...</p>
            <h1 style="font-weight: 500; color: #2957a6;">Flexable</h1>
            <p>Flexspace will be able to serve as a html/css/js design core for any number of backends. A WordPress template are already in the works.</p>
            <h1 style="font-weight: 500; color: #2957a6;">Extendable</h1>
            <p>Flexspace will keep up with the constant change of best practices in designing and developing for the www as well as experiment with new and different ways of doing things.</p>
          </div>
          <div class="column">
            <h1 style="font-weight: 500; color: #2957a6;">Status</h1>
            <p>I'm thinking of this as a soft launch.  The framework is functional but not complete or optimized. The full source will be available on Github, but until then you can use the <a href="http://flexspace.casadereyes.net/css/flexspace.css">css</a> from my current build and see examples at <a href="http://codepen.io/collection/neMeLG/">codepen.</a></p>
            <h1 style="font-weight: 500; color: #2957a6;">Externals</h1>
            <p>Sometimes someone has already done it and is willing to share, so I use various scripts, libraries, art & tools. Giving credit when credit is due.</p>
            <div class="columns">
              <div class="column">
                <p><a href="https://zenorocha.github.io/clipboard.js" target="_blank">clipboard.js</a> v1.5.10</p>
                <p> <a href="https://highlightjs.org" target="_blank">highlight.js</a> v9.4.0</p>
                <p><a href="http://imagesloaded.desandro.com" target="_blank">imagesLoaded</a> v3.1.8 </p>
                <p><a href="http://isotope.metafizzy.co" target="_blank">Isotope</a> v2.2.0</p>
                <p> <a href="https://jquery.org" target="_blank">jQuery</a> v1.12.4</p>
              </div>
              <div class="column">
                <p><a href="http://daneden.github.io/animate.css/" target="_blank">animate.css</a></p>
                <p><a href="http://madmalik.github.io/mononoki/" target="_blank">mononoki.otf</a></p>
	            <p><a href="https://icomoon.io/app" target="_blank">icomoon.io</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>      </div>

  </div>
</section>
<?php include('inc/footer.php'); ?>
