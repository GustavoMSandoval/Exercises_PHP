<?php require(__DIR__.'/../partials/head.php') ?>
  
  <?php require(__DIR__.'/../partials/nav.php') ?>
    

  <?php require(__DIR__.'/../partials/banner.php') ?>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p><?= $note['text'] ?></p>
            <p class="mt-6"><a href="/notes">go back</a></p>
      </div>
    </main>

  <?php require(__DIR__.'/../partials/footer.php') ?>