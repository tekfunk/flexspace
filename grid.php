<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-primary">
  <div class="has-flxs-head-2">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title"> Grid </h1>
        <div class="subtitle"> When you need a little help from Descartes.</div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="block has-text-centered"> 				
	        <a class="button is-primary is-active" href="#columns">columns</a> 
				<a class="button is-primary" href="#sizing">sizing</a> 
				<a class="button is-primary is-disabled" href="#mozaic">mozaic</a> 
				<a class="button is-primary" href="#tables">tables</a> 
 </div>
      </div>
    </div>
  </div>
</section>



<section class="section" id="columns">
  <div class="container">
    <h1>Columns</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <p class="notification purple"></p>
      </div>
      <div class="column">
        <p class="notification is-accent"></p>
      </div>
      <div class="column">
        <p class="notification is-success"></p>
      </div>
    </div>
      <code class="code-blk">class="columns is-stacked"</code>
    <div class="columns is-stacked">
      <div class="column  is-1-4">
        <p class="notification is-alert"></p>
      </div>
      <div class="column  is-1-2">
        <p class="notification red"></p>
      </div>
      <div class="column">
        <p class="notification orange"></p>
      </div>
      <div class="column is-2-3">
        <p class="notification is-secondary"></p>
      </div>
      <div class="column">
        <p class="notification is-alert"></p>
      </div>
    </div>
    <hr />
  </div>
  <div class="container">
    <div class="columns">
      <div class="column">
	            <div class="content">
<div class="notification">
        <p>Wrap up to as many <strong>.column</strong> as you want in <strong>.columns</strong>. </p>
        <p>They will size themselves evenly unless you<a href="#sizing"> give them a size.</a></p>
        <p>If you dont want them to stay on the same row add <strong>is-stacked</strong>.</p>
      </div></div></div>
      <div class="column">
        <div class="box">
          <pre><code id="g1" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;
&lt;div class=&quot;columns is-stacked&quot;&gt;<br />      &lt;div class=&quot;column  is-1-4&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column  is-1-2&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column is-2-3&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g1"></a> 
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="sizing">
  <div class="container">
    <h1>Sizing</h1>
    <hr>
    <div class="container" id="da-grid">
      <div class="columns">
        <div class="column is-full">
          <p class="code-blk">.is-full</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <p class="code-blk">.is-1-2</p>
        </div>
        <div class="column is-1-4 is-offset-1-8">
          <p class="code-blk">.is-1-4 .is-offset-1-8</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-9-10">
          <p class="code-blk">.is-9-10</p>
        </div>
        <div class="column is-1-10">
          <p class="code-blk">.is-1-10</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-7-12">
          <p class="code-blk">.is-7-12</p>
        </div>
        <div class="column is-5-12">
          <p class="code-blk">.is-5-12</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="content">
           <div class="notification"> <p>To size the columns, add <strong>.is-</strong> with your size.</p><p>Use <strong>.is-full</strong> for 100%, and fractions for the other sizes.</p><p>Any fraction of 2, 3, 4, 5, 6, 8, 10, 12 will work.</p>
            <p>To place the columns, use <strong>.is-offset-</strong> with your size. </p></div>
          </div>
        </div>
        <div class="column is-1-2">
          <div class="box">
            <pre><code id="g2" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;<br />	&lt;div class=&quot;column is-full&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns&quot;&gt;<br />	&lt;div class=&quot;column is-1-2&quot;&gt;&lt;/div&gt;<br />	&lt;div class=&quot;column is-1-4 is-offset-1-8&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns&quot;&gt;<br />	&lt;div class=&quot;column is-1-10&quot;&gt;&lt;/div&gt;<br />	&lt;div class=&quot;column is-9-10&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;	  
&lt;div class=&quot;columns&quot;&gt;<br />    &lt;div class=&quot;column is-7-12&quot;&gt;&lt;/div&gt;<br />     &lt;div class=&quot;column is-5-12&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;</code>
</pre>
            <a class="button icon-clipboard" data-clipboard-target="#g2"></a> </div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-narrow">
          <p class="code-blk">.is-narrow</p>
        </div>
        <div class="column">
          <p class="code-blk">.column</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-narrow-desktop">
          <p class="code-blk">.is-narrow-desktop</p>
        </div>
        <div class="column">
          <p class="code-blk">.column</p>
        </div>
      </div>
      <div class="columns is-gapless is-stacked">
        <div class="column is-1-8">
          <p class="code-blu">.is-1-8</p>
        </div>
        <div class="column is-7-8">
          <p class="code-red">.is-7-8</p>
        </div>
        <div class="column is-5-6">
          <p class="code-blk">.is-5-6</p>
        </div>
        <div class="column is-1-6">
          <p class="code-org">.is-1-6</p>
        </div>
        <div class="column is-1-5">
          <p class="code-red">.is-1-5</p>
        </div>
        <div class="column is-4-5">
          <p class="code-prp">.is-4-5</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="content">
        <div class="notification">    <p>For a column that sizes to it's content, use <strong>.is-narrow</strong>.</p>
            <p>The other column(s) will autosize.</p>
            <p>To get rid of the spacing, use <strong>.is-gapless</strong>.</p></div>
          </div>
        </div>
        <div class="column is-1-2">
          <div class="box">
            <pre><code id="g3" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;<br />  &lt;div class=&quot;column is-11-12&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column is-1-12&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns&quot;&gt;<br />  &lt;div class=&quot;column is-narrow&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns&quot;&gt;<br />  &lt;div class=&quot;column is-narrow-desktop&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns is-gapless is-stacked&quot;&gt;<br />  &lt;div class=&quot;column is-1-8&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column is-7-8&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column is-5-6&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column is-1-6&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column is-1-5&quot;&gt;&lt;/div&gt;<br />  &lt;div class=&quot;column is-4-5&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;</code>
