<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>

  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <a class="text-blue-900 text-2xl font-bold" href="/notes"> 🠔 Go Back</a>

    <div class="p-6 my-6 bg-white border-b border-gray-200">
      <p class="text-2xl font-bold mb-2"> <?= htmlspecialchars($note["body"]) ?></p>
    </div>

    <div class="actions flex gap-x-4">

      <a href="/note/edit?id=<?= $note["id"] ?>" class="inline-flex justify-center text-center rounded-md border border-transparent bg-gray-600 py-2 px-4 text-md font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Edit</a>

      <form method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="<?= $note['id'] ?>">
        <button class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-md font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
      </form>

    </div>

  </div>

</main>

<?php require base_path('views/partials/footer.php'); ?>