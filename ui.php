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
        <div class="block has-text-centered"> <a class="button is-primary" href="#button">button</a> <a class="button is-primary" href="#nav">nav</a><a class="button is-primary" href="#toggle">toggle</a> <a class="button is-primary is-disabled" href="#tabs">tabs</a> <a class="button is-primary is-disabled" href="#panel">panel</a> <a class="button is-primary is-disabled" href="#menu">menu</a> <a  class="button is-primary is-disabled" href="#form">form</a> <a class="button is-primary is-disabled" href="#pagination">pagination</a> </div>
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
        <div class="media block to-edges"> <a class="button is-primary">Primary</a> <a class="button is-red">Red</a> <a class="button is-accent">Accent</a> <a class="button is-success">Success</a> <a class="button is-alert">Alert</a> </div>
        <div class="content">
          <div class="box content is-light">
            <p>To create a button, use <code>&lt;a class=&quot;button&quot;&gt;&lt;/a&gt;</code>.</p>
            <p>Colors can be assigned with <strong>.is-white</strong>, etc. from the choices in the code box. </p>
            <p>Corners can be adjusted with <strong>$box-radius</strong> variable.</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
<code id="ui-1" class="html">&lt;a class=&quot;button&quot;&gt;Button&lt;/a&gt;
&lt;a class=&quot;button is-white&quot;&gt;White&lt;/a&gt;
&lt;a class=&quot;button is-light&quot;&gt;Light&lt;/a&gt;
&lt;a class=&quot;button is-dark&quot;&gt;Dark&lt;/a&gt;
&lt;a class=&quot;button is-black&quot;&gt;Black&lt;/a&gt;
&lt;a class=&quot;button is-link&quot;&gt;Link&lt;/a&gt;
&lt;a class=&quot;button is-primary&quot;&gt;Primary&lt;/a&gt;
&lt;a class=&quot;button is-red&quot;&gt;Red&lt;/a&gt;
&lt;a class=&quot;button is-accent&quot;&gt;Accent&lt;/a&gt;
&lt;a class=&quot;button is-success&quot;&gt;Success&lt;/a&gt;
&lt;a class=&quot;button is-alert&quot;&gt;Alert&lt;/a&gt;
</code>
</pre>
          <a class="button ics-clipboard" data-clipboard-target="#ui-1"></a> </div>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="media block to-edges"> <a class="button"><i class="ics-bones"></i><span>Throw Dice</span></a> <a class="button is-primary"><i class="ics-headphones"></i><span>Listen</span></a> <a class="button is-secondary is-outlined"><i class="ics-lightbulb"></i>Get Ideas</a> <a class="button is-success"><i class="ics-circlecheck"></i><span>OK</span></a> </div>
        <div class="media block to-edges"> <a class="button is-small">Small</a> <a class="button">Normal</a> <a class="button is-medium">Medium</a> <a class="button is-large">Large</a> </div>
        <div class="content">
          <div class="box content is-light">
            <p><a href="art.php">Available icons</a> can be added with <code>&lt;i class=&quot;ics-name&quot;&gt;&lt;/i&gt;</code></p>
            <p>Other Sizes can be assigned with <strong>.is-small</strong>, .<strong>is-medium</strong>, .<strong>is-large</strong>.</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