</pre>
            <a class="button icon-clipboard" data-clipboard-target="#g3"></a> </div>
        </div>
      </div>
      <code class="code-blk">class="columns is-mobile"</code>
      <div class="columns is-mobile">
        <div class="column is-1-3">
          <p class="code-blk">.is-1-3</p>
        </div>
        <div class="column is-2-3">
          <p class="code-blk">.is-2-3</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-11-12">
          <p class="code-blk">.is-11-12</p>
        </div>
        <div class="column is-1-12">
          <p class="code-blk">.is-1-12</p>
        </div>
      </div>
      <code class="code-blk">class="columns is-desktop"</code>
      <div class="columns is-desktop">
        <div class="column is-1-4">
          <p class="code-blk">.is-1-4</p>
        </div>
        <div class="column is-3-4">
          <p class="code-blk">.is-3-4</p>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="content">
         <div class="notification">   <p>By default columns display on tablet and desktop sizes.</p>
            <p> To have columns display on a mobile device as well, use <strong>.columns .is-mobile</strong></p>
            <p>If you only want columns on desktop, use <strong>.columns .is-desktop</strong> </p></div>
          </div>
        </div>
        <div class="column is-1-2">
          <div class="box">
            <pre><code id="g4" class="html hljs xml">&lt;div class=&quot;columns is-mobile&quot;&gt;<br />        &lt;div class=&quot;column is-1-3&quot;&gt;&lt;/div&gt;<br />        &lt;div class=&quot;column is-2-3&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns&quot;&gt;<br />   &lt;div class=&quot;column is-11-12&quot;&gt;&lt;/div&gt;<br />   &lt;div class=&quot;column is-1-12&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;<br />&lt;div class=&quot;columns is-desktop&quot;&gt;<br />        &lt;div class=&quot;column is-1-4&quot;&gt;&lt;/div&gt;<br />        &lt;div class=&quot;column is-3-4&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;</code>
</pre>
            <a class="button icon-clipboard" data-clipboard-target="#g4"></a> </div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-3-4-mobile is-1-2-tablet is-1-4-desktop">
          <p class="code-blk"> is-3-4-mobile is-1-2-tablet is-1-4-desktop</p>
        </div>
        <div class="column">
          <p class="code-blu">.column</p>
        </div>
      </div>
      <div class="columns is-stacked">
        <div class="column is-5-8">
          <p class="code-blk">.is-5-8</p>
        </div>
        <div class="column is-3-8">
          <p class="code-blk">.is-3-8</p>
        </div>
        <div class="column is-7-10">
          <p class="code-blk">.is-7-10</p>
        </div>
        <div class="column is-3-10">
          <p class="code-blk">.is-3-10</p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="content">
      <div class="notification">    <p>To choose a column size for a specific device, use <strong>.column .is-1-2-desktop</strong> </p></div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre>
<code id="g5" class="html">&lt;div class=&quot;columns&quot;&gt;         
	&lt;div class=&quot;column is-3-4-mobile is-1-2-tablet is-1-4-desktop&quot;&gt;&lt;/div&gt;
   &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;       
&lt;/div&gt;       
&lt;div class=&quot;columns is-stacked&quot;&gt;         
	&lt;div class=&quot;column is-5-8&quot;&gt;&lt;/div&gt;         
	&lt;div class=&quot;column is-3-8&quot;&gt;&lt;/div&gt;         
	&lt;div class=&quot;column is-7-10&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;column is-3-10&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g5"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="mozaic">
  <div class="container">
    <h1>Mozaic</h1>
    <hr>
<p>Coming Soon.</p>
  </div>
</section><section class="section" id="tables">
  <div class="container">
    <h1>Tables</h1>
    <hr>
    <code class="code-blk">class="table is-bordered"</code>
    <div class="columns">
      <div class="column">
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
     <code class="code-blk">class="table is-striped"</code>
   <div class="columns">
      <div class="column">
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
     <code class="code-blk">class="table is-narrow"</code>
    <div class="columns">
      <div class="column">
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
     <code class="code-blk">class="table is-bordered is-striped is-narrow"</code>
    <div class="columns">
      <div class="column">
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