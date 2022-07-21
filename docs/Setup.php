<?php $title = 'Setup'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Takes <code>structure</code> information from the config and generates a series of <code>:root</code> variables which are used by other A17 SCSS utilities.</p>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">_tokens.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$feConfigSmallestBreakpoint: 'xs';

$structure: (
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
$spacing: (
  outer-1: (
    xs: 64px,
    lg: 96px
  ),
  inner-1: (
    xs: 24px,
    md: 40px,
    lg: 64px
  ),
  inner-2: (
    xs: 16px,
    md: 24px,
    lg: 32px
  )
);
$color: (
  tokens: (
    white: #fff,
    grey-3: #f8f8f8,
    grey-5: #f2f2f2,
    grey-10: #e6e6e6,
    grey-15: #d9d9d9,
    grey-54: #757575,
    grey-90: #1a1a1a,
    black: #000,
    blue-01: #0A152B,
    blue-02: #001F5C,
    blue-03: #004F91,
    blue-04: #313BFB,
    blue-05: #81EEF3,
    blue-06: #ADD8E6,
    red-01: #f00
  ),
  borderColor: (
    primary: black,
    secondary: grey-15,
    tertiary: grey-54,
    code-example-filename: blue-05
  ),
  textColor: (
    title: black,
    primary: grey-90,
    inverse: white,
    secondary: grey-54,
    accent: blue-03,
    code: black,
    code-example: grey-3,
    code-example-filename: blue-05
  ),
  backgroundColor: (
    primary: white,
    header: grey-10,
    footer: grey-10,
    banner: grey-90,
    accent: blue-03,
    column: blue-05,
    column-alt: blue-04,
    code: grey-10,
    code-example: grey-90,
    quote: grey-5
  )
);
$typography: (
  families: (
    sans: "SuisseIntl, Helvetica, Arial, sans-serif",
    serif: "\"Times New Roman\", Georgia, serif",
    mono: "\"Lucida Console\", Courier, monospace"
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
    h3: (
      xs: (
        font-family: "var(--sans)",
        font-weight: 500,
        bold-weight: 500,
        font-size: 16px,
        line-height: 1.2,
        letter-spacing: -0.02em,
        font-smoothing: true
      ),
      md: (
        font-size: 20px
      )
    ),
    h4: (
      xs: (
        font-family: "var(--sans)",
        font-weight: 500,
        bold-weight: 500,
        font-size: 14px,
        line-height: 1.2,
        letter-spacing: -0.02em,
        font-smoothing: true
      ),
      md: (
        font-size: 16px
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
    ),
    ui: (
      xs: (
        font-family: "var(--sans)",
        bold-weight: 500,
        font-size: 12px,
        line-height: 1.2,
        font-weight: 400
      )
    ),
    code: (
      xs: (
        font-family: "var(--mono)",
        font-size: 14px,
        line-height: 1.2,
        font-weight: 400
      )
    )
  )
);
</code></pre>
  </figure>

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
