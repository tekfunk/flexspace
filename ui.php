<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section id="page-nav">
  <h3><a href="#button">button</a> | <a href="#tooltip">tooltip</a> | <a href="#nav">nav</a> | <a href="#panel">panel</a> | <a href="#menu">menu</a> | <a href="#form">form</a> | <a href="#tabs">tabs</a> | <a href="#pagination">pagination</a> | <a href="#progress">progress</a> </h3>
</section>
<section class="hero blue">
  <div class="is-flx-hero-4">
    <div class="hero-header">
      <div class="mod trans-white">
        <div class="mod-content has-text-centered">
          <h1>UI - Point & Hover & Click</h1>
          <div class="block"> <a class="button is-primary is-outlined" href="#button">button</a> <a class="button is-primary is-outlined" href="#nav">nav</a> <a class="button is-primary is-outlined is-disabled" href="#tabs">tabs</a> <a class="button is-primary is-outlined is-disabled" href="#panel">panel</a> <a class="button is-primary is-outlined is-disabled" href="#menu">menu</a> <a  class="button is-primary is-outlined is-disabled" href="#form">form</a> <a class="button is-primary is-outlined is-disabled" href="#pagination">pagination</a> <a class="button is-primary is-outlined is-disabled" href="#progress">progress</a> <a class="button is-primary is-outlined is-disabled" href="#tooltip">tooltip</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="button">
  <div class="container">
    <h1>Button</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="media block to-edges"> <a class="button">Button</a> <a class="button is-white">White</a> <a class="button is-light">Light</a> <a class="button is-dark">Dark</a> <a class="button is-black">Black</a> <a class="button is-link">Link</a> </div>
        <div class="media block to-edges"> <a class="button is-primary">Primary</a> <a class="button is-secondary">Secondary</a> <a class="button is-accent">Accent</a> <a class="button is-success">Success</a> <a class="button is-alert">Alert</a> </div>
        <div class="content">
          <div class="notification">
            <p>To create a button, add <strong>.button</strong>.</p>
            <p>Colors can be assigned with <strong>.is-$color</strong> from the choices in the code box. </p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
<code id="ui-1" class="html">&lt;a class=&quot;a&quot;&gt;Button&lt;/a&gt;
&lt;a class=&quot;button is-white&quot;&gt;White&lt;/a&gt;
&lt;a class=&quot;button is-light&quot;&gt;Light&lt;/a&gt;
&lt;a class=&quot;button is-dark&quot;&gt;Dark&lt;/a&gt;
&lt;a class=&quot;button is-black&quot;&gt;Black&lt;/a&gt;
&lt;a class=&quot;button is-link&quot;&gt;Link&lt;/a&gt;
&lt;a class=&quot;button is-primary&quot;&gt;Primary&lt;/a&gt;
&lt;a class=&quot;button is-secondary&quot;&gt;Secondary&lt;/a&gt;
&lt;a class=&quot;button is-accent&quot;&gt;Accent&lt;/a&gt;
&lt;a class=&quot;button is-success&quot;&gt;Success&lt;/a&gt;
&lt;a class=&quot;button is-alert&quot;&gt;Alert&lt;/a&gt;
</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-1"></a> </div>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="media block to-edges"> <a class="button"><i class="ics icon-rollthe"></i>Throw Dice</a> <a class="button is-primary"><i class="ics icon-headphones"></i>Listen</a> <a class="button is-secondary is-outlined"><i class="ics icon-lightbulb"></i>Get Ideas</a> <a class="button is-success"><i class="ics icon-circlecheck"></i>OK</a> </div>
        <div class="media block to-edges"> <a class="button is-small">Small</a> <a class="button">Normal</a> <a class="button is-medium">Medium</a> <a class="button is-large">Large</a> </div>
        <div class="content">
          <div class="notification">
            <p><a href="art.php">Available icons</a> can be added with <strong>&lt;i class=&quot;ics icon-$name&quot;&gt;&lt;/i&gt;</strong></p>
            <p>Other Sizes can be assigned with <strong>.is-small</strong>, .<strong>is-medium</strong>, .<strong>is-large</strong>.</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
