<?php $title = 'Visually Hidden'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Visually hide text, but keep that text available to screen reader users.</p>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.visually-hidden,
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}</code></pre>
  </figure>

  <h2 id="demo">SCSS Usage</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.a11y-text {
  @include visually-hidden;
}
</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;p class="sr">Screen reader only text&lt;/p></code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
