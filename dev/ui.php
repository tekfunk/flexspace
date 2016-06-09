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
          <h1>ui - point & hover & click</h1>
          <div class="block"> <a class="button is-primary is-outlined" href="#button">button</a> <a class="button is-primary is-outlined" href="#nav">nav</a> <a class="button is-primary is-outlined is-disabled" href="#tabs">tabs</a> <a class="button is-primary is-outlined is-disabled" href="#panel">panel</a> <a class="button is-primary is-outlined is-disabled" href="#menu">menu</a> <a  class="button is-primary is-outlined is-disabled" href="#form">form</a> <a class="button is-primary is-outlined is-disabled" href="#pagination">pagination</a> <a class="button is-primary is-outlined is-disabled" href="#progress">progress</a> <a class="button is-primary is-outlined" href="#tooltip">tooltip</a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="button">
  <div class="container">
    <h1>button</h1>
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
<section class="section" id="tooltip">
  <div class="container">
    <h1>tooltip</h1>
    <hr>
    <div class="content">Coming Soon.</div>
  </div>
</section>
<section class="section" id="nav">
  <div class="container">
    <h1>nav</h1>
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
    <h1>panel</h1>
    <hr>
    <div class="columns">
      <div class="column is-4">
        <nav class="panel">
          <p class="panel-heading"> Repositories </p>
          <p class="panel-tabs"> <a class="is-active" href="#">All</a> <a href="#">Public</a> <a href="#">Private</a> <a href="#">Sources</a> <a href="#">Forks</a> </p>
          <a class="panel-block is-active" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>bulma-website</a> <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>bulma</a> <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>marksheet</a> <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-code-fork"></i></span>daniellowtw/infBoard</a> <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>jgthms.github.io</a> <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-code-fork"></i></span>mojs</a> <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>grumpy-cat</a>
          <label class="panel-block">
            <input type="checkbox">
            Remember me </label>
          <div class="panel-block"> <a class="button is-primary is-outlined is-fullwidth"> Reset all filters </a> </div>
        </nav>
      </div>
      <div class="column">
        <figure class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"panel"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
    Repositories
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"panel-tabs"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"is-active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>All<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Public<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Private<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Sources<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Forks<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block is-active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    bulma-website
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    bulma
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    marksheet
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-code-fork"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    daniellowtw/infBoard
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    jgthms.github.io
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-code-fork"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    mojs
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    grumpy-cat
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"panel-checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    Remember me
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-outlined is-fullwidth"</span><span class="nt">&gt;</span>
      Reset all filters
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>
          <a class="copy">Copy</a> <a class="expand">Expand</a> </figure>
      </div>
    </div>
  </div>
</section>
<section class="section" id="menu">
  <div class="container">
    <h1>Menu</h1>
    <h2>A simple <strong>menu</strong>, for any type of vertical navigation</h2>
    <hr>
    <div class="columns">
      <div class="column is-3">
        <aside class="menu">
          <p class="menu-label"> General </p>
          <ul class="menu-list">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Customers</a></li>
          </ul>
          <p class="menu-label"> Administration </p>
          <ul class="menu-list">
            <li><a href="#">Team Settings</a></li>
            <li> <a class="is-active" href="#">Manage Your Team</a>
              <ul>
                <li><a href="#">Members</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Add a member</a></li>
              </ul>
            </li>
            <li><a href="#">Invitations</a></li>
            <li><a href="#">Authentication</a></li>
          </ul>
          <p class="menu-label"> Transactions </p>
          <ul class="menu-list">
            <li><a href="#">Payments</a></li>
            <li><a href="#">Transfers</a></li>
            <li><a href="#">Balance</a></li>
          </ul>
        </aside>
      </div>
      <div class="column">
        <figure class="highlight">
          <pre><code class="language-html" data-lang="html"><span class="nt">&lt;aside</span> <span class="na">class=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"menu-label"</span><span class="nt">&gt;</span>
    General
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"menu-list"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dashboard<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Customers<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"menu-label"</span><span class="nt">&gt;</span>
    Administration
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"menu-list"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Team Settings<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"is-active"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Manage Your Team<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;ul&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Members<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Plugins<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Add a member<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Invitations<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Authentication<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"menu-label"</span><span class="nt">&gt;</span>
    Transactions
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"menu-list"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Payments<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Transfers<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Balance<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/aside&gt;</span></code></pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
  </div>
