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
        <div class="block has-text-centered"> <a class="button is-primary is-active" href="#columns">columns</a> <a class="button is-primary" href="#sizing">sizing</a> <a class="button is-primary" href="#flexbox">flexbox</a> <a class="button is-primary" href="#isotope">isotope</a> <a class="button is-primary" href="#tables">tables</a> </div>
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
        <div class="notification is-secondary">1</div>
      </div>
      <div class="column">
        <div class="notification is-secondary">2</div>
      </div>
      <div class="column">
        <div class="notification is-secondary">3</div>
      </div>
    </div>
    <code class="code-blk">class="columns is-stacked"</code>
    <div class="columns is-stacked">
      <div class="column  is-1-4">
        <div class="notification is-accent">1</div>
      </div>
      <div class="column is-1-2">
        <div class="notification is-accent">2</div>
      </div>
      <div class="column">
        <div class="notification is-accent">3</div>
      </div>
      <div class="column is-2-3">
        <div class="notification is-accent">4</div>
      </div>
      <div class="column">
        <div class="notification is-accent">5</div>
      </div>
    </div>
    <hr />
  </div>
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="box content is-light">
          <p>Wrap up to as many <strong>.column</strong> as you want in <strong>.columns</strong>. </p>
          <p>They will size themselves evenly unless you<a href="#sizing"> give them a size.</a></p>
          <p>If you dont want them to stay on the same row add <strong>is-stacked</strong>.</p>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre><code id="g1" class="html hljs xml">&lt;div class=&quot;columns&quot;&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;
