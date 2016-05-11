<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero">
	<div class="container">
		<h1>modules</h1>
           <h3><a href="#box">box</a> | <a href="#card">card</a> | <a href="#level">level</a> | <a href="#images">images</a> | <a href="#media">media</a> | <a href="#menu">menu</a> | <a href="#messages">messages</a> | <a href="#menu">menu</a> | <a href="#modal">modal</a> | <a href="#nav">nav</a> | <a href="#messages">messages</a> | <a href="#panel">panel</a> | <a href="#tabs">tabs</a></h3>
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
<section class="section" id="level">
  <div class="container">
    <h1>Level</h1>
    <h2>A multi-purpose <strong>horizontal level</strong>, which can contain almost any other element</h2>

    <hr>

    <div class="content">
      <p>The <strong>structure</strong> of a level is the following:</p>
      <ul>
        <li>
          <code>level</code>: main container
          <ul>
            <li><code>level-left</code> for the left side</li>
            <li>
              <code>level-right</code> for the right side
              <ul>
                <li><code>level-item</code> for each individual element</li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <p>In a <code>level-item</code>, you can then insert almost <em>anything</em> you want: a title, a button, a text input, or just simple text. No matter what elements you put inside a Bulma <code>level</code>, they will always be <strong>vertically centered</strong>.</p>
    </div>

    <div class="structure">
      <nav class="level structure-item is-structure-container" title="level">
        <div class="level-left structure-item" title="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <strong>123</strong> posts
            </p>
          </div>
          <div class="level-item">
            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a post">
              <button class="button">
                Search
              </button>
            </p>
          </div>
        </div>
        <div class="level-right structure-item" title="level-right">
          <p class="level-item">
            <strong>All</strong>
          </p>
          <p class="level-item">
            <a>Published</a>
          </p>
          <p class="level-item">
            <a>Drafts</a>
          </p>
          <p class="level-item">
            <a>Deleted</a>
          </p>
          <p class="level-item">
            <a class="button is-success">
              New
            </a>
          </p>
        </div>
      </nav>
    </div>

    <div class="example">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <p class="subtitle is-5">
              <strong>123</strong> posts
            </p>
          </div>
          <div class="level-item">
            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a post">
              <button class="button">
                Search
              </button>
            </p>
          </div>
        </div>
        <div class="level-right">
          <p class="level-item">
            <strong>All</strong>
          </p>
          <p class="level-item">
            <a>Published</a>
          </p>
          <p class="level-item">
            <a>Drafts</a>
          </p>
          <p class="level-item">
            <a>Deleted</a>
          </p>
          <p class="level-item">
            <a class="button is-success">
              New
            </a>
          </p>
        </div>
      </nav>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Main container --&gt;</span>
