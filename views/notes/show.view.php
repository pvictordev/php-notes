<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <a class="text-blue-900 text-2xl font-bold" href="/notes"> ← Go Back</a>
    <div class="p-6 mt-6 bg-white border-b border-gray-200">
      <p class="text-2xl font-bold mb-2"> <?= htmlspecialchars($note["body"]) ?></p>
    </div>
    <form class="mt-6" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="<?= $note['id'] ?>">
      <button class="text-red-500 font-bold text-xl">Delete</button>
    </form>
  </div>

</main>

<?php require base_path('views/partials/footer.php'); ?>