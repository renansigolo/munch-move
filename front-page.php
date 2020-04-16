<?php

/**
 * The template for displaying the homepage
 *
 * @package Munch_&_Move
 */

get_header();?>

<div id="front-page">
  <main id="main">

    <section class="container">
      <h1>Headings</h1>
      <h1>Heading - H1</h1>
      <h2>Heading - H2</h2>
      <h3>Heading - H3</h3>
      <h4>Heading - H4</h4>
      <h5>Heading - H5</h5>
      <h6>Heading - H6</h6>
    </section>

    <div class="container">
        <hr />
    </div>

    <section class="container">
      <h1>Buttons</h1> <br />
      <button class="btn-dark-blue">Click me</button> <br />
      <button class="btn-blue">Click me</button> <br />
      <button class="btn-green">Click me</button> <br />
      <button class="btn-orange">Click me</button> <br />
    </section>

    <div class="container">
        <hr />
    </div>

    <section class="container">
    <h1>Lists</h1>

    <div class="row">
    <div class="six columns">
    <h2>Unordered</h2>
        <ul>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
        </ul>
    </div>
    <div class="six columns">
    <h2>Ordered</h2>
        <ol>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
        </ol>
        </div>
    </div>
  


    </section>

  </main>
</div>

<?php get_footer();