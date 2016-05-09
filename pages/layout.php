<?php include("header.html"); ?>
<section class="hero">
	    <div class="container is-fluid">

	<h1>Hero</h1>
	<h2>This is a Hero section with a fluid container</h2>
	    </div>
</section>
<section class="section">
  <div class="container">
    <h1 class="title">Container</h1>
    <h2 class="subtitle">
      A simple <strong>container</strong> to center your content horizontally
    </h2>

    <hr>

  </div>

  <div class="example">
    <div class="container">
      <div class="notification">
        This container is <strong>centered</strong> on desktop.
      </div>
    </div>
  </div>


  <div class="container">
    <hr>
    <h3 class="title">Fluid container</h3>
    <div class="content">
      <p>If you don't want to have a maximum width but want to keep the 20px margin on the left and right sides, add the <code>is-fluid</code> modifier:</p>
    </div>
  </div>

  <div class="example is-fullwidth">
    <div class="container is-fluid">
      <div class="notification">
        This container is <strong>fluid</strong>: it will have a 20px gap on either side.
      </div>
    </div>
  </div>

</section>

<section class="hero">
      <div class="hero-body">
        <div class="container">
          <p class="title">
            Hero title
          </p>
          <p class="subtitle">
            Hero subtitle
          </p>
        </div>
      </div>
    </section>
    
    <section class="section">
  <div class="container">
    <h1 class="title">Section</h1>
    <h2 class="subtitle">
      A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
    </h2>

    <hr>

    <div class="content">
      <p>Use sections as <strong>direct</strong> children of <code>body</code>.</p>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body&gt;</span>
  <span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"section"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Section<span class="nt">&lt;/h1&gt;</span>
        <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>
          A simple container to divide your page into <span class="nt">&lt;strong&gt;</span>sections<span class="nt">&lt;/strong&gt;</span>, like the one you're currently reading
        <span class="nt">&lt;/h2&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/section&gt;</span>
<span class="nt">&lt;/body&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <div class="content">
      <p>You can use the modifiers <code>is-medium</code> and <code>is-large</code> to change the <strong>spacing</strong>.</p>
    </div>

  </div>
</section>
<?php include("layout.html"); ?>
<?php include("footer.html"); ?>