</section>
<section class="section" id="form">
  <div class="container">
    <h1>Form controls</h1>
    <h2>All generic <strong>form controls</strong>, designed for consistency</h2>
    <hr>
    <div class="content">
      <p>The following form controls <strong>classes</strong> are supported:</p>
      <ul>
        <li><code>.label</code></li>
        <li><code>.input</code></li>
        <li><code>.textarea</code></li>
        <li><code>.select</code></li>
        <li><code>.checkbox</code></li>
        <li><code>.radio</code></li>
        <li><code>.button</code></li>
        <li><code>.help</code></li>
      </ul>
      <p>When combining several controls in a <strong>form</strong>, use the <code>.control</code> class as a <strong>container</strong>, to keep the spacing consistent.</p>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <label class="label">Name</label>
        <p class="control">
          <input class="input" type="text" placeholder="Text input">
        </p>
        <label class="label">Username</label>
        <p class="control has-icon has-icon-right">
          <input class="input is-success" type="text" placeholder="Text input" value="bulma">
          <span class="help is-success">This username is available</span></p>
        <label class="label">Email</label>
        <p class="control has-icon has-icon-right">
          <input class="input is-secondary" type="text" placeholder="Email input" value="hello@">
          <span class="help is-secondary">This email is invalid</span></p>
        <label class="label">Subject</label>
        <p class="control"><span class="select">
          <select>
            <option> Select dropdown </option>
            <option> With options </option>
          </select>
          </span></p>
        <label class="label">Message</label>
        <p class="control">
          <textarea class="textarea" placeholder="Textarea">
</textarea>
        </p>
        <p class="control">
          <label class="checkbox">
            <input type="checkbox">
            Remember me</label>
        </p>
        <p class="control">
          <label class="radio">
            <input type="radio" name="question">
            Yes</label>
          <label class="radio">
            <input type="radio" name="question">
            No</label>
        </p>
        <p class="control"> <a class="button is-primary">Submit</a> <a class="button is-link">Cancel</a> </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Username<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span> <span class="na">value=</span><span class="s">"bulma"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"help is-success"</span><span class="nt">&gt;</span>This username is available<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-secondary"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Email input"</span> <span class="na">value=</span><span class="s">"hello@"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-alert"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"help is-secondary"</span><span class="nt">&gt;</span>This email is invalid<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Subject<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select&gt;</span>
      <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Message<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    Remember me
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span><span class="nt">&gt;</span>
    Yes
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span><span class="nt">&gt;</span>
    No
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-link"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> <a class="expand">Expand</a> </figure>
      </div>
    </div>
    <hr>
    <h3>Colors</h3>
    <div class="columns">
      <div class="column is-1-2">
        <p class="control">
          <input class="input is-primary" type="text" placeholder="Primary input">
        </p>
        <p class="control">
          <input class="input is-accent" type="text" placeholder="accent input">
        </p>
        <p class="control">
          <input class="input is-success" type="text" placeholder="Success input">
        </p>
        <p class="control">
          <input class="input is-alert" type="text" placeholder="alert input">
        </p>
        <p class="control">
          <input class="input is-secondary" type="text" placeholder="secondary input">
        </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-primary"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Primary input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-accent"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"accent input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Success input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-alert"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"alert input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-secondary"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"secondary input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
    <hr>
    <h3>Sizes</h3>
    <div class="columns">
      <div class="column is-1-2">
        <p class="control">
          <input class="input is-small" type="text" placeholder="Small input">
        </p>
        <p class="control">
          <input class="input" type="text" placeholder="Normal input">
        </p>
        <p class="control">
          <input class="input is-medium" type="text" placeholder="Medium input">
        </p>
        <p class="control">
          <input class="input is-large" type="text" placeholder="Large input">
        </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Medium input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
    <hr>
    <h3>States</h3>
    <h4>Loading</h4>
    <div class="columns">
      <div class="column is-1-2">
        <p class="control is-loading">
          <input class="input" type="text" placeholder="Loading input">
        </p>
        <p class="control is-loading">
          <textarea class="textarea" placeholder="Loading textarea">
</textarea>
        </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Loading input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Loading textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
    <h4>Disabled</h4>
    <div class="columns">
      <div class="column is-1-2">
        <p class="control">
          <input class="input" type="text" placeholder="Disabled input" disabled>
        </p>
        <p class="control">
          <textarea class="textarea" placeholder="Disabled textarea" disabled>
