<?php $title = 'DevTools'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>This plugin creates a tool for the bottom left of your screen which reveals the current breakpoint, <code>APP_ENV</code> and a grid column overlay with toggle.</p>

  <h2 id="setup">Setup</h2>

  <p>The required <code>$structure</code> map (<a href="/Setup.php">Setup</a>). And the following HTML:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="dev-tools" data-env="local">
&lt;button class="dev-tools-toggle" onClick="this.nextElementSibling.hidden = !this.nextElementSibling.hidden;">&lt;/button>
&lt;div class="dev-tools-grid" hidden>&lt;/div>
&lt;/div></code></pre>
  </figure>

  <h2 id="notes">Notes</h2>

  <p>Why have the <code>data-env</code> attribute? We'd recommend you integrate this because its too easy to get confused between your local environment, staging environment, and QA environment and this label helps. For production you'll want to not include the DevTools markup.</p>
</div>

<?php include 'includes/_footer.php'; ?>
