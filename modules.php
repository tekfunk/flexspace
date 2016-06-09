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
          <p>Box </p>
        </div>
        <div class="box content is-light">
          <p>Box is a simple content container with padding and colors. Corners can be adjusted with <strong>$box-radius</strong> variable.</p>
        </div>
      </div>
      <div class="column is-6">
        <div class="box">
          <pre><code id="mod-box" class="html hljs xml"><span class="hljs-tag">&lt;div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"box"</span><span class="hljs-tag">&gt;</span>
  <span class="nt">&lt;p</span><span class="s"></span><span class="nt">&gt;</span>&lt;/p&gt;
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
        <article class="media box">
          <figure class="media-left structure-item" title="media-left">
            <p class="square is-64x64"> <img src="../images/twenty-fourteen.jpg"> </p>
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
        <div class="box content is-light">
          <p>Media is a simple media container.</p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="mod-media" class="language-html" data-lang="html">&lt;article class=&quot;media&quot;&gt;<br />  &lt;figure class=&quot;media-left structure-item&quot; title=&quot;media-left&quot;&gt;<br />    &lt;p class=&quot;square is-64x64&quot;&gt; &lt;img src=&quot;&quot;&gt; &lt;/p&gt;<br />  &lt;/figure&gt;<br />  &lt;div class=&quot;media-content structure-item is-structure-right&quot; title=&quot;media-content&quot;&gt;
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
        <div class="mod" style="margin-bottom: 20px;">
          <div class="mod-header">
            <div class="mod-header-title">
              <h2><i class="ics icon-wrench"></i> Flexspace </h2>
            </div>
            <div class="mod-header-icon"><a class="post-edit-link"><i class="ics icon-edit"></i></a></div>
          </div>
          <div class="mod-tabbed" id="post-3061">
            <div id="mod-tab-1" class="mod-tabs is-active">
              <div class="mod-image">
                <div class="ratio is-6by9"><img width="1200" height="600" src="http://media.casadereyes.net/2016/05/flexspace-splash.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Flexspace Splash"></div>
              </div>
            </div>
            <div id="mod-tab-2" class="mod-tabs">
              <div class="mod-info"><i class="ics icon-users"></i>
                <h4>Client/Employer</h4>
                <p>Open Source</p>
              </div>
              <div class="mod-info"><i class="ics icon-wrench"></i>
                <h4>Project</h4>
                <p>Build and maintain a HTML/SCSS/JS framework and a demo/documentation site.</p>
              </div>
              <div class="mod-info"><i class="ics icon-gears"></i>
                <h4>Tools</h4>
                <p>Adobe CS, PHP, HTML, SCSS, Javascript</p>
              </div>
              <div class="mod-info"><i class="ics icon-link"></i>
                <h4>Links</h4>
                <p><a target="_blank">http://flexspace.casadereyes.net</a></p>
              </div>
            </div>
            <div id="mod-tab-3" class="mod-tabs">
              <div class="mod-info"><i class="ics icon-users"></i>
                <h4>Mod Tab 3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
            <div id="mod-tab-4" class="mod-tabs">
              <div class="mod-info"><i class="ics icon-users"></i>
                <h4>Mod Tab 4</h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
          <div class="mod-footer"> <a class="mod-footer-item is-active" data-post="post-3061" data-tab="mod-tab-1"> <i class="ics icon-home"></i>
            <div class="tooltip">Mod Home.</div>
            </a> <a class="mod-footer-item" data-post="post-3061" data-tab="mod-tab-2"><i class="ics icon-info"></i>
            <div class="tooltip">Quick Info.</div>
            </a> <a class="mod-footer-item" data-post="post-3061" data-tab="mod-tab-3"><i class="ics icon-webpage"></i>
            <div class="tooltip">Get the Details.</div>
            </a> <a class="mod-footer-item" data-post="post-3061" data-tab="mod-tab-4"><i class="ics icon-external"></i>
            <div class="tooltip">Visit the Site.</div>
            </a> </div>
          <div class="mod-content">
            <div class="mod-date"> Jun 2016 </div>
            <p><a>Flexspace</a> is a HTML5/SCSS/JS front-end development framework I am building. </p>
            <hr>
            <i class="ics icon-tags"></i> <a>Featured</a>, <a>Web Dev.</a><br>
          </div>
        </div>
        <div class="box content is-light">
          <p>Mod is a versitile content container aimed at providing a lot of information in a compact space. It features a tabbed content area with tooltip style rollovers on the buttons. </p>
          <p>It uses jQuery to switch the tabs and needs a unique id(#) for the tabs wrapper (.mod-tabbed) for the buttons to work.  In Wordpress for example I use <code>the_ID();</code></p>
          <p>Check out more examples @codepen.</p>
          <div class="block"> <a class="button is-primary" href="http://codepen.io/tekfunk/pen/LZVvxR" target="_blank"><i class="ics icon-codepen"></i>Audio Mod</a> </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre><code id="mod-mod" class="html" data-lang="html"><span class="nt"></span><span class="nt">&lt;div class=&quot;mod&quot;&gt;          
  &lt;div class=&quot;mod-header&quot;&gt;
      &lt;div class=&quot;mod-header-title&quot;&gt;&lt;h2&gt;&lt;i class=&quot;ics icon-wrench&quot;&gt;&lt;/i&gt; Flexspace &lt;/h2&gt;&lt;/div&gt;&lt;div class=&quot;mod-header-icon&quot;&gt;&lt;a class=&quot;post-edit-link&quot;&gt;&lt;i class=&quot;ics icon-edit&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mod-tabbed&quot; id=&quot;post-3061&quot;&gt;
    &lt;div id=&quot;mod-tab-1&quot; class=&quot;mod-tabs is-active&quot;&gt;
      &lt;div class=&quot;mod-image&quot;&gt;&lt;div class=&quot;image is-6by9&quot;&gt;&lt;img width=&quot;1200&quot; height=&quot;600&quot; src=&quot;http://media.casadereyes.net/2016/05/flexspace-splash.jpg&quot; class=&quot;attachment-post-thumbnail size-post-thumbnail wp-post-image&quot; alt=&quot;Flexspace Splash&quot;&gt;&lt;/div&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;mod-tab-2&quot; class=&quot;mod-tabs&quot;&gt;
      &lt;div class=&quot;mod-info&quot;&gt;&lt;i class=&quot;ics icon-users&quot;&gt;&lt;/i&gt;&lt;h4&gt;Client/Employer&lt;/h4&gt;&lt;p&gt;Open Source&lt;/p&gt;&lt;/div&gt;
      &lt;div class=&quot;mod-info&quot;&gt;&lt;i class=&quot;ics icon-wrench&quot;&gt;&lt;/i&gt;&lt;h4&gt;Project&lt;/h4&gt;&lt;p&gt;Build and maintain a HTML/SCSS/JS framework and a demo/documentation site.&lt;/p&gt;&lt;/div&gt;
      &lt;div class=&quot;mod-info&quot;&gt;&lt;i class=&quot;ics icon-gears&quot;&gt;&lt;/i&gt;&lt;h4&gt;Tools&lt;/h4&gt;&lt;p&gt;Adobe CS, PHP, HTML, SCSS, Javascript&lt;/p&gt;&lt;/div&gt;
      &lt;div class=&quot;mod-info&quot;&gt;&lt;i class=&quot;ics icon-link&quot;&gt;&lt;/i&gt;&lt;h4&gt;Links&lt;/h4&gt;&lt;p&gt;&lt;a target=&quot;_blank&quot;&gt;http://flexspace.casadereyes.net&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div id=&quot;mod-tab-3&quot; class=&quot;mod-tabs&quot;&gt;
      &lt;div class=&quot;mod-info&quot;&gt;&lt;i class=&quot;ics icon-users&quot;&gt;&lt;/i&gt;&lt;h4&gt;Mod Tab 3&lt;/h4&gt;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&lt;/p&gt;&lt;/div&gt;
    &lt;/div&gt;    
    &lt;div id=&quot;mod-tab-4&quot; class=&quot;mod-tabs&quot;&gt;
      &lt;div class=&quot;mod-info&quot;&gt;&lt;i class=&quot;ics icon-users&quot;&gt;&lt;/i&gt;&lt;h4&gt;Mod Tab 4&lt;/h4&gt;&lt;p&gt;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;&lt;/div&gt;		
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mod-footer&quot;&gt;          
    &lt;a class=&quot;mod-footer-item is-active&quot; data-post=&quot;post-3061&quot; data-tab=&quot;mod-tab-1&quot;&gt; &lt;i class=&quot;ics icon-home&quot;&gt;&lt;/i&gt;&lt;div class=&quot;tooltip&quot;&gt;Mod Home.&lt;/div&gt;&lt;/a&gt; 
    &lt;a class=&quot;mod-footer-item&quot; data-post=&quot;post-3061&quot; data-tab=&quot;mod-tab-2&quot;&gt;&lt;i class=&quot;ics icon-info&quot;&gt;&lt;/i&gt;&lt;div class=&quot;tooltip&quot;&gt;Quick Info.&lt;/div&gt;&lt;/a&gt; 
    &lt;a class=&quot;mod-footer-item&quot; data-post=&quot;post-3061&quot; data-tab=&quot;mod-tab-3&quot;&gt;&lt;i class=&quot;ics icon-webpage&quot;&gt;&lt;/i&gt;&lt;div class=&quot;tooltip&quot;&gt;Get the Details.&lt;/div&gt;&lt;/a&gt; 
    &lt;a class=&quot;mod-footer-item&quot; data-post=&quot;post-3061&quot; data-tab=&quot;mod-tab-4&quot;&gt;&lt;i class=&quot;ics icon-external&quot;&gt;&lt;/i&gt;&lt;div class=&quot;tooltip&quot;&gt;Visit the Site.&lt;/div&gt;&lt;/a&gt; 
  &lt;/div&gt;
  &lt;div class=&quot;mod-content&quot;&gt;
    &lt;div class=&quot;mod-date&quot;&gt; Jun 2016 &lt;/div&gt;&lt;p&gt;&lt;a&gt;Flexspace&lt;/a&gt; is a HTML5/SCSS/JS front-end development framework I am building. &lt;/p&gt;     
    &lt;hr&gt;
    &lt;i class=&quot;ics icon-tags&quot;&gt;&lt;/i&gt; &lt;a&gt;Featured&lt;/a&gt;, &lt;a&gt;Web Dev.&lt;/a&gt;&lt;br&gt;
  &lt;/div&gt;
&lt;/div&gt;</span></code></pre>
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
    <div class="columns"> </div>
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