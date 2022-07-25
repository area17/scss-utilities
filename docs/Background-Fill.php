<?php $title = 'Background Fill'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Draws a background the full viewport width, breaking out of the container width. It inherits the colour from the element background colour.</p>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.background-fill {
  position: relative;
}
.background-fill::before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 100vw;
  margin-left: -50vw;
  background-color: inherit;
  pointer-events: none;
}</code></pre>
  </figure>

  <h2 id="scss-usage">SCSS Usage</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.features {
  @include background-fill;
  background-color: #000;
}
</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>
</div>

<div class="bg-accent background-fill my-gutter py-gutter"></div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="bg-accent background-fill my-gutter py-gutter">&lt;/div></code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