</textarea>
        </p>
        <p class="control">
          <label class="checkbox is-disabled">
            <input type="checkbox" disabled>
            Remember me</label>
        </p>
        <p class="control">
          <label class="radio is-disabled">
            <input type="radio" name="question" disabled>
            Yes</label>
          <label class="radio is-disabled">
            <input type="radio" name="question" disabled>
            No</label>
        </p>
        <p class="control"> <a class="button is-primary" disabled>Submit</a> <a class="button" disabled>Cancel</a> </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Disabled textarea"</span> <span class="na">disabled</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox is-disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Remember me
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio is-disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Yes
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio is-disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    No
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
    <h4>With Font Awesome icons</h4>
    <div class="columns">
      <div class="column is-1-2">
        <p class="control has-icon">
          <input class="input" type="email" placeholder="Email">
        </p>
        <p class="control has-icon">
          <input class="input" type="password" placeholder="Password">
        </p>
        <p class="control"> <a class="button is-success">Login</a> </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-lock"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
    Login
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <p class="control has-icon">
          <input class="input is-small" type="email" placeholder="Email">
        </p>
        <p class="control has-icon">
          <input class="input" type="email" placeholder="Email">
        </p>
        <p class="control has-icon">
          <input class="input is-medium" type="email" placeholder="Email">
        </p>
        <p class="control has-icon">
          <input class="input is-large" type="email" placeholder="Email">
        </p>
        <p class="control has-icon has-icon-right">
          <input class="input is-small" type="email" placeholder="Email">
        </p>
        <p class="control has-icon has-icon-right">
          <input class="input" type="email" placeholder="Email">
        </p>
        <p class="control has-icon has-icon-right">
          <input class="input is-medium" type="email" placeholder="Email">
        </p>
        <p class="control has-icon has-icon-right">
          <input class="input is-large" type="email" placeholder="Email">
        </p>
      </div>
      <div class="column is-1-2">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
          <a class="copy">Copy</a> </figure>
      </div>
    </div>
    <hr>
    <h3>Form addons</h3>
    <div class="content">
      <p>If you want to <strong>attach</strong> controls together, use the <code>has-addons</code> modifier on the <code>control</code> container:</p>
    </div>
    <div class="example">
      <p class="control has-addons">
        <input class="input" type="text" placeholder="Find a repository">
        <a class="button is-accent">Search</a></p>
    </div>
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a repository"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-accent"</span><span class="nt">&gt;</span>
    Search
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
      <a class="copy">Copy</a> </figure>
    <div class="content">
      <p>You can attach inputs, buttons, and dropdowns.</p>
    </div>
    <div class="example">
      <p class="control has-addons"><span class="select">
        <select>
          <option> $ </option>
          <option> £ </option>
          <option> € </option>
        </select>
        </span>
        <input class="input" type="text" placeholder="Amount of money">
        <a class="button is-success">Transfer</a></p>
    </div>
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select&gt;</span>
      <span class="nt">&lt;option&gt;</span>$<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>£<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>€<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Amount of money"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
    Transfer
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Form group</h3>
    <div class="content">
      <p>If you want to <strong>group</strong> controls together, use the <code>is-grouped</code> modifier on the <code>control</code> container:</p>
    </div>
    <div class="example">
      <p class="control is-grouped">
        <input class="input" type="text" placeholder="Find a repository">
        <a class="button is-accent">Search</a></p>
    </div>
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-grouped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a repository"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-accent"</span><span class="nt">&gt;</span>
    Search
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Horizontal form</h3>
    <div class="content">
      <p>If you want a <strong>horizontal</strong> form control, use the <code>is-horizontal</code> modifier on the <code>control</code> container, in which you include:</p>
      <ul>
        <li><code>control-label</code> for the side label</li>
        <li><code>control</code> for the input/select/textarea container</li>
      </ul>
      <p>You can of course use <code>is-grouped</code> or <code>has-addons</code> for the child elements.</p>
    </div>
    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">From</label>
      </div>
      <div class="control is-grouped">
        <input class="input" type="text" placeholder="Name">
        <input class="input" type="email" placeholder="Email">
      </div>
    </div>
    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Subject</label>
      </div>
      <div class="control">
        <div class="select is-fullwidth">
          <select>
            <option> General enquiry </option>
          </select>
        </div>
      </div>
    </div>
    <div class="control is-horizontal">
      <div class="control-label">
        <label class="label">Question</label>
      </div>
      <div class="control">
        <textarea class="textarea" placeholder="Explain how we can help you">
</textarea>
      </div>
    </div>
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>From<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-grouped"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Name"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Subject<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"select is-fullwidth"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;select&gt;</span>
        <span class="nt">&lt;option&gt;</span>General enquiry<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Question<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Explain how we can help you"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code>
