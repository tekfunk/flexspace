<?php include("header.html"); ?>
 <section class="hero">
        <div class="container is-fluid">
            <h1>ui</h1>

            <h2>ui elements</h2>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title">.button</h1>
            <hr>

            <div class="columns">
                <div class="column">
                    <div class="block">
                        <h4 class="subtitle">.is-white, .is-light, .is-dark, .is-black, .is-link</h4><button class="button">Button</button> <button class="button is-white">White</button> <button class="button is-light">Light</button> <button class="button is-dark">Dark</button> <button class="button is-black">Black</button> <button class="button is-link">Link</button>
                    </div>

                </div>

                <div class="column">
	                <div class="block">
		                <h4 class="subtitle">.is-primary, .is-info, .is-success, .is-warning, .is-danger</h4>
                        <button class="button is-primary">Primary</button> <button class="button is-info">Info</button> <button class="button is-success">Success</button> <button class="button is-warning">Warning</button> <button class="button is-danger">Danger</button>
                    </div>

                </div>
            </div>
            <hr>

            <div class="columns">
                <div class="column">
                    <h4 class="subtitle">.is-outlined</h4><a class="button is-outlined">Outlined</a> <a class="button is-primary is-outlined">Outlined</a> <a class="button is-info is-outlined">Outlined</a> <a class="button is-success is-outlined">Outlined</a> <a class="button is-danger is-outlined">Outlined</a>
                </div>

                <div class="column">
                    <h4 class="subtitle">.is-inverted</h4>

                    <div class="notification is-primary">
                        <a class="button is-primary is-inverted">Inverted</a> <a class="button is-info is-inverted">Inverted</a> <a class="button is-success is-inverted">Inverted</a> <a class="button is-danger is-inverted">Inverted</a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="columns">
                <div class="column">
                    <h4 class="subtitle">.is-loading</h4><a class="button is-loading">Loading</a> <a class="button is-primary is-loading">Loading</a> <a class="button is-info is-loading">Loading</a> <a class="button is-success is-loading">Loading</a> <a class="button is-warning is-loading">Loading</a> <a class="button is-danger is-loading">Loading</a>
                </div>

                <div class="column">
                    <h4 class="subtitle">.is-disabled</h4><a class="button is-disabled" disabled>Disabled</a> <a class="button is-primary is-disabled" disabled>Disabled</a> <a class="button is-info is-disabled" disabled>Disabled</a> <a class="button is-success is-disabled" disabled>Disabled</a> <a class="button is-warning is-disabled" disabled>Disabled</a> <a class="button is-danger is-disabled" disabled>Disabled</a>
                </div>
            </div>
            <hr>
                    <div class="block">
                    <h4 class="subtitle">.is-small, .is-medium, .is-large</h4><a class="button is-small">Small</a> <a class="button">Normal</a> <a class="button is-medium">Medium</a> <a class="button is-large">Large</a>
                    </div>

            <h4 class="subtitle">With Icons</h4>

            <div class="columns">
                <div class="column">
                    <p class="control"><a class="button"><span>GitHub</span></a> <a class="button is-primary"> <span>Twitter</span></a> <a class="button is-success"> <span>Save</span></a> <a class="button is-danger is-outlined"><span>Delete</span> </a></p>
                </div>

                <div class="column">
                    <p class="control"><a class="button is-small"><span>GitHub</span></a> <a class="button"> <span>GitHub</span></a> <a class="button is-medium"> <span>GitHub</span></a> <a class="button is-large"> <span>GitHub</span></a></p>
                </div>
            </div>
            <hr>

            <h3 class="title">Button group</h3>

            <div class="content">
                <p>If you want to <strong>group</strong> buttons together, use the <code>is-grouped</code> modifier on the <code>control</code> container:</p>
            </div>

            <div class="example">
                <p class="control is-grouped"><a class="button is-primary">Save changes</a> <a class="button">Cancel</a> <a class="button is-danger">Delete post</a></p>
            </div>
            <hr>

            <h3 class="title">Button addons</h3>

            <div class="content">
                <p>If you want to use buttons as <strong>addons</strong>, use the <code>has-addons</code> modifier on the <code>control</code> container:</p>
            </div>

            <div class="example">
                <p class="control has-addons"><a class="button"><span>Left</span></a> <a class="button"> <span>Center</span></a> <a class="button"> <span>Right</span></a></p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title">Form controls</h1>

            <h2 class="subtitle">All generic <strong>form controls</strong>, designed for consistency</h2>
            <hr>

            <div class="content">
                <p>The following form controls <strong>classes</strong> are supported:</p>

                <ul>
                    <li><code>.label</code></li>

                    <li><code>.input</code></li>

                    <li><code>.textarea</code></li>

                    <li><code>.select</code></li>

                    <li><code>.checkbox</code></li>

                    <li><code>.radio</code></li>

                    <li><code>.button</code></li>

                    <li><code>.help</code></li>
                </ul>

                <p>When combining several controls in a <strong>form</strong>, use the <code>.control</code> class as a <strong>container</strong>, to keep the spacing consistent.</p>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <label class="label">Name</label>

                    <p class="control"><input class="input" type="text" placeholder="Text input"></p><label class="label">Username</label>

                    <p class="control has-icon has-icon-right"><input class="input is-success" type="text" placeholder="Text input" value="bulma"> <span class="help is-success">This username is available</span></p><label class="label">Email</label>

                    <p class="control has-icon has-icon-right"><input class="input is-danger" type="text" placeholder="Email input" value="hello@"> <span class="help is-danger">This email is invalid</span></p><label class="label">Subject</label>

                    <p class="control"><span class="select"><select>
                        <option>
                            Select dropdown
                        </option>

                        <option>
                            With options
                        </option>
                    </select></span></p><label class="label">Message</label>

                    <p class="control">
                    <textarea class="textarea" placeholder="Textarea">
