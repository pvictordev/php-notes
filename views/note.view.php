<?php require('partials/head.php'); ?>  

  <?php require('partials/nav.php'); ?>

  <?php require('partials/banner.php'); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a class="text-blue-900 text-2xl font-bold" href="/notes"> ← Go Back</a>
        <div class="p-6 mt-6 bg-white border-b border-gray-200">
            <p class="text-2xl font-bold mb-2"> <?= $note["body"] ?></p>
        </div>
    </div>
  </main>

<?php require('partials/footer.php'); ?>