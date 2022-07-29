<?php $title = 'string-replace'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Replaces item in string with new string (similar to PHP's <code>preg_replace</code>).</p>

  <h2 id="scss-usage">SCSS Usage</h2>

  <code class="mixin">string-replace(<em>$string</em>, <em>$search</em>, <em>$replace</em>)</code>

  <table class="mixin-table">
    <thead>
      <tr>
        <th>Parameter</th>
        <th>Required?</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>$string</code></td>
        <td>Yes</td>
        <td>String to search and replace within</td>
      </tr>
      <tr>
        <td><code>$search</code></td>
        <td>Yes</td>
        <td>Item to replace</td>
      </tr>
      <tr>
        <td><code>$replace</code></td>
        <td>Yes</td>
        <td>What to replace with</td>
      </tr>
    </tbody>
  </table>

  <p>And so, in SCSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.foo::before {
  content: str-replace('foo bar baz', 'baz', 'qux');
}</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.foo::before {
  content: str-replace('foo bar baz', 'baz', 'qux');
}</code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
