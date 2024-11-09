<?php require(__DIR__.'/../partials/head.php') ?>
  
  <?php require(__DIR__.'/../partials/nav.php') ?>
    

  <?php require(__DIR__.'/../partials/banner.php') ?>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
          <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?=$note['id']?>">
                    <?= htmlspecialchars($note['text']) ?>
                </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <p>
          <a href="/notes/create" class="text-blue-500">Create Note</a>
        </p>
      </div>
    </main>

  <?php require(__DIR__.'/../partials/footer.php') ?>