<?php $title = 'strip-units'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Removes units from a CSS distance value with units, to return a number.</p>

  <h2 id="scss-usage">SCSS Usage</h2>

  <code class="mixin">strip-units(<em>$number</em>)</code>

  <p>Where <code>$number</code> can be a CSS distance value, such as <code>12px</code>, <code>10em</code> or <code>2rem</code>.</p>

  <p>And so, in SCSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.foo::before {
  content: strip-units(32px);
}</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.foo::before {
  content: 32;
}</code></pre>
  </figure>

  <h2 id="output">Notes</h2>

  <p>Not an especially common need in SCSS, but useful when dealing with numbers to avoid unexpected - used in <a href="/Rem-Calc.php">rem-calc</a>.</p>
</div>

<?php include 'includes/_footer.php'; ?>
