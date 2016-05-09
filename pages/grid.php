<?php include("header.html"); ?>
<section class="hero">
	<div class="container is-fluid">
		<h1>grid</h1>
		<h2>use .columns or .tile for your container</h2>
	</div>
</section>
<section class="section">
  <div class="container">
    <h1 class="title">Columns</h1>
    <h2 class="subtitle">A simple way to build <strong>responsive columns</strong></h2>
    <hr>
    <div class="content">
      <p>To build a <strong>grid</strong>, just:</p>
      <ol>
        <li>Add a <code>columns</code> container</li>
        <li>Add as many <code>column</code> elements as you want</li>
      </ol>
    </div>

    <div class="columns">
      <div class="column">
        <p class="notification is-info">First column</p>
      </div>
      <div class="column">
        <p class="notification is-success">Second column</p>
      </div>
      <div class="column">
        <p class="notification is-warning">Third column</p>
      </div>
      <div class="column">
        <p class="notification is-danger">Fourth column</p>
      </div>
    </div>


    <hr>

    <h3 class="title">Sizes</h3>
    <div class="content">
      <p>If you want to change the <strong>size</strong> of a single column, you can use one the following classes:</p>
      <ul>
        <li>
          <code>is-three-quarters</code>
        </li>
        <li>
          <code>is-two-thirds</code>
        </li>
        <li>
          <code>is-half</code>
        </li>
        <li>
          <code>is-one-third</code>
        </li>
        <li>
          <code>is-one-quarter</code>
        </li>
      </ul>
      <p>The <em>other</em> columns will fill up the <strong>remaining</strong> space automatically.</p>
    </div>
    <div class="columns">
      <div class="column is-three-quarters">
        <p class="notification is-info">
          <code class="html">is-three-quarters</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-warning">Auto</p>
      </div>
      <div class="column">
        <p class="notification is-danger">Auto</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-two-thirds">
        <p class="notification is-info">
          <code class="html">is-two-thirds</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-warning">Auto</p>
      </div>
      <div class="column">
        <p class="notification is-danger">Auto</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-half">
        <p class="notification is-info">
          <code class="html">is-half</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-warning">Auto</p>
      </div>
      <div class="column">
        <p class="notification is-danger">Auto</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-one-third">
        <p class="notification is-info">
          <code class="html">is-one-third</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-success">Auto</p>
      </div>
      <div class="column">
        <p class="notification is-warning">Auto</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-one-quarter">
        <p class="notification is-info">
          <code class="html">is-one-quarter</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-success">Auto</p>
      </div>
    </div>


    <h4 class="title is-4">12 columns</h4>
    <div class="content">
      <p>As the grid can be divided into <strong>12</strong> columns, there are size classes for each division:</p>
      <ul>
        <li><code>is-2</code></li>
        <li><code>is-3</code></li>
        <li><code>is-4</code></li>
        <li><code>is-5</code></li>
        <li><code>is-6</code></li>
        <li><code>is-7</code></li>
        <li><code>is-8</code></li>
        <li><code>is-9</code></li>
        <li><code>is-10</code></li>
        <li><code>is-11</code></li>
      </ul>
    </div>
    <div class="message is-danger">
      <p class="message-header">Naming</p>
      <p class="message-body">Each modifier class is named after <strong>how many columns you want out of 12</strong>. So if you want 7 columns out of 12, use <code>is-7</code>.</p>
    </div>

    <div class="columns">
      <div class="column is-2">
        <p class="notification is-info"><code>is-2</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-3">
        <p class="notification is-info"><code>is-3</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-4">
        <p class="notification is-info"><code>is-4</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-5">
        <p class="notification is-info"><code>is-5</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-6">
        <p class="notification is-info"><code>is-6</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-7">
        <p class="notification is-info"><code>is-7</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-8">
        <p class="notification is-info"><code>is-8</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-9">
        <p class="notification is-info"><code>is-9</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-10">
        <p class="notification is-info"><code>is-10</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
      <div class="column">
        <p class="notification is-success has-text-centered">1</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-11">
        <p class="notification is-info"><code>is-11</code></p>
      </div>
      <div class="column">
        <p class="notification is-warning has-text-centered">1</p>
      </div>
    </div>

    <hr>

    <h3 class="title">Offset</h3>
    <div class="content">
      <p>While you can use <em>empty columns</em> (like <code>&lt;div class="column"&gt;&lt;/div&gt;</code>) to create horizontal space around <code>.column</code> elements, you can also use <strong>offset</strong> modifiers like <code>.is-offset-x</code>:
    </p></div>

    <div class="columns is-mobile">
      <div class="column is-half is-offset-one-quarter">
        <p class="notification is-info">
          <code class="html">is-half</code><br>
          <code class="html">is-offset-one-quarter</code>
        </p>
      </div>
    </div>

    <div class="columns is-mobile">
      <div class="column is-4 is-offset-8">
        <p class="notification is-info">
          <code class="html">is-4</code><br>
          <code class="html">is-offset-8</code>
        </p>
      </div>
    </div>

    <div class="columns is-mobile">
      <div class="column is-11 is-offset-1">
        <p class="notification is-info">
          <code class="html">is-11</code><br>
          <code class="html">is-offset-1</code>
        </p>
      </div>
    </div>


    <hr>

    <h3 class="title">Responsiveness</h3>
    <div class="content">
      <p>By default, columns are only activated from <strong>tablet</strong> onwards. This means columns are stacked on top of each other on <strong>mobile</strong>.</p>
      <p>If you want columns to work on <strong>mobile too</strong>, just add the <code>is-mobile</code> modifier on the <code>columns</code> container:</p>
    </div>
    <div class="columns is-mobile">
      <div class="column">
        <p class="notification is-info">1</p>
      </div>
      <div class="column">
        <p class="notification is-success">2</p>
      </div>
      <div class="column">
        <p class="notification is-warning">3</p>
      </div>
      <div class="column">
        <p class="notification is-danger">4</p>
      </div>
    </div>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"columns is-mobile"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
    <div class="message is-info">
      <p class="message-header">Resize</p>
      <p class="message-body">If you want to see the difference, resize your browser and see <em>when</em> the columns are stacked and when they are horizontally distributed.</p>
    </div>
    <div class="content">
      <p>If you <em>only</em> want columns on <strong>desktop</strong>, just use the <code>is-desktop</code> modifier on the <code>columns</code> container:</p>
    </div>
    <div class="columns is-desktop">
      <div class="column">
        <p class="notification is-info">1</p>
      </div>
      <div class="column">
        <p class="notification is-success">2</p>
      </div>
      <div class="column">
        <p class="notification is-warning">3</p>
      </div>
      <div class="column">
        <p class="notification is-danger">4</p>
      </div>
    </div>

    <h4 class="title is-4">Different sizes per breakpoint</h4>
    <div class="content">
      <p>You can define a <strong>column size</strong> for <em>each</em> viewport size: mobile, tablet, and desktop.</p>
    </div>
    <div class="columns is-mobile">
      <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop">
        <p class="notification is-info">
          <code>is-half-mobile</code><br>
          <code>is-one-third-tablet</code><br>
          <code>is-one-quarter-desktop</code>
        </p>
      </div>
      <div class="column">
        <p class="notification is-success">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning">1</p>
      </div>
      <div class="column">
        <p class="notification is-success">1</p>
      </div>
      <div class="column">
        <p class="notification is-warning">1</p>
      </div>
    </div>
    <div class="message is-info">
      <p class="message-header">Resize</p>
      <p class="message-body">If you want to see these classes in action, resize your browser window and see how the same column varies in width at each breakpoint.</p>
    </div>

    <hr>

    <h3 class="title">Multiline</h3>
    <div class="content">
      <p>Whenever you want to start a new line, you can close a <code>columns</code> container and start a new one. But you can also add the <code>is-multiline</code> modifier and add <strong>more</strong> column elements that would fit in a single row.</p>
    </div>
    <div class="columns is-multiline is-mobile">
      <div class="column is-one-quarter">
        <p class="notification is-info"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-success"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-warning"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-danger"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-half">
        <p class="notification is-info"><code>is-half</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-success"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-warning"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-danger"><code>is-one-quarter</code></p>
      </div>
      <div class="column">
        <p class="notification is-info">Auto</p>
      </div>
    </div>

    <hr>

    <h3 class="title">Gapless</h3>
    <div class="content">
      <p>If you want to remove the <strong>space</strong> between the columns, add the <code>is-gapless</code> modifier on the <code>columns</code> container:</p>
    </div>
    <div class="columns is-gapless">
      <div class="column">
        <p class="notification is-info">First column</p>
      </div>
      <div class="column">
        <p class="notification is-success">Second column</p>
      </div>
      <div class="column">
        <p class="notification is-warning">Third column</p>
      </div>
      <div class="column">
        <p class="notification is-danger">Fourth column</p>
      </div>
    </div>
    <div class="content">
      <p>You can combine it with the <code>is-multiline</code> modifier:</p>
    </div>
    <div class="columns is-multiline is-mobile is-gapless">
      <div class="column is-one-quarter">
        <p class="notification is-info"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-success"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-warning"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-danger"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-half">
        <p class="notification is-info"><code>is-half</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-success"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-warning"><code>is-one-quarter</code></p>
      </div>
      <div class="column is-one-quarter">
        <p class="notification is-danger"><code>is-one-quarter</code></p>
      </div>
      <div class="column">
        <p class="notification is-info">Auto</p>
      </div>
    </div>

    <hr>

    <h3 class="title">Narrow column</h3>
    <div class="content">
      <p>If you want a column to only take the <strong>space it needs</strong>, use the <code>is-narrow</code> modifier. The other column(s) will fill up the remaining space.</p>
    </div>
    <div class="columns">
      <div class="column is-narrow">
        <div class="box" style="width: 200px;">
          <p class="title is-5">Narrow column</p>
          <p class="subtitle">This column is only 200px wide.</p>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <p class="title is-5">Flexible column</p>
          <p class="subtitle">This column will take up the remaining space available.</p>
        </div>
      </div>
    </div>
    <div class="content">
      <p>As for the size modifiers, you can have narrow columns for different <strong>breakpoints</strong>:</p>
      <ul>
        <li>
          <code>is-narrow-mobile</code>
        </li>
        <li>
          <code>is-narrow-tablet</code>
        </li>
        <li>
          <code>is-narrow-desktop</code>
        </li>
      </ul>
    </div>
  </div>
