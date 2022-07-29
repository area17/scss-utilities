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

    <h3>Dev Tools</h3>

    <ul>
      <li><a href="/DevTools.php">Dev Tools</a> - generates colour variables and utility classes</li>
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
      <li><code>@function</code> <a href="/Rem-Calc.php">rem-calc</a> - converts <code>px</code> and <code>em</code> to <code>rem</code></li>
    </ul>

    <h3>Typography</h3>

    <ul>
      <li><code>@mixin</code> <a href="/Typeset.php">typeset</a> - adds responsive type set to an element</li>
    </ul>

    <h2>Other useful utility mixins and functions</h2>

    <ul>
      <li><code>@mixin</code> <a href="/Placeholder.php">placeholder</a> - form input placeholder styling</li>
      <li><code>@mixin</code> <a href="/Visually-Hidden.php">visually-hidden</a> - visually hidden screen reader only text class</li>
      <li><code>@mixin</code> <a href="/Float-Clear.php">float-clear</a> - float clearing utility</li>
      <li><code>@mixin</code> <a href="/Background-Fill.php">background-fill</a> - draws a full width background color block</li>
      <li><code>@mixin</code> <a href="/Keyline-Full.php">keyline-full</a> - draws a keyline the full viewport width</li>
      <li><code>@mixin</code> <a href="/Font-Smoothing.php">font-smoothing</a> - controls the anti-aliasing of text</li>
      <li><code>@function</code> <a href="/Strip-Units.php">strip-units</a> - removes unites from a CSS distance value</li>
      <li><code>@function</code> <a href="/String-Replace.php">string-replace</a> - replaces item in string with new string</li>
      <li><code>@function</code> <a href="/Map-Deep-Get.php">map-deep-get</a> - returns item from nested map</li>
    </ul>
  </div>
</div>

<div class="copy">
  <h2>Internal mixins and functions</h2>
</div>

<div class="grid">
  <div class="col-6@lg copy">
    <ul>
      <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_processStructure.scss">processStructure</a></li>
      <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_processColors.scss">processColors</a></li>
      <li>
        <code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_processTypography.scss">processTypography</a>
        <ul>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_typeStyles.scss">typeStyles</a></li>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_typeStyle.scss">typeStyle</a></li>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_typeAttribute.scss">typeAttribute</a></li>
        </ul>
      </li>
      <li>
        <code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_processGrid.scss">processGrid</a>
        <ul>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_setupDevTools.scss">setupDevTools</a></li>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_setColspan.scss">setColspan</a></li>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_setBreakpointColspan.scss">setBreakpointColspan</a></li>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_setGridCol.scss">setGridCol</a></li>
          <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_setBreakpointGridCol.scss">setBreakpointGridCol</a></li>
          <li><code>@mixin</code> <a href="">setStartEndCColumn</a></li>
          <li><code>@mixin</code> <a href="">setBreakpointStartEndCColumn</a></li>
        </ul>
      </li>
      <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_processSpacing.scss">processSpacing</a></li>
      <li><code>@mixin</code> <a href="https://github.com/area17/scss-utilities/blob/main/mixins/_setupDevTools.scss">setupDevTools</a></li>
    </ul>
  </div>
  <div class="col-6@lg copy">
    <ul>
      <li><code>@function</code> <a href="https://github.com/area17/scss-utilities/blob/main/functions/breakpoint/_get-breakpoint-directions.scss">get-breakpoint-directions</a></li>
      <li><code>@function</code> <a href="https://github.com/area17/scss-utilities/blob/main/functions/breakpoint/_get-media.scss">get-media</a></li>
      <li><code>@function</code> <a href="https://github.com/area17/scss-utilities/blob/main/functions/breakpoint/_process-breakpoints.scss">process-breakpoints</a></li>
      <li><code>@function</code> <a href="https://github.com/area17/scss-utilities/blob/main/functions/breakpoint/_get-smallest-breakpoint.scss">get-smallest-breakpoint</a></li>
      <li><code>@function</code> <a href="https://github.com/area17/scss-utilities/blob/main/functions/color/_isColorVariable.scss">isColorVariable</a></li>
      <li><code>@function</code> <a href="https://github.com/area17/scss-utilities/blob/main/functions/grid/_get-max.scss">get-max</a></li>
    </ul>
  </div>
</div>

<?php include 'includes/_footer.php'; ?>
