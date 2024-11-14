<?php snippet('header') ?>
<main>
  <section>
    <h1><?= $page->text() ?></h1>
    <form>
      <label for="name">Name</label>
      <input type="text" id="name" name="name">
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email">
      
      <label for="message">Message</label>
      <textarea id="message" name="message"></textarea>
      
      <button type="submit">Send</button>
    </form>
  </section>
</main>
<?php snippet('footer') ?>
