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
        <div class="block has-text-centered"> <a class="button is-primary is-active" href="#columns">columns</a> <a class="button is-primary" href="#flexview">flexview</a> <a class="button is-primary" href="#isotope">isotope</a> <a class="button is-primary" href="#tables">tables</a> </div>
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
        <div class="box content is-light">
          <p>Use <code>.columns</code> to wrap multiple <code>.column</code>.</p>
          <p><code>.columns</code> is a flex container, and has adjustible parameters with <code>.flex-direction-row</code>, etc.<code>.column</code> sizes are set with <code>.is-1-2</code>,etc and can be placed with <code>.is-offset-1-2</code>, etc</p>
          <p>To explore these options, use the preview tool below.  It will even produce usable template code.</p>
          <p>By default columns display on tablet and desktop sizes.</p>
          <p> To have columns display on a mobile device as well, use <strong>.columns .is-mobile</strong></p>
          <p>If you only want columns on desktop, use <strong>.columns .is-desktop</strong> </p>
          <p>To choose a column size for a specific device, use <strong>.column .is-1-2-desktop  is-3-4-mobile is-1-2-tablet is-1-4-desktop</strong> </p>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <pre><code id="g2" class="html hljs xml">&lt;div class=&quot;columns<span class="flex-direction"></span><span class="flex-wrap"></span><span class="justify-content"></span><span class="align-items"></span><span class="align-content"></span>&quot;&gt;  
  &lt;div class=&quot;column<span class="flv-col-1"></span>&quot;&gt;&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-2"></span>&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-3"></span>&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-4"></span>&quot;&gt;&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-5"></span>&quot;&gt;&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-6"></span>&quot;&gt;&lt;/div&gt;   
  &lt;div class=&quot;column<span class="flv-col-7"></span>&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-8"></span>&quot;&gt;&lt;/div&gt;  
  &lt;div class=&quot;column<span class="flv-col-9"></span>&quot;&gt;&lt;/div&gt;
<br />&lt;/div&gt;	  
</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g2"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="flexview">
  <div class="container">
    <h1>Flexview</h1>
    <hr>
    <div class="columns">
      <div class="column">
        <div class="box content is-light">
          <p>Choose your options to see the realtime view. Click on boxes to edit each item. Code will be written in the Columns section code box below.</p>
        </div>
      </div>
    </div>
    <div id="flex-container" class="box content is-light">
      <div class="media block flex-wrap-wrap justify-content-space-between">
<button class="button is-accent" type="button" style="width:80px;">
  Container 
</button>	         <p class="control has-addons"> <a class="button">flex-direction</a> <span class="select">
          <select name="flex-direction" id="flex-direction" value="">
            <option value="flex-direction-row">row</option>
            <option value="flex-direction-row-reverse">row-reverse</option>
            <option value="flex-direction-column">column</option>
            <option value="flex-direction-column-reverse">column-reverse</option>
          </select>
          </span> </p>
        <p class="control has-addons"> <a class="button">flex-wrap</a> <span class="select">
          <select name="flex-wrap" id="flex-wrap" value="">
            <option value="flex-wrap-nowrap">nowrap</option>
            <option value="flex-wrap-wrap">wrap</option>
            <option value="flex-wrap-wrap-reverse">wrap-reverse</option>
          </select>
          </span> </p>
        <p class="control has-addons"> <a class="button">justify-content</a> <span class="select">
          <select name="justify-content" id="justify-content" value="">
            <option value="justify-content-stretch">stretch</option>
            <option value="justify-content-flex-start">flex-start</option>
            <option value="justify-content-flex-end">flex-end</option>
            <option value="justify-content-center">center</option>
            <option value="justify-content-space-between">space-between</option>
            <option value="justify-content-space-around">space-around</option>
          </select>
          </span> </p>
        <p class="control has-addons"> <a class="button">align-items</a> <span class="select">
          <select name="align-items" id="align-items" value="">
            <option value="align-items-stretch">stretch</option>
            <option value="align-items-center">center</option>
            <option value="align-items-flex-start">flex-start</option>
            <option value="align-items-flex-end">flex-end</option>
            <option value="align-items-baseline">baseline</option>
          </select>
          </span> </p>
        <p class="control has-addons"> <a class="button">align-content</a> <span class="select">
          <select name="align-content" id="align-content" value="" label="Align Content">
            <option value="align-content-stretch">stretch</option>
            <option value="align-content-flex-start">flex-start</option>
            <option value="align-content-flex-end">flex-end</option>
            <option value="align-content-center">center</option>
            <option value="align-content-space-between">space-between</option>
            <option value="align-content-space-around">space-around</option>
          </select>
          </span> </p>
        <div class="block">
          <p class="control button">
            <label class="checkbox">
              <input type="checkbox" name="is-gapless" id="is-gapless">
              is-gapless </label>
          </p>
          <p class="control button">
            <label class="checkbox">
              <input type="checkbox" name="is-stacked" id="is-stacked">
              is-stacked </label>
          </p>
          <p class="control button">
            <label class="checkbox">
              <input type="checkbox" name="is-mobile" id="is-mobile">
              is-mobile </label>
          </p>
          <p class="control button">
            <label class="checkbox">
              <input type="checkbox" name="is-desktop" id="is-desktop">
              is-desktop </label>
          </p>
        </div>
      </div>
    </div>
          <div id="flex-items" class="box content is-light">
	          
	          <div class="media">
	          <div class="block">