&lt;div class=&quot;columns is-stacked&quot;&gt;<br />      &lt;div class=&quot;column  is-1-4&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column  is-1-2&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column is-2-3&quot;&gt;&lt;/div&gt;<br />      &lt;div class=&quot;column&quot;&gt;&lt;/div&gt;<br />&lt;/div&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g1"></a> </div>
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
          <div class="notification is-alert">.is-full</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="notification is-alert">.is-1-2</div>
        </div>
        <div class="column is-1-4 is-offset-1-8">
          <div class="notification is-alert">.is-1-4 .is-offset-1-8</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-9-10">
          <div class="notification is-alert">.is-9-10</div>
        </div>
        <div class="column is-1-10">
          <div class="notification is-alert">.is-1-10</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-7-12">
          <div class="notification is-alert">.is-7-12</div>
        </div>
        <div class="column is-5-12">
          <div class="notification is-alert">.is-5-12</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="content">
            <div class="box content is-light">
              <p>To size the columns, add <strong>.is-</strong> with your size.</p>
              <p>Use <strong>.is-full</strong> for 100%, and fractions for the other sizes.</p>
              <p>Any fraction of 2, 3, 4, 5, 6, 8, 10, 12 will work.</p>
              <p>To place the columns, use <strong>.is-offset-</strong> with your size. </p>
            </div>
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
          <div class="notification is-success">.is-narrow</div>
        </div>
        <div class="column">
          <div class="notification is-success">.column</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-narrow-desktop">
          <div class="notification is-success">.is-narrow-desktop</div>
        </div>
        <div class="column">
          <div class="notification is-success">.column</div>
        </div>
      </div>
      <div class="columns is-gapless is-stacked">
        <div class="column is-1-8">
          <div class="notification is-accent">.is-1-8</div>
        </div>
        <div class="column is-7-8">
          <div class="notification is-secondary">.is-7-8</div>
        </div>
        <div class="column is-5-6">
          <div class="notification is-success">.is-5-6</div>
        </div>
        <div class="column is-1-6">
          <div class="notification is-alert">.is-1-6</div>
        </div>
        <div class="column is-1-5">
          <div class="notification is-accent">.is-1-5</div>
        </div>
        <div class="column is-4-5">
          <div class="notification is-secondary">.is-4-5</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="content">
            <div class="box content is-light">
              <p>For a column that sizes to it's content, use <strong>.is-narrow</strong>.</p>
              <p>The other column(s) will autosize.</p>
              <p>To get rid of the spacing, use <strong>.is-gapless</strong>.</p>
            </div>
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
          <div class="notification is-alert">.is-1-3</div>
        </div>
        <div class="column is-2-3">
          <div class="notification is-alert">.is-2-3</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-11-12">
          <div class="notification is-success">.is-11-12</div>
        </div>
        <div class="column is-1-12">
          <div class="notification is-success">.is-1-12</div>
        </div>
      </div>
      <code class="code-blk">class="columns is-desktop"</code>
      <div class="columns is-desktop">
        <div class="column is-1-4">
          <div class="notification is-secondary">.is-1-4</div>
        </div>
        <div class="column is-3-4">
          <div class="notification is-secondary">.is-3-4</div>
        </div>
      </div>
      <div class="columns">
        <div class="column is-1-2">
          <div class="content">
            <div class="box content is-light">
              <p>By default columns display on tablet and desktop sizes.</p>
              <p> To have columns display on a mobile device as well, use <strong>.columns .is-mobile</strong></p>
              <p>If you only want columns on desktop, use <strong>.columns .is-desktop</strong> </p>
            </div>
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
          <div class="notification is-secondary"> is-3-4-mobile is-1-2-tablet is-1-4-desktop</div>
        </div>
        <div class="column">
          <div class="notification is-secondary">.column</div>
        </div>
      </div>
      <div class="columns is-stacked">
        <div class="column is-5-8">
          <div class="notification is-alert">.is-5-8</div>
        </div>
        <div class="column is-3-8">
          <div class="notification is-alert">.is-3-8</div>
        </div>
        <div class="column is-7-10">
          <div class="notification is-alert">.is-7-10</div>
        </div>
        <div class="column is-3-10">
          <div class="notification is-alert">.is-3-10</div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="content">
          <div class="box content is-light">
            <p>To choose a column size for a specific device, use <strong>.column .is-1-2-desktop</strong> </p>
          </div>
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
<section class="section" id="flexbox">
  <div class="container">
    <h1>Flexbox</h1>
    <hr>
    <h3>Parent</h3>
    <div class="box content is-light">
      <p>I have added flexbox container parameters as a classes so adjusting on the fly is simple. To adjust a parameter, simply add the class corresponding with the parameter. Many containers can serve as a flex parent, I'll add the list soon. To see what these parameters do in realtime, play with the dropdowns. More improvements on this interface to come.</p>
    </div>
    <div id="flex-demo" class="columns align-items-center">
      <div class="column is-1-10 box is-accent">
        <div class="ratio is-1by1">
          <h1>1 </h1><p>is-1-10 is-1by1</p>
        </div>
      </div>
      <div class="column is-1-6 box is-secondary">
        <div class="ratio is-3by2">
          <h1>2</h1><p>is-1-6 is-3by2</p>
        </div>
      </div>
      <div class="column is-1-8 box is-accent">
        <div class="ratio is-16by9">
          <h1>3</h1><p>is-1-8 is-16by9</p>
        </div>
      </div>
      <div class="column is-1-10 box is-secondary">
        <div class="ratio is-1by1">
          <h1>4</h1><p>is-1-10 is-1by1</p>
        </div>
      </div>
      <div class="column is-1-10 box is-accent">
        <div class="ratio is-4by3">
          <h1>5</h1><p>is-1-10 is-4by3</p>
        </div>
      </div>
      <div class="column is-1-5 box is-secondary">
        <div class="ratio is-2by1">
          <h1>6</h1><p>is-1-5 is-2by1</p>
        </div>
      </div>
      <div class="column is-1-4 box is-accent">
        <div class="ratio is-4by3">
          <h1>7</h1><p>is-1-4 is-4by3</p>
        </div>
      </div>
      <div class="column is-1-10 box is-secondary">
        <div class="ratio is-2by1">
          <h1>8</h1><p>is-1-10 is-2by1</p>
        </div>
      </div>
      <div class="column is-1-8 box is-accent">
        <div class="ratio is-16by9">
          <h1>9</h1><p>is-1-8 is-16by9</p>
        </div>
      </div>
      <div class="column is-1-10 box is-secondary">
        <div class="ratio is-1by1">
          <h1>10</h1><p>is-1-10 is-1by1</p>
        </div>
      </div>
      <div class="column is-1-10 box is-accent">
        <div class="ratio is-4by3">
          <h1>11</h1><p>is-1-10 is-4by3</p>
        </div>
      </div>
      <div class="column is-1-5 box is-secondary">
        <div class="ratio is-2by1">
          <h1>12</h1><p>is-1-5 is-2by1</p>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <div class="box content is-light">
          <div class="media block flex-wrap-wrap justify-content-space-between">
            <p class="control has-addons"> 
	        <a class="button is-disabled">flex-direction</a> 
            <span class="select">
              <select name="flex-direction" id="flex-direction" value="">
                <option value="flex-direction-row">row</option>
                <option value="flex-direction-row-reverse">row-reverse</option>
                <option value="flex-direction-column">column</option>
                <option value="flex-direction-column-reverse">column-reverse</option>
              </select>
              </span> </p>
            <p class="control has-addons">
	        <a class="button is-disabled">flex-wrap</a> 
	            <span class="select">
              <select name="flex-wrap" id="flex-wrap" value="">
                <option value="flex-wrap-nowrap">nowrap</option>
                <option value="flex-wrap-wrap">wrap</option>
                <option value="flex-wrap-wrap-reverse">wrap-reverse</option>
              </select>
              </span> </p>
            <p class="control has-addons">
	        <a class="button is-disabled">justify-content</a> 
	            <span class="select">
              <select name="justify-content" id="justify-content" value="">
                 <option value="justify-content-stretch">stretch</option>
                <option value="justify-content-flex-start">flex-start</option>
                <option value="justify-content-flex-end">flex-end</option>
                <option value="justify-content-center">center</option>
                <option value="justify-content-space-between">space-between</option>
                <option value="justify-content-space-around">space-around</option>
              </select>
              </span> </p>
            <p class="control has-addons">
	        <a class="button is-disabled">align-items</a> 
	            <span class="select">
              <select name="align-items" id="align-items" value="">
                <option value="align-items-center">center</option>
                 <option value="align-items-stretch">stretch</option>
               <option value="align-items-flex-start">flex-start</option>
                <option value="align-items-flex-end">flex-end</option>
                <option value="align-items-baseline">baseline</option>
              </select>
              </span> </p>
            <p class="control has-addons">
	        <a class="button is-disabled">align-content</a> 
	            <span class="select">
              <select name="align-content" id="align-content" value="" label="Align Content">
                <option value="align-content-stretch">stretch</option>
                <option value="align-content-flex-start">flex-start</option>
                <option value="align-content-flex-end">flex-end</option>
                <option value="align-content-center">center</option>
                <option value="align-content-space-between">space-between</option>
                <option value="align-content-space-around">space-around</option>
              </select>
              </span> </p>
            <a id="reload-flex"class="button is-secondary"><i class="ics icon-reload"></i>Clear</a> </div>
        </div>
      </div>
      <div class="column">
        <div class="box content is-light">
          <div class="flex-direction"></div>
          <div class="flex-wrap"></div>
          <div class="justify-content"></div>
          <div class="align-items"></div>
          <div class="align-content"></div>
          <div class="flex-classes"></div>
        </div>
      </div>
    </div>
        <h3>Children</h3>
    <div class="box content is-light">
      <p>Coming Soon.</p>
    </div>

  </div>