<code id="ui-2" class="html">&lt;a class=&quot;button&quot;&gt;&lt;i class=&quot;ics-bones&quot;&gt;&lt;/i&gt&lt;span&gt;Throw Dice&lt;/span&gt;&lt;/a&gt; <br />&lt;a class=&quot;button is-primary&quot;&gt;&lt;i class=&quot;ics-headphones&quot;&gt;&lt;/i&gt;&lt;span&gt;Listen&lt;/span&gt;&lt;/a&gt; <br />&lt;a class=&quot;button is-secondary is-outlined&quot;&gt;&lt;i class=&quot;ics-lightbulb&quot;&gt;&lt;/i&gt;&lt;span&gt;Get Ideas&lt;/span&gt;&lt;/a&gt; <br />&lt;a class=&quot;button is-success&quot;&gt;&lt;i class=&quot;ics-circlecheck&quot;&gt;&lt;/i&gt;OK&lt;/a&gt; 
&lt;a class=&quot;button is-small&quot;&gt;Small&lt;/a&gt;
&lt;a class=&quot;button is-medium&quot;&gt;Medium&lt;/a&gt;
&lt;a class=&quot;button is-large&quot;&gt;Large&lt;/a&gt;
</code>
</pre>
          <a class="button ics-clipboard" data-clipboard-target="#ui-2"></a> </div>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="block">
          <div class="notification is-dark"> <a class="button is-inverted">Inverted</a> <a class="button is-primary is-inverted">Inverted</a> <a class="button is-accent is-inverted">Inverted</a> <a class="button is-success is-inverted">Inverted</a> <a class="button is-secondary is-inverted">Inverted</a> </div>
        </div>
        <div class="block"> <a class="button is-outlined">Outlined</a> <a class="button is-primary is-outlined">Outlined</a> <a class="button is-accent is-outlined">Outlined</a> <a class="button is-success is-outlined">Outlined</a> <a class="button is-secondary is-outlined">Outlined</a> </div>
       
        <div class="block"> <a class="button is-disabled">Disabled</a> <a class="button is-primary is-disabled">Disabled</a> <a class="button is-accent is-disabled">Disabled</a> <a class="button is-success is-disabled">Disabled</a> <a class="button is-alert is-disabled">Disabled</a> <a class="button is-secondary is-disabled">Disabled</a> </div>
        <div class="content">
          <div class="box content is-light">
            <p>These variations are avaiable for buttons:</p>
            <p><strong>.is-inverted</strong> <strong>.is-outlined</strong> <strong>.is-disabled</strong></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
    <code id="ui-3" class="html">&lt;a class=&quot;button is-inverted&quot;&gt;Inverted&lt;/a&gt;
&lt;a class=&quot;button is-outlined&quot;&gt;Outlined&lt;/a&gt;
&lt;a class=&quot;button is-disabled&quot;&gt;Disabled&lt;/a&gt;</code>
  </pre>
          <a class="button ics-clipboard" data-clipboard-target="#ui-3"></a> </div>
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
          <div class="box content is-light">
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
          <a class="button ics-clipboard" data-clipboard-target="#ui-4"></a> </div>
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
      <a><img width="120" height="60" src="http://media.casadereyes.net/xfr/casa-logo.png"></a>
    </div>
    <ul class="nav-right nav-menu">
      <li class="nav-item is-primary"><a>Portfolio</a></li>
      <li class="nav-item is-primary"><a>Lab</a></li>
      <li class="nav-item is-primary"><a>Photos</a>
        <ul>
          <li><a>Travel</a></li>
          <li><a>Abstract</a></li>
          <li><a>Etc</a></li>
        </ul>
      </li>
      <li class="nav-item is-primary"><a>Mixes</a>
        <ul>
          <li><a>Twenty Fifteen</a></li>
          <li><a>Twenty Fourteen</a></li>
          <li><a>Twenty Thirteen</a></li>
        </ul>
      </li>
      <li class="nav-item"><a><div class="button is-primary"><i class="ics-question"></i></div></a></li>
    </ul>
  </div>
</nav>
<div class="container">
 <hr>
