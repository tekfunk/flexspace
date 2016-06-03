<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-primary">
  <div class="has-flxs-head-4">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title"> UI </h1>
        <div class="subtitle"> Point & Hover & Click </div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="block has-text-centered"> <a class="button is-primary" href="#button">button</a> <a class="button is-primary" href="#nav">nav</a> <a class="button is-primary is-disabled" href="#tabs">tabs</a> <a class="button is-primary is-disabled" href="#panel">panel</a> <a class="button is-primary is-disabled" href="#menu">menu</a> <a  class="button is-primary is-disabled" href="#form">form</a> <a class="button is-primary is-disabled" href="#pagination">pagination</a> <a class="button is-primary is-disabled" href="#progress">progress</a> <a class="button is-primary is-disabled" href="#tooltip">tooltip</a></div>
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
            <p>Colors can be assigned with <strong>.is-white</strong>(etc) from the choices in the code box. </p>
            <p>Corners can be adjusted with <strong>$box-radius</strong> variable.</p>
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
<code id="ui-2" class="html">&lt;a class=&quot;button&quot;&gt;
  &lt;i class=&quot;ics icon-rollthe&quot;&gt;&lt;/i&gt;
  Throw Dice
&lt;/a&gt; <br />&lt;a class=&quot;button is-primary&quot;&gt;&lt;i class=&quot;ics icon-headphones&quot;&gt;&lt;/i&gt;Listen&lt;/a&gt; <br />&lt;a class=&quot;button is-secondary is-outlined&quot;&gt;&lt;i class=&quot;ics icon-lightbulb&quot;&gt;&lt;/i&gt;Get Ideas&lt;/a&gt; <br />&lt;a class=&quot;button is-success&quot;&gt;&lt;i class=&quot;ics icon-circlecheck&quot;&gt;&lt;/i&gt;OK&lt;/a&gt; 
&lt;a class=&quot;button is-small&quot;&gt;Small&lt;/a&gt;
&lt;a class=&quot;button is-medium&quot;&gt;Medium&lt;/a&gt;
&lt;a class=&quot;button is-large&quot;&gt;Large&lt;/a&gt;
</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-2"></a> </div>
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
    <code id="ui-3" class="html">&lt;a class=&quot;button is-inverted&quot;&gt;Inverted&lt;/a&gt;
&lt;a class=&quot;button is-outlined&quot;&gt;Outlined&lt;/a&gt;
&lt;a class=&quot;button is-loading&quot;&gt;Loading&lt;/a&gt;
&lt;a class=&quot;button is-disabled&quot;&gt;Disabled&lt;/a&gt;</code>
  </pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-3"></a> </div>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="block">
          <p class="control is-grouped"><a class="button is-primary">Primary</a> <a class="button">Generic</a> <a class="button is-secondary">Secondary</a></p>
        </div>
        <div class="block">
          <p class="control has-addons"><a class="button"><span>Left</span></a> <a class="button"> <span>Center</span></a> <a class="button"> <span>Right</span></a></p>
        </div>
        <div class="content">
          <div class="notification">
            <p>If you want to group buttons, use <strong>.is-grouped</strong> on <strong>.control</strong>.</p>
            <p>If you want to use buttons as addons, use <strong>.has-addons</strong> on <strong>.control</strong>.</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
    <code id="ui-4" class="html">&lt;p class=&quot;control is-grouped&quot;&gt;
  &lt;a class=&quot;button is-primary&quot;&gt;Primary&lt;/a&gt; 
  &lt;a class=&quot;button&quot;&gt;Generic&lt;/a&gt; 
  &lt;a class=&quot;button is-secondary&quot;&gt;Secondary&lt;/a&gt;
&lt;/p&gt;
&lt;p class=&quot;control has-addons&quot;&gt;
  &lt;a class=&quot;button&quot;&gt;&lt;span&gt;Left&lt;/span&gt;&lt;/a&gt; 
  &lt;a class=&quot;button&quot;&gt; &lt;span&gt;Center&lt;/span&gt;&lt;/a&gt; 
  &lt;a class=&quot;button&quot;&gt; &lt;span&gt;Right&lt;/span&gt;&lt;/a&gt;
