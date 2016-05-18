<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="fixed bottom right">
  <h3><a href="#columns">columns</a> | <a href="#sizing">sizing</a> | <a href="#tiles">tiles</a> | <a href="#tables">tables</a> | <a href="#level">level</a></h3>
</section>
<section class="hero is-danger">
  <div class="hero-body">
    <div class="container">
      <h1>grid</h1>
  <h3><a href="#columns">columns</a> | <a href="#sizing">sizing</a> | <a href="#tiles">tiles</a> | <a href="#tables">tables</a> | <a href="#level">level</a></h3>
    </div>
  </div>
</section>
<section class="section" id="columns">
  <div class="container">
    <h1>columns</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <p class="notification is-info">.column</p>
      </div>
      <div class="column">
        <p class="notification is-success">.column</p>
      </div>
      <div class="column">
        <p class="notification is-warning">.column</p>
      </div>
      <div class="column">
        <p class="notification is-danger">.column</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="card is-fullwidth">
          <pre><code id="col-4" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;
	&lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;column&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
          <a class="button icon-edit" data-clipboard-target="#col-4"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="sizing">
  <div class="container">
    <h1>sizing</h1>
    <hr>
    <p>To size the columns, add the is- class</p>
    <div class="columns">
      <div class="column is-full">
        <p class="mini">.is-full</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-12">
        <p class="mini">.is-1-12</p>
      </div>
      <div class="column is-11-12">
        <p class="mini">.is-11-12</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-10">
        <p class="mini">.is-1-10</p>
      </div>
      <div class="column is-9-10">
        <p class="mini">.is-9-10</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-8">
        <p class="mini">.is-1-8</p>
      </div>
      <div class="column is-7-8">
        <p class="mini">.is-7-8</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-6">
        <p class="mini">.is-1-6</p>
      </div>
      <div class="column is-5-6">
        <p class="mini">.is-5-6</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-5">
        <p class="mini">.is-1-5</p>
      </div>
      <div class="column is-4-5">
        <p class="mini">.is-4-5</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-4">
        <p class="mini">.is-1-4</p>
      </div>
      <div class="column is-3-4">
        <p class="mini">.is-3-4</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-3">
        <p class="mini">.is-1-3</p>
      </div>
      <div class="column is-2-3">
        <p class="mini">.is-2-3</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <p class="mini">.is-1-2</p>
      </div>
      <div class="column is-1-4 is-offset-1-8">
        <p class="mini">.is-1-4 .is-offset-1-8</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-7-12">
        <p class="mini">.is-7-12</p>
      </div>
      <div class="column is-5-12">
        <p class="mini">.is-5-12</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-5-8">
        <p class="mini">.is-5-8</p>
      </div>
      <div class="column is-3-8">
        <p class="mini">.is-3-8</p>
      </div>
    </div>
    <div class="columns">
      <div class="column is-7-10">
        <p class="mini">.is-7-10</p>
      </div>
      <div class="column is-3-10">
        <p class="mini">.is-3-10</p>
      </div>
    </div>
  </div>
</section>
<section class="section" id="responsive">
  <div class="container">
    <h3>Responsive</h3>
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
    <figure class="highlight">
      <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"columns is-mobile"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"column"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code>
</pre>
    </figure>
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
      <div class="column is-1-2-mobile is-1-3-tablet is-1-4-desktop">
        <p class="notification is-info"><code>is-1-2-mobile</code><br>
          <code>is-1-3-tablet</code><br>
          <code>is-1-4-desktop</code></p>
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
    <h3>Multiline</h3>
    <div class="content">
      <p>Whenever you want to start a new line, you can close a <code>columns</code> container and start a new one. But you can also add the <code>is-multiline</code> modifier and add <strong>more</strong> column elements that would fit in a single row.</p>
    </div>
    <div class="columns is-multiline is-mobile">
      <div class="column is-1-4">
        <p class="notification is-info"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-success"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-warning"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-danger"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-2">
        <p class="notification is-info"><code>is-1-2</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-success"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-warning"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-danger"><code>is-1-4</code></p>
      </div>
      <div class="column">
        <p class="notification is-info">Auto</p>
      </div>
    </div>
    <hr>
    <h3>Gapless</h3>
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
      <div class="column is-1-4">
        <p class="notification is-info"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-success"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-warning"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-danger"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-2">
        <p class="notification is-info"><code>is-1-2</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-success"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-warning"><code>is-1-4</code></p>
      </div>
      <div class="column is-1-4">
        <p class="notification is-danger"><code>is-1-4</code></p>
      </div>
      <div class="column">
        <p class="notification is-info">Auto</p>
      </div>
    </div>
    <hr>
    <h3>Narrow column</h3>
    <div class="content">
      <p>If you want a column to only take the <strong>space it needs</strong>, use the <code>is-narrow</code> modifier. The other column(s) will fill up the remaining space.</p>
    </div>
    <div class="columns">
      <div class="column is-narrow">
        <div class="box" style="width: 200px;">
          <p class="title is-5">Narrow column</p>
          <p>This column is only 200px wide.</p>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <p class="title is-5">Flexible column</p>
          <p>This column will take up the remaining space available.</p>
        </div>
      </div>
    </div>
    <div class="content">
      <p>As for the size modifiers, you can have narrow columns for different <strong>breakpoints</strong>:</p>
      <ul>
        <li><code>is-narrow-mobile</code></li>
        <li><code>is-narrow-tablet</code></li>
        <li><code>is-narrow-desktop</code></li>
      </ul>
    </div>
  </div>
  </div>
</section>
<section class="section" id="tables">
  <div class="container">
    <h1>tables</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <p>Add <strong>borders</strong> to all the cells.</p>
      </div>
      <div class="column"> <code>table is-bordered</code> </div>
      <div class="column is-1-2">
        <table class="table is-bordered">
          <thead>
            <tr>
              <th>One</th>
              <th>Two</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Three</td>
              <td>Four</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <p>Add <strong>stripes</strong> to the table.</p>
      </div>
      <div class="column"> <code>table is-striped</code> </div>
      <div class="column is-1-2">
        <table class="table is-striped">
          <thead>
            <tr>
              <th>One</th>
              <th>Two</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Three</td>
              <td>Four</td>
            </tr>
            <tr>
              <td>Five</td>
              <td>Six</td>
            </tr>
            <tr>
              <td>Seven</td>
              <td>Eight</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <p>Make the cells <strong>narrower</strong>.</p>
      </div>
      <div class="column"> <code>table is-narrow</code> </div>
      <div class="column is-1-2">
        <table class="table is-narrow">
          <thead>
            <tr>
              <th>One</th>
              <th>Two</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Three</td>
              <td>Four</td>
            </tr>
            <tr>
              <td>Five</td>
              <td>Six</td>
            </tr>
            <tr>
              <td>Seven</td>
              <td>Eight</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <p>You can <strong>combine</strong> all three modifiers.</p>
      </div>
      <div class="column"> <code>table is-bordered is-striped is-narrow</code> </div>
      <div class="column is-1-2">
        <table class="table is-bordered is-striped is-narrow">
          <thead>
            <tr>
              <th>One</th>
              <th>Two</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Three</td>
              <td>Four</td>
            </tr>
            <tr>
              <td>Five</td>
              <td>Six</td>
            </tr>
            <tr>
              <td>Seven</td>
              <td>Eight</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php"); ?>