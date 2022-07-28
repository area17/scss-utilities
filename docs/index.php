<?php $index = true; ?>
<?php $title = 'A17 SCSS Utilities'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <p>A series of utilities to enable/encourage systematised web design/development.</p>

  <p>AREA 17 strongly believes in design systems and then using these systems to build products for both ourselves and our clients. Utility classes are thus a natural fit for us, and so we "systematised" the utilities to tie closer to our design methodology.</p>

  <p>We also wanted to include a few utility classes that would simplify some common styling requirements.</p>

  <p>What this isn't is a replacement or alternative to Tailwind - which is a utility CSS class library. These SCSS utilities are intended to help you write SCSS and use your responsive/grid system.</p>

  <h2>Setup</h2>

  <ul>
    <li>Required: <a href="/Setup.php">Setup</a> - a walk through of the setup</li>
    <li>Optional: <a href="/CSS-Class-Generation.php">CSS-Class-Generation</a> - configure which CSS classes are generated</li>
  </ul>
</div>

<div class="grid">
  <div class="col-6@lg copy">
    <h2>Featured utility classes</h2>

    <h3>Layout</h3>

    <ul>
      <li><a href="/Container.php">container</a> - centered column container</li>
      <li><a href="/Colspan.php">colspan</a> - generates design column spanning classes (for flex/float/other)</li>
      <li><a href="/Grid-Columns.php">Grid Columns</a> - generates CSS Grid design column spanning classes</li>
      <li><a href="/Spacing.php">Spacing</a> - generates spacing utilities for gutters and responsive spacing groups</li>
    </ul>

    <h3>Typography</h3>

    <ul>
      <li><a href="/Typography.php">Typography</a> - generates responsive typography classes</li>
    </ul>

    <h3>Color</h3>

    <ul>
      <li><a href="/Color.php">Color</a> - generates colour variables and utility classes</li>
    </ul>

    <h2>Other useful utility classes</h2>

    <ul>
      <li><a href="/Visually-Hidden.php">visually-hidden/sr-only</a> - visually hidden screen reader only text class</li>
      <li><a href="/Float-Clear.php">float-clear</a> - float clearing utility</li>
      <li><a href="/Background-Fill.php">background-fill</a> - draws a full width background color block</li>
    </ul>
  </div>

  <div class="col-6@lg copy">
    <h2>Featured utility mixins and functions</h2>

    <h3>Layout</h3>

    <ul>
      <li><code>@mixin</code> <a href="/Breakpoint.php">breakpoint</a> - inserts a media query</li>
      <li><code>@mixin</code> <a href="/Container.php">container</a> - centered column container</li>
      <li><code>@mixin</code> <a href="/Colspan-mixin.php">colspan</a> - mixin to add a design column spanning <code>width</code> to an element</li>
      <li><code>@function</code> <a href="/Colspan-function.php">colspan</a> - function that returns a design column spanning CSS <code>calc()</code></li>
      <li><code>@function</code> <a href="/Rem-Calc.php">rem-calc</a> - function </li>
    </ul>

    <h3>Typography</h3>

    <ul>
      <li><code>@mixin</code> typeset</li>
    </ul>

    <h2>Other useful utility mixins and functions</h2>

    <ul>
      <li><code>@mixin</code> <a href="/Placeholder.php">placeholder</a> - form input placeholder styling</li>
      <li><code>@mixin</code> <a href="/Visually-Hidden.php">visually-hidden</a> - visually hidden screen reader only text class</li>
      <li><code>@mixin</code> <a href="/Float-Clear.php">float-clear</a> - float clearing utility</li>
      <li><code>@mixin</code> <a href="/Background-Fill.php">background-fill</a> - draws a full width background color block</li>
      <li><code>@mixin</code> keyline-full</li>
      <li><code>@mixin</code> font-smoothing</li>
      <li><code>@mixin</code> hide-text</li>
      <li><code>@function</code> stripunits</li>
      <li><code>@function</code> rem-calc</li>
      <li><code>@function</code> string-replace</li>
      <li><code>@function</code> map-deep-get</li>
    </ul>
  </div>
</div>

<div class="copy">
  <h2>Internal mixins and functions</h2>
</div>

<div class="grid">
  <div class="col-6@lg copy">
    <ul>
      <li><code>@mixin</code> processStructure</li>
      <li><code>@mixin</code> processColors</li>
      <li>
        <code>@mixin</code> processTypography
        <ul>
          <li><code>@mixin</code> typeStyles</li>
          <li><code>@mixin</code> typeStyle</li>
          <li><code>@mixin</code> typeAttribute</li>
        </ul>
      </li>
      <li><code>@mixin</code> setupGrid</li>
      <li><code>@mixin</code> setupSpacing</li>
    </ul>
    <ul>
      <li><code>@mixin</code> grid-overlay</li>
      <li><code>@mixin</code> setColspan</li>
      <li><code>@mixin</code> setBreakpointColspan</li>
      <li><code>@mixin</code> setGridCol</li>
      <li><code>@mixin</code> setBreakpointColumn</li>
      <li><code>@mixin</code> setStartEndCColumn</li>
      <li><code>@mixin</code> setBreakpointStartEndCColumn</li>
      <li><code>@mixin</code> pushdown</li>
    </ul>
  </div>
  <div class="col-6@lg copy">
    <ul>
      <li><code>@function</code> -px-to-rem</li>
      <li><code>@function</code> get-breakpoint-directions</li>
      <li><code>@function</code> get-media</li>
      <li><code>@function</code> process-breakpoints</li>
      <li><code>@function</code> get-smallest-breakpoint</li>
      <li><code>@function</code> isColorVariable</li>
      <li><code>@function</code> get-max</li>
    </ul>
  </div>
</div>

<?php include 'includes/_footer.php'; ?>