&lt;/p&gt;</code>
  </pre>
          <a class="button icon-clipboard" data-clipboard-target="#ui-4"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="nav">
<div class="container">
  <h1>Nav</h1>
  <hr>
</div>
<nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <div class="logo"><a href="/index.php"><img src="../art/flexspace-logo-sm.svg" width="80"></a></div>
    </div>
    <div class="nav-center">
	    <a><i class="ics icon-beaker"></i></a>
	</div>
    <span class="nav-toggle"> <span></span> <span></span> <span></span> </span>
    <div class="nav-right nav-menu"> 
	    	<a class="nav-item is-tab is-active">page</a> 
	    	<a class="nav-item is-tab">grid</a> 
	    	<a class="nav-item is-tab">modules</a>
	    	<a class="nav-item is-tab">ui</a>
	    	<span class="nav-item is-tab"><a class="button is-primary" href="/index.php#about"><span class="icon"><i class="ics icon-question"></i></span></a></span> 
	 </div>
  </div>
</nav>
<div class="container">
 <hr>
<div class="columns">
  <div class="column is-1-2">
     <div class="notification content">
      <p> Nav can have 3 parts, <strong>.nav-left, .nav-center, & .nav-right</strong></p>
      <p>Use <strong>.nav-toggle</strong> for the hamburger menu on mobile</p>
      <p>Use <strong>.nav-menu</strong> for menu that is collapsable on mobile (you can combine it with <strong>.nav-right</strong>)</p>
      <p>For a <strong>shadow</strong> use <strong>.has-shadow</strong>.</p>
      <p><strong>.nav-item</strong> can be <strong>active</strong> by using <strong>.is-active</strong>.</p>
      <p><strong>.nav-item</strong> can be a <strong>tab</strong> by using <strong>.is-tab</strong>.</p>
      
    </div>
    </div>
    <div class="column is-1-2">
      <div class="box">
        <pre>
    <code id="ui-5" class="html">&lt;nav class=&quot;nav has-shadow&quot;&gt;<br />  &lt;div class=&quot;container&quot;&gt;<br />    &lt;div class=&quot;nav-left&quot;&gt;<br />    	&lt;div class=&quot;logo&quot;&gt;&lt;a href=&quot;&quot;&gt;&lt;img src=&quot;&quot; width=&quot;80&quot;&gt;&lt;/a&gt;&lt;/div&gt;<br />    &lt;/div&gt;<br />    &lt;div class=&quot;nav-center&quot;&gt;
		&lt;a&gt;&lt;i class=&quot;ics icon-beaker&quot;&gt;&lt;/i&gt;&lt;/a&gt;
	&lt;/div&gt;<br />    &lt;span class=&quot;nav-toggle&quot;&gt; &lt;span&gt;&lt;/span&gt; &lt;span&gt;&lt;/span&gt; &lt;span&gt;&lt;/span&gt; &lt;/span&gt;<br />    &lt;div class=&quot;nav-right nav-menu&quot;&gt; 
		&lt;a class=&quot;nav-item is-tab is-active&quot;&gt;Card&lt;/a&gt; 
		&lt;a class=&quot;nav-item&quot; href=&quot;/page.php&quot;&gt;page&lt;/a&gt;
		&lt;a class=&quot;nav-item&quot; href=&quot;/grid.php&quot;&gt;grid&lt;/a&gt;
		&lt;a class=&quot;nav-item&quot; href=&quot;/modules.php&quot;&gt;modules&lt;/a&gt;
		&lt;a class=&quot;nav-item&quot; href=&quot;/ui.php&quot;&gt;ui&lt;/a&gt;
		&lt;a class=&quot;nav-item button is-primary&quot; href=&quot;/index.php#about&quot;&gt; 
&lt;span class=&quot;icon&quot;&gt; &lt;i class=&quot;ics icon-question&quot;&gt;&lt;/i&gt; &lt;/span&gt; &lt;/a&gt;
	&lt;/div&gt;<br />  &lt;/div&gt;<br />&lt;/nav&gt;</code>
  </pre>
        <a class="button icon-clipboard" data-clipboard-target="#ui-5"></a> </div>
    </div>
  </div>
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
