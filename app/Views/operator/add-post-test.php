<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Add Post Test | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="w-full min-h-screen mx-auto px-5 mt-12 pb-8 sm:px-20 sm:mt-24 sm:pb-10">
    <?php if (session()->has('errors')) : ?>
    <div class="text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg">
      <?php $errors = session('errors');
      echo esc(array_shift($errors)) ?>
    </div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('msg')) : ?>
    <div class="mt-2 text-sm text-center text-green-800 bg-green-200 py-2 rounded-lg">
      <?= session()->getFlashdata('msg') ?>
    </div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('msg-failed')) : ?>
    <div class="mt-2 text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg">
      <?= session()->getFlashdata('msg-failed') ?>
    </div>
  <?php endif; ?>
      <div class="pb-5">
        <h1
          class="text-xl font-semibold text-gray-800 md-text-xl lg:text-2xl dark:text-neutral-200"
        >
          Tambah Post-Test
        </h1>

        <p
          class="text-sm text-gray-400 md:text-md lg:text-md dark:text-neutral-400"
        >
          Tambahkan soal-soal post-test yang akan dikerjakan oleh peserta
        </p>
      </div>
      <div class="bg-gray-50 p-5 rounded-lg shadow-md">
        <div id="question-container" class="space-y-4">
          <!-- Question -->
        </div>

        <div class="flex justify-end space-x-2 pt-5">
          <button
            onclick="addQuestion()"
            class="py-2 px-3 text-sm font-semibold text-gray-800 bg-blue-400 rounded-md shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all dark:bg-blue-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
          >
            Tambah Soal
          </button>
          <form action="<?= base_url('create-subcourses'); ?>" method="POST" enctype="multipart/form-data" onsubmit="prepareFormData(event, 'post_test')">
            <?= csrf_field(); ?>
            <input type="hidden" name="type" value="test">
            <input type="hidden" name="course_id" value="<?= $course_id; ?>">
            <input type="hidden" name="sequence" value="<?= (count($subcourses_sequence)===0?2:count($subcourses_sequence)+1)?>">
            <input type="hidden" id="content" name="content">

            <button
            type="submit"
            class="py-2 px-3 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500">
              Simpan Post-Test
            </button>
          </form>
          <!-- <button
            onclick="saveMaterialsTest()"
            class="py-2 px-3 text-sm font-semibold text-gray-800 bg-green-400 rounded-md shadow-sm hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500"
          >
            Simpan Post-Test
          </button> -->
        </div>
      </div>
    </section>
<?= $this->endSection() ?>