<span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Left side --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"subtitle is-5"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;strong&gt;</span>123<span class="nt">&lt;/strong&gt;</span> posts
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-addons"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a post"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
          Search
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Right side --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;strong&gt;</span>All<span class="nt">&lt;/strong&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a&gt;</span>Published<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a&gt;</span>Drafts<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a&gt;</span>Deleted<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>
    <h3>Centered level</h3>

    <div class="content">
      If you want a <strong>centered level</strong>, you can use as many <code>level-item</code> as you want, as long as they are <strong>direct</strong> children of the <code>level</code> container.
    </div>

    <div class="example">
      <nav class="level">
        <div class="level-item has-text-centered">
          <p class="heading">Tweets</p>
          <p>3,456</p>
        </div>
        <div class="level-item has-text-centered">
          <p class="heading">Following</p>
          <p>123</p>
        </div>
        <div class="level-item has-text-centered">
          <p class="heading">Followers</p>
          <p>456K</p>
        </div>
        <div class="level-item has-text-centered">
          <p class="heading">Likes</p>
          <p>789</p>
        </div>
      </nav>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Tweets<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>3,456<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Following<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>123<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Followers<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>456K<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>Likes<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>789<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <div class="example">
      <nav class="level">
        <p class="level-item has-text-centered">
          <a class="link is-info">Home</a>
        </p>
        <p class="level-item has-text-centered">
          <a class="link is-info">Menu</a>
        </p>
        <p class="level-item has-text-centered">
          <img src="/images/bulma.png" alt="" style="height: 33px;">
        </p>
        <p class="level-item has-text-centered">
          <a class="link is-info">Reservations</a>
        </p>
        <p class="level-item has-text-centered">
          <a class="link is-info">Contact</a>
        </p>
      </nav>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Menu<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/images/bulma.png"</span> <span class="na">alt=</span><span class="s">""</span> <span class="na">style=</span><span class="s">"height: 33px;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Reservations<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-info"</span><span class="nt">&gt;</span>Contact<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>
    <h3>Mobile level</h3>
    <div class="content">
      By default, for space concerns, the level is vertical on mobile. If you want the level to be horizontal on mobile as well, add the <code>is-mobile</code> modifier on the <code>level</code> container.
    </div>

    <div class="example">
      <nav class="level is-mobile">
        <div class="level-item has-text-centered">
          <p class="heading">Tweets</p>
          <p>3,456</p>
        </div>
        <div class="level-item has-text-centered">
          <p class="heading">Following</p>
          <p>123</p>
        </div>
        <div class="level-item has-text-centered">
          <p class="heading">Followers</p>
          <p>456K</p>
        </div>
        <div class="level-item has-text-centered">
          <p class="heading">Likes</p>
          <p>789</p>
        </div>
      </nav>
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
<section class="section" id="menu">
  <div class="container">
    <h1>Menu</h1>
    <h2>A simple <strong>menu</strong>, for any type of vertical navigation</h2>

    <hr>

    <div class="columns">
      <div class="column is-3">
        <aside class="menu">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Customers</a></li>
          </ul>
          <p class="menu-label">
            Administration
          </p>
          <ul class="menu-list">
            <li><a href="#">Team Settings</a></li>
            <li>
              <a class="is-active" href="#">Manage Your Team</a>
              <ul>
                <li><a href="#">Members</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Add a member</a></li>
              </ul>
            </li>
            <li><a href="#">Invitations</a></li>
            <li><a href="#">Authentication</a></li>
          </ul>
          <p class="menu-label">
            Transactions
          </p>
          <ul class="menu-list">
            <li><a href="#">Payments</a></li>
            <li><a href="#">Transfers</a></li>
            <li><a href="#">Balance</a></li>
          </ul>
        </aside>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;aside</span> <span class="na">class=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/aside&gt;</span></code></pre><button class="copy">Copy</button></figure>
      </div>
    </div>
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
<section class="section" id="nav">
  <div class="container">
    <h1>Nav</h1>
    <h2>
      A responsive horizontal <strong>nav bar</strong> that can contain links, tabs, buttons, icons, and a logo
    </h2>

    <hr>

    <div class="content">
      <p>
        The <code>nav</code> container can have <strong>3 parts</strong>:
      </p>
      <ul>
        <li><code>nav-left</code></li>
        <li><code>nav-center</code></li>
        <li><code>nav-right</code></li>
      </ul>
      <p>
        For responsiveness, <strong>2 additional</strong> classes are available:
      </p>
      <ul>
        <li><code>nav-toggle</code> for the hamburger menu on mobile</li>
        <li><code>nav-menu</code> for menu that is collapsable on mobile (you can combine it with <code>nav-right</code>)</li>
      </ul>
    </div>