<code id="ui-1" class="html">&lt;a class=&quot;button&quot;&gt;
  &lt;i class=&quot;ics icon-rollthe&quot;&gt;&lt;/i&gt;
  Throw Dice
&lt;/a&gt; <br />&lt;a class=&quot;button is-primary&quot;&gt;&lt;i class=&quot;ics icon-headphones&quot;&gt;&lt;/i&gt;Listen&lt;/a&gt; <br />&lt;a class=&quot;button is-secondary is-outlined&quot;&gt;&lt;i class=&quot;ics icon-lightbulb&quot;&gt;&lt;/i&gt;Get Ideas&lt;/a&gt; <br />&lt;a class=&quot;button is-success&quot;&gt;&lt;i class=&quot;ics icon-circlecheck&quot;&gt;&lt;/i&gt;OK&lt;/a&gt; 
&lt;a class=&quot;button is-small&quot;&gt;Small&lt;/a&gt;
&lt;a class=&quot;button is-medium&quot;&gt;Medium&lt;/a&gt;
&lt;a class=&quot;button is-large&quot;&gt;Large&lt;/a&gt;
</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-1"></a> </div>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="block">
          <div class="notification is-primary"> <a class="button is-inverted">Inverted</a> <a class="button is-primary is-inverted">Inverted</a> <a class="button is-accent is-inverted">Inverted</a> <a class="button is-success is-inverted">Inverted</a> <a class="button is-secondary is-inverted">Inverted</a> </div>
        </div>
        <div class="block"> <a class="button is-outlined">Outlined</a> <a class="button is-primary is-outlined">Outlined</a> <a class="button is-accent is-outlined">Outlined</a> <a class="button is-success is-outlined">Outlined</a> <a class="button is-secondary is-outlined">Outlined</a> </div>
        <div class="block"> <a class="button is-loading">Loading</a> <a class="button is-primary is-loading">Loading</a> <a class="button is-accent is-loading">Loading</a> <a class="button is-success is-loading">Loading</a> <a class="button is-alert is-loading">Loading</a> <a class="button is-secondary is-loading">Loading</a> </div>
        <div class="block"> <a class="button is-disabled">Disabled</a> <a class="button is-primary is-disabled">Disabled</a> <a class="button is-accent is-disabled">Disabled</a> <a class="button is-success is-disabled">Disabled</a> <a class="button is-alert is-disabled">Disabled</a> <a class="button is-secondary is-disabled">Disabled</a> </div>
        <div class="content">
          <div class="notification">
            <p>These variations are avaiable for buttons:</p>
            <p><strong>.is-inverted</strong> <strong>.is-outlined</strong> <strong>.is-loading</strong> <strong>.is-disabled</strong></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
    <code id="ui-2" class="html">&lt;a class=&quot;button is-inverted&quot;&gt;Inverted&lt;/a&gt;
&lt;a class=&quot;button is-outlined&quot;&gt;Outlined&lt;/a&gt;
&lt;a class=&quot;button is-loading&quot;&gt;Loading&lt;/a&gt;
&lt;a class=&quot;button is-disabled&quot;&gt;Disabled&lt;/a&gt;</code>
  </pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-2"></a> </div>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="block">
          <p class="control is-grouped"><a class="button is-primary">Save changes</a> <a class="button">Cancel</a> <a class="button is-secondary">Delete post</a></p>
        </div>
        <div class="block">
          <p class="control has-addons"><a class="button"><span>Left</span></a> <a class="button"> <span>Center</span></a> <a class="button"> <span>Right</span></a></p>
        </div>
        <div class="content">
          <div class="notification">
            <p>If you want to <strong>group</strong> buttons together, use the <code>is-grouped</code> modifier on the <code>control</code> container:</p>
            <p>If you want to use buttons as <strong>addons</strong>, use the <code>has-addons</code> modifier on the <code>control</code> container:</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
    <code id="ui-2" class="html">&lt;a class=&quot;button is-inverted&quot;&gt;Inverted&lt;/a&gt;
