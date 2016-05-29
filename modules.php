<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-primary">
  <div class="has-flxs-head-3">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title"> Modules </h1>
        <div class="subtitle"> Multimedia containers. </div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="block has-text-centered"> <a class="button is-primary" href="#box">box</a> <a class="button is-primary" href="#media">media</a> <a class="button is-primary" href="#mod">mod</a><a class="button is-primary is-disabled" href="#gallery">gallery</a> <a class="button is-primary is-disabled" href="#modal">modal</a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="box">
  <div class="container">
    <h1>Box</h1>
    <hr>
    <div class="columns">
      <div class="column is-6">
        <div class="box">
          <h1>A simple box with rounded corners and a dropshadow.</h1>
        </div>
      </div>
      <div class="column is-6">
        <div class="box">
          <pre><code id="mod-box" class="html hljs xml"><span class="hljs-tag">&lt;div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span><span class="hljs-tag">&gt;</span>
  <span class="nt">&lt;h1</span><span class="s"></span><span class="nt">&gt;</span>&lt;/h1&gt;
<span class="nt">&lt;/div&gt;</span></code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#mod-box"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="media">
  <div class="container">
    <h1>Media</h1>
    <hr>
    <div class="columns">
      <div class="column is-1-2">
        <article class="media">
          <figure class="media-left structure-item" title="media-left">
            <p class="image is-64x64"> <img src="../images/twenty-fourteen.jpg"> </p>
          </figure>
          <div class="media-content structure-item is-structure-right" title="media-content">
            <div class="content">
              <p> <strong>Twenty Fourteen</strong> <small>Mixed by Slee</small><br>
                <small>Featuring : <em>A Case Of Funk</em> (Loco Dice Remix) by <strong>Nightmares On Wax</strong>, <em>Energia</em> (Pele & Shawnecy Dub Remix)	by <strong>Mindhacker</strong>, + more.</small> </p>
            </div>
            <nav class="level">
              <div class="level-left"> <a class="level-item"> <span class="icon is-small"><i class="ics icon-headphones"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-link"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-download"></i></span> </a> </div>
            </nav>
          </div>
        </article>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="mod-media" class="language-html" data-lang="html">&lt;article class=&quot;media&quot;&gt;<br />  &lt;figure class=&quot;media-left structure-item&quot; title=&quot;media-left&quot;&gt;<br />    &lt;p class=&quot;image is-64x64&quot;&gt; &lt;img src=&quot;&quot;&gt; &lt;/p&gt;<br />  &lt;/figure&gt;<br />  &lt;div class=&quot;media-content structure-item is-structure-right&quot; title=&quot;media-content&quot;&gt;
	&lt;div class=&quot;content&quot;&gt;<br />      &lt;p&gt;&lt;strong&gt;&lt;/strong&gt; &lt;small&gt;&lt;/small&gt;&lt;br&gt; &lt;small&gt;&lt;/small&gt;&lt;/p&gt;<br />    &lt;/div&gt;<br />    &lt;nav class=&quot;level&quot;&gt;<br />      &lt;div class=&quot;level-left&quot;&gt; 
		&lt;a class=&quot;level-item&quot;&gt;&lt;span class=&quot;icon is-small&quot;&gt;&lt;i class=&quot;ics icon-headphones&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt; 
		&lt;a class=&quot;level-item&quot;&gt;&lt;span class=&quot;icon is-small&quot;&gt;&lt;i class=&quot;ics icon-link&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt; 
		&lt;a class=&quot;level-item&quot;&gt;&lt;span class=&quot;icon is-small&quot;&gt;&lt;i class=&quot;ics icon-download&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/a&gt; 
       &lt;/div&gt;<br />     &lt;/nav&gt;<br />  &lt;/div&gt;<br />&lt;/article<span class="nt">&gt;</span></code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#mod-media"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="mod">
  <div class="container">
    <h1>Mod</h1>
    <hr>
    <div class="columns">
      <div class="column is-1-2">
        <div class="mod">
          <header class="mod-header">
            <p class="mod-header-title"> THE POST CATEGORY </p>
            <a class="mod-header-icon"> <i class="ics icon-chevdown"></i> </a> </header>
          <div class="mod-image">
            <div class="image is-3by2"> <img src="art/dot-space-1.svg" alt=""> </div>
          </div>
          <div class="mod-content">
            <div class="media">
              <div class="media-left">
                <figure class="image is-32x32"> <img src="../images/twenty-fifteen.jpg" alt="Image"> </figure>
              </div>
              <div class="media-content">
                <h1>The Post Title</h1>
              </div>
            </div>
            <div class="content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a> <br>
              <small>11:09 PM - 1 Jan 2016</small> </div>
          </div>
          <footer class="mod-footer"> <a class="mod-footer-item">Save</a> <a class="mod-footer-item">Edit</a> <a class="mod-footer-item">Delete</a> </footer>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre><code id="mod-mod" class="html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mod"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;mod-header&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
<span class="nt">	&lt;div</span> <span class="na">class=</span><span class="s">"mod-image"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mod-content"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;mod-footer&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#mod-mod"></a> </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="section" id="gallery">
  <div class="container">
    <h1>Gallery</h1>
    <hr>
    <p>Coming Soon</p>
    <div class="columns">
    </div>
  </div>
  </div>
</section>
<section class="section" id="modal">
  <div class="container">
    <h1>Modal</h1>
    <hr>
    <div class="content">Coming Soon</div>
  </div>
</section>
<?php include("inc/footer.php"); ?>