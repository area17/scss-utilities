# AREA 17 SCSS Utilities - Documentation

The documentation is made using [Jekyll](https://jekyllrb.com/) to compile [Liquid](https://shopify.github.io/liquid/) templates.

To view these in a browser, visit [area17.github.io/scss-utilities/](https://area17.github.io/scss-utilities/).

To view these locally and for local development of plugins and their documentation you will need to install a few dependencies. See [docs.github.com - building-your-site-locally](https://docs.github.com/en/pages/setting-up-a-github-pages-site-with-jekyll/testing-your-github-pages-site-locally-with-jekyll#building-your-site-locally)

Once everything is installed, `cd` into the `docs` folder and run:

```bash
$ bundle install
$ bundle exec jekyll serve
```

The site should now be available in a browser at http://localhost:4000

And then open a new terminal tab, `cd` to the root of the project and run:

```bash
$ npm install
$ npm run dev
```

The site should now be available in a browser at http://localhost:3000 with browser-sync live reloading.

Scripts available to run are:

* `npm run sass` - builds and watches the CSS file
* `npm run sync` - sets up a browser sync server
* `npm run dev` - builds and watches the CSS file, sets up a browser sync server

## Adding a new utility

Every utility needs documentation, with config options and/or output demonstrated or demos of the output. Adding the documentation for a utility is also a handy way to develop a new utility. Lets say your utility is called `Foo`.

First step is to create a HTML file, with the name of your new utility in the `docs` folder:

```bash
touch docs/Foo.html
```

If you open any of the other utility docs, you'll see the basic structure of:

```HTML
---
title: TITLE
---
{% include_relative includes/_header.html %}
  <!-- content -->
{% include_relative includes/_footer.html %}
```

The content is made up of `<div class="copy">...</div>` blocks and in between any demonstration HTML needed. `.copy` blocks have styles for `h2` to `h4`, paragraphs, lists, nested lists, code, links and HR's. You'll see the structure of them is easy to replicate.

Code example blocks are inserted like:

```HTML
  <figure class="code-example">
    <figcaption class="code-example-filename">component.scss</figcaption>
    <pre class="code-example-code"><code class="language-scss">.foo {
  display: block;
}</code></pre>
  </figure>
```

Too add your work-in-progress utility, you'll want to add `mixin` file for your utility to the root `mixins` folder with the name of your utility:

```bash
touch mixins/_foo.scss
```

And then open `./_a17-scss-utilities.scss` and import your utility:

```SCSS
@import 'mixins/foo';
```

Make your utility, write the documentation and submit a pull request to the main for it.

Please send coherent history - make sure each individual commit in your pull request is meaningful. If you had to make a lot of intermediate commits while developing, please [squash them](http://www.git-scm.com/book/en/v2/Git-Tools-Rewriting-History#Changing-Multiple-Commit-Messages) before submitting.