</pre>
      <a class="copy">Copy</a> </figure>
  </div>
</section>
<section class="section" id="tabs">
  <div class="container">
    <h1>Tabs</h1>
    <h2>Simple responsive horizontal navigation <strong>tabs</strong>, with different styles</h2>
    <hr>
    <div class="content">
      <p><strong>Tabs</strong> only require a <code>tabs</code> container and a <code>&lt;ul&gt;</code> list.<br>
        The <strong>default</strong> tabs style has a single border at the bottom.</p>
    </div>
    <div class="example">
      <div class="tabs">
        <ul>
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Alignment</h3>
    <div class="content">
      <p> To align the tabs list, use the <code>is-centered</code> or <code>is-right</code> modifier on the <code>.tabs</code> container: </p>
    </div>
    <div class="example">
      <div class="tabs is-centered">
        <ul>
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-centered"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="example">
      <div class="tabs is-right">
        <ul>
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="content">
      <p> To have several lists aligned differently, use one of <strong>3 modifiers</strong> on the <code>ul</code>: </p>
      <ul>
        <li><code>is-left</code></li>
        <li><code>is-center</code></li>
        <li><code>is-right</code></li>
      </ul>
    </div>
    <div class="example">
      <div class="tabs">
        <ul class="is-left">
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
        <ul class="is-center">
          <li><a>Previous</a></li>
          <li><a>Up</a></li>
          <li><a>Next</a></li>
        </ul>
        <ul class="is-right">
          <li><a>Search</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"is-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"is-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Up<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"is-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Search<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Icons</h3>
    <div class="content">
      <p>&lt;span class="ics is-small"&gt;&lt;i class="icon-picture"&gt;&lt;/i&gt;&lt;/span&gt;</p>
    </div>
    <div class="example">
      <div class="tabs is-centered">
        <ul>
          <li class="is-active"> <a> <span class="ics is-small"><i class="icon-picture"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="ics is-small"><i class="icon-headphones"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="ics is-small"><i class="icon-video"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="ics is-small"><i class="icon-book"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <hr>
    <h3>Sizes</h3>
    <div class="content">
      <p>You can choose between <strong>3 additional sizes</strong>: <code>is-small</code> <code>is-medium</code> and <code>is-large</code>.</p>
    </div>
    <div class="example">
      <div class="tabs is-small">
        <ul>
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-small"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="example">
      <div class="tabs is-medium">
        <ul>
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-medium"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="example">
      <div class="tabs is-large">
        <ul>
          <li class="is-active"><a>Pictures</a></li>
          <li><a>Music</a></li>
          <li><a>Videos</a></li>
          <li><a>Documents</a></li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-large"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Styles</h3>
    <div class="content"> If you want a more classic style with <strong>borders</strong>, just append the <code>is-boxed</code> modifier. </div>
    <div class="example">
      <div class="tabs is-boxed">
        <ul>
          <li class="is-active"> <a> <span class="icon is-small"><i class="ics icon-image"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-music"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-film"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-file-text-o"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-boxed"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-image"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Pictures<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-music"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Music<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-film"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Videos<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-file-text-o"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Documents<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <p class="content"> If you want <strong>mutually exclusive</strong> tabs (like radio buttons where clicking one deselects all other ones), use the <code>is-toggle</code> modifier. </p>
    <div class="example">
      <div class="tabs is-toggle">
        <ul>
          <li class="is-active"> <a> <span class="icon is-small"><i class="ics icon-image"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-music"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-film"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-file-text-o"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-toggle"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-image"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Pictures<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-music"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        Music
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-film"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        Videos
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-file-text-o"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        Documents
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <p class="content"> If you want the tabs to take up the <strong>whole width</strong> available, use <code>is-fullwidth</code>. </p>
    <div class="example">
      <div class="tabs is-fullwidth">
        <ul>
          <li> <a> <span class="icon"><i class="ics icon-angle-left"></i></span> <span>Left</span> </a> </li>
          <li> <a> <span class="icon"><i class="ics icon-angle-up"></i></span> <span>Up</span> </a> </li>
          <li> <a> <span>Right</span> <span class="icon"><i class="ics icon-angle-right"></i></span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-fullwidth"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-angle-left"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Left<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-angle-up"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Up<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span&gt;</span>Right<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-angle-right"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Combining</h3>
    <div class="content">
      <p>You can <strong>combine</strong> different modifiers. For example, you can have <strong>centered boxed</strong> tabs, or <strong>fullwidth toggle</strong> ones.</p>
    </div>
    <div class="example">
      <div class="tabs is-centered is-boxed">
        <ul>
          <li class="is-active"> <a> <span class="icon is-small"><i class="ics icon-image"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-music"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-film"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-file-text-o"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-centered is-boxed"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-image"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Pictures<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-music"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Music<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-film"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Videos<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-file-text-o"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Documents<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="example">
      <div class="tabs is-toggle is-fullwidth">
        <ul>
          <li class="is-active"> <a> <span class="icon is-small"><i class="ics icon-image"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-music"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-film"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-file-text-o"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-toggle is-fullwidth"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-image"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Pictures<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-music"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Music<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-film"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Videos<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-file-text-o"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Documents<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="example">
      <div class="tabs is-centered is-boxed is-medium">
        <ul>
          <li class="is-active"> <a> <span class="icon is-small"><i class="ics icon-image"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-music"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-film"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="icon is-small"><i class="ics icon-file-text-o"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-centered is-boxed is-medium"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-image"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Pictures<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-music"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Music<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-film"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Videos<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-file-text-o"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Documents<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
    <div class="example">
      <div class="tabs is-toggle is-fullwidth is-large">
        <ul>
          <li class="is-active"> <a> <span class="icon"><i class="ics icon-image"></i></span> <span>Pictures</span> </a> </li>
          <li> <a> <span class="icon"><i class="ics icon-music"></i></span> <span>Music</span> </a> </li>
          <li> <a> <span class="icon"><i class="ics icon-film"></i></span> <span>Videos</span> </a> </li>
          <li> <a> <span class="icon"><i class="ics icon-file-text-o"></i></span> <span>Documents</span> </a> </li>
        </ul>
      </div>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-toggle is-fullwidth is-large"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-image"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Pictures<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-music"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Music<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-film"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Videos<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-file-text-o"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;</span>Documents<span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
  </div>
