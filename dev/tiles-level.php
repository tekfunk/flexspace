<section class="section" id="tiles">
  <div class="container">
    <h1>Tiles</h1>
    <h2>A <strong>single tile</strong> element to build 2-dimensional Metro-like, Pinterest-like, or whatever-you-like grids</h2>
    <hr>
    <div class="content">
      <p>To build intricate 2-dimensional, you only need a <strong>single element</strong>: the <code>tile</code>:</p>
    </div>
    <hr>
    <h3>Example</h3>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-8">
        <div class="tile">
          <div class="tile is-parent is-vertical">
            <article class="tile is-child notification is-primary">
              <p>Vertical...</p>
              <p>Top tile</p>
            </article>
            <article class="tile is-child notification is-alert">
              <p>...tiles</p>
              <p>Bottom tile</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification is-accent">
              <p>Middle tile</p>
              <p>With an image</p>
              <figure class="image is-4by3"><img src="http://placehold.it/640x480"></figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification is-secondary">
            <p>Wide tile</p>
            <p>Aligned with the right tile</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-success">
          <div class="content">
            <p>Tall tile</p>
            <p>With even more content</p>
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
    <h3>Modifiers</h3>
    <div class="content">
      <p>The <code>tile</code> element has <strong>16 modifiers</strong>:</p>
      <ul>
        <li> <strong>3 contextual</strong> modifiers
          <ul>
            <li><code>is-ancestor</code></li>
            <li><code>is-parent</code></li>
            <li><code>is-child</code></li>
          </ul>
        </li>
        <li> <strong>1 directional</strong> modifier
          <ul>
            <li><code>is-vertical</code></li>
          </ul>
        </li>
        <li> <strong>12 horizontal size</strong> modifiers
          <ul>
            <li>from <code>is-1</code></li>
            <li>to <code>is-12</code></li>
          </ul>
        </li>
      </ul>
    </div>
    <hr>
    <h3>How it works: Nesting</h3>
    <div class="content">
      <p>Everything is a tile! To create a grid of tiles, you only need to <strong>nest</strong> <code>tile</code> elements.</p>
    </div>
    <div class="columns">
      <div class="column is-1-3">
        <p>Start with an <strong>ancestor</strong> tile that will wrap all other tiles:</p>
      </div>
      <div class="column is-2-3"></div>
    </div>
    <div class="columns">
      <div class="column is-1-3">
        <p>Add tile elements that will distribute themselves <strong>horizontally</strong>:</p>
      </div>
      <div class="column is-2-3"></div>
    </div>
    <div class="columns">
      <div class="column is-1-3">
        <p>You can <strong>resize</strong> any tile according to a <strong>12 column</strong> grid.<br>
          For example, <code>is-4</code> will take up 2/3 of the horizontal space:</p>
      </div>
      <div class="column is-2-3">
        <figure class="highlight">
          <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-ancestor"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile is-4"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- 1/3 --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tile"</span><span class="nt">&gt;</span>
    <span class="c">&lt;!-- This tile will take the rest: 2/3 --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code>
