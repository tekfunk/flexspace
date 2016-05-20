<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section id="page-nav">
  <h3><a href="#layout">layout</a> | <a href="#container">container</a> | <a href="#hero">hero</a> | <a href="#content">content</a> | <a href="#images">images</a> | <a href="#helpers">helpers</a> | <a href="#display">display</a></h3>
</section>
<section class="hero blue">
  <div class="is-flx-hero-4">
    <div class="hero-header">
      <div class="mod trans-white">
        <div class="mod-content has-text-centered">
      <h1>Page - Basic Page Elements</h1>
            <div class="block">
	            <a class="button is-primary is-outlined" href="#layout">layout</a>
	            <a class="button is-primary is-outlined" href="#container">container</a>
	            <a class="button is-primary is-outlined" href="#hero">hero</a>
				<a class="button is-primary is-outlined" href="#content">content</a>
				<a class="button is-primary is-outlined" href="#images">images</a>
				<a class="button is-primary is-outlined" href="#helpers">helpers</a>
	            <a class="button is-primary is-outlined" href="#display">display</a>
            </div>

         </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="layout">
  <div class="container">
    <h1>Layout</h1>
    <hr>
    <p>Basic page structure.</p>
    <div class="columns">
      <div class="column">
        <div class="box">
          <pre><code id="basic-layout" class="html">&lt;body&gt;
	&lt;header class=&quot;header&quot;&gt;&lt;/header&gt;
	&lt;section class=&quot;hero&quot;&gt;&lt;/section&gt;
	&lt;section class=&quot;section&quot;&gt;&lt;/section&gt;
	&lt;footer class=&quot;footer&quot;&gt;&lt;/footer&gt;
&lt;/body&gt;</code>
</pre>
   <a class="button icon-clipboard" data-clipboard-target="#basic-layout"> </a>  
    </div>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container" id="hero" style="margin-bottom: 10px;">
    <h1>Hero</h1>
    <hr>
    <p>Fullwidth featured content section.</p>
  </div>
</section>
<section class="hero is-medium has-border has-bkd-pattern-3" style="margin-bottom: 5px;">
  <div class="hero-head"></div>
  <div class="hero-body has-text-centered">
    <div class="container">
      <h1>Medium Hero with Background Pattern</h1>
      <h2>.hero .is-medium .has-bkd-pattern-3</h2>
    </div>
  </div>
  <div class="hero-footer">
  </div>
</section>
<section class="section">
  <div class="container">
      <div class="column">
        <div class="box">
          <pre><code id="hero-med" class="html">&lt;section class=&quot;hero is-medium has-bkd-pattern-3&quot;&gt;<br />  &lt;div class=&quot;hero-head&quot;&gt;&lt;/div&gt;<br />   &lt;div class=&quot;hero-body has-text-centered&quot;&gt;
    &lt;h1&gt;&lt;/h1&gt;
    &lt;h2&gt;&lt;/h2&gt;
   &lt;/div&gt;<br />  &lt;div class=&quot;hero-footer&quot;&gt;&lt;/div&gt;<br />&lt;/section&gt;</code></pre><br>
          <a class="button icon-clipboard" data-clipboard-target="#hero-med"></a> </div>
      </div>
  </div>
