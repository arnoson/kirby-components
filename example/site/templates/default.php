<h1><?= $page->title() ?></h1>

<?php beginComponent('menu'); ?>
<?php slot('title'); ?>Menu<?= endSlot() ?>
<ul>
  <li>
    <?php beginComponent('link', ['url' => '/']); ?>
    <h3>Home</h3>
    <?php endComponent(); ?>
  </li>
</ul>
<?php endComponent(); ?>