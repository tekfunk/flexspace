<section class="section" id="modal">
  <div class="container">
    <h1>Modal</h1>
    <hr>
    <div class="content">
      <p>The modal structure is very simple:</p>
      <ul>
        <li> <code>modal</code>: the main container
          <ul>
            <li> <code>modal-background</code>: a transparent overlay that can act as a click target to close the modal </li>
            <li> <code>modal-content</code>: a horizontally and verticaly centered container, with a maximum width of 640px, in which you can include <em>any</em> content </li>
            <li> <code>modal-close</code>: a simple cross located in the top right corner </li>
          </ul>
        </li>
      </ul>
      <p> <a class="button is-primary is-large modal-button" data-target="#modal">Launch example modal</a> </p>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-background"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="c">&lt;!-- Any other Bulma elements you want --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"modal-close"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <button class="copy">Copy</button>
    </figure>
    <div class="content">
      <p>To <strong>activate</strong> the modal, just add the <code>is-active</code> modifier on the <code>.modal</code> container</p>
    </div>
    <div class="message is-secondary">
      <div class="message-header"> No JavaScript </div>
      <div class="message-body"> Bulma does <strong>not</strong> include any JavaScript interaction. You will have to implement the class toggle yourself </div>
    </div>
    <hr>
    <h3>Image modal</h3>
    <div class="content">
      <p>Because a modal can contain <strong>anything you want</strong>, you can very simply use it to build an image gallery for example:</p>
      <p> <a class="button is-primary is-large modal-button" data-target="#modal-bis">Launch image modal</a> </p>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-background"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"image is-4by3"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://placehold.it/1280x960"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"modal-close"</span><span class="nt">&gt;&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
      <button class="copy">Copy</button>
    </figure>
    <hr>
    <h3>Modal card</h3>
    <div class="content">
      <p>If you want a more classic modal, with a <strong>head</strong>, a <strong>body</strong> and a <strong>foot</strong>, use the <code>modal-card</code>.</p>
      <p> <a class="button is-primary is-large modal-button" data-target="#modal-ter">Launch modal card</a> </p>
    </div>
    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
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
<span class="nt">&lt;/div&gt;</span></code></pre>
      <button class="copy">Copy</button>
    </figure>
  </div>
</section>
