<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-primary">
  <div class="has-flxs-head-1">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title"> Page </h1>
        <div class="subtitle"> Basic page elements. </div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="block has-text-centered"> <a class="button is-primary" href="#layout">layout</a><a class="button is-primary" href="#container">container</a> <a class="button is-primary" href="#hero">hero</a>  <a class="button is-primary" href="#images">images</a> <a class="button is-primary" href="#helpers">helpers</a> <a class="button is-primary" href="#display">display</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="layout">
  <div class="container">
    <h1>Layout</h1>
    <hr>
    <div class="columns">
      <div class="column is-1-2">
        <div class="notification is-primary">
          <p>Basic page structure.</p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="basic-layout" class="html">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;<br />&lt;title&gt;flexspace&lt;/title&gt;<br />&lt;link rel=&quot;stylesheet&quot; href=&quot;/css/flexspace.css&quot; type=&quot;text/css&quot; &gt;<br />&lt;/head&gt;<br />&lt;body&gt;
	&lt;header class=&quot;header&quot;&gt;&lt;/header&gt;
	&lt;section class=&quot;hero&quot;&gt;&lt;/section&gt;
	&lt;section class=&quot;section&quot;&gt;&lt;/section&gt;
	&lt;footer class=&quot;footer&quot;&gt;&lt;/footer&gt;
&lt;/body&gt;<br />&lt;/html&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#basic-layout"> </a> </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="section" id="container">
  <div class="container">
    <h1>Container</h1>
    <hr>
 <div class="notification is-primary">    <p>Inside &lt;header&gt;&lt;/header&gt;, &lt;section&gt;&lt;/section&gt;, &lt;footer&gt;&lt;/footer&gt;.</p></div>
  </div>
</section>
<section class="hero">
  <div class="container">
    <div class="notification has-border">&lt;div class="container"&gt;&lt;/div&gt;</div>
  </div>
  <div class="container is-fluid style="margin-bottom: 5px;"">
    <div class="notification has-border">&lt;div class="container is-fluid"&gt;&lt;/div&gt;</div>
  </div>
</section>
<section class="section">
  <div class="container" id="hero">
    <h1>Hero</h1>
    <hr>
  </div>
