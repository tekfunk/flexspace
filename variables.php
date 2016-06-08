<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-primary">
  <div class="has-flxs-head-3">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title"> Variables </h1>
        <div class="subtitle"> There are some things you can change.</div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="block has-text-centered"> 
	        <a class="button is-primary" href="#Palette">palette</a> 
	        <a class="button is-primary" href="#Type">type</a> 
	        <a class="button is-primary" href="#Layout">layout</a> 
	        <a class="button is-primary" href="#Groups">groups</a> 
	    </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="Palette">
  <div class="container">
    <h1>Palette</h1>
    <hr>
    <div class="notification is-primary content">
      <p>The palette is broken up into 3 parts.  The first part is your main palette where you can choose primary, secondary, accent, pastel to match the site's branding.  The next 2 are greyscale and a rainbow that you can also customize.</p>
    </div>
    <h4>Site</h4>
    <div class="columns is-gapless">
      <div class="column is-2-5">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$primary</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2957a6"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#2957a6</p>
          </div>
        </div>
      </div>
      <div class="column is-1-5">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$secondary</strong></p>
          </div>
          <div class="mod-content" style="background-color: #fbb041"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#fbb041</p>
          </div>
        </div>
      </div>
      <div class="column is-1-5">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$accent</strong></p>
          </div>
          <div class="mod-content" style="background-color: #49425a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#49425a</p>
          </div>
        </div>
      </div>
      <div class="column is-1-5">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$pastel</strong></p>
          </div>
          <div class="mod-content" style="background-color: #f9f9ef"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#f9f9ef</p>
          </div>
        </div>
      </div>
    </div>
    <h4>Greyscale</h4>
    <div class="columns is-gapless">
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$black</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#1a1a1a</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$grey-darker</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#2a2a2a</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$grey-dark</strong></p>
          </div>
          <div class="mod-content" style="background-color: #3a3a3a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#3a3a3a</p>
          </div>
        </div>
      </div>
      <div class="column is-2-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$grey</strong></p>
          </div>
          <div class="mod-content" style="background-color: #aeb1b5"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#aeb1b5</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$grey-light</strong></p>
          </div>
          <div class="mod-content" style="background-color: #d3d6db"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#d3d6db</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$grey-lighter</strong></p>
          </div>
          <div class="mod-content" style="background-color: #f5f7fa"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#f5f7fa</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title"><strong>$white</strong></p>
          </div>
          <div class="mod-content" style="background-color: #ffffff"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#ffffff</p>
          </div>
        </div>
      </div>
    </div>
    <h4>Crayons</h4>
    <div class="columns is-gapless is-stacked">
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$red</strong></p>
          </div>
          <div class="mod-content" style="background-color: #ed0a3f"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#ed0a3f</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$brick</strong></p>
          </div>
          <div class="mod-content" style="background-color: #C62D42"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#C62D42</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$orange</strong></p>
          </div>
          <div class="mod-content" style="background-color: #FF8833"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#FF8833</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$maize</strong></p>
          </div>
          <div class="mod-content" style="background-color: #F2C649"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#F2C649</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$yellow</strong></p>
          </div>
          <div class="mod-content" style="background-color: #fce473"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#fce473</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$olive</strong></p>
          </div>
          <div class="mod-content" style="background-color: #B5B35C"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#B5B35C</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$green</strong></p>
          </div>
          <div class="mod-content" style="background-color: #3AA655"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#3AA655</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$teal</strong></p>
          </div>
          <div class="mod-content" style="background-color: #008080"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#008080</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$blue</strong></p>
          </div>
          <div class="mod-content" style="background-color: #0066FF"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#0066FF</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$cobalt</strong></p>
          </div>
          <div class="mod-content" style="background-color: #8C90C8"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#8C90C8</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$violet</strong></p>
          </div>
          <div class="mod-content" style="background-color: #8359a3"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#8359a3</p>
          </div>
        </div>
      </div>
      <div class="column is-1-12">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$sepia</strong></p>
          </div>
          <div class="mod-content" style="background-color: #9E5B40"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">#9E5B40</p>
          </div>
        </div>
      </div>
    </div>
    <div class="notification is-primary content">
      <p>Various Colors get mapped to different UI and layout elements. SCSS computes inverted colors for the core palette. These can be overwritten with whatever color you choose.</p>
    </div>
    <h4>UI</h4>
    <div class="columns is-gapless is-stacked">
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$success</strong></p>
          </div>
          <div class="mod-content" style="background-color: #3AA655"></div>
                    <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$green</p>
          </div>

        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$alert</strong></p>
          </div>
          <div class="mod-content" style="background-color: #fce473"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$yellow</p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns is-gapless is-stacked">
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2957a6"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$primary</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-invert</strong></p>
          </div>
          <div class="mod-content" style="background-color: #fce473"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$primary-invert</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-visited</strong></p>
          </div>
          <div class="mod-content" style="background-color: #49425a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$accent</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-hover</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-darker</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-hover-background</strong></p>
          </div>
          <div class="mod-content" style="background-color: #f5f7fa"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-lighter</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-hover-border</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-darker</p>
          </div>
        </div>
      </div>
      <div class="column is-1-8">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-active</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-darker</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$link-active-border</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-darker</p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns is-gapless is-stacked">
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$text</strong></p>
          </div>
          <div class="mod-content" style="background-color: #3a3a3a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-dark</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$text-invert</strong></p>
          </div>
          <div class="mod-content" style="background-color: #cacaca"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">findColorInvert($text)</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$text-light</strong></p>
          </div>
          <div class="mod-content" style="background-color: #aeb1b5"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$text-strong</strong></p>
          </div>
          <div class="mod-content" style="background-color: #2a2a2a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-darker</p>
          </div>
        </div>
      </div>
     </div>

    <div class="columns is-gapless is-stacked">
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$light</strong></p>
          </div>
          <div class="mod-content" style="background-color: #f5f7fa"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-lighter</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$dark</strong></p>
          </div>
          <div class="mod-content" style="background-color: #3a3a3a"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-dark</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$body-background</strong></p>
          </div>
          <div class="mod-content" style="background-color: #f5f7fa"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-lighter</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$background</strong></p>
          </div>
          <div class="mod-content" style="background-color: #f5f7fa"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-lighter</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$border</strong></p>
          </div>
          <div class="mod-content" style="background-color: #d3d6db"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey-light</p>
          </div>
        </div>
      </div>
      <div class="column is-1-6">
        <div class="mod">
          <div class="mod-header">
            <p class="mod-header-title"><strong>$border-hover</strong></p>
          </div>
          <div class="mod-content" style="background-color: #aeb1b5"></div>
          <div class="mod-header" style="text-align: center;">
            <p class="mod-header-title">$grey</p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column is-1-2">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$primary-invert</td>
              <td>findColorInvert($primary)</td>
            </tr>
            <tr>
              <td>$accent-invert</td>
              <td>findColorInvert($accent)</td>
            </tr>
            <tr>
              <td>$success-invert</td>
              <td>findColorInvert($success)</td>
            </tr>
            <tr>
              <td>$alert-invert</td>
              <td>findColorInvert($alert)</td>
            </tr>
            <tr>
              <td>$secondary-invert</td>
              <td>findColorInvert($secondary)</td>
            </tr>
            <tr>
              <td>$light-invert</td>
              <td>$dark</td>
            </tr>
            <tr>
              <td>$dark-invert</td>
              <td>$light</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column is-1-2">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$control</td>
              <td>$text-strong</td>
            </tr>
            <tr>
              <td>$control-background</td>
              <td>$text-invert</td>
            </tr>
            <tr>
              <td>$control-border</td>
              <td>$border</td>
            </tr>
            <tr>
              <td>$control-hover</td>
              <td>$link-hover</td>
            </tr>
            <tr>
              <td>$control-hover-border</td>
              <td>$border-hover</td>
            </tr>
            <tr>
              <td>$control-active</td>
              <td>$link</td>
            </tr>
            <tr>
              <td>$control-active-background</td>
              <td>$link</td>
            </tr>
            <tr>
              <td>$control-active-background-invert</td>
              <td>$link-invert</td>
            </tr>
            <tr>
              <td>$control-active-border</td>
              <td>$link</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<section class="section" id="Type">
  <div class="container">
    <h1>Type</h1>
    <hr>
    <div class="notification is-primary content">
      <p>Map your fonts, sizes, and weights with these.</p>
    </div>
    <div class="columns">
      <div class="column">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$font-headline</td>
              <td>&quot;SimianText-Orangutan&quot;, sans-serif !default;</td>
            </tr>
            <tr>
              <td>$family-sans-serif</td>
              <td>&quot;DINPro&quot;, sans-serif !default;</td>
            </tr>
            <tr>
              <td>$family-monospace</td>
              <td>"Source Code Pro", "Monaco", "Inconsolata", monospace</td>
            </tr>
            <tr>
              <td>$size-1</td>
              <td>48px</td>
            </tr>
            <tr>
              <td>$size-2</td>
              <td>40px</td>
            </tr>
            <tr>
              <td>$size-3</td>
              <td>28px</td>
            </tr>
            <tr>
              <td>$size-4</td>
              <td>24px</td>
            </tr>
            <tr>
              <td>$size-5</td>
              <td>18px</td>
            </tr>
            <tr>
              <td>$size-6</td>
              <td>14px</td>
            </tr>
            <tr>
              <td>$size-7</td>
              <td>11px</td>
            </tr>
            <tr>
              <td>$weight-normal</td>
              <td>400</td>
            </tr>
            <tr>
              <td>$weight-bold</td>
              <td>700</td>
            </tr>
            <tr>
              <td>$weight-title-normal</td>
              <td>300</td>
            </tr>
            <tr>
              <td>$weight-title-bold</td>
              <td>500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="notification is-primary content">
      <p>Here are additional type related mappings.</p>
    </div>
    <div class="columns">
     <div class="column">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$family-primary</td>
              <td>$family-sans-serif</td>
            </tr>
            <tr>
              <td>$family-code</td>
              <td>$family-monospace</td>
            </tr>
            <tr>
              <td>$size-small</td>
              <td>$size-7</td>
            </tr>
            <tr>
              <td>$size-normal</td>
              <td>$size-6</td>
            </tr>
            <tr>
              <td>$size-medium</td>
              <td>$size-5</td>
            </tr>
            <tr>
              <td>$size-large</td>
              <td>$size-3</td>
            </tr>
            <tr>
              <td>$size-huge</td>
              <td>$size-1</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$code</td>
              <td>$red</td>
            </tr>
            <tr>
              <td>$code-background</td>
              <td>$background</td>
            </tr>
            <tr>
              <td>$pre</td>
              <td>$text</td>
            </tr>
            <tr>
              <td>$pre-background</td>
              <td>$background</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<section class="section" id="Layout">
  <div class="container">
    <h1>Layout</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$phone</td>
              <td>481px</td>
            </tr>
            <tr>
              <td>$tablet</td>
              <td>769px</td>
            </tr>
            <tr>
              <td>$desktop</td>
              <td>980px</td>
            </tr>
            <tr>
              <td>$widescreen</td>
              <td>1180px</td>
            </tr>
            <tr>
              <td>$column-gap</td>
              <td>20px</td>
            </tr>
            <tr>
              <td>$nav-height</td>
              <td>50px</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$easing</td>
              <td>ease-out</td>
            </tr>
            <tr>
              <td>$radius</td>
              <td>3px</td>
            </tr>
            <tr>
              <td>$speed</td>
              <td>86ms</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<section class="section" id="Groups">
  <div class="container">
    <h1>Groups</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td>$colors</td>
              <td> (white: ($white, $black),<br />
                black: ($black, $white),<br />
                light: ($light, $light-invert),<br />
                dark: ($dark, $dark-invert),<br />
                primary: ($primary, $primary-invert),<br />
                accent: ($accent, $accent-invert),<br />
                success: ($success, $success-invert),<br />
                alert: ($alert, $alert-invert),<br />
                secondary: ($secondary, $secondary-invert)) </td>
            </tr>
            <tr>
              <td>$sizes</td>
              <td>$size-1 $size-2 $size-3 $size-4 $size-5 $size-6</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php"); ?>