</textarea></p>

                    <p class="control"><label class="checkbox"><input type="checkbox"> Remember me</label></p>

                    <p class="control"><label class="radio"><input type="radio" name="question"> Yes</label> <label class="radio"><input type="radio" name="question"> No</label></p>

                    <p class="control"><button class="button is-primary">Submit</button> <button class="button is-link">Cancel</button></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Username<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span> <span class="na">value=</span><span class="s">"bulma"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"help is-success"</span><span class="nt">&gt;</span>This username is available<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-danger"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Email input"</span> <span class="na">value=</span><span class="s">"hello@"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-warning"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"help is-danger"</span><span class="nt">&gt;</span>This email is invalid<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Subject<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select&gt;</span>
      <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Message<span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    Remember me
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span><span class="nt">&gt;</span>
    Yes
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span><span class="nt">&gt;</span>
    No
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-link"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button><button class="expand">Expand</button>
                    </figure>
                </div>
            </div>
            <hr>

            <h3 class="title">Colors</h3>

            <div class="columns">
                <div class="column is-half">
                    <p class="control"><input class="input is-primary" type="text" placeholder="Primary input"></p>

                    <p class="control"><input class="input is-info" type="text" placeholder="Info input"></p>

                    <p class="control"><input class="input is-success" type="text" placeholder="Success input"></p>

                    <p class="control"><input class="input is-warning" type="text" placeholder="Warning input"></p>

                    <p class="control"><input class="input is-danger" type="text" placeholder="Danger input"></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-primary"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Primary input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-info"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Info input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Success input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-warning"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Warning input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-danger"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Danger input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>
            <hr>

            <h3 class="title">Sizes</h3>

            <div class="columns">
                <div class="column is-half">
                    <p class="control"><input class="input is-small" type="text" placeholder="Small input"></p>

                    <p class="control"><input class="input" type="text" placeholder="Normal input"></p>

                    <p class="control"><input class="input is-medium" type="text" placeholder="Medium input"></p>

                    <p class="control"><input class="input is-large" type="text" placeholder="Large input"></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Medium input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>
            <hr>

            <h3 class="title">States</h3>

            <h4 class="subtitle">Loading</h4>

            <div class="columns">
                <div class="column is-half">
                    <p class="control is-loading"><input class="input" type="text" placeholder="Loading input"></p>

                    <p class="control is-loading">
                    <textarea class="textarea" placeholder="Loading textarea">
</textarea></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Loading input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Loading textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>

            <h4 class="subtitle">Disabled</h4>

            <div class="columns">
                <div class="column is-half">
                    <p class="control"><input class="input" type="text" placeholder="Disabled input" disabled></p>

                    <p class="control">
                    <textarea class="textarea" placeholder="Disabled textarea" disabled>
