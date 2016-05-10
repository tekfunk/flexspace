<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero">
  <div class="container is-fluid">
    <h1>page</h1>
    <h2><a href="#layout">layout</a> | <a href="#containers">containers & helpers</a> | <a href="#text">text</a></h2>
  </div>
</section>

<section class="section" id="layout">
  <div class="container">
    <h1>top level layout</h1>
    <h2>&lt;header&gt;, &lt;section&gt;, &lt;figure&gt;, &lt;footer&gt; | .header, .hero, .section, .footer </h2>
    <hr>
  </div>
</section>


<header class="header">  
	<div class="container">
		<h1>&lt;header&gt; .header </h1>
	</div>
</header>

<section class="hero">  
    <div class="container">
	    <h1>&lt;section&gt; .hero</h1>
	    <p>Paragraph.</p>
	    <h2>Title Two</h2>
	</div>
</section>

<section class="section">  
    <div class="container">
	    <h1>&lt;section&gt; .section</h1>
	    <p>Paragraph.</p>
	    <h2>Title Two</h2>
	</div>
</section>


<figure>
    <div class="container">
	    <h1>&lt;figure&gt;</h1>
	    <p>Paragraph.</p>
	    <h2>Title Two</h2>
	</div>
</figure>
<footer class="footer">   
    <div class="container">
	    <h1>&lt;footer&gt; .footer</h1>
	    <p>Paragraph.</p>
	    <h2>Title Two</h2>
</footer>

<section class="section" id="containers">
  <div class="container">
    <h1>containers & helpers</h1>
    <h2>&lt;header&gt;, &lt;section&gt;, &lt;figure&gt;, &lt;footer&gt; | .header, .hero, .section, .footer </h2>
    <hr>
    <h1 class="title">.container</h1>
    <hr>
    <div class="notification">vanilla .container</div>
    <hr>
    <h1 class="title">+ .fluid</h1>
    <hr>
  </div>
  <div class="container is-fluid">
    <div class="notification">to the edge with a margin</div>
  </div>
  <div class="container">
  <hr>
    <h1 class="title">.content</h1>
    <div class="content">
      <p>use the <code>is-medium</code> and <code>is-large</code> modifiers to change the font size.</p>
    </div>
    <hr>
  </section>
  
  <section class="section">
  <div class="container">
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
  
  
  <section class="section">   
    
    
      <div class="container" id="text">
    <h1>Text</h1>
    <h2>&lt;header&gt;, &lt;section&gt;, &lt;figure&gt;, &lt;footer&gt; | .header, .hero, .section, .footer </h2>
    <hr>

    <div class="content">
      <h1>h1 - Hello World</h1>
      <p>p - Lorem ipsum dolor sit amet, <em>em -consectetur adipiscing elit</em>. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.</p>
      <h2>h2 - Second level</h2>
      <p>Curabitur accumsan turpis pharetra <strong>strong - augue tincidunt</strong> blandit. Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.</p>
      <ul>
        ul
        <li>li - In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
        <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
        <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
        <li>Ut non enim metus.</li>
      </ul>
      <h3>h3 - Third level</h3>
      <p>p - Quisque ante lacus, malesuada ac auctor vitae, congue <a href="#">a - non ante</a>. Phasellus lacus ex, semper ac tortor nec, fringilla condimentum orci. Fusce eu rutrum tellus.</p>
      <ol>
        ol
        <li>li - Donec blandit a lorem id convallis.</li>
        <li>Cras gravida arcu at diam gravida gravida.</li>
        <li>Integer in volutpat libero.</li>
        <li>Donec a diam tellus.</li>
        <li>Aenean nec tortor orci.</li>
        <li>Quisque aliquam cursus urna, non bibendum massa viverra eget.</li>
        <li>Vivamus maximus ultricies pulvinar.</li>
      </ol>
      <blockquote>blockquote - Ut venenatis, nisl scelerisque sollicitudin fermentum, quam libero hendrerit ipsum, ut blandit est tellus sit amet turpis.</blockquote>
      <p>Quisque at semper enim, eu hendrerit odio. Etiam auctor nisl et <em>justo sodales</em> elementum. Maecenas ultrices lacus quis neque consectetur, et lobortis nisi molestie.</p>
      <p>Sed sagittis enim ac tortor maximus rutrum. Nulla facilisi. Donec mattis vulputate risus in luctus. Maecenas vestibulum interdum commodo.</p>
      <p>Suspendisse egestas sapien non felis placerat elementum. Morbi tortor nisl, suscipit sed mi sit amet, mollis malesuada nulla. Nulla facilisi. Nullam ac erat ante.</p>
      <h4>h4 - Fourth level</h4>
      <p>Nulla efficitur eleifend nisi, sit amet bibendum sapien fringilla ac. Mauris euismod metus a tellus laoreet, at elementum ex efficitur.</p>
      <p>Maecenas eleifend sollicitudin dui, faucibus sollicitudin augue cursus non. Ut finibus eleifend arcu ut vehicula. Mauris eu est maximus est porta condimentum in eu justo. Nulla id iaculis sapien.</p>
      <p>Phasellus porttitor enim id metus volutpat ultricies. Ut nisi nunc, blandit sed dapibus at, vestibulum in felis. Etiam iaculis lorem ac nibh bibendum rhoncus. Nam interdum efficitur ligula sit amet ullamcorper. Etiam tristique, leo vitae porta faucibus, mi lacus laoreet metus, at cursus leo est vel tellus. Sed ac posuere est. Nunc ultricies nunc neque, vitae ultricies ex sodales quis. Aliquam eu nibh in libero accumsan pulvinar. Nullam nec nisl placerat, pretium metus vel, euismod ipsum. Proin tempor cursus nisl vel condimentum. Nam pharetra varius metus non pellentesque.</p>
      <h5>h5 - Fifth level</h5>
      <p>Aliquam sagittis rhoncus vulputate. Cras non luctus sem, sed tincidunt ligula. Vestibulum at nunc elit. Praesent aliquet ligula mi, in luctus elit volutpat porta. Phasellus molestie diam vel nisi sodales, a eleifend augue laoreet. Sed nec eleifend justo. Nam et sollicitudin odio.</p>
      <h6>h6 - Sixth level</h6>
      <p>Cras in nibh lacinia, venenatis nisi et, auctor urna. Donec pulvinar lacus sed diam dignissim, ut eleifend eros accumsan. Phasellus non tortor eros. Ut sed rutrum lacus. Etiam purus nunc, scelerisque quis enim vitae, malesuada ultrices turpis. Nunc vitae maximus purus, nec consectetur dui. Suspendisse euismod, elit vel rutrum commodo, ipsum tortor maximus dui, sed varius sapien odio vitae est. Etiam at cursus metus.</p>
    </div>
    <hr>
  </div>
 </section>
 <section class="section">
  <div class="container">
    <h1 class="title">Titles</h1>
    <h2 class="subtitle">
      Simple <strong>headings</strong> to add depth to your page
    </h2>
    <hr>
    <div class="columns">
      <div class="column">
        <p>There are <strong>2 types</strong> of heading:</p>
      </div>
      <div class="column">
        <p class="title">Title</p>
        <p class="subtitle">Subtitle</p>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Title<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>Subtitle<span class="nt">&lt;/h2&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <p>There are <strong>6 sizes</strong> available:</p>
      </div>
      <div class="column">
        <p class="title is-1">Title 1</p>
        <p class="title is-2">Title 2</p>
        <p class="title is-3">Title 3 (default size)</p>
        <p class="title is-4">Title 4</p>
        <p class="title is-5">Title 5</p>
        <p class="title is-6">Title 6</p>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title is-1"</span><span class="nt">&gt;</span>Title 1<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"title is-2"</span><span class="nt">&gt;</span>Title 2<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"title is-3"</span><span class="nt">&gt;</span>Title 3<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"title is-4"</span><span class="nt">&gt;</span>Title 4<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"title is-5"</span><span class="nt">&gt;</span>Title 5<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"title is-6"</span><span class="nt">&gt;</span>Title 6<span class="nt">&lt;/h6&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <div class="columns">
      <div class="column"></div>
      <div class="column">
        <p class="subtitle is-1">Subtitle 1</p>
        <p class="subtitle is-2">Subtitle 2</p>
        <p class="subtitle is-3">Subtitle 2</p>
        <p class="subtitle is-4">Subtitle 4</p>
        <p class="subtitle is-5">Subtitle 5 (default size)</p>
        <p class="subtitle is-6">Subtitle 6</p>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"subtitle is-1"</span><span class="nt">&gt;</span>Subtitle 1<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle is-2"</span><span class="nt">&gt;</span>Subtitle 2<span class="nt">&lt;/h2&gt;</span>
