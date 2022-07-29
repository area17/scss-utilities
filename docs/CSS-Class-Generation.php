<?php $title = 'CSS Class Generation'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <p>The following utilities output large amounts CSS classes for you to use within your HTML:</p>

  <ul>
      <li><a href="/Colspan.php">Colspan</a></li>
      <li><a href="/Grid-Columns.php">Grid Columns</a></li>
      <li><a href="/Spacing.php">Spacing</a></li>
      <li><a href="/Typography.php">Typography</a></li>
      <li><a href="/Color.php">Color</a>
      <li><a href="/DevTools.php">DevTools</a>
  </ul>

  <p>Each of these classes has a either a <code>%placeholder</code>, <code>@mixin</code> and/or <code>@function</code> to also use within your SCSS.</p>

  <p>If you would prefer not to generate the CSS classes, you can switch off various features by making a <code>$a17-scss-generate</code> map:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">application.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ include setup tokens

@import '_tokens';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ include A17 SCSS Utilities

$a17-scss-generate: (
  colspan: false,
  grid: false,
  color: false,
  spacing: false,
  typography: false,
  devtools: false,
);
@import '~@area17/scss-utilities/a17-scss-utilities';

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ include site css

@import 'mixins/_your-mixin';</code></pre>
  </figure>

  <p>The values for each can be <code>true</code> or <code>false</code> as required, where the default is <code>true.</code></p>
</div>

<?php include 'includes/_footer.php'; ?>
