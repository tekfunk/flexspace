<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section id="page-nav">
  <h3><a href="#box">box</a> | <a href="#mod">mod</a> | <a href="#code">code</a> | <a href="#media">media</a> | <a href="#messages">messages</a> | <a href="#notifications">notifications</a> | <a href="#tags">tags</a>| <a href="#modal">modal</a> </h3>
</section>
<section class="hero blue">
  <div class="is-flx-hero-2">
    <div class="hero-header">
      <div class="mod trans-white">
        <div class="mod-content has-text-centered">
      <h1>Modules - Content Containers</h1>
            <div class="block">
	            <a class="button is-primary is-outlined" href="#box">box</a>
	            <a class="button is-primary is-outlined" href="#mod">mod</a>
				<a class="button is-primary is-outlined" href="#code">code</a>
				<a class="button is-primary is-outlined" href="#media">media</a>
				<a class="button is-primary is-outlined" href="#messages">messages</a>
	            <a class="button is-primary is-outlined" href="#notifications">notifications</a>
	            <a class="button is-primary is-outlined" href="#tags">tags</a>
	            <a class="button is-primary is-outlined is-disabled" href="#modal">modal</a>
            </div>

        </div>
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
          <article class="media">
            <div class="media-left">
              <figure class="image is-64x64"> <img src="../images/twenty-fifteen.jpg" alt="Dragotar"> </figure>
            </div>
            <div class="media-content">
              <div class="content">
                <p> <strong>Twenty Fifteen</strong> <small>by Slee</small><br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis. </p>
              </div>
              <nav class="level">
                <div class="level-left"> <a class="level-item"> <span class="icon is-small"><i class="ics icon-headphones"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-link"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-download"></i></span> </a> </div>
              </nav>
            </div>
          </article>
        </div>
      </div>
      <div class="column is-6">
        <div class="box">
          <pre><code id="col-sizes" class="html hljs xml"><span class="hljs-tag">&lt;div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span><span class="hljs-tag">&gt;</span>
 <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">&quot;media&quot;</span><span class="nt">&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;media-left&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">&quot;image&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;&quot;</span><span class="s"></span><span class="nt">&gt;</span><span class="nt">&lt;/figure&gt;</span><span class="nt">&lt;/div&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;media-content&quot;</span><span class="nt">&gt;</span><span class="nt"></span><span class="nt"></span><span class="nt">&lt;/div&gt;</span>
   <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">&quot;level&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#col-sizes"></a> </div>
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
          <pre><code id="mod-box" class="html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mod"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;mod-header&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
<span class="nt">	&lt;div</span> <span class="na">class=</span><span class="s">"mod-image"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"mod-content"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;mod-footer&quot;</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#mod-box"></a> 
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="section" id="code">
  <div class="container">
    <h1>Code</h1>
    <hr>
    <div class="columns">
      <div class="column is-1-2"> 
        <div class="box">
          <pre><code id="code-box" class="html">&lt;div class=&quot;box&quot;&gt;
  &lt;pre&gt;
    &lt;code id=&quot;xxx&quot; class=&quot;html&quot;&gt;&lt;/code&gt;
  &lt;/pre&gt;
  &lt;a class=&quot;button icon-clipboard&quot; data-clipboard-target=&quot;#xxx&quot;&gt;&lt;/a&gt;
&lt;/div&gt;</code></pre>
          <br>
          <a class="button icon-clipboard" data-clipboard-target="#code-box"></a> 
        </div>

      </div>
      <div class="column"> </div>
    </div>
  </div>
</section>
<section class="section" id="media">
  <div class="container">
    <h1>Media</h1>
    <hr>
    <div class="structure">
      <article class="media">
        <figure class="media-left structure-item" title="media-left">
          <p class="image is-64x64"> <img src="../art/dragotar.svg"> </p>
        </figure>
        <div class="media-content structure-item is-structure-right" title="media-content">
          <div class="content">
            <p> <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small> <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. </p>
          </div>
          <nav class="level">
            <div class="level-left"> <a class="level-item"> <span class="icon is-small"><i class="ics icon-webpage"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-bookmark"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-share"></i></span> </a> </div>
          </nav>
          <article class="media">
            <figure class="media-left">
              <p class="image is-64x64"> <img src="../art/dragotar.svg"> </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p> <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small> <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis. </p>
              </div>
              <nav class="level">
                <div class="level-left"> <a class="level-item"> <span class="icon is-small"><i class="ics icon-webpage"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-bookmark"></i></span> </a> <a class="level-item"> <span class="icon is-small"><i class="ics icon-share"></i></span> </a> </div>
              </nav>
              <article class="media"> Vivamus quis semper metus, non tincidunt dolor. Vivamus in mi eu lorem cursus ullamcorper sit amet nec massa. </article>
              <article class="media"> Morbi vitae diam et purus tincidunt porttitor vel vitae augue. Praesent malesuada metus sed pharetra euismod. Cras tellus odio, tincidunt iaculis diam non, porta aliquet tortor. </article>
            </div>
          </article>
        </div>
      </article>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/128x128"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/figure&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span><span class="nt"></span><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics"</span><span class="nt">&gt;&lt;/i&gt;</span><span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;level-item&quot;</span><span class="nt">&gt;</span><span class="nt"></span><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;ics&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;level-item&quot;</span><span class="nt">&gt;</span><span class="nt"></span><span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">&quot;ics&quot;</span><span class="nt">&gt;&lt;/i&gt;</span><span class="nt">&lt;/a&gt;</span>
       <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span></code></pre>
    </figure>
  </div>
</section>
<section class="section" id="messages">
  <div class="container">
    <h1>Messages</h1>
    <hr>
    <div class="columns">
      <div class="column is-1-2">
        <article class="message">
          <div class="message-header"> Hello World </div>
          <div class="message-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem. </div>
        </article>
        <article class="message">
          <div class="message-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem. </div>
        </article>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>

<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-primary"</span><span class="nt">&gt;</span>
   <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span><span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span><span class="nt"></span></code></pre>
        </figure>
      </div>
    </div>
  </div>
</section>
<section class="section" id="notifications">
  <div class="container">
    <h1>Notifications</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="notification is-primary"> accent lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
        <div class="notification is-success"> Success lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
        <div class="notification is-secondary"> secondary lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-accent"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  accent lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

</code>
</pre>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="tags">
  <div class="container">
    <h1>Tags</h1>
    <hr>
    <div class="columns">
      <div class="column is-6"> <span class="tag is-dark">Dark</span> <span class="tag is-primary">Primary</span> <span class="tag is-accent">Accent</span> <span class="tag is-success">Success</span> <span class="tag is-alert">Alert</span> <span class="tag is-secondary">Secondary</span> </div>
      <div class="column is-6">
        <div class="box">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-accent"</span><span class="nt">&gt;</span>Accent<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-alert"</span><span class="nt">&gt;</span>Alert<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/span&gt;</span></code>
</pre>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-6"> <span class="tag is-dark is-small">Small</span> <span class="tag is-primary is-medium">Medium</span> <span class="tag is-accent is-large">Large</span> </div>
      <div class="column is-6">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-primary is-medium"</span><span class="nt">&gt;</span>Medium<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-accent is-large"</span><span class="nt">&gt;</span>Large<span class="nt">&lt;/span&gt;</span></code>
</pre>
        </figure>
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