&lt;a class=&quot;button is-outlined&quot;&gt;Outlined&lt;/a&gt;
&lt;a class=&quot;button is-loading&quot;&gt;Loading&lt;/a&gt;
&lt;a class=&quot;button is-disabled&quot;&gt;Disabled&lt;/a&gt;</code>
  </pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-2"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="nav">
  <div class="container">
    <h1>Nav</h1>
    <hr>
    <div class="content">
      <p> The <code>nav</code> container can have <strong>3 parts</strong>: </p>
      <ul>
        <li><code>nav-left</code></li>
        <li><code>nav-center</code></li>
        <li><code>nav-right</code></li>
      </ul>
      <p> For responsiveness, <strong>2 additional</strong> classes are available: </p>
      <ul>
        <li><code>nav-toggle</code> for the hamburger menu on mobile</li>
        <li><code>nav-menu</code> for menu that is collapsable on mobile (you can combine it with <code>nav-right</code>)</li>
      </ul>
    </div>
    <div class="example">
      <nav class="nav">
        <div class="nav-left"> <a class="nav-item" href="#"> <img src="art/flexspace-logo.svg" alt="flexspace" width="120px"> </a> </div>
        <div class="nav-center"> <a class="nav-item" href="#"> <span class="icon"> <i class="ics icon-github"></i> </span> </a> <a class="nav-item" href="#"> <span class="icon"> <i class="ics icon-twitter"></i> </span> </a> </div>
        <span class="nav-toggle"> <span></span> <span></span> <span></span> </span>
        <div class="nav-right nav-menu"> <a class="nav-item" href="#"> Home </a> <a class="nav-item" href="#"> Documentation </a> <a class="nav-item" href="#"> Blog </a> <span class="nav-item"> <a class="button"> <span class="icon"> <i class="ics icon-twitter"></i> </span> <span>Tweet</span> </a> <a class="button is-primary" href="#"> <span class="icon"> <i class="ics icon-download"></i> </span> <span>Download</span> </a> </span> </div>
      </nav>
    </div>
    <hr>
    <h3>Modifiers</h3>
    <div class="content">
      <ul>
        <li>the <code>nav</code> container can have a <strong>shadow</strong> by adding the <code>has-shadow</code> modifier</li>
        <li>the <code>nav-item</code> can become <strong>active</strong> by adding the <code>is-active</code> modifier</li>
        <li>the <code>nav-item</code> can become a <strong>tab</strong> by adding the <code>is-tab</code> modifier</li>
      </ul>
    </div>
  </div>
  <div class="example">
    <nav class="nav has-shadow">
      <div class="container">
        <div class="nav-left"> <a class="nav-item is-tab is-active">Card</a> <a class="nav-item is-tab">Level</a> <a class="nav-item is-tab">Media object</a> <a class="nav-item is-tab">Menu</a> <a class="nav-item is-tab">Message</a> <a class="nav-item is-tab">Modal</a> <a class="nav-item is-tab">Nav</a> <a class="nav-item is-tab">Pagination</a> <a class="nav-item is-tab">Panel</a> <a class="nav-item is-tab">Tabs</a> </div>
      </div>
    </nav>
  </div>
</section>
<section class="section" id="panel">
  <div class="container">
    <h1>Panel</h1>
    <hr>
     <div class="content">Coming Soon.</div>
 </div>
</section>
<section class="section" id="menu">
  <div class="container">
    <h1>Menu</h1>
    <hr>
    <div class="content">Coming Soon.</div>
  </div>
</section>
<section class="section" id="form">
  <div class="container">
    <h1>Form</h1>
    <hr>
    <div class="content">Coming Soon.</div>
  </div>
</section>
<section class="section" id="tabs">
  <div class="container">
    <h1>Tabs</h1>
    <hr>
    <div class="content">Coming Soon.</div>
   </div>
</section>
<section class="section" id="pagination">
  <div class="container">
    <h1>Pagination</h1>
    <hr>
    <div class="content">Coming Soon.</div>
  </div>
</section>
<section class="section" id="progress">
  <div class="container">
    <h1>Progress Bars</h1>
    <hr>
    <div class="content">Coming Soon.</div>
  </div>
</section>
<section class="section" id="tooltip">
  <div class="container">
    <h1>Tooltip</h1>
    <hr>
    <div class="content">Coming Soon.</div>
  </div>
</section>
<?php include("inc/footer.php"); ?>
