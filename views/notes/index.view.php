<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note) : ?>
      <ul class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
        <li class="p-6 bg-white border-b border-gray-200">
          <a href="note?id=<?= $note["id"] ?>" class="text-2xl font-bold mb-2">
            <?= htmlspecialchars($note["body"]) ?>
          </a>
        </li>
      </ul>
    <?php endforeach; ?>
    <a class="mt-6 text-blue-900 font-bold text-2xl" href="/notes/create">Create a note</a>
  </div>
</main>

<?php require('views/partials/footer.php'); ?>