<div class="columns">
  <div class="column is-1-2">
     <div class="box content is-light content">
      <p>Use<strong>.nav-left, & .nav-right</strong> for different sides.</p>
       <p>Use<strong>.nav-item</strong> for links, logos, buttons, icons, tabs. <strong>.nav-item</strong> can also have colors assigned. </p>
       <p>Links can be nested inside <code>&lt;ul&gt;&lt;li&gt;&lt;ul&gt;&lt;li&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;</code> to make dropdown links.</p>
      <p><strong>.nav-item</strong> can be a <strong>tab</strong> by using <strong>.is-tab</strong>.</p>

      <p><strong>.nav-item</strong> can be <strong>active</strong> by using <strong>.is-active</strong>.</p>
            <p>For a <strong>shadow</strong> use <strong>.has-shadow</strong>.</p>
            <p>&nbsp;</p>

     </div>
    </div>
    <div class="column is-1-2">
      <div class="box">
        <pre>
    <code id="ui-5" class="html">&lt;nav class=&quot;nav has-shadow&quot;&gt;<br />  &lt;div class=&quot;container&quot;&gt;<br />    &lt;div class=&quot;nav-left&quot;&gt;<br />      &lt;a&gt;&lt;img width=&quot;120&quot; height=&quot;60&quot; src=&quot;http://media.casadereyes.net/xfr/casa-logo.png&quot;&gt;&lt;/a&gt;
	&lt;/div&gt;<br />    &lt;ul class=&quot;nav-right nav-menu&quot;&gt;<br />      &lt;li class=&quot;nav-item is-primary&quot;&gt;&lt;a&gt;Portfolio&lt;/a&gt;&lt;/li&gt;<br />      &lt;li class=&quot;nav-item is-primary&quot;&gt;&lt;a&gt;Lab&lt;/a&gt;&lt;/li&gt;<br />      &lt;li class=&quot;nav-item is-primary&quot;&gt;&lt;a&gt;Photos&lt;/a&gt;<br />        &lt;ul&gt;<br />          &lt;li&gt;&lt;a&gt;Travel&lt;/a&gt;&lt;/li&gt;<br />          &lt;li&gt;&lt;a&gt;Abstract&lt;/a&gt;&lt;/li&gt;<br />          &lt;li&gt;&lt;a&gt;Etc&lt;/a&gt;&lt;/li&gt;<br />        &lt;/ul&gt;<br />      &lt;/li&gt;<br />      &lt;li class=&quot;nav-item is-primary&quot;&gt;&lt;a&gt;Mixes&lt;/a&gt;<br />        &lt;ul&gt;<br />          &lt;li&gt;&lt;a&gt;Twenty Fifteen&lt;/a&gt;&lt;/li&gt;<br />          &lt;li&gt;&lt;a&gt;Twenty Fourteen&lt;/a&gt;&lt;/li&gt;<br />          &lt;li&gt;&lt;a&gt;Twenty Thirteen&lt;/a&gt;&lt;/li&gt;<br />        &lt;/ul&gt;<br />      &lt;/li&gt;<br />      &lt;li class=&quot;nav-item&quot;&gt;&lt;a&gt;&lt;div class=&quot;button is-primary&quot;&gt;&lt;span class=&quot;icon&quot;&gt;&lt;i class=&quot;ics-question&quot;&gt;&lt;/i&gt;&lt;/span&gt;&lt;/div&gt;&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;<br />  &lt;/div&gt;<br />&lt;/nav&gt;</code>
  </pre>
        <a class="button ics-clipboard" data-clipboard-target="#ui-5"></a> </div>
    </div>
  </div>
</div>
</section>
<section class="section" id="toggle">
  <div class="container">
    <h1>Toggle<div class="badge is-secondary is-small" style="margin:12px 0 0 8px;">jQuery</div></h1>
    <hr>
    <div class="notification is-primary" style="height: 120px;">	
	    <a class="toggle-btn on-left on-div-edge"><i class="ics-list"></i></a>
	<div id="toggle-window" class="toggle-window is-dark on-div-edge">					
		<a class="toggle-btn-close on-left on-div-edge"><i class="ics-ex"></i></a>
	</div>
</div>
 <hr>
<div class="columns">
  <div class="column is-1-2">
     <div class="box content is-light content">
      <p>Toggle is a hidden content window that opens with a click. It can be used for such things as a mobile device menu.</p>
      <p>There are 3 elements, the open button <strong>.toggle-btn</strong>, the close button <strong>.toggle-btn-close</strong>, and the content window <strong>.toggle-window</strong>.</p>
      <p>Use <strong>.on-win-edge</strong> to have the button aligned to the browser window, and <strong>.on-div-edge</strong> to align to it's parent div. Use the same classes on the content window to either have it cover the whole page or just it's parent div.</p>
      <p>Use <strong>.on-left</strong> and <strong>.on-right</strong> to align the buttons. They will always appear at the top of the window or div.</p>     
      <p>Use <strong>.is-primary</strong>, etc to assign colors to <strong>.toggle-window</strong>.</p>
     </div>
    </div>
    <div class="column is-1-2">
      <div class="box">
        <pre>
    <code id="ui-6" class="html">&lt;a class=&quot;toggle-btn on-left on-div-edge&quot;&gt;&lt;i class=&quot;ics-list&quot;&gt;&lt;/i&gt;&lt;/a&gt;
&lt;div id=&quot;toggle-window&quot; class=&quot;toggle-window is-dark on-div-edge&quot;&gt;				
  &lt;a class=&quot;toggle-btn-close on-left on-div-edge&quot;&gt;&lt;i class=&quot;ics-ex&quot;&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/div&gt;</code>
  </pre>
        <a class="button ics-clipboard" data-clipboard-target="#ui-6"></a> </div>
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
<?php include("inc/footer.php"); ?>