</section>
<section class="section" id="pagination">
  <div class="container">
    <h1>Pagination</h1>
    <h2>A responsive, usable, and flexible <strong>pagination</strong></h2>
    <hr>
    <div class="example">
      <nav class="pagination"> <a>Previous</a> <a>Next page</a>
        <ul>
          <li> <a>1</a> </li>
          <li> <span>...</span> </li>
          <li> <a>45</a> </li>
          <li> <a class="is-active">46</a> </li>
          <li> <a>47</a> </li>
          <li> <span>...</span> </li>
          <li> <a>86</a> </li>
        </ul>
      </nav>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a&gt;</span>Previous<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a&gt;</span>Next page<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>1<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;span&gt;</span>...<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>45<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>46<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>47<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;span&gt;</span>...<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>
      <span class="nt">&lt;a&gt;</span>86<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>
      <a class="copy">Copy</a> </figure>
  </div>
</section>
<section class="section" id="progress">
  <div class="container">
    <h1>Progress bars</h1>
    <h2>Native HTML <strong>progress</strong> bars</h2>
    <hr>
    <div class="example">
      <progress class="progress" value="15" max="100">15%</progress>
      <progress class="progress is-primary" value="30" max="100">30%</progress>
      <progress class="progress is-accent" value="45" max="100">45%</progress>
      <progress class="progress is-success" value="60" max="100">60%</progress>
      <progress class="progress is-alert" value="75" max="100">75%</progress>
      <progress class="progress is-secondary" value="90" max="100">90%</progress>
    </div>
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"15"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>15%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-primary"</span> <span class="na">value=</span><span class="s">"30"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>30%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-accent"</span> <span class="na">value=</span><span class="s">"45"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>45%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-success"</span> <span class="na">value=</span><span class="s">"60"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-alert"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>75%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-secondary"</span> <span class="na">value=</span><span class="s">"90"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>90%<span class="nt">&lt;/progress&gt;</span></code>
</pre>
      <a class="copy">Copy</a> </figure>
    <hr>
    <h3>Sizes</h3>
    <div class="example">
      <progress class="progress is-small" value="15" max="100">15%</progress>
      <progress class="progress" value="30" max="100">30%</progress>
      <progress class="progress is-medium" value="45" max="100">45%</progress>
      <progress class="progress is-large" value="60" max="100">60%</progress>
    </div>
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-small"</span> <span class="na">value=</span><span class="s">"15"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>15%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"30"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>30%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-medium"</span> <span class="na">value=</span><span class="s">"45"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>45%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-large"</span> <span class="na">value=</span><span class="s">"60"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/progress&gt;</span></code>
</pre>
      <a class="copy">Copy</a> </figure>
  </div>
</section>
<?php include("inc/footer.php"); ?>