</textarea></p>

                    <p class="control"><label class="checkbox is-disabled"><input type="checkbox" disabled> Remember me</label></p>

                    <p class="control"><label class="radio is-disabled"><input type="radio" name="question" disabled> Yes</label> <label class="radio is-disabled"><input type="radio" name="question" disabled> No</label></p>

                    <p class="control"><button class="button is-primary" disabled>Submit</button> <button class="button" disabled>Cancel</button></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Disabled textarea"</span> <span class="na">disabled</span><span class="nt">&gt;&lt;/textarea&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox is-disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Remember me
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio is-disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    Yes
  <span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio is-disabled"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    No
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>

            <h4 class="subtitle">With Font Awesome icons</h4>

            <div class="columns">
                <div class="column is-half">
                    <p class="control has-icon"><input class="input" type="email" placeholder="Email"></p>

                    <p class="control has-icon"><input class="input" type="password" placeholder="Password"></p>

                    <p class="control"><button class="button is-success">Login</button></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-lock"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
    Login
  <span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>

            <div class="columns">
                <div class="column is-half">
                    <p class="control has-icon"><input class="input is-small" type="email" placeholder="Email"></p>

                    <p class="control has-icon"><input class="input" type="email" placeholder="Email"></p>

                    <p class="control has-icon"><input class="input is-medium" type="email" placeholder="Email"></p>

                    <p class="control has-icon"><input class="input is-large" type="email" placeholder="Email"></p>

                    <p class="control has-icon has-icon-right"><input class="input is-small" type="email" placeholder="Email"></p>

                    <p class="control has-icon has-icon-right"><input class="input" type="email" placeholder="Email"></p>

                    <p class="control has-icon has-icon-right"><input class="input is-medium" type="email" placeholder="Email"></p>

                    <p class="control has-icon has-icon-right"><input class="input is-large" type="email" placeholder="Email"></p>
                </div>

                <div class="column is-half">
                    <figure class="highlight">
                        <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icon has-icon-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
                    </figure>
                </div>
            </div>
            <hr>

            <h3 class="title">Form addons</h3>

            <div class="content">
                <p>If you want to <strong>attach</strong> controls together, use the <code>has-addons</code> modifier on the <code>control</code> container:</p>
            </div>

            <div class="example">
                <p class="control has-addons"><input class="input" type="text" placeholder="Find a repository"> <a class="button is-info">Search</a></p>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a repository"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>
    Search
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
            </figure>

            <div class="content">
                <p>You can attach inputs, buttons, and dropdowns.</p>
            </div>

            <div class="example">
                <p class="control has-addons"><span class="select"><select>
                    <option>
                        $
                    </option>

                    <option>
                        £
                    </option>

                    <option>
                        €
                    </option>
                </select></span> <input class="input" type="text" placeholder="Amount of money"> <a class="button is-success">Transfer</a></p>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select&gt;</span>
      <span class="nt">&lt;option&gt;</span>$<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>£<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;option&gt;</span>€<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Amount of money"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
    Transfer
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
            </figure>
            <hr>

            <h3 class="title">Form group</h3>

            <div class="content">
                <p>If you want to <strong>group</strong> controls together, use the <code>is-grouped</code> modifier on the <code>control</code> container:</p>
            </div>

            <div class="example">
                <p class="control is-grouped"><input class="input" type="text" placeholder="Find a repository"> <a class="button is-info">Search</a></p>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-grouped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a repository"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>
    Search
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code>
</pre><button class="copy">Copy</button>
            </figure>
            <hr>

            <h3 class="title">Horizontal form</h3>

            <div class="content">
                <p>If you want a <strong>horizontal</strong> form control, use the <code>is-horizontal</code> modifier on the <code>control</code> container, in which you include:</p>

                <ul>
                    <li><code>control-label</code> for the side label</li>

                    <li><code>control</code> for the input/select/textarea container</li>
                </ul>

                <p>You can of course use <code>is-grouped</code> or <code>has-addons</code> for the child elements.</p>
            </div>

            <div class="control is-horizontal">
                <div class="control-label">
                    <label class="label">From</label>
                </div>

                <div class="control is-grouped">
                    <input class="input" type="text" placeholder="Name"> <input class="input" type="email" placeholder="Email">
                </div>
            </div>

            <div class="control is-horizontal">
                <div class="control-label">
                    <label class="label">Subject</label>
                </div>

                <div class="control">
                    <div class="select is-fullwidth">
                        <select>
                            <option>
                                General enquiry
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="control is-horizontal">
                <div class="control-label">
                    <label class="label">Question</label>
                </div>

                <div class="control">
                    <textarea class="textarea" placeholder="Explain how we can help you">
</textarea>
                </div>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>From<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-grouped"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Name"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Subject<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"select is-fullwidth"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;select&gt;</span>
        <span class="nt">&lt;option&gt;</span>General enquiry<span class="nt">&lt;/option&gt;</span>
      <span class="nt">&lt;/select&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control-label"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Question<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Explain how we can help you"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code>
