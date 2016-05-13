<?php include('inc/head.php'); ?>
<?php include('inc/header.php'); ?>
<section class="hero is-success">
	<div class="hero-body">  
		<div class="container">
			<h1>variables</h1>
			<h3><a href="#editable">editable</a> | <a href="#generated">generated</a></h3>
  		</div>
  	</div>
</section>
<section class="section" id="editable">
  <div class="container">
    <h1>editable variables</h1>
    <h4>variables that can be edited before generating your CSS file.</h4>
    <hr>
    <div class="columns">
      <div class="column">
        <h2>Pallete</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$black</td>
              <td><strong style="color:#1a1a1a;">#1a1a1a</strong></td>
              <td style="background-color:#1a1a1a;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$grey-darker -&gt;$dark</td>
              <td><strong style="color:#2a2a2a;">#2a2a2a</strong></td>
              <td style="background-color:#2a2a2a;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$grey-dark -&gt;$text</td>
              <td><strong style="color:#3a3a3a;">#3a3a3a</strong></td>
              <td style="background-color:#3a3a3a;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$grey</td>
              <td><strong style="color:#aeb1b5;">#aeb1b5</strong></td>
              <td style="background-color:#aeb1b5;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$grey-light</td>
              <td><strong style="color:#d3d6db;">#d3d6db</strong></td>
              <td style="background-color:#d3d6db;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$grey-lighter</td>
              <td><strong style="color:#f5f7fa;">#f5f7fa</strong></td>
              <td style="background-color:#f5f7fa;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$white</td>
              <td><strong style="color:#ffffff;">#ffffff</strong></td>
              <td style="background-color:#ffffff;"></td>
            </tr>
            <tr>
              <td>.is-info</td>
              <td>$blue - $info</td>
              <td><strong style="color:#42afe3;">#42afe3</strong></td>
              <td style="background-color:#42afe3;"></td>
            </tr>
            <tr>
              <td>.is-success</td>
              <td>$green - $success</td>
              <td><strong style="color:#94b282;">#94b282</strong></td>
              <td style="background-color:#94b282;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$orange</td>
              <td><strong style="color:#f68b39;">#f68b39</strong></td>
              <td style="background-color:#f68b39;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$purple</td>
              <td><strong style="color:#847bb9;">#847bb9</strong></td>
              <td style="background-color:#847bb9;"></td>
            </tr>
            <tr>
              <td></td>
              <td>$red</td>
              <td><strong style="color:#c5443b;">#c5443b</strong></td>
              <td style="background-color:#c5443b;"></td>
            </tr>
            <tr>
              <td>.is-primary</td>
              <td>$turquoise - $primary</td>
              <td><strong style="color:#14b1c4;">#14b1c4</strong></td>
              <td style="background-color:#14b1c4;"></td>
            </tr>
            <tr>
              <td>.is-warning</td>
              <td>$yellow - $warning</td>
              <td><strong style="color:#fce473;">#fce473</strong></td>
              <td style="background-color:#fce473;"></td>
            </tr>
            <tr>
              <td>.hero-bkd</td>
              <td>$hero-bkd</td>
              <td><strong>url('../art/circles.svg');</strong></td>
              <td style="background:url('../art/circles.svg');"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Type</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$font-headline</td>
              <td>&quot;SimianText-Orangutan&quot;, sans-serif !default;</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$family-sans-serif</td>
              <td>&quot;DINPro&quot;, sans-serif !default;</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$family-monospace</td>
              <td>"Source Code Pro", "Monaco", "Inconsolata", monospace</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-1</td>
              <td>48px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-2</td>
              <td>40px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-3</td>
              <td>28px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-4</td>
              <td>24px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-5</td>
              <td>18px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-6</td>
              <td>14px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-7</td>
              <td>11px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$weight-normal</td>
              <td>400</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$weight-bold</td>
              <td>700</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$weight-title-normal</td>
              <td>300</td>
              <td ></td>
            </tr>
            <tr>
              <td></td>
              <td>$weight-title-bold</td>
              <td>500</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2>Backgrounds</h2>
        <table width="400" class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$bkd-image-1</td>
              <td>url('../images/img-4998.jpg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-image-2</td>
              <td>url('../images/img-4998.jpg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-image-3</td>
              <td>url('../images/img-4998.jpg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-hero-1</td>
              <td>url('../art/panadot.svg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-hero-2</td>
              <td>url('../art/panadot.svg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-hero-3</td>
              <td>url('../art/panadot.svg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-pattern-1</td>
              <td>url('../art/panadot.svg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-pattern-2</td>
              <td>url('../art/panadot.svg');</td>
              <td style="background:url('../images/img-4998.jpg');"></td>
            </tr>
            <tr>
              <td></td>
              <td>$bkd-pattern-3</td>
              <td>url('../art/panadot.svg');</td>
              <td style="background:url('../art/panadot.svg');"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Animate</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$easing</td>
              <td>ease-out</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$radius</td>
              <td>3px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$speed</td>
              <td>86ms</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2>Layout</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$phone</td>
              <td>481px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$tablet</td>
              <td>769px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$desktop</td>
              <td>980px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$widescreen</td>
              <td>1180px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$column-gap</td>
              <td>20px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$nav-height</td>
              <td>50px</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Animate</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$easing</td>
              <td>ease-out</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$radius</td>
              <td>3px</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$speed</td>
              <td>86ms</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <h1 id="generated">generated variables</h1>
    <h4>variables that are generated from the editable variables .</h4>
    <hr>
    <div class="columns">
      <div class="column">
        <h2>Inverted Colors</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$primary-invert</td>
              <td>findColorInvert($primary)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$info-invert</td>
              <td>findColorInvert($info)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$success-invert</td>
              <td>findColorInvert($success)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$warning-invert</td>
              <td>findColorInvert($warning)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$danger-invert</td>
              <td>findColorInvert($danger)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$light-invert</td>
              <td>$dark</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$dark-invert</td>
              <td>$light</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Default Colors</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$body-background</td>
              <td>$grey-lighter</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$background</td>
              <td>$grey-lighter</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$border</td>
              <td>$grey-light</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$border-hover</td>
              <td>$grey</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2>Text Colors</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$text-invert</td>
              <td>findColorInvert($text)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$text-light</td>
              <td>$grey</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$text-strong</td>
              <td>$grey-darker</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Code</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$code</td>
              <td>$red</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$code-background</td>
              <td>$background</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$pre</td>
              <td>$text</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$pre-background</td>
              <td>$background</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2>Link Colors</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$link</td>
              <td>$primary</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-invert</td>
              <td>$primary-invert</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-visited</td>
              <td>$purple</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-hover</td>
              <td>$grey-darker</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-hover-background</td>
              <td>$grey-lighter</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-hover-border</td>
              <td>$grey-darker</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-active</td>
              <td>$grey-darker</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$link-active-border</td>
              <td>$grey-darker</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Control Colors</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$control</td>
              <td>$text-strong</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-background</td>
              <td>$text-invert</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-border</td>
              <td>$border</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-hover</td>
              <td>$link-hover</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-hover-border</td>
              <td>$border-hover</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-active</td>
              <td>$link</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-active-background</td>
              <td>$link</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-active-background-invert</td>
              <td>$link-invert</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$control-active-border</td>
              <td>$link</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <h2>Text Colors</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$family-primary</td>
              <td>$family-sans-serif</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$family-code</td>
              <td>$family-monospace</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-small</td>
              <td>$size-7</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-normal</td>
              <td>$size-6</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-medium</td>
              <td>$size-5</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-large</td>
              <td>$size-3</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$size-huge</td>
              <td>$size-1</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="column">
        <h2>Maps</h2>
        <table class="table is-bordered is-striped is-narrow">
          <tbody>
            <tr>
              <td></td>
              <td>$colors</td>
              <td> (white: ($white, $black),<br />
                black: ($black, $white),<br />
                light: ($light, $light-invert),<br />
                dark: ($dark, $dark-invert),<br />
                primary: ($primary, $primary-invert),<br />
                info: ($info, $info-invert),<br />
                success: ($success, $success-invert),<br />
                warning: ($warning, $warning-invert),<br />
                danger: ($danger, $danger-invert)) </td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>$sizes</td>
              <td>$size-1 $size-2 $size-3 $size-4 $size-5 $size-6</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php include("inc/footer.php"); ?>
