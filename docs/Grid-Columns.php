<?php $title = 'Grid Columns'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>A series of CSS Grid column utilities, which allow nesting and have responsive helpers.</p>

  <h2 id="setup">Setup</h2>

  <p>The required <code>$structure</code> map (<a href="/Setup.php">Setup</a>).</p>

  <h2 id="output">Output</h2>

  <p>Based on the reference config mentioned in this guide, we'd get the following in our CSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.grid {
  display: grid;
  column-gap: var(--inner-gutter);
  grid-template-columns: repeat(var(--grid-columns), 1fr);
}

.col,
[class*=col-] {
  grid-column: span var(--grid-columns);
}

.col-1 {
  --grid-columns: 1;
  grid-column: span 1;
}

.col-2 {
  --grid-columns: 2;
  grid-column: span 2;
}

.col-3 {
  --grid-columns: 3;
  grid-column: span 3;
}

/* ... up to the maximum amount of columns specified in $structure.columns */</code></pre>
  </figure>

  <p><strong>Note:</strong> Each <code>col-</code> class includes a CSS variable - this allows nesting of CSS grids and <code>colspan-</code> classes. See <a href="#nesting">nesting</a>.</p>

  <h2 id="demo">Demos</h2>

  <p>Using <code>.grid</code> and <code>.col-x</code> classes:</p>
</div>

<ul class="grid grid-demo">
  <li class="col-1"></li>
  <li class="col-2"></li>
  <li class="col-3"></li>
  <li class="col-4"></li>
  <li class="col-5"></li>
  <li class="col-6"></li>
  <li class="col-7"></li>
  <li class="col-8"></li>
  <li class="col-9"></li>
  <li class="col-10"></li>
  <li class="col-11"></li>
  <li class="col-12"></li>
</ul>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;ul class="grid grid-demo">
  &lt;li class="col-1">&lt;/li>
  &lt;li class="col-2">&lt;/li>
  &lt;li class="col-3">&lt;/li>
  &lt;li class="col-4">&lt;/li>
  &lt;li class="col-5">&lt;/li>
  &lt;li class="col-6">&lt;/li>
  &lt;li class="col-7">&lt;/li>
  &lt;li class="col-8">&lt;/li>
  &lt;li class="col-9">&lt;/li>
  &lt;li class="col-10">&lt;/li>
  &lt;li class="col-11">&lt;/li>
  &lt;li class="col-12">&lt;/li>
&lt;/ul></code></pre>
  </figure>

  <p>There is a helper class of <code>.grid</code> to use the <code>col-X</code> classes:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.grid {
  display: grid;
  column-gap: var(--inner-gutter);
  grid-template-columns: repeat(var(--grid-columns), 1fr);
}</code></pre>
  </figure>

  <p>You can see it sets up <code>display: grid</code>, it also assumes you'll want a gutter spacing and sets up the maximum amount of columns. As it uses variables for gutter and total columns, these will be updated per breakpoint.</p>

  <p>The CSS for these docs contains a <code>.grid-demo</code> class to add some color, spacing and to display the classname of the columns.</p>

  <hr>

  <h4 id="responsive">Responsive columns</h4>

  <p>The <code>$structure.columns</code> specified in this build has:</p>

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

  <p>And so, if you resize the browser, you can see that on smaller breakpoints, the grid items set to be wider than the maximum amount of columns at the breakpoint can break the display. Fortunately we can use <code>col-X</code> classes with breakpoint helpers:</p>
</div>

<ul class="grid grid-demo">
  <li class="col-1 col-3@md col-4@lg col-5@xl col-6@xxlarge"></li>
</ul>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;ul class="grid grid-demo">
  &lt;li class="col-1 col-3@md col-4@lg col-5@xl col-6@xxlarge">&lt;/li>
&lt;/ul></code></pre>
  </figure>

  <p>If you don't define anything at <code>xs</code> then the column will be <code>100%</code> wide:</p>
</div>

<ul class="grid grid-demo">
  <li class="col-2@sm col-3@md col-4@lg col-5@xl col-6@xxlarge"></li>
</ul>

<div class="copy">
  <p>The breakpoints helpers are breakpoint up - so <code>col-4@lg</code> would apply a 4 column spanning at <code>lg</code> and every breakpoint larger than that:</p>
</div>

<ul class="grid grid-demo">
  <li class="col-4@lg"></li>
</ul>

