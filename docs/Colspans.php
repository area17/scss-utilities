<?php $title = 'Colspan'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>A series of design column spanning classes (for flex/float/other), which allow nesting and have responsive helpers.</p>

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

  <p>Based on the reference config mentioned in this guide, we'd get the following in our CSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">[class*=colspan-] {
  width: 100%;
}

.colspan-1 {
  width: calc(((1 / var(--grid-columns)) * var(--max-width, 100%)) - (var(--inner-gutter) - (1 / var(--grid-columns) * var(--inner-gutter))));
}

.colspan-1 > * {
  --grid-columns: 1;
}

.colspan-2 {
  width: calc(((2 / var(--grid-columns)) * var(--max-width, 100%)) - (var(--inner-gutter) - (2 / var(--grid-columns) * var(--inner-gutter))));
}

.colspan-2 > * {
  --grid-columns: 2;
}

.colspan-3 {
  width: calc(((3 / var(--grid-columns)) * var(--max-width, 100%)) - (var(--inner-gutter) - (3 / var(--grid-columns) * var(--inner-gutter))));
}

.colspan-3 > * {
  --grid-columns: 3;
}

/* ... up to the maximum amount of columns specified in $structure.columns */</code></pre>
  </figure>

  <p><strong>Note:</strong> Each <code>colspan-</code> also includes a rule set to include a CSS variable - this allows nesting of CSS colspans and CSS grid/<code>col-</code> classes. See <a href="#nesting">nesting</a>.</p>

  <h2 id="demo">Demos</h2>
</div>

<div class="colspan-demo">
  <div class="colspan-1"></div>
  <div class="colspan-2"></div>
  <div class="colspan-3"></div>
  <div class="colspan-4"></div>
  <div class="colspan-5"></div>
  <div class="colspan-6"></div>
  <div class="colspan-7"></div>
  <div class="colspan-8"></div>
  <div class="colspan-9"></div>
  <div class="colspan-10"></div>
  <div class="colspan-11"></div>
  <div class="colspan-12"></div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="colspan-demo">
  &lt;div class="colspan-1">&lt;/div>
  &lt;div class="colspan-2">&lt;/div>
  &lt;div class="colspan-3">&lt;/div>
  &lt;div class="colspan-4">&lt;/div>
  &lt;div class="colspan-5">&lt;/div>
  &lt;div class="colspan-6">&lt;/div>
  &lt;div class="colspan-7">&lt;/div>
  &lt;div class="colspan-8">&lt;/div>
  &lt;div class="colspan-9">&lt;/div>
  &lt;div class="colspan-10">&lt;/div>
  &lt;div class="colspan-11">&lt;/div>
  &lt;div class="colspan-12">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>The CSS for these docs contains a <code>.colspan-demo</code> class to add some color, spacing and to display the classname of the columns.</p>

  <hr>

  <h4 id="responsive">Responsive</h4>
</div>

<div class="colspan-demo">
  <div class="colspan-6 colspan-8@md colspan-6@lg colspan-5@xl"></div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="colspan-6 colspan-8@md colspan-6@lg colspan-5@xl">&lt;/div></code></pre>
  </figure>

  <p>The breakpoints helpers are breakpoint up - so <code>col-4@lg</code> would apply a 4 column spanning at <code>lg</code> and every breakpoint larger than that:</p>

  <hr>

  <h4 id="alternative-grids">Alternative grids</h4>

  <p>Need a random 10 column grid?</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.colspan-demo--10 {
  --grid-columns: 10;
}</code></pre>
  </figure>
</div>

<div class="colspan-demo colspan-demo--flex colspan-demo--10">
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
</div>

<div class="copy">
  <p>Need a random 24 column grid?</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.colspan-demo--24 {
  --grid-columns: 24;
}</code></pre>
  </figure>
</div>

<div class="colspan-demo colspan-demo--flex colspan-demo--24">
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-1"></div>
  <div class="colspan-9"></div>
  <div class="colspan-12"></div>
</div>

<div class="copy">
  <hr>

  <h4 id="nesting">Nesting</h4>
</div>

<div class="colspan-demo colspan-demo--nested">
  <div class="colspan-9">
    <div class="colspan-3">
      <div class="colspan-1"></div>
      <div class="colspan-2"></div>
    </div>
    <div class="colspan-6">
      <div class="colspan-3"></div>
      <div class="colspan-2"></div>
      <div class="colspan-1"></div>
    </div>
  </div>
  <div class="colspan-3">
    <div class="colspan-2">
      <div class="colspan-1"></div>
      <div class="colspan-1"></div>
    </div>
    <div class="colspan-1">
      <div class="colspan-1"></div>
    </div>
  </div>
</div>

<div class="copy">
  <p>Nesting <code>.colspan</code> and <code>.grid/.col-x</code> (<a href="/GridColumns.php">docs</a>):</p>
</div>

<div class="colspan-demo colspan-demo--flex">
  <div class="colspan-9">
    <ul class="grid grid-demo">
      <li class="col-3"></li>
      <li class="col-2"></li>
      <li class="col-1"></li>
    </ul>
  </div>
  <div class="colspan-3">
    <ul class="grid grid-demo">
      <li class="col-2"></li>
      <li class="col-1"></li>
    </ul>
  </div>
</div>

<div class="copy">
  <h2 id="notes">Notes</h2>

  <p>As you can see, this generates <strong>a lot</strong> of classes - you will want to purge your CSS of unused classes to remove any of these that you don't use.</p>
</div>

<?php include 'includes/_footer.php'; ?>
