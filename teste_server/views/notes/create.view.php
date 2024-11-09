<?php require(__DIR__.'/../partials/head.php') ?>
  <?php require(__DIR__.'/../partials/nav.php') ?>
  <?php require(__DIR__.'/../partials/banner.php') ?>

  <main>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
        <form action="#" method="POST">
        <div class="space-y-12 p-20">
         

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" 
                    >
                    </div>
                    <?php if(isset($errors['title'])) : ?>
                      <p style=" color:red;margin-top:10px;" ><?= $errors['title']?></p>
                    <?php endif; ?>
                </div>
                </div>

                <div class="col-span-full">
                <label for="body" class="block text-sm/6 font-medium text-gray-900">Text</label>
                <div class="mt-2">
                    <textarea id="body" 
                    name="body" 
                    rows="3" 
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" placeholder="Here you can write your note..."
                   
                ><?= $_POST['body'] ?? '' ?></textarea>

                    <?php if(isset($errors['body'])) : ?>
                      <p style=" color:red;margin-top:10px;" ><?= $errors['body']?></p>
                    <?php endif; ?>

                </div>
                </div>

                
            </div>
            </div>

            
            
        <div class="mt-6 flex items-center justify-center gap-x-6 p-10">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
        </form>

  </main>

  <?php require(__DIR__.'/../partials/footer.php') ?>