</section>
<section class="section" id="isotope">
  <div class="container">
    <h1>Isotope</h1>
    <hr>
    <div id="isotope-list" style="margin-bottom: 20px;">
      <div class="item is-1-2">
        <div class="notification is-alert" style="height:400px;">1</div>
      </div>
      <div class="item is-1-4">
        <div class="notification is-success" style="height:200px;">2</div>
      </div>
      <div class="item is-1-4">
        <div class="notification is-accent" style="height:400px;">3</div>
      </div>
      <div class="item is-1-4">
        <div class="notification is-secondary" style="height:200px;">4</div>
      </div>
      <div class="item is-1-5">
        <div class="notification is-red" style="height:200px;">5</div>
      </div>
      <div class="item is-1-5">
        <div class="notification is-accent" style="height:200px;">6</div>
      </div>
      <div class="item is-1-5">
        <div class="notification is-dark" style="height:200px;">7</div>
      </div>
      <div class="item is-1-5">
        <div class="notification is-success" style="height:200px;">8</div>
      </div>
      <div class="item is-1-5">
        <div class="notification is-red" style="height:200px;">9</div>
      </div>
      <div class="item is-1-2">
        <div class="notification is-secondary" style="height:200px;">10</div>
      </div>
      <div class="item is-1-2">
        <div class="notification is-alert" style="height:100px;">11</div>
      </div>
      <div class="item is-1-2">
        <div class="notification is-dark" style="height:100px;">12</div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <div class="box content is-light">
          <p>For a masonry layout capable of filtering and sorting isotope.js is available.</p>
          <p>Use <strong>#isotope-list</strong> as your container, and <strong>.item</strong> for each mod.  .item can be sized with the same classes as columns. They will be as tall as the content within them.</p>
        </div>
      </div>
      <div class="column is-1-2">
        <div class="box">
          <pre><code id="g6" class="html hljs xml">&lt;div id=&quot;isotope-list&quot;&gt;<br />	&lt;div class=&quot;item is-1-2&quot;&gt;&lt;div class=&quot;notification is-alert&quot;&gt;1&lt;/div&gt;&lt;/div&gt;<br />	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;box content is-light&quot;&gt;2&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-accent&quot;&gt;3&lt;/div&gt;&lt;/div&gt;<br />	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-dark&quot;&gt;4&lt;/div&gt;&lt;/div&gt;<br />	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-light&quot;&gt;5&lt;/div&gt;&lt;/div&gt;<br />	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-success&quot;&gt;6&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-2&quot;&gt;&lt;div class=&quot;notification is-secondary&quot;&gt;7&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-2&quot;&gt;&lt;div class=&quot;notification is-alert&quot;&gt;8&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;box content is-light&quot;&gt;9&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-accent&quot;&gt;10&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-light&quot;&gt;11&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-success&quot;&gt;12&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-dark&quot;&gt;13&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-secondary&quot;&gt;14&lt;/div&gt;&lt;/div&gt;
	&lt;div class=&quot;item is-1-4&quot;&gt;&lt;div class=&quot;notification is-accent&quot;&gt;15&lt;/div&gt;&lt;/div&gt;
&lt;/div&gt;</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g6"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="tables">
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