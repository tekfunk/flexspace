<html>
<head>
    <title>flexspace</title>
    <link rel="stylesheet" href="../css/flexspace.css" type="text/css">
</head>

<body>
<section class="section">
<div class="container">
    <div class="columns">
        <div class="column is-6">
            <div class="box">
                <div class="media-content">
                    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"hero is-primary is-medium"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Hero header: will stick at the top --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-head"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;header</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"images/bulma-white.png"</span> <span class="na">alt=</span><span class="s">"Logo"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"nav-toggle"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-right nav-menu"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-active"</span><span class="nt">&gt;</span>
            Home
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
            Examples
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
            Documentation
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-inverted"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
              <span class="nt">&lt;/span&gt;</span>
              <span class="nt">&lt;span&gt;</span>Download<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/header&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Hero content: will be in the middle --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container has-text-centered"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>
        Title
      <span class="nt">&lt;/h1&gt;</span>
      <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>
        Subtitle
      <span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Hero footer: will stick at the bottom --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-foot"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"tabs"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;ul&gt;</span>
          <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;&lt;a&gt;</span>Overview<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a&gt;</span>Modifiers<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a&gt;</span>Grid<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a&gt;</span>Elements<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a&gt;</span>Components<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
          <span class="nt">&lt;li&gt;&lt;a&gt;</span>Layout<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>                </div>

                <nav class="level">
                    <div class="level-left">
                        <a class="level-item"></a> <a class="level-item"></a> <a class="level-item"></a>
                    </div>
                </nav>
            </div>
        </div>
    <div class="column is-6">
    <h3>Hero</h3>
        <div class="box">
            <div class="media-content">
                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"hero is-medium is-primary is-bold"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>
        Primary bold title
      <span class="nt">&lt;/h1&gt;</span>
      <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>
        Primary bold subtitle
      <span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span></code></pre><button class="copy">Copy</button></figure>
            </div>
        </div>
    </div>
    </div>

</div>
</section>
</body>
</html>