</pre><button class="copy">Copy</button>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title">Notifications</h1>

            <h2 class="subtitle">Bold <strong>notification</strong> blocks, to alert your users of something</h2>
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

    <section class="section">
        <div class="container">
            <h1 class="title">Progress bars</h1>

            <h2 class="subtitle">Native HTML <strong>progress</strong> bars</h2>
            <hr>

            <div class="example">
                <progress class="progress" value="15" max="100">15%</progress> <progress class="progress is-primary" value="30" max="100">30%</progress> <progress class="progress is-info" value="45" max="100">45%</progress> <progress class="progress is-success" value="60" max="100">60%</progress> <progress class="progress is-warning" value="75" max="100">75%</progress> <progress class="progress is-danger" value="90" max="100">90%</progress>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"15"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>15%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-primary"</span> <span class="na">value=</span><span class="s">"30"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>30%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-info"</span> <span class="na">value=</span><span class="s">"45"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>45%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-success"</span> <span class="na">value=</span><span class="s">"60"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-warning"</span> <span class="na">value=</span><span class="s">"75"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>75%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-danger"</span> <span class="na">value=</span><span class="s">"90"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>90%<span class="nt">&lt;/progress&gt;</span></code>
</pre><button class="copy">Copy</button>
            </figure>
            <hr>

            <h3 class="title">Sizes</h3>

            <div class="example">
                <progress class="progress is-small" value="15" max="100">15%</progress> <progress class="progress" value="30" max="100">30%</progress> <progress class="progress is-medium" value="45" max="100">45%</progress> <progress class="progress is-large" value="60" max="100">60%</progress>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-small"</span> <span class="na">value=</span><span class="s">"15"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>15%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress"</span> <span class="na">value=</span><span class="s">"30"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>30%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-medium"</span> <span class="na">value=</span><span class="s">"45"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>45%<span class="nt">&lt;/progress&gt;</span>
<span class="nt">&lt;progress</span> <span class="na">class=</span><span class="s">"progress is-large"</span> <span class="na">value=</span><span class="s">"60"</span> <span class="na">max=</span><span class="s">"100"</span><span class="nt">&gt;</span>60%<span class="nt">&lt;/progress&gt;</span></code>
</pre><button class="copy">Copy</button>
            </figure>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title">Tables</h1>

            <h2 class="subtitle">The inevitable HTML <strong>table</strong>, with special case cells</h2>
            <hr>

            <div class="example">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>

                            <th>Open source projects</th>

                            <th>Year started</th>

                            <th colspan="3">Links</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th></th>

                            <th>Open source projects</th>

                            <th>Year started</th>

                            <th colspan="3">Links</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <tr>
                            <td class="is-icon"></td>

                            <td><a href="#">Android</a></td>

                            <td>2003</td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>
                        </tr>

                        <tr>
                            <td class="is-icon"></td>

                            <td><a href="#">Firefox</a></td>

                            <td>2003</td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>
                        </tr>

                        <tr>
                            <td class="is-icon"></td>

                            <td><a href="#">Linux</a></td>

                            <td>2003</td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>
                        </tr>

                        <tr>
                            <td class="is-icon"></td>

                            <td><a href="#">WordPress</a></td>

                            <td>2003</td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>

                            <td class="is-icon"><a href="#"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <figure class="highlight">
                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;thead&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Instrument<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/thead&gt;</span>
  <span class="nt">&lt;tfoot&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;th&gt;</span>Name<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;</span>Instrument<span class="nt">&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;&lt;/th&gt;</span>
      <span class="nt">&lt;th&gt;&lt;/th&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tfoot&gt;</span>
  <span class="nt">&lt;tbody&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Misty Abbott<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Bass Guitar<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-instagram"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>John Smith<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Rhythm Guitar<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-instagram"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Robert Mikels<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Lead Guitar<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-instagram"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
    <span class="nt">&lt;tr&gt;</span>
      <span class="nt">&lt;td&gt;</span>Karyn Holmberg<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td&gt;</span>Drums<span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
      <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"is-icon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-instagram"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/td&gt;</span>
    <span class="nt">&lt;/tr&gt;</span>
  <span class="nt">&lt;/tbody&gt;</span>
<span class="nt">&lt;/table&gt;</span></code>
</pre><button class="copy">Copy</button><button class="expand">Expand</button>
            </figure>
            <hr>

            <h3 class="title">Modifiers</h3>

            <div class="columns">
                <div class="column">
                    <p>Add <strong>borders</strong> to all the cells.</p>
                </div>

                <div class="column">
                    <code>table is-bordered</code>
                </div>

                <div class="column is-half">
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

                <div class="column">
                    <code>table is-striped</code>
                </div>

                <div class="column is-half">
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

                <div class="column">
                    <code>table is-narrow</code>
                </div>

                <div class="column is-half">
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

                <div class="column">
                    <code>table is-bordered is-striped is-narrow</code>
                </div>

                <div class="column is-half">
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

    <section class="section">
        <div class="container">
            <h1 class="title">Tags</h1>

            <h2 class="subtitle">Small <strong>tag labels</strong> to insert anywhere</h2>
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
    </section><?php include("footer.html"); ?>
