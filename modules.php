<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero">
	<div class="container">
		<h1>modules</h1>
           <h3><a href="#box">box</a> | <a href="#card">card</a>  | <a href="#images">images</a> | <a href="#media">media</a> | <a href="#messages">messages</a> |  <a href="#notifications">notifications</a> | <a href="#modal">modal</a> | <a href="#tags">tags</a></h3>
	</div>
</section>
<section class="section" id="box">
  <div class="container">
    <h1>.box</h1>
    <hr>

    <div class="columns">
      <div class="column is-4">
        <div class="content">
          <p>
            The <code>.box</code> element is simply a container with a shadow, a border, a radius, and some padding.
            <br>
            For example, you can include a media object:
          </p>
        </div>
      </div>

      <div class="column is-8">
        <div class="box">
          <article class="media">
            <div class="media-left">
              <figure class="image is-64x64">
                <img src="http://placehold.it/128x128" alt="Image">
              </figure>
            </div>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                </p>
              </div>
              <nav class="level">
                <div class="level-left">
                  <a class="level-item">
                    <span class="icon is-small"><i class="ics icon-reply"></i></span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"><i class="ics icon-retweet"></i></span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"><i class="ics icon-heart"></i></span>
                  </a>
                </div>
              </nav>
            </div>
          </article>
        </div>
      </div>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/128x128"</span> <span class="na">alt=</span><span class="s">"Image"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/figure&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>
          <span class="nt">&lt;strong&gt;</span>John Smith<span class="nt">&lt;/strong&gt;</span> <span class="nt">&lt;small&gt;</span>@johnsmith<span class="nt">&lt;/small&gt;</span> <span class="nt">&lt;small&gt;</span>31m<span class="nt">&lt;/small&gt;</span>
          <span class="nt">&lt;br&gt;</span>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
        <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-reply"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-retweet"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-heart"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/nav&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

  </div>
</section>

<section class="section" id="card">
  <div class="container">
    <h1>Card</h1>
    <h2>An all-around flexible and composable component</h2>

    <hr>

    <div class="columns">
      <div class="column is-one-third">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="http://placehold.it/300x225" alt="">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-left">
                <figure class="image is-32x32">
                  <img src="http://placehold.it/64x64" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <p class="title is-5">John Smith</p>
                <p class="subtitle is-6">@johnsmith</p>
              </div>
            </div>

            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
              <br>
              <small>11:09 PM - 1 Jan 2016</small>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-image"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-4by3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/300x225"</span> <span class="na">alt=</span><span class="s">""</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/figure&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-32x32"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/64x64"</span> <span class="na">alt=</span><span class="s">"Image"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title is-5"</span><span class="nt">&gt;</span>John Smith<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle is-6"</span><span class="nt">&gt;</span>@johnsmith<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Phasellus nec iaculis mauris. <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>@bulmaio<span class="nt">&lt;/a&gt;</span>.
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>#css<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>#responsive<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;br&gt;</span>
      <span class="nt">&lt;small&gt;</span>11:09 PM - 1 Jan 2016<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>

    <hr>

    <div class="columns">
      <div class="column is-one-third">
        <div class="card is-fullwidth">
          <header class="card-header">
            <p class="card-header-title">
              Component
            </p>
            <a class="card-header-icon">
              <i class="ics icon-angle-down"></i>
            </a>
          </header>
          <div class="card-content">
            <div class="content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
              <br>
              <small>11:09 PM - 1 Jan 2016</small>
            </div>
          </div>
          <footer class="card-footer">
            <a class="card-footer-item">Save</a>
            <a class="card-footer-item">Edit</a>
            <a class="card-footer-item">Delete</a>
          </footer>
        </div>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card is-fullwidth"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;header</span> <span class="na">class=</span><span class="s">"card-header"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-header-title"</span><span class="nt">&gt;</span>
      Component
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"card-header-icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-angle-down"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/header&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>@bulmaio<span class="nt">&lt;/a&gt;</span>. <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>#css<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>#responsive<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;br&gt;</span>
      <span class="nt">&lt;small&gt;</span>11:09 PM - 1 Jan 2016<span class="nt">&lt;/small&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"card-footer"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"card-footer-item"</span><span class="nt">&gt;</span>Save<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"card-footer-item"</span><span class="nt">&gt;</span>Edit<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"card-footer-item"</span><span class="nt">&gt;</span>Delete<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/footer&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
  </div>