<button class="button is-accent" type="button" style="width:80px;margin-right: 20px;">
  Items 
</button>

</div>
	            <div class="block">
          <div id="flxb-1" class="block flex-wrap-wrap justify-content-space-around show-me">
            <p class="control has-addons"> <a class="button is-alert" style="margin-right: 20px;">1</a> <a class="button is-alert">Size</a><span class="select">
              <select name="fcol-1" id="fcol-1">
                <option value="" selected></option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><a class="button is-alert">Offset</a><span class="select">
              <select name="fcoloff-1" id="fcoloff-1">
                <option value="" selected></option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><a class="button is-alert">Flex</a><span class="select">
              <select name="flx-1" id="flx-1">
                <option value="" selected></option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><a class="button is-alert">Align</a><span class="select">
              <select name="alignself-1" id="alignself-1">
                <option value="" selected></option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-2" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-secondary">2</a> <span class="select">
              <select name="fcol-2" id="fcol-2" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-2" id="fcoloff-2">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-2" id="flx-2">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-2" id="alignself-2">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-3" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-accent">3</a> <span class="select">
              <select name="fcol-3" id="fcol-3" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-3" id="fcoloff-3">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-3" id="flx-3">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-3" id="alignself-3">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-4" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-success">4</a> <span class="select">
              <select name="fcol-4" id="fcol-4" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-4" id="fcoloff-4">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-4" id="flx-4">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-4" id="alignself-5">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-5" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-primary">5</a> <span class="select">
              <select name="fcol-5" id="fcol-5" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-5" id="fcoloff-5">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-5" id="flx-5">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-5" id="alignself-5">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-6" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-red">6</a> <span class="select">
              <select name="fcol-6" id="fcol-6" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-6" id="fcoloff-6">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-6" id="flx-6">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-6" id="alignself-6">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-7" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-alert">7</a> <span class="select">
              <select name="fcol-7" id="fcol-7" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-7" id="fcoloff-7">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-7" id="flx-7">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-7" id="alignself-7">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-8" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-secondary">8</a> <span class="select">
              <select name="fcol-8" id="fcol-8" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-8" id="fcoloff-8">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-8" id="flx-8">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-8" id="alignself-8">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-9" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-accent">9</a> <span class="select">
              <select name="fcol-9" id="fcol-9" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-9" id="fcoloff-9">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-9" id="flx-9">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-9" id="alignself-9">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-10" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-success">10</a> <span class="select">
              <select name="fcol-10" id="fcol-10" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-10" id="fcoloff-10">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span> <span class="select">
              <select name="flx-10" id="flx-10">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-10" id="alignself-10">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-11" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-primary">11</a> <span class="select">
              <select name="fcol-11" id="fcol-11" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-11" id="fcoloff-11">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-11" id="flx-11">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span><span class="select">
              <select name="alignself-11" id="alignself-11">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-12" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-red">12</a> <span class="select">
              <select name="fcol-12" id="fcol-12" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-12" id="fcoloff-12">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-12" id="flx-12">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-12" id="alignself-12">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-13" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-alert">13</a> <span class="select">
              <select name="fcol-13" id="fcol-13" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-13" id="fcoloff-13">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-13" id="flx-13">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-13" id="alignself-13">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-14" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-secondary">14</a> <span class="select">
              <select name="fcol-14" id="fcol-14" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-14" id="fcoloff-14">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span> <span class="select">
              <select name="flx-14" id="flx-14">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-14" id="alignself-14">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-15" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-accent">15</a> <span class="select">
              <select name="fcol-15" id="fcol-15" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-15" id="fcoloff-15">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span> <span class="select">
              <select name="flx-15" id="flx-15">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-15" id="alignself-15">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-16" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-success">16</a> <span class="select">
              <select name="fcol-16" id="fcol-16" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-16" id="fcoloff-16">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span> <span class="select">
              <select name="flx-16" id="flx-16">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-16" id="alignself-16">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-17" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-primary">17</a> <span class="select">
              <select name="fcol-17" id="fcol-17" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span><span class="select">
              <select name="fcoloff-17" id="fcoloff-17">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span><span class="select">
              <select name="flx-17" id="flx-17">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-17" id="alignself-17">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span></p>
          </div>
          <div id="flxb-18" class="block flex-wrap-wrap justify-content-space-between display-none">
            <p class="control has-addons"> <a class="button is-red">18</a> <span class="select">
              <select name="fcol-18" id="fcol-18" value="">
                <option value="" selected>Size</option>
                <option value="is-full">full</option>
                <option value="is-1-2">1-2</option>
                <option value="is-1-3">1-3</option>
                <option value="is-1-4">1-4</option>
                <option value="is-1-5">1-5</option>
                <option value="is-1-6">1-6</option>
                <option value="is-1-8">1-8</option>
                <option value="is-1-10">1-10</option>
                <option value="is-1-12">1-12</option>
                <option value="is-2-3">2-3</option>
                <option value="is-2-5">2-5</option>
                <option value="is-3-4">3-4</option>
                <option value="is-3-5">3-5</option>
                <option value="is-3-8">3-8</option>
                <option value="is-3-10">3-10</option>
                <option value="is-4-5">4-5</option>
                <option value="is-5-6">5-6</option>
                <option value="is-5-8">5-8</option>
                <option value="is-5-12">5-12</option>
                <option value="is-7-8">7-8</option>
                <option value="is-7-10">7-10</option>
                <option value="is-7-12">7-12</option>
                <option value="is-9-10">9-10</option>
                <option value="is-11-12">11-12</option>
                <option value="is-narrow-desktop">narrow-desktop</option>
                <option value="is-narrow">narrow</option>
              </select>
              </span> <span class="select">
              <select name="fcoloff-18" id="fcoloff-18">
                <option value="" selected>Offset</option>
                <option value="is-offset-1-2">1-2</option>
                <option value="is-offset-1-3">1-3</option>
                <option value="is-offset-1-4">1-4</option>
                <option value="is-offset-1-5">1-5</option>
                <option value="is-offset-1-6">1-6</option>
                <option value="is-offset-1-8">1-8</option>
                <option value="is-offset-1-10">1-10</option>
                <option value="is-offset-1-12">1-12</option>
                <option value="is-offset-2-3">2-3</option>
                <option value="is-offset-2-5">2-5</option>
                <option value="is-offset-3-4">3-4</option>
                <option value="is-offset-3-5">3-5</option>
                <option value="is-offset-3-8">3-8</option>
                <option value="is-offset-3-10">3-10</option>
                <option value="is-offset-4-5">4-5</option>
                <option value="is-offset-5-6">5-6</option>
                <option value="is-offset-5-8">5-8</option>
                <option value="is-offset-5-12">5-12</option>
                <option value="is-offset-7-8">7-8</option>
                <option value="is-offset-7-10">7-10</option>
                <option value="is-offset-7-12">7-12</option>
                <option value="is-offset-9-10">9-10</option>
                <option value="is-offset-11-12">11-12</option>
              </select>
              </span> <span class="select">
              <select name="flx-18" id="flx-18">
                <option value="" selected>Flex</option>
                <option value="flex-grow">grow</option>
                <option value="flex-shrink">shrink</option>
                <option value="flex-none">none</option>
              </select>
              </span> <span class="select">
              <select name="alignself-18" id="alignself-18">
                <option value="" selected>Align</option>
                <option value="align-self-auto">auto</option>
                <option value="align-self-flex-start">flex-start</option>
                <option value="align-self-flex-end">flex-end</option>
                <option value="align-self-center">center</option>
                <option value="align-self-baseline">baseline</option>
                <option value="align-self-stretch">stretch</option>
              </select>
              </span> </p>
          </div>
        </div>
  </div>
	          </div>
    
    
    <div id="flex-demo" class="columns" style="background-color: #f0f0f0;">
      <div id="flv-col-1" class="column">
        <div class="notification is-alert">1</div>
      </div>
      <div id="flv-col-2" class="column">
        <div class="notification is-secondary">2</div>
      </div>
      <div id="flv-col-3" class="column">
        <div class="notification is-accent">3</div>
      </div>
      <div id="flv-col-4" class="column">
        <div class="notification is-success">4</div>
      </div>
      <div id="flv-col-5" class="column">
        <div class="notification is-primary">5</div>
      </div>
      <div id="flv-col-6" class="column">
        <div class="notification is-red">6</div>
      </div>
      <div id="flv-col-7" class="column">
        <div class="notification is-alert">7</div>
      </div>
      <div id="flv-col-8" class="column">
        <div class="notification is-secondary">8</div>
      </div>
      <div id="flv-col-9" class="column">
        <div class="notification is-accent">9</div>
      </div>
      <div id="flv-col-10" class="column">
        <div class="notification is-success">10</div>
      </div>
      <div id="flv-col-11" class="column">
        <div class="notification is-primary">11</div>
      </div>
      <div id="flv-col-12" class="column">
        <div class="notification is-red">12</div>
      </div>
      <div id="flv-col-13" class="column">
        <div class="notification is-alert">13</div>
      </div>
      <div id="flv-col-14" class="column">
        <div class="notification is-secondary">14</div>
      </div>
      <div id="flv-col-15" class="column">
        <div class="notification is-accent">15</div>
      </div>
      <div id="flv-col-16" class="column">
        <div class="notification is-success">16</div>
      </div>
      <div id="flv-col-17" class="column">
        <div class="notification is-primary">17</div>
      </div>
      <div id="flv-col-18" class="column">
        <div class="notification is-red">18</div>
      </div>
    </div>
    <div class="columns">
       <div class="column">
        <div class="box">
          <pre><code id="g2" class="html hljs xml">&lt;div class=&quot;columns<span class="code-gapless"></span><span class="code-stacked"></span><span class="code-mobile"></span><span class="code-desktop"></span><span class="flex-direction"></span><span class="flex-wrap"></span><span class="justify-content"></span><span class="align-items"></span><span class="align-content"></span>&quot;&gt;  
  &lt;div class=&quot;column<span class="flv-col-1"></span>&quot;&gt;1&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-2"></span>&quot;&gt;2&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-3"></span>&quot;&gt;3&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-4"></span>&quot;&gt;4&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-5"></span>&quot;&gt;5&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-6"></span>&quot;&gt;6&lt;/div&gt;   
  &lt;div class=&quot;column<span class="flv-col-7"></span>&quot;&gt;7&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-8"></span>&quot;&gt;8&lt;/div&gt;  
  &lt;div class=&quot;column<span class="flv-col-9"></span>&quot;&gt;9&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-10"></span>&quot;&gt;10&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-11"></span>&quot;&gt;11&lt;/div&gt;   
  &lt;div class=&quot;column<span class="flv-col-12"></span>&quot;&gt;12&lt;/div&gt;    
  &lt;div class=&quot;column<span class="flv-col-13"></span>&quot;&gt;13&lt;/div&gt;   
  &lt;div class=&quot;column<span class="flv-col-14"></span>&quot;&gt;14&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-15"></span>&quot;&gt;15&lt;/div&gt;  
  &lt;div class=&quot;column<span class="flv-col-16"></span>&quot;&gt;16&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-17"></span>&quot;&gt;17&lt;/div&gt;
  &lt;div class=&quot;column<span class="flv-col-18"></span>&quot;&gt;18&lt;/div&gt;<br />&lt;/div&gt;	  
</code>
</pre>
          <a class="button icon-clipboard" data-clipboard-target="#g2"></a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section" id="isotope">
  <div class="container">
    <h1>Isotope</h1>
    <hr>
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