<div class="example">
<nav class="nav">
  <div class="nav-left">
    <a class="nav-item" href="#">
      <img src="/images/bulma.png" alt="Bulma logo}">
    </a>
  </div>

  <div class="nav-center">
    <a class="nav-item" href="#">
      <span class="icon">
        <i class="ics icon-github"></i>
      </span>
    </a>
    <a class="nav-item" href="#">
      <span class="icon">
        <i class="ics icon-twitter"></i>
      </span>
    </a>
  </div>

  <span class="nav-toggle">
    <span></span>
    <span></span>
    <span></span>
  </span>

  <div class="nav-right nav-menu">
    <a class="nav-item" href="#">
      Home
    </a>
    <a class="nav-item" href="#">
      Documentation
    </a>
    <a class="nav-item" href="#">
      Blog
    </a>

    <span class="nav-item">
      <a class="button">
        <span class="icon">
          <i class="ics icon-twitter"></i>
        </span>
        <span>Tweet</span>
      </a>
      <a class="button is-primary" href="#">
        <span class="icon">
          <i class="ics icon-download"></i>
        </span>
        <span>Download</span>
      </a>
    </span>
  </div>
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
    <div class="nav-left">
      <a class="nav-item is-tab is-active">Card</a>
      <a class="nav-item is-tab">Level</a>
      <a class="nav-item is-tab">Media object</a>
      <a class="nav-item is-tab">Menu</a>
      <a class="nav-item is-tab">Message</a>
      <a class="nav-item is-tab">Modal</a>
      <a class="nav-item is-tab">Nav</a>
      <a class="nav-item is-tab">Pagination</a>
      <a class="nav-item is-tab">Panel</a>
      <a class="nav-item is-tab">Tabs</a>
    </div>
  </div>
</nav>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav has-shadow"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-active"</span><span class="nt">&gt;</span>Card<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Level<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Media object<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Menu<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Message<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Modal<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Nav<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Pagination<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Panel<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Tabs<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button></figure>

</section>
<section class="section" id="pagination">
  <div class="container">
    <h1>Pagination</h1>
    <h2>A responsive, usable, and flexible <strong>pagination</strong></h2>

    <hr>

    <div class="example">
      <nav class="pagination">
        <a>Previous</a>
        <a>Next page</a>
        <ul>
          <li>
            <a>1</a>
          </li>
          <li>
            <span>...</span>
          </li>
          <li>
            <a>45</a>
          </li>
          <li>
            <a class="is-active">46</a>
          </li>
          <li>
            <a>47</a>
          </li>
          <li>
            <span>...</span>
          </li>
          <li>
            <a>86</a>
          </li>
        </ul>
      </nav>
    </div>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button></figure>
  </div>
</section>
<section class="section" id="panel">
  <div class="container">
    <h1>Panel</h1>
    <h2>A composable <strong>panel</strong>, for compact controls</h2>

    <hr>

    <div class="columns">
      <div class="column is-4">
        <nav class="panel">
          <p class="panel-heading">
            Repositories
          </p>
          <p class="panel-tabs">
            <a class="is-active" href="#">All</a>
            <a href="#">Public</a>
            <a href="#">Private</a>
            <a href="#">Sources</a>
            <a href="#">Forks</a>
          </p>
          <a class="panel-block is-active" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>bulma-website</a>
          <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>bulma</a>
          <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>marksheet</a>
          <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-code-fork"></i></span>daniellowtw/infBoard</a>
          <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>jgthms.github.io</a>
          <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-code-fork"></i></span>mojs</a>
          <a class="panel-block" href="#"><span class="panel-icon"><i class="ics icon-book"></i></span>grumpy-cat</a>
          <label class="panel-block">
            <input type="checkbox">
            Remember me
          </label>
          <div class="panel-block">
            <button class="button is-primary is-outlined is-fullwidth">
              Reset all filters
            </button>
          </div>
        </nav>
      </div>
      <div class="column">
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"panel"</span><span class="nt">&gt;</span>
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
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary is-outlined is-fullwidth"</span><span class="nt">&gt;</span>
      Reset all filters
    <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
      </div>
    </div>
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
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>

    <h3>Alignment</h3>

    <div class="content">
      <p>
        To align the tabs list, use the <code>is-centered</code> or <code>is-right</code> modifier on the <code>.tabs</code> container:
      </p>
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
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-centered"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <div class="content">
      <p>
        To have several lists aligned differently, use one of <strong>3 modifiers</strong> on the <code>ul</code>:
      </p>
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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>

    <h3>Icons</h3>

    <div class="content">
      <p>&lt;span class="ics is-small"&gt;&lt;i class="icon-picture"&gt;&lt;/i&gt;&lt;/span&gt;</p>
    </div>

