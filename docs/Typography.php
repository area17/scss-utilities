<?php $title = 'Typography'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Generates classes for responsive typography sets. The idea being that instead of manually setting font settings for every breakpoint - you would instead have a responsive system set up.</p>

  <p>Similiar to responsive spacing, at AREA 17 we like responsive typesets classes so that the type across a site can be known and predictable. We define our type system and then use them consistently across a site. We never have a unique type style or a unique style at a breakpoint - everything is part of the system.</p>

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
);

$typography: (
  families: (
    sans: "SuisseIntl, Helvetica, Arial, sans-serif"
  ),
  typesets: (
    h1: (
      xs: (
        font-family: "var(--sans)",
        font-weight: 500,
        bold-weight: 500,
        font-size: 32,
        line-height: 1.2,
        letter-spacing: -0.02em,
        font-smoothing: true
      ),
      md: (
        font-size: 36px
      ),
      lg: (
        font-size: 48px
      )
    ),
    h2: (
      xs: (
        font-family: "var(--sans)",
        font-weight: 500,
        bold-weight: 500,
        font-size: 20px,
        line-height: 1.2,
        letter-spacing: -0.02em,
        font-smoothing: true
      ),
      md: (
        font-size: 24px
      ),
      lg: (
        font-size: 28px
      )
    ),
    body: (
      xs: (
        font-family: "var(--sans)",
        bold-weight: 500,
        font-size: 14px,
        line-height: 1.7,
        font-smoothing: true
      ),
      md: (
        font-size: 16px
      )
    )
  )
);</code></pre>
  </figure>

  <h3 id="props">Settable type properties</h3>

  <p>You can set any CSS key/value type for fonts/text styles and also two some special, none standard font properties you can set:</p>

  <ul>
    <li><code>bold-weight</code> - sets a variable of <code>--bold-weight</code> and sets any <code>b</code> or <code>strong</code> children of the element to use <code>font-weight: var(--bold-weight);</code> to give you control over the font weights</li>
    <li><code>font-smoothing</code> - <code>true</code> or <code>false</code>, sets <code>antialiased</code> and <code>subpixel-antialiased</code></li>
  </ul>

  <h2 id="output">Output</h2>

  <p>Based on the reference config mentioned in this guide, for the typeset named <code>h1</code> we'd get the following in our CSS:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">.f-h1 {
  font-family: var(--sans);
  font-size: 2rem;
  line-height: 1.2;
  letter-spacing: -0.02em;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  --bold-weight: 500;
}

.f-h1 b, .f-h1 strong {
  font-weight: var(--bold-weight);
}

@media (min-width: 990px) {
  .f-h1 {
    font-size: 3rem;
  }
}

@media (min-width: 650px) {
  .f-h1 {
    font-size: 2.25rem;
  }
}</code></pre>
  </figure>

  <p>Similarly for the typeset named <code>h1</code> we would get classes for each of the other typesets - in this guide that would include <code>f-h2</code>, <code>f-body</code> etc.</p>

  <h2 id="demo">Demo</h2>

  <p>Based on the reference config mentioned in this guide, we would get the following in our CSS:</p>
</div>

<p class="f-h1" style="margin-top: 20px;">f-h1 The quick brown fox jumps over the lazy dog</p>
<p class="f-h2">f-h2 The quick brown fox jumps over the lazy dog</p>
<p class="f-body">f-body The quick brown fox jumps over the lazy dog</p>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;p class="f-h1">f-h1 The quick brown fox jumps over the lazy dog&lt;/p>
&lt;p class="f-h2">f-h2 The quick brown fox jumps over the lazy dog&lt;/p>
&lt;p class="f-body">f-body The quick brown fox jumps over the lazy dog&lt;/p>
</code></pre>
  </figure>

  <p>These font styles can also be applied via SCSS <code>@include typeset(name)</code>:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.component > p {
  @include typeset(body); // @include typeset(f-body); also works
}</code></pre>
  </figure>

  <p>These font styles can also be applied via SCSS <code>@extend</code>:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.component > p {
  @extend f-body;
}</code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