</section>






<section class="section">
  <div class="container">
    <h1 class="title">Tiles</h1>
    <h2 class="subtitle">A <strong>single tile</strong> element to build 2-dimensional Metro-like, Pinterest-like, or whatever-you-like grids</h2>

    <hr>

    <div class="content">
      <p>To build intricate 2-dimensional, you only need a <strong>single element</strong>: the <code>tile</code>:</p>
    </div>


    <hr>

    <h3 class="title">Example</h3>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent is-vertical">
            <article class="tile is-child notification is-primary">
              <p class="title">Vertical...</p>
              <p class="subtitle">Top tile</p>
            </article>
            <article class="tile is-child notification is-warning">
              <p class="title">...tiles</p>
              <p class="subtitle">Bottom tile</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification is-info">
              <p class="title">Middle tile</p>
              <p class="subtitle">With an image</p>
              <figure class="image is-4by3">
                <img src="http://placehold.it/640x480">
              </figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-danger">
            <p class="title">Wide tile</p>
            <p class="subtitle">Aligned with the right tile</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-success">
          <div class="content">
            <p class="title">Tall tile</p>
            <p class="subtitle">With even more content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
              <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
            </div>
          </div>
        </article>
      </div>
    </div>


    <hr>

    <h3 class="title">Modifiers</h3>

    <div class="content">
      <p>The <code>tile</code> element has <strong>16 modifiers</strong>:</p>
      <ul>
        <li>
          <strong>3 contextual</strong> modifiers
          <ul>
            <li><code>is-ancestor</code></li>
            <li><code>is-parent</code></li>
            <li><code>is-child</code></li>
          </ul>
        </li>
        <li>
          <strong>1 directional</strong> modifier
          <ul>
            <li><code>is-vertical</code></li>
          </ul>
        </li>
        <li>
          <strong>12 horizontal size</strong> modifiers
          <ul>
            <li>from <code>is-1</code></li>
            <li>to <code>is-12</code></li>
          </ul>
        </li>
      </ul>
    </div>

    <hr>

    <h3 class="title">How it works: Nesting</h3>
    <div class="content">
      <p>Everything is a tile! To create a grid of tiles, you only need to <strong>nest</strong> <code>tile</code> elements.</p>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>Start with an <strong>ancestor</strong> tile that will wrap all other tiles:</p>
      </div>
      <div class="column is-two-thirds">
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>Add tile elements that will distribute themselves <strong>horizontally</strong>:</p>
      </div>
      <div class="column is-two-thirds">
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>
          You can <strong>resize</strong> any tile according to a <strong>12 column</strong> grid.
          <br>
          For example, <code>is-4</code> will take up 2/3 of the horizontal space:
        </p>
      </div>
      <div class="column is-two-thirds">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-4"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- 1/3 --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- This tile will take the rest: 2/3 --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <p>If you want to stack tiles <strong>vertically</strong>, add <code>is-vertical</code> on the parent tile:</p>
      </div>
      <div class="column is-two-thirds">
      </div>
    </div>

    <div class="columns">
      <div class="column is-one-third">
        <div class="content">
          <p>As soon as you want to add <strong>content</strong> to a tile, just:</p>
          <ul>
            <li>add <em>any</em> class you want, like <code>box</code></li>
            <li>add the <code>is-child</code> modifier on the tile</li>
            <li>add the <code>is-parent</code> modifier on the <em>parent</em> tile</li>
          </ul>
        </div>
      </div>
      <div class="column is-two-thirds">
      </div>
    </div>

    <div class="tile is-ancestor">
      <div class="tile is-4 is-vertical is-parent">
        <div class="tile is-child box">
          <p class="title">One</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
        <div class="tile is-child box">
          <p class="title">Two</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="tile is-child box">
          <p class="title">Three</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      </div>
    </div>


    <hr>

    <h3 class="title">Nesting requirements</h3>

    <article class="message is-danger">
      <div class="message-header">
        3 levels deep at least...
      </div>
      <div class="message-body">
        <div class="content">
          <p>You need at least <strong>3 levels</strong> of hierarchy:</p>
        </div>
      </div>
    </article>

    <article class="message is-success">
      <div class="message-header">
        ...but more levels if you want!
      </div>
      <div class="message-body">
        <div class="content">
          <p>You can however nest tiles more deeply than that, and mix it up!</p>
        </div>
      </div>
    </article>

    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent is-vertical">
            <article class="tile is-child box">
              <p class="title">Vertical tiles</p>
              <p class="subtitle">Top box</p>
            </article>
            <article class="tile is-child box">
              <p class="title">Vertical tiles</p>
              <p class="subtitle">Bottom box</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Middle box</p>
              <p class="subtitle">With an image</p>
              <figure class="image is-4by3">
                <img src="http://placehold.it/640x480">
              </figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
            <p class="title">Wide column</p>
            <p class="subtitle">Aligned with the right column</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <div class="content">
            <p class="title">Tall column</p>
            <p class="subtitle">With even more content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
              <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
            </div>
          </div>
        </article>
      </div>
    </div>


    <hr>

    <h3 class="title">3 columns</h3>

    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Hello World</p>
          <p class="subtitle">What is up?</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Foo</p>
          <p class="subtitle">Bar</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Third column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent is-vertical">
            <article class="tile is-child box">
              <p class="title">Vertical tiles</p>
              <p class="subtitle">Top box</p>
            </article>
            <article class="tile is-child box">
              <p class="title">Vertical tiles</p>
              <p class="subtitle">Bottom box</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Middle box</p>
              <p class="subtitle">With an image</p>
              <figure class="image is-4by3">
                <img src="http://placehold.it/640x480">
              </figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
            <p class="title">Wide column</p>
            <p class="subtitle">Aligned with the right column</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <div class="content">
            <p class="title">Tall column</p>
            <p class="subtitle">With even more content</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
              <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Side column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-8">
        <article class="tile is-child box">
          <p class="title">Main column</p>
          <p class="subtitle">With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>


    <hr>

    <h3 class="title">4 columns</h3>

    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">One</p>
          <p class="subtitle">Subtitle</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Two</p>
          <p class="subtitle">Subtitle</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Three</p>
          <p class="subtitle">Subtitle</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Four</p>
          <p class="subtitle">Subtitle</p>
        </article>
      </div>
    </div>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-9">
        <div class="tile">
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Five</p>
              <p class="subtitle">Subtitle</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              </div>
            </article>
          </div>
          <div class="tile is-8 is-vertical">
            <div class="tile">
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">Six</p>
                  <p class="subtitle">Subtitle</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p class="title">Seven</p>
                  <p class="subtitle">Subtitle</p>
                </article>
              </div>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title">Eight</p>
                <p class="subtitle">Subtitle</p>
              </article>
            </div>
          </div>
        </div>
        <div class="tile">
          <div class="tile is-8 is-parent">
            <article class="tile is-child box">
              <p class="title">Nine</p>
              <p class="subtitle">Subtitle</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p class="title">Ten</p>
              <p class="subtitle">Subtitle</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <div class="content">
            <p class="title">Eleven</p>
            <p class="subtitle">Subtitle</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Twelve</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-6">
        <article class="tile is-child box">
          <p class="title">Thirteen</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p class="title">Fourteen</p>
          <p class="subtitle">Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
          </div>
        </article>
      </div>
    </div>

  </div>
</section>

<?php include("footer.html"); ?>