<div class="copy">
  <hr>

  <h4 id="wrapping">Wrapping and <code>gap-y-gutter</code> usage</h4>

  <p>Same col class on every item, wrapping, using <code>gap-y-gutter</code> <a href="/Spacing.php">Spacing</a> utility:</p>
</div>

<ul class="grid gap-y-gutter grid-demo">
  <li class="col-3"></li>
  <li class="col-3"></li>
  <li class="col-3"></li>
  <li class="col-3"></li>
  <li class="col-3"></li>
  <li class="col-3"></li>
</ul>

<div class="copy">
  <hr>

  <h4 id="indenting">Indenting</h4>
</div>

<ul class="grid grid-demo">
  <li class="col-2@sm col-start-2@sm"></li>
</ul>

<div class="copy">
  <p>Indenting a col (alt):</p>
</div>

<ul class="grid grid-demo">
  <li class="col-2@sm col-end-4@sm"></li>
</ul>

<div class="copy">
  <p>Not setting a col width, just start and ends:</p>
</div>

<ul class="grid grid-demo">
  <li class="col-start-2@sm col-end-4@sm col-start-3@md col-end-6@md"></li>
</ul>

<div class="copy">
  <hr>

  <h4 id="alternative-grids">Alternative grids</h4>

  <p>Need a random 10 column grid?</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.grid-demo--10 {
  --grid-columns: 10;
}</code></pre>
  </figure>
</div>

<ul class="grid grid-demo grid-demo--10">
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
</ul>

<div class="copy">
  <p>Need a random 24 column grid?</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.grid-demo--24 {
  --grid-columns: 24;
}</code></pre>
  </figure>
</div>

<ul class="grid grid-demo grid-demo--24">
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-1"></li>
  <li class="col-9"></li>
  <li class="col-12"></li>
</ul>

<div class="copy">
  <hr>

  <h4 id="nesting">Nesting</h4>
</div>

<ul class="grid grid-demo">
  <li class="col-3@md col-6@lg col-9@xl">
    <ul class="grid gap-y-gutter grid-demo">
       <li class="col-2@lg col-3@xl"></li>
       <li class="col-2@lg col-3@xl"></li>
       <li class="col-2@lg col-3@xl"></li>
       <li class="col-2@lg col-3@xl"></li>
       <li class="col-2@lg col-3@xl"></li>
       <li class="col-2@lg col-3@xl"></li>
       <li class="col-2@lg col-3@xl">
         <ul class="grid gap-y-gutter grid-demo">
            <li class="col-1"></li>
            <li class="col-1 col-2@lg col-2@xl"></li>
            <li class="col-1"></li>
            <li class="col-1"></li>
         </ul>
      </li>
       <li class="col-6@xl">
         <ul class="grid gap-y-gutter grid-demo">
            <li class="col-1 col-3@xl"></li>
            <li class="col-1 col-2@lg col-3@xl"></li>
            <li class="col-1 col-3@xl"></li>
            <li class="col-1 col-3@xl"></li>
         </ul>
      </li>
    </ul>
  </li>
  <li class="col-3@md col-4@lg col-3@xl"></li>
</ul>

<div class="copy">
  <p>Nesting <code>.grid/.col-x</code> and <code>.colspan</code> (<a href="/Colspan.php">docs</a>):</p>
</div>

<ul class="grid grid-demo">
  <li class="col-3 colspan-demo colspan-demo--flex">
    <div class="colspan-2">
      <ul class="grid">
        <li class="col-1"></li>
        <li class="col-1"></li>
      </ul>
    </div>
    <div class="colspan-1">
      <ul class="grid">
        <li class="col-1"></li>
      </ul>
    </div>
  </li>
  <li class="col-9 colspan-demo colspan-demo--flex">
    <div class="colspan-6">
      <ul class="grid">
        <li class="col-3"></li>
        <li class="col-2"></li>
        <li class="col-1"></li>
      </ul>
    </div>
    <div class="colspan-3">
      <ul class="grid">
        <li class="col-2"></li>
        <li class="col-1"></li>
      </ul>
    </div>
  </li>
</ul>

<div class="copy">
  <h2 id="notes">Notes</h2>

  <p>As you can see, this generates <strong>a lot</strong> of classes - you will want to purge your CSS of unused classes to remove any of these that you don't use.</p>
</div>

<?php include 'includes/_footer.php'; ?>
