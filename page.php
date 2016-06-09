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
        <div class="block has-text-centered"> <a class="button is-primary" href="#layout">layout</a><a class="button is-primary" href="#container">container</a> <a class="button is-primary" href="#sizes">sizes</a> <a class="button is-primary" href="#hero">hero</a> <a class="button is-primary" href="#helpers">helpers</a> <a class="button is-primary" href="#display">display</a> </div>
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
        <div class="box content is-light">
          <p>Basic page structure. This will be an HTML template.</p>
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
</div>
  <hr>
  <div class="container">
    <div class="box is-alert" style="margin-bottom: 20px;">.container</div>
  </div>
  <div class="container is-fluid" style="margin-bottom: 20px;">
    <div class="box is-success">.container.is-fluid</div>
  </div>
  <div class="container">
    <div class="columns">
      <div class="column is-1-2">
        <div class="box content is-light">
          <p>Use <code class="code-blk">.container</code> inside &lt;header&gt;&lt;/header&gt;, &lt;section&gt;&lt;/section&gt;, &lt;footer&gt;&lt;/footer&gt; to wrap and center content. <code class="code-blk">.is-fluid</code> has 20px left and right margins. </p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="g1" class="html hljs xml">  &lt;div class=&quot;container&quot;&gt;<br />    &lt;div class=&quot;box is-alert&quot;&gt;.container&lt;/div&gt;<br />  &lt;/div&gt;<br />  &lt;div class=&quot;container is-fluid&quot;&gt;<br />    &lt;div class=&quot;box is-success&quot;&gt;.container.is-fluid&lt;/div&gt;<br />  &lt;/div&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g1"></a> </div>
      </div>

    </div>
  </div>
</section>
<section class="section" id="sizes">
  <div class="container">
    <h1>Sizes</h1>
    <hr>
    <h3>Squares</h3>
    <div class="columns">
      <div class="column is-1-2">
        <div class="columns to-edges">
          <div class="column is-1-4">
            <div class="square is-16x16 box is-accent">16</div>
            <div class="square is-32x32 box is-accent">32</div>
            <div class="square is-48x48 box is-accent">48</div>
            <div class="square is-64x64 box is-accent">64</div>
          </div>
          <div class="column is-1-4">
            <div class="square is-96x96 box is-accent">96</div>
            <div class="square is-128x128 box is-accent">128</div>
          </div>
          <div class="column is-1-2">
            <div class="square is-256x256 box is-accent" style="float: right;">256</div>
          </div>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="g1" class="html hljs xml">&lt;div class=&quot;square is-16x16 box is-accent&quot;&gt;16&lt;/div&gt;<br />&lt;div class=&quot;square is-32x32 box is-accent&quot;&gt;32&lt;/div&gt;<br />&lt;div class=&quot;square is-48x48 box is-accent&quot;&gt;48&lt;/div&gt;<br />&lt;div class=&quot;square is-64x64 box is-accent&quot;&gt;64&lt;/div&gt;<br />&lt;div class=&quot;square is-96x96 box is-accent&quot;&gt;96&lt;/div&gt;<br />&lt;div class=&quot;square is-128x128 box is-accent&quot;&gt;128&lt;/div&gt;<br />&lt;div class=&quot;square is-256x256 box is-accent&quot;&gt;256&lt;/div&gt;&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g1"></a> </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <div class="box content is-light">
          <p>Use <code class="code-blk">.square</code> to make a square, and <code class="code-blk">.is-16x16</code> to set a size</p>
          <p>This is useful for avatars and thumbnails.</a></p>
        </div>
      </div>
    </div>
    <h3>Ratios</h3>
    <div class="columns align-center">
      <div class="column">
        <div class="ratio is-1by2 box is-accent">1by2</div>
      </div>
      <div class="column">
        <div class="ratio is-3by4 box is-accent">3by4</div>
      </div>
      <div class="column">
        <div class="ratio is-1by1 box is-accent">1by1</div>
      </div>
      <div class="column">
        <div class="ratio is-4by3 box is-accent">4by3</div>
      </div>
    </div>
     <div class="columns align-center">
      <div class="column">
        <div class="ratio is-3by2 box is-accent">3by2</div>
      </div>
      <div class="column">
        <div class="ratio is-16by9 box is-accent">16by9</div>
      </div>
      <div class="column">
        <div class="ratio is-2by1 box is-accent">2by1</div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <div class="box content is-light">
          <p>Use <code class="code-blk">.ratio</code> to make a box with height based on a ratio like <code class="code-blk">.is-1by2</code> </p>
          <p>This is useful for images.</a></p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="g1" class="html hljs xml">&lt;div class=&quot;ratio is-1by2 box is-accent&quot;&gt;is-1by2&lt;/div&gt;<br />&lt;div class=&quot;ratio is-3by4 box is-accent&quot;&gt;is-3by4&lt;/div&gt;<br />&lt;div class=&quot;ratio is-1by1 box is-accent&quot;&gt;is-1by1&lt;/div&gt;<br />&lt;div class=&quot;ratio is-4by3 box is-accent&quot;&gt;is-4by3&lt;/div&gt;<br />&lt;div class=&quot;ratio is-3by2 box is-accent&quot;&gt;is-3by2&lt;/div&gt;<br />&lt;div class=&quot;ratio is-16by9 box is-accent&quot;&gt;is-16by9&lt;/div&gt;<br />&lt;div class=&quot;ratio is-2by1 box is-accent&quot;&gt;is-2by1&lt;/div&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g1"></a> </div>
      </div>
    </div>
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
        <div class="box content is-light">
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
        <div class="box content is-light">
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
        <div class="box content is-light">
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