<div class="example">
  <div class="tabs is-centered">
    <ul>
      <li class="is-active">
        <a>
          <span class="ics is-small"><i class="icon-picture"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="ics is-small"><i class="icon-headphones"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="ics is-small"><i class="icon-video"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="ics is-small"><i class="icon-book"></i></span>
          <span>Documents</span>
        </a>
      </li>
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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-small"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-medium"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

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

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-large"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Pictures<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Music<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Videos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;&lt;a&gt;</span>Documents<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>

    <h3>Styles</h3>
    <div class="content">
      If you want a more classic style with <strong>borders</strong>, just append the <code>is-boxed</code> modifier.
    </div>

<div class="example">
  <div class="tabs is-boxed">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon is-small"><i class="ics icon-image"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-music"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-film"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-file-text-o"></i></span>
          <span>Documents</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-boxed"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <p class="content">
      If you want <strong>mutually exclusive</strong> tabs (like radio buttons where clicking one deselects all other ones), use the <code>is-toggle</code> modifier.
    </p>

<div class="example">
  <div class="tabs is-toggle">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon is-small"><i class="ics icon-image"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-music"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-film"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-file-text-o"></i></span>
          <span>Documents</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-toggle"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <p class="content">
      If you want the tabs to take up the <strong>whole width</strong> available, use <code>is-fullwidth</code>.
    </p>
    <div class="example">
      <div class="tabs is-fullwidth">
        <ul>
          <li>
            <a>
              <span class="icon"><i class="ics icon-angle-left"></i></span>
              <span>Left</span>
            </a>
          </li>
          <li>
            <a>
              <span class="icon"><i class="ics icon-angle-up"></i></span>
              <span>Up</span>
            </a>
          </li>
          <li>
            <a>
              <span>Right</span>
              <span class="icon"><i class="ics icon-angle-right"></i></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-fullwidth"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <hr>

    <h3>Combining</h3>
    <div class="content">
      <p>You can <strong>combine</strong> different modifiers. For example, you can have <strong>centered boxed</strong> tabs, or <strong>fullwidth toggle</strong> ones.</p>
    </div>

<div class="example">
  <div class="tabs is-centered is-boxed">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon is-small"><i class="ics icon-image"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-music"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-film"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-file-text-o"></i></span>
          <span>Documents</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-centered is-boxed"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

<div class="example">
  <div class="tabs is-toggle is-fullwidth">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon is-small"><i class="ics icon-image"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-music"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-film"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-file-text-o"></i></span>
          <span>Documents</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-toggle is-fullwidth"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

<div class="example">
  <div class="tabs is-centered is-boxed is-medium">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon is-small"><i class="ics icon-image"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-music"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-film"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon is-small"><i class="ics icon-file-text-o"></i></span>
          <span>Documents</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-centered is-boxed is-medium"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

<div class="example">
  <div class="tabs is-toggle is-fullwidth is-large">
    <ul>
      <li class="is-active">
        <a>
          <span class="icon"><i class="ics icon-image"></i></span>
          <span>Pictures</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon"><i class="ics icon-music"></i></span>
          <span>Music</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon"><i class="ics icon-film"></i></span>
          <span>Videos</span>
        </a>
      </li>
      <li>
        <a>
          <span class="icon"><i class="ics icon-file-text-o"></i></span>
          <span>Documents</span>
        </a>
      </li>
    </ul>
  </div>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabs is-toggle is-fullwidth is-large"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

  </div>
</section>
<?php include("inc/footer.php"); ?>