<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"subtitle is-3"</span><span class="nt">&gt;</span>Subtitle 3<span class="nt">&lt;/h3&gt;</span>
<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"subtitle is-4"</span><span class="nt">&gt;</span>Subtitle 4<span class="nt">&lt;/h4&gt;</span>
<span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"subtitle is-5"</span><span class="nt">&gt;</span>Subtitle 5<span class="nt">&lt;/h5&gt;</span>
<span class="nt">&lt;h6</span> <span class="na">class=</span><span class="s">"subtitle is-6"</span><span class="nt">&gt;</span>Subtitle 6<span class="nt">&lt;/h6&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="content">
          <p>When you <strong>combine</strong> a title and a subtitle, they move closer together.</p>
          <p>As a rule of thumb, it is recommended to use a size difference of <strong>two</strong>. So if you use a <code>title is-1</code>, combine it with a <code>subtitle is-3</code>.</p>
        </div>
      </div>
      <div class="column">
        <div class="block">
          <p class="title is-1">Title 1</p>
          <p class="subtitle is-3">Subtitle 3</p>
        </div>
        <div class="block">
          <p class="title is-2">Title 2</p>
          <p class="subtitle is-4">Subtitle 4</p>
        </div>
        <div class="block">
          <p class="title is-3">Title 3</p>
          <p class="subtitle is-5">Subtitle 5</p>
        </div>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title is-1"</span><span class="nt">&gt;</span>Title 1<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle is-3"</span><span class="nt">&gt;</span>Subtitle 3<span class="nt">&lt;/p&gt;</span>

<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title is-2"</span><span class="nt">&gt;</span>Title 2<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle is-4"</span><span class="nt">&gt;</span>Subtitle 4<span class="nt">&lt;/p&gt;</span>

<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title is-3"</span><span class="nt">&gt;</span>Title 3<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle is-5"</span><span class="nt">&gt;</span>Subtitle 5<span class="nt">&lt;/p&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
  </div>

	 
  
</section>
<?php include("inc/footer.php"); ?>