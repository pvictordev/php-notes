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
    <a class="inline-flex justify-center text-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-md font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"" href=" /notes/create">+ Create a note</a>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>