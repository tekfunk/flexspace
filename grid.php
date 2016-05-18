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
        <p class="notification is-info"></p>
      </div>
      <div class="column">
        <p class="notification is-success"></p>
      </div>
    </div>
    <div class="columns is-multiline">
      <div class="column  is-1-4">
        <p class="notification is-warning"></p>
      </div>
      <div class="column  is-1-2">
        <p class="notification is-danger"></p>
      </div>
      <div class="column">
        <p class="notification is-danger"></p>
      </div>
      <div class="column is-2-3">
        <p class="notification is-danger"></p>
      </div>
      <div class="column">
        <p class="notification is-warning"></p>
      </div>
    </div>
   <hr />
 </div>
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="content">
          <p>Wrap up to as many columns as you want in <code class="mini">class="columns"</code> If you dont want them to stay on the same row add <code class="mini">is-multiline</code>.</p>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre><code id="col-sizes" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;
&lt;div class=&quot;columns is-multiline&quot;&gt;<br />      &lt;div class=&quot;column  is-1-4&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column  is-1-2&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column is-2-3&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;</code>
</pre>
          <a class="button icon-edit" data-clipboard-target="#col-sizes"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="sizing">
  <div class="container">
    <h1>sizing</h1>
    <hr>
    <div class="content">
      <p>To size the columns, add the .is-X-X class.  Columns work on desktop and tablet.</p>
    </div>
    <div class="container" id="da-grid">
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
        <div class="column is-1-2">
          <div class="content">
            <p>To place the columns, add the .is-offset-X-X class. To keep the columns on mobile, add the .is-mobile class
              If you only want columns on desktop, just use the .is-desktop 
              To get rid of the spacing, add the is-gapless class</p>
          </div>
        </div>
        <div class="column is-1-2">
          <div class="box">
            <pre><code id="col-sizes" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;<br />      &lt;div class=&quot;column is-full&quot;&gt;<br />        &lt;p class=&quot;mini&quot;&gt;.is-full&lt;/p&gt;<br />      &lt;/div&gt;<br />    &lt;/div&gt;
&lt;div class=&quot;columns&quot;&gt;<br />      &lt;div class=&quot;column is-1-12&quot;&gt;<br />        &lt;p class=&quot;mini&quot;&gt;.is-1-12&lt;/p&gt;<br />      &lt;/div&gt;<br />      &lt;div class=&quot;column is-11-12&quot;&gt;<br />        &lt;p class=&quot;mini&quot;&gt;.is-11-12&lt;/p&gt;<br />      &lt;/div&gt;<br />    &lt;/div&gt;
&lt;div class=&quot;columns&quot;&gt;<br />      &lt;div class=&quot;column is-1-10&quot;&gt;<br />        &lt;p class=&quot;mini&quot;&gt;.is-1-10&lt;/p&gt;<br />      &lt;/div&gt;<br />      &lt;div class=&quot;column is-9-10&quot;&gt;<br />        &lt;p class=&quot;mini&quot;&gt;.is-9-10&lt;/p&gt;<br />      &lt;/div&gt;<br />    &lt;/div&gt;</code>
</pre>
            <a class="button icon-edit" data-clipboard-target="#ccol-sizes"></a> </div>
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
        <div class="column is-1-2">
          <div class="box">
            <pre><code id="col-sizes" class="html hljs xml"></code>
</pre>
            <a class="button icon-edit" data-clipboard-target="#ccol-sizes"></a> </div>
        </div>
        <div class="column is-1-2">
          <div class="content">
            <p>To place the columns, add the .is-offset-X-X class. To keep the columns on mobile, add the .is-mobile class
              If you only want columns on desktop, just use the .is-desktop 
              To get rid of the spacing, add the is-gapless class</p>
          </div>
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
        <div class="column is-1-2">
          <div class="content">
            <p>To place the columns, add the .is-offset-X-X class. To keep the columns on mobile, add the .is-mobile class
              If you only want columns on desktop, just use the .is-desktop 
              To get rid of the spacing, add the is-gapless class</p>
          </div>
        </div>
        <div class="column is-1-2">
          <div class="box">
            <pre><code id="col-sizes" class="html hljs xml"></code>
</pre>
            <a class="button icon-edit" data-clipboard-target="#ccol-sizes"></a> </div>
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
    <div class="content">
      <p>To place the columns, add the .is-offset-X-X class</p>
      <p>To keep the columns on mobile, add the .is-mobile class</p>
      If you only want columns on desktop, just use the .is-desktop 
      To get rid of the spacing, add the is-gapless class </div>
    <div class="box">
      <pre>
<code id="col-sizes" class="html"></code>
</pre>
      <a class="button icon-edit" data-clipboard-target="#ccol-sizes"></a> </div>
  </div>
</section>
<section class="section" id="responsive">
  <div class="container">
    <h3>Responsive</h3>
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