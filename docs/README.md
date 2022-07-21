# AREA 17 SCSS Utilities - Documentation

To view these locally and for local development of plugins and their documentation you will need to install a few dependencies and have an Apache web server running locally.

Firstly, you'll need Node version `v14.15.5`. If you have NVM installed it should have detected the `.nvmrc` file and switched you, if not, we'd recommend you [install NVM](https://github.com/nvm-sh/nvm#installing-and-updating).

And then:

```bash
$ npm install
```

You'll need to make an `.env` with a `PROXY` key set to your local web server. This tells browser-sync which URL to proxy.

```bash
$ cp .env.example .env
```

Open `.env` and update:

```yml
PROXY=scss-utilities.dev
```

Scripts available to run are:

* `npm run sass` - builds and watches the CSS file
* `npm run sync` - sets up a browser sync server
* `npm run dev` - builds and watches the CSS file, sets up a browser sync server

For local development, you'll likely just run:

```bash
$ npm run dev
```

You'll see an output in terminal like:

```bash
[Browsersync] Proxying: http://scss-utilities.dev
[Browsersync] Access URLs:
 -------------------------------------
       Local: http://localhost:3000
    External: http://192.168.0.1:3000
 -------------------------------------
          UI: http://localhost:3001
 UI External: http://localhost:3001
 -------------------------------------
[Browsersync] Watching files...
```

If you open the `Local` url, in this case `http://localhost:3000` in your web browser, you should see the documentation.

## Adding a new utility

Every utility needs documentation, with config options and/or output demonstrated or demos of the output. Adding the documentation for a utility is also a handy way to develop a new utility. Lets say your utility is called `Foo`.

First step is to create a PHP file, with the name of your new utility in the `docs` folder:

```bash
touch docs/Foo.php
```

If you open any of the other utility docs, you'll see the basic structure of:

```PHP
<?php $title = 'TITLE'; ?>
<?php include 'includes/_header.php'; ?>
  <!-- content -->
<?php include 'includes/_footer.php'; ?>
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


