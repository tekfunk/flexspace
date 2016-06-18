<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-primary">
  <div class="has-flxs-head-2">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">Animations</h1>
        <div class="subtitle">Just add class css animations.</div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="block has-text-centered"> <a class="button is-primary" href="#loaders">loaders</a><a class="button is-primary" href="#progress">progress</a> <a class="button is-primary" href="#animate">animate.css</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="loaders">
  <div class="container">
    <h1>Loaders</h1>
    <hr>
    <div class="columns">
      <div class="column is-1-6" style="display:flex; align-items: stretch;">
        <div class="notification is-secondary" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
          <div class="loading-ring"></div>
        </div>
      </div>
      <div class="column is-1-6" style="display:flex; align-items: stretch;">
        <div class="notification is-success" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
          <div class="loading-circles"></div>
        </div>
      </div>
      <div class="column is-1-6" style="display:flex; align-items: stretch;">
        <div class="notification is-accent" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
          <div class="loading-fill"></div>
        </div>
      </div>
      <div class="column is-1-6" style="display:flex; align-items: stretch;">
        <div class="notification is-secondary" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
          <div class="loading-discs"></div>
        </div>
      </div>
      <div class="column is-1-6" style="display:flex; align-items: stretch;">
        <div class="notification is-success" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
          <div class="loading-clock"></div>
        </div>
      </div>
      <div class="column is-1-6" style="display:flex; align-items: stretch;">
        <div class="notification is-accent" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
          <div class="loading-start cylinder">
            <div class="hand"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="columns is-stacked">
      <div class="column is-1-2">
        <div class="box content is-light">
          <p>Here are some loading animations available. Working on having all of these single div.</p>
        </div>
        <div class="box content is-light">
          <p>Use .loading for a fullwindow loader that uses jQuery to fade out once everything is loaded. You can assign the standard colors to it. Inside of it, choose your animation.</p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="g2" class="html hljs xml">&lt;div class=&quot;loading-ring&quot;&gt;&lt;/div&gt;<br />&lt;div class=&quot;loading-circles&quot;&gt;&lt;/div&gt;<br />&lt;div class=&quot;loading-fill&quot;&gt;&lt;/div&gt;<br />&lt;div class=&quot;loading-discs&quot;&gt;&lt;/div&gt;<br />&lt;div class=&quot;loading-clock&quot;&gt;&lt;/div&gt;<br />&lt;div class=&quot;loading-start cylinder&quot;&gt;<br />  &lt;div class=&quot;hand&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;

&lt;div class=&quot;loading&quot;&gt;
	&lt;div class=&quot;loading-ring&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

$(document).ready(function(){ $(&quot;.loading&quot;).delay(100).fadeOut('fast'); });</code>
</pre>
          <a class="button ics-clipboard" data-clipboard-target="#g2"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="progress">
  <div class="container">
    <h1>Progress Bars</h1>
    <hr>
    <div class="box content is-light">Coming Soon.</div>
  </div>
</section>
<section class="section" id="animate">
  <div class="container">
    <h1><a href="http://daneden.github.io/animate.css/" target="_blank">animate.css</a></h1>
    <h3>by Daniel Eden</h3><hr>
    <div class="box content is-light">
    <h4><strong>.animated</strong> auto animates <strong>.hoover</strong> animates on hover <strong>.infinite</strong> loops the animation</h4>
    </div> 
    <div class="columns is-stacked">
      <div class="column is-1-5">
        <h1 class="hoover bounce">bounce</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover flash">flash</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover pulse">pulse</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rubberBand">rubberBand</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover shake">shake</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover headShake">headShake</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover swing">swing</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover tada">tada</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover wobble">wobble</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover jello">jello</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceIn">bounceIn</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceInDown">bounceInDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceInLeft">bounceInLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceInRight">bounceInRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceInUp">bounceInUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceOut">bounceOut</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceOutDown">bounceOutDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceOutLeft">bounceOutLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceOutRight">bounceOutRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover bounceOutUp">bounceOutUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeIn">fadeIn</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInDown">fadeInDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInDownBig">fadeInDownBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInLeft">fadeInLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInLeftBig">fadeInLeftBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInRight">fadeInRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInRightBig">fadeInRightBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInUp">fadeInUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeInUpBig">fadeInUpBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOut">fadeOut</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutDown">fadeOutDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutDownBig">fadeOutDownBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutLeft">fadeOutLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutLeftBig">fadeOutLeftBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutRight">fadeOutRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutRightBig">fadeOutRightBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutUp">fadeOutUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover fadeOutUpBig">fadeOutUpBig</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover flipInX">flipInX</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover flipInY">flipInY</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover flipOutX">flipOutX</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover flipOutY">flipOutY</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover lightSpeedIn">lightSpeedIn</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover lightSpeedOut">lightSpeedOut</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateIn">rotateIn</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateInDownLeft">rotateInDownLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateInDownRight">rotateInDownRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateInUpLeft">rotateInUpLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateInUpRight">rotateInUpRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateOut">rotateOut</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateOutDownLeft">rotateOutDownLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateOutDownRight">rotateOutDownRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateOutUpLeft">rotateOutUpLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rotateOutUpRight">rotateOutUpRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover hinge">hinge</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rollIn">rollIn</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover rollOut">rollOut</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomIn">zoomIn</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomInDown">zoomInDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomInLeft">zoomInLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomInRight">zoomInRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomInUp">zoomInUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomOut">zoomOut</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomOutDown">zoomOutDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomOutLeft">zoomOutLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomOutRight">zoomOutRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover zoomOutUp">zoomOutUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideInDown">slideInDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideInLeft">slideInLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideInRight">slideInRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideInUp">slideInUp</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideOutDown">slideOutDown</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideOutLeft">slideOutLeft</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideOutRight">slideOutRight</h1>
      </div>
      <div class="column is-1-5">
        <h1 class="hoover slideOutUp">slideOutUp</h1>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php"); ?>

</body>
</html>
