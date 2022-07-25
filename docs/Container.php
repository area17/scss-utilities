<?php $title = 'Container'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>A design grid conforming container class. Makes a centered column that will restrict its width based on the config passed.</p>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_tokens.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$structure: (
  breakpoints: (
    xs: 0,
    sm: 544px,
    md: 650px,
    lg: 990px,
    xl: 1300px,
    xxl: 1520px
  ),
  columns: (
    xs: 4,
    sm: 4,
    md: 8,
    lg: 12,
    xl: 12,
    xxl: 12
  ),
  container: (
    xs: auto,
    sm: auto,
    md: auto,
    lg: auto,
    xl: auto,
    xxl: 1440px
  ),
  gutters: (
    inner: (
      xs: 10px,
      sm: 15px,
      md: 20px,
      lg: 30px,
      xl: 40px,
      xxl: 40px
    ),
    outer: (
      xs: 20px,
      sm: 30px,
      md: 40px,
      lg: 40px,
      xl: 40px,
      xxl: auto
    )
  )
);</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.container {
  width: calc(var(--container-width, 100%) - 2 * var(--breakout-container-outer-gutter, var(--container-outer-gutter, var(--outer-gutter, 0))));
  margin-left: auto;
  margin-right: auto;
}</code></pre>
  </figure>

  <h2 id="scss-usage">SCSS Usage</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.my-container {
  @include container;
}
</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <p>This site uses <code>.container</code> in the <code>main</code> node.</p>
</div>

<?php include 'includes/_footer.php'; ?>