</section>


<section class="section" id="images">
<div class="container">
    <h1>.images</h1>
    <hr>

    <div class="content">
      <p>Because images can take a few seconds to load (or not at all), use the <code>.image</code> container to specify a <strong>precisely sized</strong> container so that your layout isn't broken because of image loading or image errors.</p>
    </div>

    <div class="example">
      <figure class="image is-128x128">
        <img src="http://placehold.it/128x128">
      </figure>
    </div>


    <hr>

    <h3>Fixed square images</h3>
    <div class="content">
      <p>There are <strong>7</strong> dimensions to choose from, useful for <strong>avatars</strong>:</p>
    </div>

    <table class="table is-bordered">
      <tbody>
        <tr>
          <td><code>image is-16x16</code></td>
          <td><figure class="image is-16x16"><img src="http://placehold.it/16x16"></figure></td>
          <td>16x16px</td>
        </tr>
        <tr>
          <td><code>image is-24x24</code></td>
          <td><figure class="image is-24x24"><img src="http://placehold.it/24x24"></figure></td>
          <td>24x24px</td>
        </tr>
        <tr>
          <td><code>image is-32x32</code></td>
          <td><figure class="image is-32x32"><img src="http://placehold.it/32x32"></figure></td>
          <td>32x32px</td>
        </tr>
        <tr>
          <td><code>image is-48x48</code></td>
          <td><figure class="image is-48x48"><img src="http://placehold.it/48x48"></figure></td>
          <td>48x48px</td>
        </tr>
        <tr>
          <td><code>image is-64x64</code></td>
          <td><figure class="image is-64x64"><img src="http://placehold.it/64x64"></figure></td>
          <td>64x64px</td>
        </tr>
        <tr>
          <td><code>image is-96x96</code></td>
          <td><figure class="image is-96x96"><img src="http://placehold.it/96x96"></figure></td>
          <td>96x96px</td>
        </tr>
        <tr>
          <td><code>image is-128x128</code></td>
          <td><figure class="image is-128x128"><img src="http://placehold.it/128x128"></figure></td>
          <td>128x128px</td>
        </tr>
      </tbody>
    </table>

    <h4 class="title is-4">Retina images</h4>

    <div class="content">
      <p>Because the image is fixed in size, you can use an image that is <strong>twice as big</strong>. So for example, in a <code>128x128</code> container, you can use a <code>256x256</code> image, but resized to <strong>128x128</strong> pixels.</p>
    </div>

    <div class="example">
      <figure class="image is-128x128">
        <img src="http://placehold.it/256x256">
      </figure>
    </div>


    <hr>

    <h3>Responsive images with ratios</h3>

    <div class="content">
      <p>If you don't know the exact dimensions but know the <strong>ratio</strong> instead, you can use one of the <strong>5 ratio modifers</strong>:</p>
    </div>

    <table id="images" class="table is-bordered">
      <tbody>
        <tr>
          <td><code>image is-square</code></td>
          <td><figure class="image is-square"><img src="http://placehold.it/480x480"></figure></td>
          <td>Square (or 1by1)</td>
        </tr>
        <tr>
          <td><code>image is-1by1</code></td>
          <td><figure class="image is-1by1"><img src="http://placehold.it/480x480"></figure></td>
          <td>1 by 1</td>
        </tr>
        <tr>
          <td><code>image is-4by3</code></td>
          <td><figure class="image is-4by3"><img src="http://placehold.it/640x480"></figure></td>
          <td>4 by 3</td>
        </tr>
        <tr>
          <td><code>image is-3by2</code></td>
          <td><figure class="image is-3by2"><img src="http://placehold.it/480x320"></figure></td>
          <td>3 by 2</td>
        </tr>
        <tr>
          <td><code>image is-16by9</code></td>
          <td><figure class="image is-16by9"><img src="http://placehold.it/640x360"></figure></td>
          <td>16 by 9</td>
        </tr>
        <tr>
          <td><code>image is-2by1</code></td>
          <td><figure class="image is-2by1"><img src="http://placehold.it/640x320"></figure></td>
          <td>2 by 1</td>
        </tr>
      </tbody>
    </table>

    <div class="content">
      <p>The <code>.image</code> container will take up the <strong>whole width</strong> while maintaining the perfect ratio.</p>
    </div>
  </div>
