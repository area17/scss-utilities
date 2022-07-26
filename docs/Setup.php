<?php $title = 'Setup'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Takes <code>structure</code> information from the config and generates a series of <code>:root</code> variables which are used by other A17 SCSS utilities.</p>

  <h2 id="setup">Setup</h2>

  <p>Required setup for all plugins (except <code>Color</code>). Additional set up maybe required for other utilities.</p>

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
  container: (
    xs: auto,
    sm: auto,
    md: auto,
    lg: auto,
    xl: auto,
    xxl: 1440px
  ),
  columns: (
    xs: 4,
    sm: 4,
    md: 8,
    lg: 12,
    xl: 12,
    xxl: 12
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

  <p>And, so your <code>application.scss</code> will look like:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">application.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ include setup tokens

@import '_tokens';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ include A17 SCSS Utilities

@import '~@area17/scss-utilities/a17-scss-utilities';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ include site css

@import 'mixins/_your-mixin';</code></pre>
  </figure>

  <h2 id="breakdown">Breakdown</h2>

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
);</code></pre>
  </figure>

  <p>A key-value SCSS map of your breakpoints, where the keys are your breakpoint names and the values are the start points of the breakpoints.</p>

  <hr>

  <p>For the following SCSS maps, it probably helps to define "design grid". We call the grid that the design system lives within, as opposed to CSS Grid or a grid layout. Of course, you may then make components that use CSS Grid to make a grid layout which lives on the design grid.</p>

  <img src="/assets/images/design-grid.png" alt="design grid screen shot">

  <p>And so, referencing the screen shot above:</p>

  <ul>
    <li><code>container</code> is the defined as the area the blue bars cover;</li>
    <li><code>columns</code> are the blue bars</li>
    <li>
      <code>gutters</code>
      <ul>
        <li><code>inner</code> - the gaps between blue bars</li>
        <li><code>outer</code> - the gaps on the outside of the first and last blue bar</li>
      </ul>
    </li>
  </ul>

  <hr>

  <figure class="code-example">
    <figcaption class="code-example-filename">_tokens.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$structure: (
  container: (
    xs: auto,
    sm: auto,
    md: auto,
    lg: auto,
    xl: auto,
    xxl: 1440px
  ),
);</code></pre>
  </figure>

  <p>A key-value SCSS map describing the width of the main container at each breakpoint. Values can be <code>auto</code> for fluid width or a defined value to lock the column at a certain breakpoint. This allows you to build fluid and adaptive layouts.</p>

  <hr>

  <figure class="code-example">
    <figcaption class="code-example-filename">_tokens.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$structure: (
  columns: (
    xs: 4,
    sm: 4,
    md: 8,
    lg: 12,
    xl: 12,
    xxl: 12
  ),
);</code></pre>
  </figure>

  <p>A key-value SCSS map describing how many design columns are at each breakpoint.</p>

  <hr>

  <figure class="code-example">
    <figcaption class="code-example-filename">_tokens.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$structure: (
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

  <p>Two key-value SCSS maps describing the design grid inner and outer gutters, per breakpoint. Can be a <code>auto</code> (when the container has a fixed width at a breakpoint) or a defined value (for other breakpoints).</p>

  <h2 id="output">Output</h2>

  <p>Based on the reference config mentioned in this guide, we would get the following in our CSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">:root {
  --breakpoint: "xs";
  --container-width: unset;
  --inner-gutter: 10px;
  --outer-gutter: 20px;
  --grid-columns: 4;
}

@media (min-width: 544px) {
  :root {
    --breakpoint: "sm";
    --container-width: unset;
    --inner-gutter: 15px;
    --outer-gutter: 30px;
    --grid-columns: 4;
  }
}

@media (min-width: 650px) {
  :root {
    --breakpoint: "md";
    --container-width: unset;
    --inner-gutter: 20px;
    --outer-gutter: 40px;
    --grid-columns: 8;
  }
}

@media (min-width: 990px) {
  :root {
    --breakpoint: "lg";
    --container-width: unset;
    --inner-gutter: 30px;
    --outer-gutter: 40px;
    --grid-columns: 12;
  }
}

@media (min-width: 1300px) {
  :root {
    --breakpoint: "xl";
    --container-width: unset;
    --inner-gutter: 40px;
    --outer-gutter: 40px;
    --grid-columns: 12;
  }
}

@media (min-width: 1520px) {
  :root {
    --breakpoint: "xxl";
    --container-width: 1440px;
    --inner-gutter: 40px;
    --outer-gutter: 0px;
    --grid-columns: 12;
  }
}</code></pre>
  </figure>

  <h2 id="notes">Notes</h2>

  <p>As these variables are on the <code>:root</code>, they are easily read by JavaScript. For example to know which is the currently active CSS breakpoint in JavaScript, you could read the <code>--breakpoint</code> variable:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">application.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">window.getComputedStyle(document.body).getPropertyValue('--breakpoint');</code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
