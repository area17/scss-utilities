<?php $title = 'Placeholder'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Mixin to style placeholder text cross browser.</p>

  <h2 id="scss-usage">SCSS Usage</h2>

  <code class="mixin"><span class="mixin-include">@include</span> placeholder { <em>@content</em> }</code>

  <p>And so, in SCSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">input[type=text] {
  color: #000;

  @include placeholder {
    color: #ccc;
  }
}</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">input[type=text] {
  color: #000;
}
input[type=text]::-webkit-input-placeholder {
  color: #ccc;
}
input[type=text]:-moz-placeholder {
  color: #ccc;
}
input[type=text]::-moz-placeholder {
  color: #ccc;
}
input[type=text]:-ms-input-placeholder {
  color: #ccc;
}</code></pre>
  </figure>
</div>

<?php include 'includes/_footer.php'; ?>