</section>




<section class="section" id="media">
  <div class="container">
    <h1>Media Object</h1>
    <h2>The famous <strong>media object</strong> prevalent in social media interfaces, but useful in any context</h2>

    <hr>

    <div class="content">
      <p>The <a href="http://www.stubbornella.org/content/2010/06/25/the-media-object-saves-hundreds-of-lines-of-code">media object</a> is a UI element perfect for repeatable and nestable content.</p>
    </div>

    <div class="structure">
      <article class="media">
        <figure class="media-left structure-item" title="media-left">
          <p class="image is-64x64">
            <img src="http://placehold.it/128x128">
          </p>
        </figure>
        <div class="media-content structure-item is-structure-right" title="media-content">
          <div class="content">
            <p>
              <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>
          </div>
          <nav class="level">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="ics icon-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="ics icon-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="ics icon-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
        <div class="media-right structure-item" title="media-right">
          <button class="delete"></button>
        </div>
      </article>
    </div>


    <div class="example">
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="http://placehold.it/128x128">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>
          </div>
          <nav class="level">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="ics icon-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="ics icon-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="ics icon-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
        <div class="media-right">
          <button class="delete"></button>
        </div>
      </article>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/128x128"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/figure&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;strong&gt;</span>John Smith<span class="nt">&lt;/strong&gt;</span> <span class="nt">&lt;small&gt;</span>@johnsmith<span class="nt">&lt;/small&gt;</span> <span class="nt">&lt;small&gt;</span>31m<span class="nt">&lt;/small&gt;</span>
        <span class="nt">&lt;br&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-reply"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-retweet"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"ics icon-heart"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <div class="content">
      <p>You can include <em>any</em> other Bulma element, like inputs, textareas, icons, buttons... or even a <strong>nav bar</strong>.</p>
    </div>

    <div class="example">
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="http://placehold.it/128x128">
          </p>
        </figure>
        <div class="media-content">
          <p class="control">
            <textarea class="textarea" placeholder="Add a comment..."></textarea>
          </p>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <a class="button is-info">Post comment</a>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <label class="checkbox">
                  <input type="checkbox"> Press enter to submit
                </label>
              </div>
            </div>
          </nav>
        </div>
      </article>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/128x128"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/figure&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Add a comment..."</span><span class="nt">&gt;&lt;/textarea&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>Post comment<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span> Press enter to submit
          <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>

    <h3>Nesting</h3>
    <div class="content">
      <p>You can nest media objects up to <strong>3 levels</strong> deep.</p>
    </div>
    <div class="example">
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="http://placehold.it/128x128">
          </p>
        </figure>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>Barbara Middleton</strong>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
              <br>
              <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
            </p>
          </div>

          <article class="media">
            <figure class="media-left">
              <p class="image is-48x48">
                <img src="http://placehold.it/96x96">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Sean Brown</strong>
                  <br>
                  Donec sollicitudin urna eget eros malesuada sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam blandit nisl a nulla sagittis, a lobortis leo feugiat.
                  <br>
                  <small><a>Like</a> · <a>Reply</a> · 2 hrs</small>
                </p>
              </div>

              <article class="media">
                Vivamus quis semper metus, non tincidunt dolor. Vivamus in mi eu lorem cursus ullamcorper sit amet nec massa.
              </article>

              <article class="media">
                Morbi vitae diam et purus tincidunt porttitor vel vitae augue. Praesent malesuada metus sed pharetra euismod. Cras tellus odio, tincidunt iaculis diam non, porta aliquet tortor.
              </article>
            </div>
          </article>

          <article class="media">
            <figure class="media-left">
              <p class="image is-48x48">
                <img src="http://placehold.it/96x96">
              </p>
            </figure>
            <div class="media-content">
              <div class="content">
                <p>
                  <strong>Kayli Eunice </strong>
                  <br>
                  Sed convallis scelerisque mauris, non pulvinar nunc mattis vel. Maecenas varius felis sit amet magna vestibulum euismod malesuada cursus libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia non nisl id feugiat.
                  <br>
                  <small><a>Like</a> · <a>Reply</a> · 2 hrs</small>
                </p>
              </div>
            </div>
          </article>
        </div>
      </article>
      <article class="media">
        <figure class="media-left">
          <p class="image is-64x64">
            <img src="http://placehold.it/128x128">
          </p>
        </figure>
        <div class="media-content">
          <p class="control">
            <textarea class="textarea" placeholder="Add a comment..."></textarea>
          </p>
          <p class="control">
            <button class="button">Post comment</button>
          </p>
        </div>
      </article>
    </div>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/128x128"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/figure&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;strong&gt;</span>Barbara Middleton<span class="nt">&lt;/strong&gt;</span>
        <span class="nt">&lt;br&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
        <span class="nt">&lt;br&gt;</span>
        <span class="nt">&lt;small&gt;&lt;a&gt;</span>Like<span class="nt">&lt;/a&gt;</span> · <span class="nt">&lt;a&gt;</span>Reply<span class="nt">&lt;/a&gt;</span> · 3 hrs<span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-48x48"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/96x96"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>
            <span class="nt">&lt;strong&gt;</span>Sean Brown<span class="nt">&lt;/strong&gt;</span>
            <span class="nt">&lt;br&gt;</span>
            Donec sollicitudin urna eget eros malesuada sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam blandit nisl a nulla sagittis, a lobortis leo feugiat.
            <span class="nt">&lt;br&gt;</span>
            <span class="nt">&lt;small&gt;&lt;a&gt;</span>Like<span class="nt">&lt;/a&gt;</span> · <span class="nt">&lt;a&gt;</span>Reply<span class="nt">&lt;/a&gt;</span> · 2 hrs<span class="nt">&lt;/small&gt;</span>
          <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
          Vivamus quis semper metus, non tincidunt dolor. Vivamus in mi eu lorem cursus ullamcorper sit amet nec massa.
        <span class="nt">&lt;/article&gt;</span>

        <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
          Morbi vitae diam et purus tincidunt porttitor vel vitae augue. Praesent malesuada metus sed pharetra euismod. Cras tellus odio, tincidunt iaculis diam non, porta aliquet tortor.
        <span class="nt">&lt;/article&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>

    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-48x48"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/96x96"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/figure&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>
            <span class="nt">&lt;strong&gt;</span>Kayli Eunice <span class="nt">&lt;/strong&gt;</span>
            <span class="nt">&lt;br&gt;</span>
            Sed convallis scelerisque mauris, non pulvinar nunc mattis vel. Maecenas varius felis sit amet magna vestibulum euismod malesuada cursus libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia non nisl id feugiat.
            <span class="nt">&lt;br&gt;</span>
            <span class="nt">&lt;small&gt;&lt;a&gt;</span>Like<span class="nt">&lt;/a&gt;</span> · <span class="nt">&lt;a&gt;</span>Reply<span class="nt">&lt;/a&gt;</span> · 2 hrs<span class="nt">&lt;/small&gt;</span>
          <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/128x128"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/figure&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Add a comment..."</span><span class="nt">&gt;&lt;/textarea&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Post comment<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>

  </div>