</pre>
          <button class="copy">Copy</button>
        </figure>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-3">
        <p>If you want to stack tiles <strong>vertically</strong>, add <code>is-vertical</code> on the parent tile:</p>
      </div>
      <div class="column is-2-3"></div>
    </div>
    <div class="columns">
      <div class="column is-1-3">
        <div class="content">
          <p>As soon as you want to add <strong>content</strong> to a tile, just:</p>
          <ul>
            <li>add <em>any</em> class you want, like <code>box</code></li>
            <li>add the <code>is-child</code> modifier on the tile</li>
            <li>add the <code>is-parent</code> modifier on the <em>parent</em> tile</li>
          </ul>
        </div>
      </div>
      <div class="column is-2-3"></div>
    </div>
    <div class="tile is-ancestor">
      <div class="tile is-4 is-vertical is-parent">
        <div class="tile is-child box">
          <p>One</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
        <div class="tile is-child box">
          <p>Two</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
      </div>
      <div class="tile is-parent">
        <div class="tile is-child box">
          <p>Three</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      </div>
    </div>
    <hr>
    <h3>Nesting requirements</h3>
    <article class="message is-secondary">
      <div class="message-header"> 3 levels deep at least... </div>
      <div class="message-body">
        <div class="content">
          <p>You need at least <strong>3 levels</strong> of hierarchy:</p>
        </div>
      </div>
    </article>
    <article class="message is-success">
      <div class="message-header"> ...but more levels if you want! </div>
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
              <p>Vertical tiles</p>
              <p>Top box</p>
            </article>
            <article class="tile is-child box">
              <p>Vertical tiles</p>
              <p>Bottom box</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p>Middle box</p>
              <p>With an image</p>
              <figure class="image is-4by3"><img src="http://placehold.it/640x480"></figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
            <p>Wide column</p>
            <p>Aligned with the right column</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <div class="content">
            <p>Tall column</p>
            <p>With even more content</p>
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
    <h3>3 columns</h3>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Hello World</p>
          <p>What is up?</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Foo</p>
          <p>Bar</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Third column</p>
          <p>With some content</p>
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
              <p>Vertical tiles</p>
              <p>Top box</p>
            </article>
            <article class="tile is-child box">
              <p>Vertical tiles</p>
              <p>Bottom box</p>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p>Middle box</p>
              <p>With an image</p>
              <figure class="image is-4by3"><img src="http://placehold.it/640x480"></figure>
            </article>
          </div>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child box">
            <p>Wide column</p>
            <p>Aligned with the right column</p>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <div class="content">
            <p>Tall column</p>
            <p>With even more content</p>
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
          <p>Side column</p>
          <p>With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-8">
        <article class="tile is-child box">
          <p>Main column</p>
          <p>With some content</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
    </div>
    <hr>
    <h3>4 columns</h3>
    <div class="tile is-ancestor">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>One</p>
          <p>Subtitle</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Two</p>
          <p>Subtitle</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Three</p>
          <p>Subtitle</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Four</p>
          <p>Subtitle</p>
        </article>
      </div>
    </div>
    <div class="tile is-ancestor">
      <div class="tile is-vertical is-9">
        <div class="tile">
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p>Five</p>
              <p>Subtitle</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
              </div>
            </article>
          </div>
          <div class="tile is-8 is-vertical">
            <div class="tile">
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p>Six</p>
                  <p>Subtitle</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child box">
                  <p>Seven</p>
                  <p>Subtitle</p>
                </article>
              </div>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p>Eight</p>
                <p>Subtitle</p>
              </article>
            </div>
          </div>
        </div>
        <div class="tile">
          <div class="tile is-8 is-parent">
            <article class="tile is-child box">
              <p>Nine</p>
              <p>Subtitle</p>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
              </div>
            </article>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child box">
              <p>Ten</p>
              <p>Subtitle</p>
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
            <p>Eleven</p>
            <p>Subtitle</p>
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
          <p>Twelve</p>
          <p>Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent is-6">
        <article class="tile is-child box">
          <p>Thirteen</p>
          <p>Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
          </div>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child box">
          <p>Fourteen</p>
          <p>Subtitle</p>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
          </div>
        </article>
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
        <li> <code>level</code>: main container
          <ul>
            <li><code>level-left</code> for the left side</li>
            <li> <code>level-right</code> for the right side
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
            <p class="subtitle is-5"> <strong>123</strong> posts </p>
          </div>
          <div class="level-item">
            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a post">
              <button class="button"> Search </button>
            </p>
          </div>
        </div>
        <div class="level-right structure-item" title="level-right">
          <p class="level-item"> <strong>All</strong> </p>
          <p class="level-item"> <a>Published</a> </p>
          <p class="level-item"> <a>Drafts</a> </p>
          <p class="level-item"> <a>Deleted</a> </p>
          <p class="level-item"> <a class="button is-success"> New </a> </p>
        </div>
      </nav>
    </div>
    <div class="example">
      <nav class="level">
        <div class="level-left">
          <div class="level-item">
            <p class="subtitle is-5"> <strong>123</strong> posts </p>
          </div>
          <div class="level-item">
            <p class="control has-addons">
              <input class="input" type="text" placeholder="Find a post">
              <button class="button"> Search </button>
            </p>
          </div>
        </div>
        <div class="level-right">
          <p class="level-item"> <strong>All</strong> </p>
          <p class="level-item"> <a>Published</a> </p>
          <p class="level-item"> <a>Drafts</a> </p>
          <p class="level-item"> <a>Deleted</a> </p>
          <p class="level-item"> <a class="button is-success"> New </a> </p>
        </div>
      </nav>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Main container --&gt;</span>
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
<span class="nt">&lt;/nav&gt;</span></code></pre>
      <button class="copy">Copy</button>
    </figure>
    <hr>
    <h3>Centered level</h3>
    <div class="content"> If you want a <strong>centered level</strong>, you can use as many <code>level-item</code> as you want, as long as they are <strong>direct</strong> children of the <code>level</code> container. </div>
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
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/nav&gt;</span></code></pre>
      <button class="copy">Copy</button>
    </figure>
    <div class="example">
      <nav class="level">
        <p class="level-item has-text-centered"> <a class="link is-accent">Home</a> </p>
        <p class="level-item has-text-centered"> <a class="link is-accent">Menu</a> </p>
        <p class="level-item has-text-centered"> <img src="../art/dragotar.svg" alt="" style="height: 33px;"> </p>
        <p class="level-item has-text-centered"> <a class="link is-accent">Reservations</a> </p>
        <p class="level-item has-text-centered"> <a class="link is-accent">Contact</a> </p>
      </nav>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-accent"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-accent"</span><span class="nt">&gt;</span>Menu<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"../art/dragotar.svg"</span> <span class="na">alt=</span><span class="s">""</span> <span class="na">style=</span><span class="s">"height: 33px;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-accent"</span><span class="nt">&gt;</span>Reservations<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"level-item has-text-centered"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"link is-accent"</span><span class="nt">&gt;</span>Contact<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/nav&gt;</span></code></pre>
      <button class="copy">Copy</button>
    </figure>
    <hr>
    <h3>Mobile level</h3>
    <div class="content"> By default, for space concerns, the level is vertical on mobile. If you want the level to be horizontal on mobile as well, add the <code>is-mobile</code> modifier on the <code>level</code> container. </div>
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