</section>
<section class="hero is-accent is-bold" style="margin-bottom: 5px;">
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1>Hero with bold accent color.</h1>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-1-2">
        <div class="notification is-primary">
          <p>Fullwidth featured content section.</p>
          <p>Colors can be assigned with <strong>.is-white, .is-black, .is-light, .is-dark, .is-primary, .is-accent, .is-success, .is-alert, & .is-secondary.</strong> </p>
          <p>A subtle gradient can be applied with <strong>.is-bold</strong>.</p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="hero-1" class="html">&lt;section class=&quot;hero is-accent is-bold&quot;&gt;<br />  &lt;div class=&quot;hero-body has-text-centered&quot;&gt;<br />    &lt;div class=&quot;container&quot;&gt;<br />      &lt;h1&gt;Hero with bold accent color.&lt;/h1&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br />&lt;/section&gt;</code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#hero-1"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="hero is-medium has-border has-bkd-pattern-3" style="margin-bottom: 5px;">
  <div class="hero-head"></div>
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1 class="box">Medium hero with background pattern</h1>
    </div>
  </div>
  <div class="hero-footer"> </div>
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-1-2">
        <div class="notification is-primary">
          <p>Sizes can be <strong>.is-medium</strong>, <strong>.is-large</strong>, and <strong>.is-fullheight</strong>.</p>
          <p>Can have a background by adding <strong>.has-bkd-pattern-</strong>#</p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="hero-2" class="html">&lt;section class=&quot;hero is-medium has-bkd-pattern-3&quot;&gt;<br />  &lt;div class=&quot;hero-body has-text-centered&quot;&gt;<br />    &lt;div class=&quot;container&quot;&gt;<br />      &lt;h1 class=&quot;box&quot;&gt;Medium hero with background pattern&lt;/h1&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br />&lt;/section&gt;</code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#hero-2"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="hero is-fullheight has-bkd-image-1" style="margin-bottom: 5px;">
  <div class="hero-head is-white fade-3">
    <div class="container">
      <h1>Hero head with white color.</h1>
    </div>
  </div>
  <div class="hero-body is-black fade-3">
    <div class="container">
      <h1 class="hero-title">Fullscreen Image Hero with head, body, and foot.</h1>
    </div>
  </div>
  <div class="hero-foot is-accent fade-1">
    <div class="container">
      <h1>Hero foot with accent color.</h1>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-1-2">
        <div class="notification is-primary">
          <p>Add a background image with <strong>.has-bkd-image-</strong>#</p>
          <p>Hero sections can be broken up with a <strong>.hero-head</strong>(Top-Aligned), <strong>.hero-body</strong>(Center-Aligned), <strong>.hero-footer</strong>(Bottom-Aligned). </p>
          <p>All 3 parts can have separate colors can be assigned with <strong>.is-white, .is-black, .is-light, .is-dark, .is-primary, .is-accent, .is-success, .is-alert, & .is-secondary.</strong></p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="hero-3" class="html">&lt;section class=&quot;hero is-fullheight has-bkd-image-1&quot;&gt;<br />  &lt;div class=&quot;hero-head is-white fade-3&quot;&gt;<br />    &lt;div class=&quot;container&quot;&gt;<br />      &lt;h1&gt;Hero head with white color.&lt;/h1&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br />  &lt;div class=&quot;hero-body is-black fade-3&quot;&gt;<br />    &lt;div class=&quot;container&quot;&gt;<br />      &lt;h1 class=&quot;hero-title&quot;&gt;Fullscreen Image Hero with head, body, and foot.&lt;/h1&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br />  &lt;div class=&quot;hero-foot is-accent fade-1&quot;&gt;<br />    &lt;div class=&quot;container&quot;&gt;<br />      &lt;h1&gt;Hero foot with accent color.&lt;/h1&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br />&lt;/section&gt;</code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#hero-3"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="images">
  <div class="container">
    <h1>Images</h1>
    <hr>
    <h3>Squares</h3>
    <div class="columns">
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-16x16 is-center"><img src="art/dragotar.svg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-16x16&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-24x24"><img src="art/dragotar.svg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-16x16&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-32x32"><img src="art/dragotar.svg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-32x32&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-48x48"><img src="art/dragotar.svg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-48x48&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-64x64"><img src="art/dragotar.svg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-64x64&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-128x128"><img src="art/dragotar.svg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-128x128&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
    </div>
    <h3>Ratios</h3>
    <div class="columns">
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-square"><img src="images/DSCN0703_1x1.jpg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>image is-square</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-1by1"><img src="images/DSCN0703_1x1.jpg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-1by1&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-4by3"><img src="images/DSCN0703_4x3.jpg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-4by3&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-3by2"><img src="images/DSCN0703_3x2.jpg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-3by2&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-16by9"><img src="images/DSCN0703_16x9.jpg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-6by9&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
      <div class="column is-2">
        <div class="mod">
          <div class="mod-image">
            <figure class="image is-2by1"><img src="images/DSCN0703_2x1.jpg"></figure>
          </div>
          <div class="mod-content">
            <figure><code>&lt;figure class=&quot;image is-2by1&quot;&gt;&lt;img src&gt;&lt;/figure&gt;</code></figure>
          </div>
        </div>
      </div>
    </div>
    <div class="content"></div>
  </div>
</section>
<section class="section" id="helpers">
  <div class="container">
    <h1>Helpers</h1>
    <hr>
  </div>
  <div class="container has-border is-clearfix">
    <p>&lt;div class="is-clearfix"&gt;&lt;/div&gt;</p>
    <div class="content has-border is-pulled-left">&lt;div class="is-pulled-left"&gt;&lt;/div&gt;</div>
    <div class="content has-border is-pulled-right">&lt;div class="is-pulled-right"&gt;&lt;/div&gt;</div>
  </div>
  <div class="container has-border is-clearfix" style="height:100px; background-color:#5542C3">
    <div class="container is-overlay">
      <p>&lt;div class="is-overlay""&gt;&lt;/div&gt;</p>
    </div>
  </div>
  <div class="container">
    <div class="columns">
      <div class="column is-6">
        <div class="container has-border is-disabled">
          <p>&lt;div class="is-disabled"&gt;&lt;/div&gt;</p>
          <p> <a class="button is-outlined is-disabled">Try to click</a> </p>
        </div>
      </div>
      <div class="column is-6">
        <div class="container has-border">
          <p>&lt;div class="is-unselectable"&gt;&lt;/div&gt; </p>
          <p class="is-unselectable">Just try and select this text </p>
        </div>
      </div>
    </div>
    <div class="container has-border is-marginless">
      <p>&lt;div class="is-marginless"&gt;&lt;/div&gt;</p>
    </div>
    <div class="container has-border">
      <p>&lt;div class="has-border"&gt;&lt;/div&gt; </p>
    </div>
  </div>
</section>
<section class="section" id="display">
  <div class="container">
    <h1>Display</h1>
    <hr>
    <p>Coming Soon</p>
  </div>
</section>
<?php include("inc/footer.php"); ?>