</section>

<section class="section" id="messages">
  <div class="container">
    <h1>Messages</h1>
    <h2>
      Colored <strong>message</strong> blocks, to emphasize part of your page
    </h2>

    <hr>

    <div class="columns">
      <div class="column is-half">
        <article class="message">
          <div class="message-header">
            Hello World
          </div>
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-primary">
          <div class="message-header">
            Primary
          </div>
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-info">
          <div class="message-header">
            Info
          </div>
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-success">
          <div class="message-header">
            Success
          </div>
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-warning">
          <div class="message-header">
            Warning
          </div>
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-danger">
          <div class="message-header">
            Danger
          </div>
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
    Hello World
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque risus mi, tempus quis placerat ut, porta nec
    nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
    gravida purus diam, et dictum felis venenatis efficitur.
    Aenean ac eleifend lacus, in mollis lectus. Donec sodales,
    arcu et sollicitudin porttitor, tortor urna tempor ligula,
    id porttitor mi magna a neque. Donec dui urna, vehicula et
    sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>

<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
    Primary
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque risus mi, tempus quis placerat ut, porta nec
    nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
    gravida purus diam, et dictum felis venenatis efficitur.
    Aenean ac eleifend lacus, in mollis lectus. Donec sodales,
    arcu et sollicitudin porttitor, tortor urna tempor ligula,
    id porttitor mi magna a neque. Donec dui urna, vehicula et
    sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>

