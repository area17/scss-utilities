<?php $title = 'Float Clear'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>A <a href="https://www.positioniseverything.net/clear-float" target="_blank">PIE</a> method of clearing floats utility class and mixin.</p>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.float-clear::after {
  content: ".";
  display: block;
  clear: both;
  height: 0;
  line-height: 0;
  overflow: hidden;
  visibility: hidden;
}</code></pre>
  </figure>

  <h2 id="demo">SCSS Usage</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.columns {
  @include float-clear;
}
</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>
</div>

<div class="float-clear-demo">
  <ul class="float-clear">
    <li class="colspan-2 mr-gutter"></li>
    <li class="colspan-2 mr-gutter"></li>
    <li class="colspan-2 mr-gutter"></li>
  </ul>
  <p>Content</p><!-- paragraph isn't floating -->
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div>
  &lt;div class="float-clear">
    &lt;div style="float: left; margin-right: 20px;">float:left&lt;/div>
    &lt;div style="float: left; margin-right: 20px;">float:left&lt;/div>
    &lt;div style="float: left; margin-right: 20px;">float:left&lt;/div>
  &lt;/div>
  &lt;p>Content&lt;/p>&lt;!-- paragraph isn't floating -->
&lt;/div></code></pre>
  </figure>
</div>
<?php include 'includes/_footer.php'; ?>