</section>
<section class="hero has-border is-fullheight has-bkd-image-1" style="margin-bottom: 5px;">
  <div class="hero-head">
  </div>
  <div class="hero-body">
    <div class="container">
		<h1 class="hero-title">Fullscreen Image Hero</h1>
    </div>
  </div>
  <div class="hero-footer">
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="box">
          <pre><code id="hero-full" class="html">&lt;section class=&quot;hero is-medium has-bkd-pattern-3&quot;&gt;<br />  &lt;div class=&quot;hero-head&quot;&gt;&lt;/div&gt;<br />   &lt;div class=&quot;hero-body has-text-centered&quot;&gt;
    &lt;h1&gt;&lt;/h1&gt;
    &lt;h2&gt;&lt;/h2&gt;
   &lt;/div&gt;<br />  &lt;div class=&quot;hero-footer&quot;&gt;&lt;/div&gt;<br />&lt;/section&gt;</code></pre><br>
          <a class="button icon-clipboard" data-clipboard-target="#hero-full"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="container">
  <div class="container">
    <h1>Container</h1>
    <hr>
    <p>Inside &lt;header&gt;&lt;/header&gt;, &lt;section&gt;&lt;/section&gt;, &lt;footer&gt;&lt;/footer&gt;.</p>
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
<section class="section" id="content">
  <div class="container">
    <h1>Content</h1>
    <hr>
    <p>Inside &lt;div class="container"&gt;&lt;/div&gt;</p>
    <div class="content has-border">
      <p>&lt;div class="content"&gt;&lt;/div&gt;</p>
      <h1>&lt;h1&gt;Hello World&lt;/h1&gt;</h1>
      <p>&lt;p&gt;Lorem ipsum dolor sit amet, <em>em -consectetur adipiscing elit</em>. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.&lt;/p&gt;</p>
      <h2 class="has-text-centered">&lt;h2 class="has-text-centered"&gt;Second level&lt;/h2&gt;</h2>
      <p class="has-text-centered">&lt;p class="has-text-centered"&gt;Curabitur accumsan turpis pharetra <strong>strong - augue tincidunt</strong> blandit. Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.&lt;/p&gt;</p>
      <ul>
        &lt;ul&gt;
        <li>&lt;li&gt;In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
        <li>&lt;li&gt;Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
        <li>&lt;li&gt;Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
        <li>&lt;li&gt;Ut non enim metus.</li>
        &lt;/ul&gt;
      </ul>
      <h3>h3 - Third level</h3>
      <p class="has-text-right">&lt;p class="has-text-right"&gt;Quisque ante lacus, malesuada ac auctor vitae, congue <a href="#">a - non ante</a>. Phasellus lacus ex, semper ac tortor nec, fringilla condimentum orci. Fusce eu rutrum tellus. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque. Maecenas eleifend sollicitudin dui, faucibus sollicitudin augue cursus non. Ut finibus eleifend arcu ut vehicula. Mauris eu est maximus est porta condimentum in eu justo. Nulla id iaculis sapien.&lt;/p&gt;</p>
      <ol>
        ol
        <li>li - Donec blandit a lorem id convallis.</li>
        <li>Cras gravida arcu at diam gravida gravida.</li>
        <li>Integer in volutpat libero.</li>
        <li>Donec a diam tellus.</li>
        <li>Aenean nec tortor orci.</li>
        <li>Quisque aliquam cursus urna, non bibendum massa viverra eget.</li>
        <li>Vivamus maximus ultricies pulvinar.</li>
      </ol>
      <blockquote>blockquote - Ut venenatis, nisl scelerisque sollicitudin fermentum, quam libero hendrerit ipsum, ut blandit est tellus sit amet turpis.</blockquote>
      <p>Quisque at semper enim, eu hendrerit odio. Etiam auctor nisl et <em>justo sodales</em> elementum. Maecenas ultrices lacus quis neque consectetur, et lobortis nisi molestie.</p>
      <p>Sed sagittis enim ac tortor maximus rutrum. Nulla facilisi. Donec mattis vulputate risus in luctus. Maecenas vestibulum interdum commodo.</p>
      <p>Suspendisse egestas sapien non felis placerat elementum. Morbi tortor nisl, suscipit sed mi sit amet, mollis malesuada nulla. Nulla facilisi. Nullam ac erat ante.</p>
      <h4>h4 - Fourth level</h4>
      <p>Nulla efficitur eleifend nisi, sit amet bibendum sapien fringilla ac. Mauris euismod metus a tellus laoreet, at elementum ex efficitur.</p>
      <p>Maecenas eleifend sollicitudin dui, faucibus sollicitudin augue cursus non. Ut finibus eleifend arcu ut vehicula. Mauris eu est maximus est porta condimentum in eu justo. Nulla id iaculis sapien.</p>
      <p>Phasellus porttitor enim id metus volutpat ultricies. Ut nisi nunc, blandit sed dapibus at, vestibulum in felis. Etiam iaculis lorem ac nibh bibendum rhoncus. Nam interdum efficitur ligula sit amet ullamcorper. Etiam tristique, leo vitae porta faucibus, mi lacus laoreet metus, at cursus leo est vel tellus. Sed ac posuere est. Nunc ultricies nunc neque, vitae ultricies ex sodales quis. Aliquam eu nibh in libero accumsan pulvinar. Nullam nec nisl placerat, pretium metus vel, euismod ipsum. Proin tempor cursus nisl vel condimentum. Nam pharetra varius metus non pellentesque.</p>
      <h5>h5 - Fifth level</h5>
      <p>Aliquam sagittis rhoncus vulputate. Cras non luctus sem, sed tincidunt ligula. Vestibulum at nunc elit. Praesent aliquet ligula mi, in luctus elit volutpat porta. Phasellus molestie diam vel nisi sodales, a eleifend augue laoreet. Sed nec eleifend justo. Nam et sollicitudin odio.</p>
      <h6>h6 - Sixth level</h6>
      <p>Cras in nibh lacinia, venenatis nisi et, auctor urna. Donec pulvinar lacus sed diam dignissim, ut eleifend eros accumsan. Phasellus non tortor eros. Ut sed rutrum lacus. Etiam purus nunc, scelerisque quis enim vitae, malesuada ultrices turpis. Nunc vitae maximus purus, nec consectetur dui. Suspendisse euismod, elit vel rutrum commodo, ipsum tortor maximus dui, sed varius sapien odio vitae est. Etiam at cursus metus.</p>
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
    <h3>ratios</h3>
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
  </div>
   
</section>
<?php include("inc/footer.php"); ?>