<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-info"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
    Info
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque risus mi, tempus quis placerat ut, porta nec
    nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
    gravida purus diam, et dictum felis venenatis efficitur.
    Aenean ac eleifend lacus, in mollis lectus. Donec sodales,
    arcu et sollicitudin porttitor, tortor urna tempor ligula,
    id porttitor mi magna a neque. Donec dui urna, vehicula et
    sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>

<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
    Success
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque risus mi, tempus quis placerat ut, porta nec
    nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
    gravida purus diam, et dictum felis venenatis efficitur.
    Aenean ac eleifend lacus, in mollis lectus. Donec sodales,
    arcu et sollicitudin porttitor, tortor urna tempor ligula,
    id porttitor mi magna a neque. Donec dui urna, vehicula et
    sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>

<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
    Warning
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque risus mi, tempus quis placerat ut, porta nec
    nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
    gravida purus diam, et dictum felis venenatis efficitur.
    Aenean ac eleifend lacus, in mollis lectus. Donec sodales,
    arcu et sollicitudin porttitor, tortor urna tempor ligula,
    id porttitor mi magna a neque. Donec dui urna, vehicula et
    sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>

<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
    Danger
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Pellentesque risus mi, tempus quis placerat ut, porta nec
    nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam
    gravida purus diam, et dictum felis venenatis efficitur.
    Aenean ac eleifend lacus, in mollis lectus. Donec sodales,
    arcu et sollicitudin porttitor, tortor urna tempor ligula,
    id porttitor mi magna a neque. Donec dui urna, vehicula et
    sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
      </div>
    </div>

    <hr>

    <h3>Message body only</h3>

    <div class="content">
      <p>You can <strong>omit</strong> the message header:</p>
    </div>

    <div class="columns">
      <div class="column is-half">
        <article class="message">
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-primary">
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-info">
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-success">
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-warning">
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
        <article class="message is-danger">
          <div class="message-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
          </div>
        </article>
      </div>
      <div class="column is-half">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-info"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span>
<span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
  </div>
</section>
<section class="section" id="notifications">
        <div class="container">
            <h1>Notifications</h1>

            <h2>Bold <strong>notification</strong> blocks, to alert your users of something</h2>
            <hr>

            <div class="columns">
                <div class="column">
                    <div class="notification">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>

                    <div class="notification is-primary">
                        Info lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>

                    <div class="notification is-info">
                        Info lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>

                    <div class="notification is-success">
                        Success lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>

                    <div class="notification is-warning">
                        Warning lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>

                    <div class="notification is-danger">
                        Danger lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </div>
                </div>

                <div class="column">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Primar lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-info"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Info lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Success lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Warning lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Danger lorem ipsum dolor sit amet, consectetur
  adipiscing elit lorem ipsum dolor sit amet,
  consectetur adipiscing elit
<span class="nt">&lt;/div&gt;</span></code>
</pre><button class="copy">Copy</button><button class="expand">Expand</button>
                    </figure>
                </div>
            </div>
        </div>
    </section>
