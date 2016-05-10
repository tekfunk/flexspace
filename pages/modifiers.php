<?php include("header.html"); ?>
<section class="hero">
	<div class="container is-fluid">
		<h1>modifiers</h1>
	</div>
</section>
<section class="section">
  <div class="container">
    <h1 class="title">Modifiers syntax</h1>
    <h2 class="subtitle">Most Bulma elements have <strong>alternative</strong> styles. To apply them, you only need to append one of the <strong>modifier classes</strong>.
    <br>
    They all start with <code>is-</code> or <code>has-</code>.</h2>
    <hr>
    <div class="columns">
      <div class="column">
        <p>Let's start with a simple <strong>button</strong> that uses the <code>"button"</code> CSS class:</p>
      </div>
      <div class="column">
        <p>
          <a class="button">Button</a>
        </p>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <p>By <strong>adding</strong> the <code>"is-primary"</code> CSS class, you can modify the <strong>color</strong>:</p>
      </div>
      <div class="column">
        <p>
          <a class="button is-primary">Button</a>
        </p>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="content">
          <p>You can use one of the <strong>5 main colors</strong>:</p>
          <ul>
            <li><code>is-primary</code></li>
            <li><code>is-info</code></li>
            <li><code>is-success</code></li>
            <li><code>is-warning</code></li>
            <li><code>is-danger</code></li>
          </ul>
        </div>
      </div>
      <div class="column">
        <p class="control">
          <a class="button is-primary">Button</a>
        </p>
        <p class="control">
          <a class="button is-info">Button</a>
        </p>
        <p class="control">
          <a class="button is-success">Button</a>
        </p>
        <p class="control">
          <a class="button is-warning">Button</a>
        </p>
        <p class="control">
          <a class="button is-danger">Button</a>
        </p>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="content">
          <p>You can also alter the <strong>size</strong>:</p>
          <ul>
            <li><code>is-small</code></li>
            <li><code>is-medium</code></li>
            <li><code>is-large</code></li>
          </ul>
        </div>
      </div>
      <div class="column">
        <p class="control">
          <a class="button is-small">Button</a>
        </p>
        <p class="control">
          <a class="button">Button</a>
        </p>
        <p class="control">
          <a class="button is-medium">Button</a>
        </p>
        <p class="control">
          <a class="button is-large">Button</a>
        </p>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-small"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-medium"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="content">
          <p>Or the <strong>style</strong> or <strong>state</strong>:</p>
          <ul>
            <li><code>is-outlined</code></li>
            <li><code>is-loading</code></li>
            <li><code>is-disabled</code></li>
          </ul>
        </div>
      </div>
      <div class="column">
        <p class="control">
          <a class="button is-primary is-outlined">Button</a>
        </p>
        <p class="control">
          <a class="button is-primary is-loading">Button</a>
        </p>
        <p class="control">
          <a class="button is-primary is-disabled">Button</a>
        </p>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-outlined"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-loading"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-disabled"</span><span class="nt">&gt;</span>
  Button
<span class="nt">&lt;/a&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <h1 class="title">Helpers</h1>
    <h2 class="subtitle">You can apply <strong>responsive helper classes</strong> to almost any element, in order to alter its style based upon the browser's width.</h2>
    <hr>
    <table class="table is-bordered">
      <tbody>
        <tr>
          <th rowspan="3">Float</th>
          <td><code>is-clearfix</code></td>
          <td>Fixes an element's floating children</td>
        </tr>
        <tr>
          <td><code>is-pulled-left</code></td>
          <td>Moves an element to the left</td>
        </tr>
        <tr>
          <td><code>is-pulled-right</code></td>
          <td>Moves an element to the right</td>
        </tr>
        <tr>
          <th>Overlay</th>
          <td><code>is-overlay</code></td>
          <td>Completely covers the first positioned parent</td>
        </tr>
        <tr>
          <th>Size</th>
          <td><code>is-fullwidth</code></td>
          <td>Takes up the whole width (100%)</td>
        </tr>
        <tr>
          <th rowspan="3">Text</th>
          <td><code>has-text-centered</code></td>
          <td>Centers the text</td>
        </tr>
        <tr>
          <td><code>has-text-left</code></td>
          <td>Text is left-aligned</td>
        </tr>
        <tr>
          <td><code>has-text-right</code></td>
          <td>Text is right-aligned</td>
        </tr>
        <tr>
          <th rowspan="4">Other</th>
          <td><code>is-disabled</code></td>
          <td>Removes any <strong>click</strong> event</td>
        </tr>
        <tr>
          <td><code>is-marginless</code></td>
          <td>Removes any <strong>margin</strong></td>
        </tr>
        <tr>
          <td><code>is-unselectable</code></td>
          <td>Prevents the text from being <strong>selectable</strong></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<section class="section">
  <div class="container">
    <h1 class="title">Responsive helpers</h1>
    <h2 class="subtitle"><strong>Show/hide content</strong> depending on the width of the viewport</h2>

    <hr>

    <h3 class="title">Show</h3>

    <div class="content">
      <p>
        You can use one of the following <code>display</code> classes:
      </p>
      <ul>
        <li><code>block</code></li>
        <li><code>flex</code></li>
        <li><code>inline</code></li>
        <li><code>inline-block</code></li>
        <li><code>inline-flex</code></li>
      </ul>
      <p>For example, here's what the <code>is-flex</code> helper works:</p>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>
            Class
          </th>
          <th>
            Mobile<br>
            Up to <code>768px</code>
          </th>
          <th>
            Tablet<br>
            Between <code>769px</code> and <code>979px</code>
          </th>
          <th>
            Desktop<br>
            Between <code>980px</code> and <code>1179px</code>
          </th>
          <th>
            Widescreen<br>
            Above <code>1180px</code>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="is-narrow">
            <code>is-flex-mobile</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-flex-tablet-only</code>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-flex-desktop-only</code>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-flex-widescreen</code>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
        </tr>
        <tr>
          <th colspan="4">
            <p>Classes to display <strong>up to</strong> or <strong>from</strong> a specific breakpoint</p>
          </th>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-flex-touch</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-flex-tablet</code>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-flex-desktop</code>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification">unchanged</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">flex</p>
          </td>
        </tr>
      </tbody>
    </table>

    <div class="content">
      <p>For the other display options, just replace <code>is-flex</code> with <code>is-block</code> <code>is-inline</code> <code>is-inline-block</code> or <code>is-inline-flex</code>

    </p><hr>

    <h3 class="title">Hide</h3>

    <table class="table">
      <thead>
        <tr>
          <th>
            Class
          </th>
          <th>
            Mobile<br>
            Up to <code>768px</code>
          </th>
          <th>
            Tablet<br>
            Between <code>769px</code> and <code>979px</code>
          </th>
          <th>
            Desktop<br>
            Between <code>980px</code> and <code>1179px</code>
          </th>
          <th>
            Widescreen<br>
            Above <code>1180px</code>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-mobile</code>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-tablet-only</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-desktop-only</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-widescreen</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
        </tr>
        <tr>
          <th colspan="4">
            <p>Classes to hide <strong>up to</strong> or <strong>from</strong> a specific breakpoint</p>
          </th>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-touch</code>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-tablet</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
        </tr>
        <tr>
          <td class="is-narrow">
            <code>is-hidden-desktop</code>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification is-success">visible</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
          <td class="is-narrow">
            <p class="notification">hidden</p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div></section>
<?php include("footer.html"); ?>