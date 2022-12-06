<h1><?= $page->title() ?></h1>

<?= beginComponent('menu') ?>
<?= slot('title') ?>Menu<?= endSlot() ?>
<ul>
  <li>
    <?= beginComponent('link', ['url' => '/']) ?>
    <h3>Home</h3>
    <?= endComponent() ?>
  </li>
</ul>
<?= endComponent() ?>