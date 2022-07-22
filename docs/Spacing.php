<?php $title = 'Spacing'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>A series of utilities for responsive spacing and gutter spacing, covering <code>margin</code>, <code>padding</code>, <code>top/left/right/bottom</code>, <code>inset/inset-x/inset-y</code> and <code>gap/row-gap/column-gap</code>.</p>

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
);</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <h3 id="responsive">Responsive spacing group classes</h2>

  <p>Responsive spacing classes, for each of the responsive spacing groups. For <code>$outer-1</code>:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_tokens.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">$spacing: (
  outer-1: (
    xs: 64px,
    lg: 96px
  ),
);</code></pre>
</figure>

  <p>First we would get <code>:root</code> variables:</p>

  <figure class="code-example">
  <figcaption class="code-example-filename">app.css</figcaption>
  <pre class="code-example-code"><code class="language-css">:root {
  --SPACING_VARs: "at this breakpoint ↓";
  --spacing-outer-1: 4rem;
}

@media screen and (min-width: 544px) {
  :root {
    --SPACING_VARs: "at this breakpoint ↓";
    --spacing-outer-1: 4rem;
  }
}
@media screen and (min-width: 650px) {
  :root {
    --SPACING_VARs: "at this breakpoint ↓";
    --spacing-outer-1: 4rem;
  }
}
@media screen and (min-width: 990px) {
  :root {
    --SPACING_VARs: "at this breakpoint ↓";
    --spacing-outer-1: 6rem;
  }
}
@media screen and (min-width: 1300px) {
  :root {
    --SPACING_VARs: "at this breakpoint ↓";
    --spacing-outer-1: 6rem;
  }
}
@media screen and (min-width: 1520px) {
  :root {
    --SPACING_VARs: "at this breakpoint ↓";
    --spacing-outer-1: 6rem;
  }
}</code></pre>
  </figure>

  <p>Then the corresponding placeholder and CSS classes:</p>

  <?php
    $spacingArrPositive = [
      'mt' => ['margin-top'],
      'mb' => ['margin-bottom'],
      'ml' => ['margin-left'],
      'mr' => ['margin-right'],
      'm' => ['margin'],
      'mx' => ['margin-right', 'margin-left'],
      'my' => ['margin-top', 'margin-bottom'],
      'pt' => ['padding-top'],
      'pb' => ['padding-bottom'],
      'pl' => ['padding-left'],
      'pr' => ['padding-right'],
      'p' => ['padding'],
      'px' => ['padding-right', 'padding-left'],
      'py' => ['padding-top', 'padding-bottom'],
      'top' => ['top'],
      'bottom' => ['bottom'],
      'left' => ['left'],
      'right' => ['right'],
      'inset' => ['inset'],
      'inset-x' => ['inset-x'],
      'inset-y' => ['inset-y'],
      'gap' => ['gap'],
      'gap-x' => ['column-gap'],
      'gap-y' => ['row-gap'],
    ];
    $spacingArrNegative = [
      'mt' => ['margin-top'],
      'mb' => ['margin-bottom'],
      'ml' => ['margin-left'],
      'mr' => ['margin-right'],
      'm' => ['margin'],
      'mx' => ['margin-right', 'margin-left'],
      'my' => ['margin-top', 'margin-bottom'],
      'top' => ['top'],
      'bottom' => ['bottom'],
      'left' => ['left'],
      'right' => ['right'],
      'inset' => ['inset'],
      'inset-x' => ['inset-x'],
      'inset-y' => ['inset-y'],
    ];
  ?>

  <table class="props-table">
    <thead>
      <tr>
        <th>SCSS Placeholder</th>
        <th>CSS Class</th>
        <th>Properties</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($spacingArrPositive as $class => $props) {
          echo '<tr>';
          echo '  <td class="text-secondary">%'.$class.'-outer-1</td>';
          echo '  <td>.'.$class.'-outer-1</td>';
          $propsStr = '';
          foreach ($props as $attr) {
            if ($propsStr !== '') {
              $propsStr = $propsStr.' <br>';
            }
            $propsStr = $propsStr.$attr.': var(--spacing-outer-1)';
          }
          echo '  <td class="text-secondary">'.$propsStr.'</td>';
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>

  <p>And negative classes where applicable:</p>

  <table class="props-table">
    <thead>
      <tr>
        <th>SCSS Placeholder</th>
        <th>CSS Class</th>
        <th>Properties</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($spacingArrNegative as $class => $props) {
          echo '<tr>';
          echo '  <td class="text-secondary">%-'.$class.'-outer-1</td>';
          echo '  <td>.-'.$class.'-outer-1</td>';
          $propsStr = '';
          foreach ($props as $attr) {
            if ($propsStr !== '') {
              $propsStr = $propsStr.' <br>';
            }
            $propsStr = $propsStr.$attr.': calc(var(--spacing-outer-1) * -1)';
          }
          echo '  <td class="text-secondary">'.$propsStr.'</td>';
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>

  <p>As each of these points to a CSS variable and so you can override per element if required.</p>

  <h3 id="gutters">Gutter spacing classes</h2>

  <p>Also generated are utility placeholders and CSS classes for inner gutter and outer gutters:</p>

  <?php
    $gutters = [
      'gutter' => 'var(--inner-gutter)',
      'outer-gutter' => 'var(--outer-gutter)'
    ];
  ?>

  <table class="props-table">
    <thead>
      <tr>
        <th>SCSS Placeholder</th>
        <th>CSS Class</th>
        <th>Properties</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($gutters as $prop => $cssVariable) {
          foreach ($spacingArrPositive as $class => $props) {
            echo '<tr>';
            echo '  <td class="text-secondary">%'.$class.'-'.$prop.'</td>';
            echo '  <td>.'.$class.'-'.$prop.'</td>';
            $propsStr = '';
            foreach ($props as $attr) {
              if ($propsStr !== '') {
                $propsStr = $propsStr.' <br>';
              }
              $propsStr = $propsStr.$attr.': '.$cssVariable;
            }
            echo '  <td class="text-secondary">'.$propsStr.'</td>';
            echo '</tr>';
          }
          foreach ($spacingArrNegative as $class => $props) {
            echo '<tr>';
            echo '  <td class="text-secondary">%-'.$class.'-'.$prop.'</td>';
            echo '  <td>.-'.$class.'-'.$prop.'</td>';
            $propsStr = '';
            foreach ($props as $attr) {
              if ($propsStr !== '') {
                $propsStr = $propsStr.' <br>';
              }
              $propsStr = $propsStr.$attr.': calc('.$cssVariable.' * -1)';
            }
            echo '  <td class="text-secondary">'.$propsStr.'</td>';
            echo '</tr>';
          }
        }
      ?>
    </tbody>
  </table>

  <h2 id="demo">Demo</h2>

  <p>The following "box" has responsive spacing margin and internal padding classes, if you resize your browser you'll see the spacing alters.</p>
</div>

<div class="mt-outer-1 p-inner-1 bg-accent">
  <div class="p-inner-2 bg-primary">
    <p>box</p>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="mt-outer-1 p-inner-1 bg-accent">
  &lt;div class="p-inner-2 bg-primary">
    &lt;p>box&lt;/p>
  &lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>Gutter classes can be used to insert gutter sized spacing:</p>
</div>

<div class="py-inner-2 bg-accent" style="display: flex; flex-flow: row nowrap; margin-top: 20px;">
  <div class="colspan-1 mr-gutter bg-primary" style="padding: 5px;">
    <p>box</p>
  </div>
  <div class="bg-primary" style="padding: 5px;">
    <p>box</p>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="py-inner-2 bg-accent" style="display: flex; flex-flow: row nowrap;">
  &lt;div class="colspan-1 mr-gutter bg-primary" style="padding: 5px;">
    &lt;p>box&lt;/p>
  &lt;/div>
  &lt;div class="bg-primary" style="padding: 5px;">
    &lt;p>box&lt;/p>
  &lt;/div>
&lt;/div>
</code></pre>
  </figure>

  <h2 id="notes">Notes</h2>

  <p>As you can see, this generates <strong>a lot</strong> of classes - you will want to purge your CSS of unused classes to remove any of these that you don't use.</p>
</div>

<?php include 'includes/_footer.php'; ?>
