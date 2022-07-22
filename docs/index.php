<?php $index = true; ?>
<?php $title = 'A17 SCSS Utilities'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <p>A series of utilities to enable/encourage systematised web design/development.</p>

  <p>AREA 17 strongly believes in design systems and then using these systems to build products for both ourselves and our clients. Utility classes are thus a natural fit for us, and so we "systematised" the utilities to tie closer to our design methodology.</p>

  <p>We also wanted to include a few utility classes that would simplify some common styling requirements.</p>

  <p>What this isn't is a replacement or alternative to Tailwind - which is a utility CSS class library. These SCSS utilities are intended to help you write SCSS and use your responsive/grid system.</p>

  <p>Firstly, the setup:</p>

  <ul>
    <li><a href="/Setup.php">Setup</a> - a walk through of the setup</li>
  </ul>

  <p>Utility classes:</p>

  <ul>
    <li><a href="/Typography.php">Typography</a> - generates responsive typography classes</li>
    <li><a href="/Color.php">Color</a> - generates colour variables and utility classes</li>
    <li><a href="/Spacing.php">Spacing</a> - generates spacing utilities for gutters and responsive spacing groups</li>
    <li>Grid/Colspans</li>
    <li>visually-hidden</li>
    <li>float clear</li>
    <li>background-fill</li>
    <li>container</li>
  </ul>

  <p>Utility mixins:</p>

  <ul>
    <li>Breakpoint</li>
    <li>Placeholder - form input placeholder styling</li>
    <li>visually-hidden</li>
    <li>float clear</li>
    <li>background-fill</li>
    <li>keyline-full</li>
    <li>font-smoothing</li>
    <li>hide-text</li>
    <li>container</li>
    <li>colspan</li>
    <li>typeset</li>
  </ul>

  <p>Utility functions:</p>

  <ul>
    <li>@function stripunits</li>
    <li>@function rem-calc</li>
    <li>@function string-replace</li>
    <li>@function map-deep-get</li>
    <li>@function colspan</li>
  </ul>

  <p>Internal mixins:</p>

  <ul>
    <li>processStructure</li>
    <li>processColors</li>
    <li>
      processTypography
      <ul>
        <li>typeStyles</li>
        <li>typeStyle</li>
        <li>typeAttribute</li>
      </ul>
    </li>
    <li>setupGrid</li>
    <li>setupSpacing</li>
    <li>-</li>
    <li>grid-overlay</li>
    <li>setColumn</li>
    <li>setBreakpointColumn</li>
    <li>setStartEndCColumn</li>
    <li>setBreakpointStartEndCColumn</li>
    <li>pushdown</li>
  </ul>

  <p>Internal functions:</p>

  <ul>
    <li>-px-to-rem</li>
    <li>get-breakpoint-directions</li>
    <li>get-media</li>
    <li>process-breakpoints</li>
    <li>get-smallest-breakpoint</li>
    <li>isColorVariable</li>
    <li>get-max</li>
  </ul>
</div>

<?php include 'includes/_footer.php'; ?>