<section class="section" id="modal">
  <div class="container">
    <h1>Modal</h1>
    <h2>A classic <strong>modal</strong> overlay, in which you can include <em>any</em> content you want</h2>

    <hr>

    <div class="content">
      <p>The modal structure is very simple:</p>
      <ul>
        <li>
          <code>modal</code>: the main container
          <ul>
            <li>
              <code>modal-background</code>: a transparent overlay that can act as a click target to close the modal
            </li>
            <li>
              <code>modal-content</code>: a horizontally and verticaly centered container, with a maximum width of 640px, in which you can include <em>any</em> content
            </li>
            <li>
              <code>modal-close</code>: a simple cross located in the top right corner
            </li>
          </ul>
        </li>
      </ul>
      <p>
        <a class="button is-primary is-large modal-button" data-target="#modal">Launch example modal</a>
      </p>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-background"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Any other Bulma elements you want --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"modal-close"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <div class="content">
      <p>To <strong>activate</strong> the modal, just add the <code>is-active</code> modifier on the <code>.modal</code> container</p>
    </div>

    <div class="message is-danger">
      <div class="message-header">
        No JavaScript
      </div>
      <div class="message-body">
        Bulma does <strong>not</strong> include any JavaScript interaction. You will have to implement the class toggle yourself
      </div>
    </div>

    <hr>

    <h3>Image modal</h3>

    <div class="content">
      <p>Because a modal can contain <strong>anything you want</strong>, you can very simply use it to build an image gallery for example:</p>
      <p>
        <a class="button is-primary is-large modal-button" data-target="#modal-bis">Launch image modal</a>
      </p>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-background"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-4by3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/1280x960"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"modal-close"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>

    <h3>Modal card</h3>

    <div class="content">
      <p>If you want a more classic modal, with a <strong>head</strong>, a <strong>body</strong> and a <strong>foot</strong>, use the <code>modal-card</code>.</p>
      <p>
        <a class="button is-primary is-large modal-button" data-target="#modal-ter">Launch modal card</a>
      </p>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-background"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;header</span> <span class="na">class=</span><span class="s">"modal-card-head"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"modal-card-title"</span><span class="nt">&gt;</span>Modal title<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
    <span class="nt">&lt;/header&gt;</span>
    <span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"modal-card-body"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Content ... --&gt;</span>
    <span class="nt">&lt;/section&gt;</span>
    <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"modal-card-foot"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/footer&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

  </div>
</section>
 <section class="section" id="tags">
        <div class="container">
            <h1>Tags</h1>

            <h2>Small <strong>tag labels</strong> to insert anywhere</h2>
            <hr>

            <div class="columns">
                <div class="column is-4">
                    By default, a <strong>tag</strong> is a 24px high label.
                </div>

                <div class="column is-2">
                    <span class="tag">Tag label</span>
                </div>

                <div class="column is-6">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  Tag label
<span class="nt">&lt;/span&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>

            <div class="columns">
                <div class="column is-4">
                    There are <strong>6 different colors</strong> available.
                </div>

                <div class="column is-2">
                    <p class="control"><span class="tag is-dark">Dark</span></p>

                    <p class="control"><span class="tag is-primary">Primary</span></p>

                    <p class="control"><span class="tag is-info">Info</span></p>

                    <p class="control"><span class="tag is-success">Success</span></p>

                    <p class="control"><span class="tag is-warning">Warning</span></p><span class="tag is-danger">Danger</span>
                </div>

                <div class="column is-6">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>

            <div class="columns">
                <div class="column is-4">
                    And <strong>3 additional</strong> sizes.
                </div>

                <div class="column is-2">
                    <p class="control"><span class="tag is-dark is-small">Small</span></p>

                    <p class="control"><span class="tag is-primary is-medium">Medium</span></p>

                    <p class="control"><span class="tag is-info is-large">Large</span></p>
                </div>

                <div class="column is-6">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-primary is-medium"</span><span class="nt">&gt;</span>Medium<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-info is-large"</span><span class="nt">&gt;</span>Large<span class="nt">&lt;/span&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>

            <div class="columns">
                <div class="column is-4">
                    You can also append a <strong>delete button</strong>.
                </div>

                <div class="column is-2">
                    <p class="control"><span class="tag is-info is-small">Foo </span></p>

                    <p class="control"><span class="tag is-success">Bar </span></p>

                    <p class="control"><span class="tag is-warning is-medium">Hello </span></p>

                    <p class="control"><span class="tag is-danger is-large">World </span></p>
                </div>

                <div class="column is-6">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-success"</span><span class="nt">&gt;</span>
  Foo
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-warning is-medium"</span><span class="nt">&gt;</span>
  Bar
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-danger is-large"</span><span class="nt">&gt;</span>
  Foo bar
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/span&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>
        </div>
    </section>
<?php include("inc/footer.php"); ?>