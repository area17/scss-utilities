<?php $title = 'keyline-full'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Draws a keyline the full viewport width, breaking out of the container width.</p>

  <h2 id="scss-usage">SCSS Usage</h2>

  <code class="mixin"><span class="mixin-include">@include</span> keyline-full(<em>$position:top</em>, <em>$color:var(--border-primary)</em>)</code>

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
        <td><code>$position</code></td>
        <td>No</td>
        <td><code>top</code> or <code>bottom</code>, defaults to <code>top</code></td>
      </tr>
      <tr>
        <td><code>$color</code></td>
        <td>No</td>
        <td>Any CSS color, defaults to <code>var(--border-primary)</code></td>
      </tr>
      <tr>
        <td><code>$width</code></td>
        <td>No</td>
        <td>Any CSS size value, defaults to <code>1px</code></td>
      </tr>
    </tbody>
  </table>

  <p>And so, in SCSS:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">_component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.demo-keyline-full-1 {
  @include keyline-full();
}

.demo-keyline-full-2 {
  @include keyline-full(top, var(--border-tertiary));
}

.demo-keyline-full-3 {
  @include keyline-full(bottom, red);
}

.demo-keyline-full-4 {
  @include keyline-full(top, var(--border-primary), 4px);
}</code></pre>
  </figure>

  <h2 id="output">Output</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">app.css</figcaption>
    <pre class="code-example-code"><code class="language-css">.demo-keyline-full-1 {
  position: relative;
}
.demo-keyline-full-1::before {
  content: "";
  position: absolute;
  z-index: 0;
  left: 50%;
  bottom: 100%;
  width: 100vw;
  margin-left: -50vw;
  border-top: 1px solid var(--border-primary);
  pointer-events: none;
}

.demo-keyline-full-2 {
  position: relative;
}
.demo-keyline-full-2::before {
  content: "";
  position: absolute;
  z-index: 0;
  left: 50%;
  bottom: 100%;
  width: 100vw;
  margin-left: -50vw;
  border-top: 1px solid var(--border-tertiary);
  pointer-events: none;
}

.demo-keyline-full-3 {
  position: relative;
}
.demo-keyline-full-3::before {
  content: "";
  position: absolute;
  z-index: 0;
  left: 50%;
  top: 100%;
  width: 100vw;
  margin-left: -50vw;
  border-top: 1px solid red;
  pointer-events: none;
}

.demo-keyline-full-4 {
  position: relative;
}
.demo-keyline-full-4::before {
  content: "";
  position: absolute;
  z-index: 0;
  left: 50%;
  bottom: 100%;
  width: 100vw;
  margin-left: -50vw;
  border-top: 4px solid var(--border-primary);
  pointer-events: none;
}</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <p>Using the above <code>.demo-keyline-full-x</code> classes above:</p>
</div>

<div class="demo-keyline-full-1 mt-gutter py-gutter">
  <code>.demo-keyline-full-1</code>
</div>

<div class="demo-keyline-full-2 mt-gutter py-gutter">
  <code>.demo-keyline-full-2</code>
</div>

<div class="demo-keyline-full-3 mt-gutter py-gutter">
  <code>.demo-keyline-full-3</code>
</div>

<div class="demo-keyline-full-4 mt-gutter py-gutter">
  <code>.demo-keyline-full-4</code>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="demo-keyline-full-1 mt-gutter py-gutter">
  &lt;code>.demo-keyline-full-1&lt;/code>
&lt;/div>

&lt;div class="demo-keyline-full-2 mt-gutter py-gutter">
  &lt;code>.demo-keyline-full-2&lt;/code>
&lt;/div>

&lt;div class="demo-keyline-full-3 mt-gutter py-gutter">
  &lt;code>.demo-keyline-full-3&lt;/code>
&lt;/div>

&lt;div class="demo-keyline-full-4 mt-gutter py-gutter">
  &lt;code>.demo-keyline-full-4&lt;/code>
&lt;/div></code></pre>
    </figure>
</div>

<?php include 'includes/_footer.php'; ?>
