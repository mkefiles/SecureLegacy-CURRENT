# SecureLegacy (CURRENT)

This is our current SecureLegacy website and it can be seen by [clicking here](https://www.securelegacyins.com/).

In this most recent build, I added on our abilities to do Worksite Insurance as well as Disability Income Insurance on top of Life Insurance, which we have been offering for quite some time.

## Technology

For this version, I wanted to try something different. Not only did I use SASS/CSS, which is absolutely awesome... I also used PHP in more of a modular sense. What do I mean by that?

So in lieu of using the typical `<main>`, `<section>`, etc. HTML tags, I decided to create my own (almost like Web Components without the JavaScript overhead on that). So, as an example, this is the "about" section HTML:

```html
<sl-about id="about">
  <h2>About Us</h2>
    <figure>
      <img src="/assets/img--the_family__small.jpg" alt="The Files' family">
      <figcaption>Mike and Alyssa (husband and wife) with their <em>daughter</em> Daisy.</figcaption>
    </figure>
    <p>SecureLegacy is <b>not</b> some massive company where you are just another number! SecureLegacy is just another family like yours.<br><br>The phrase "protecting what matters most" is not just another cheesy slogan. Nope. In fact, it is what we aim to do for your family or employees as we have both seen what it is like for a family-member to struggle financially. Finances should <b>never</b> be a concern during a time of pain or grieving and that is where we come in to help!</p>
</sl-about>
```

By mixing PHP (for the *includes*), the HTML tag-naming convention and SASS (to style in an entirely nested fashion), I was able to make a *modular* site where I could take the *module* and add it anywhere else in the website, hook up the CSS and move along.
