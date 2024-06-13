<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
Course Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto px-5 pt-12 mt-12 sm:px-20 sm:mt-24">
  <?php if (session()->has('errors')): ?>
        <div class="mt-2 text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg">
            <?php $errors = session('errors'); echo esc(array_shift($errors))?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('msg')):?>
            <div class="mt-2 text-sm text-center text-green-800 bg-green-200 py-2 rounded-lg">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>
    <?php if(session()->getFlashdata('msg-failed')):?>
            <div class="mt-2 text-sm text-center text-red-800 bg-red-200 py-2 rounded-lg">
                <?= session()->getFlashdata('msg-failed') ?>
            </div>
    <?php endif;?>
  <div class="w-full">
    <div class="w-full grid grid-cols-1 lg:grid-cols-12 lg:gap-5">
      <div class="lg:col-span-3">
        <div class="aspect-w-10 aspect-h-10 lg:aspect-none">
          <img class="w-full h-100 object-cover shadow-md rounded-xl" src="<?= base_url('images-thumbnail/') . $learning_path['thumbnail'] ?>" alt="Image Description" />
        </div>
      </div>
      <div class="col-span-9 flex flex-col justify-between h-full py-5">
        <div>
          <div class="space-y-3">
            <div class="flex justify-between items-center">
              <h1 class="text-2xl font-bold text-gray-800 md:text-3xl lg:text-4xl"><?= $learning_path['name'] ?></h1>
              <?php if ($status == 'pending') : ?>
                <span class="px-3 py-1 text-sm font-semibold text-yellow-800 bg-yellow-200 rounded-md">Pending</span>
              <?php elseif ($status == 'approved') : ?>
                <span class="px-3 py-1 text-sm font-semibold text-green-800 bg-green-200 rounded-md">Approved</span>
              <?php elseif ($status == 'rejected') : ?>
                <span class="px-3 py-1 text-sm font-semibold text-red-800 bg-red-200 rounded-md">Rejected</span>
              <?php else : ?>
                <button class="py-2 px-3 text-sm font-semibold text-gray-800 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all dark:bg-green-500 dark:hover:bg-blue-500 dark:focus:ring-blue-500" data-hs-overlay="#hs-ajukan-learning-path">
                  Ajukan
                </button>
              <?php endif; ?>
            </div>
            <p class="text-md text-gray-600 md:text-lg lg:text-lg dark:text-neutral-400">
              <?= $learning_path['description'] ?>
            </p>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-2 shadow-md rounded-lg p-4 mt-5 lg:grid-cols-4">
          <div class="text-start lg:border-r lg:border-gray-200 lg:text-center">
            <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Kode Learning Path</p>
            <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">1214054</p>
          </div>
          <div class="text-start lg:border-r lg:border-gray-200 lg:text-center">
            <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Jumlah Materi</p>
            <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">10</p>
          </div>
          <div class="text-start lg:border-r lg:border-gray-200 lg:text-center">
            <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Tanggal Publish</p>
            <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">07/06/24</p>
          </div>
          <div class="text-start lg:text-center">
            <p class="text-md text-gray-400 md:text-lg lg:text-lg dark:text-neutral-400">Divisi</p>
            <p class="text-md text-gray-800 md:text-lg lg:text-lg dark:text-neutral-400">Finance</p>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full h-[1px] my-10 bg-gray-500"></div>
  </div>
</section>
<!-- End Deskripsi -->
<!-- Modal Ajukan Learning Path -->
<div id="hs-ajukan-learning-path" class="hs-overlay hidden fixed inset-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
  <div class="flex justify-center items-center hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
    <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70 w-full">
    <form action="<?= base_url('request-learning-path/').$learning_path['slug'] ?>" method="POST">
      <div class="p-4 overflow-y-auto">
        <div class="sm:divide-y divide-gray-200 dark:divide-neutral-700">
          <div class="py-3 sm:py-6">
            <!-- Form Header -->
            <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
              <div class="border-b-2 py-5 border-gray-500">
                <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">Ajukan Learning Path</h2>
              </div>
              <!-- Form Body -->
              <div class="py-5">
                
                  <div class="grid gap-4 lg:gap-6 lg:grid-cols-1">
                    <div class="col-span-3 space-y-4">
                      <!-- Pesan -->
                      <div>
                        <label for="message" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Isi Pesan Pengajuan Learning Path</label>
                        <textarea id="message" placeholder="masukan pesan learning path" name="message" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                      </div>
                      <!-- End Pesan -->
                    </div>
                  </div>
                
              </div>
              <!-- End Form Body -->
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-ajukan-learning-path">
          Batal
        </button>
        <button class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Ajukan
        </button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- End Modal Ajukan Learning Path -->
<!-- Daftar Course -->
<section class="w-full mx-auto pb-8 px-5 sm:px-20 sm:pb-10">
  <div class="w-full mx-auto text-3xl font-bold">
    <h1>Daftar Course</h1>
  </div>

  <div class="w-full mx-auto mt-8">
  </div>
  <!-- Card Course -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 py-4 mx-auto mt-4">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Card -->
      <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
        <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
          <img src="https://img.freepik.com/free-photo/leader-authority-boss-coach-director-manager-concept_53876-133859.jpg?t=st=1717953192~exp=1717956792~hmac=4dd5765ea65682eedc1c253d21d25a05e86a8d1d01f85b03b61d1073303b46a5&w=900" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail" />
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Kepemimpinan</h3>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
        <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
          <img src="https://img.freepik.com/free-photo/young-network-engineer-working-server-room_23-2148323441.jpg?t=st=1717953355~exp=1717956955~hmac=61ff9810b79c17ca50af24472750ed57cc66c18bccc3fc842b8c287267047f9b&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail" />
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Public Speaking</h3>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
        <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
          <img src="https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1399.jpg?t=st=1717957554~exp=1717961154~hmac=69ffad48e03964d64fdbef5e119fdba050d0c94a55900b8eaa843b01de675368&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail" />
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Tableau</h3>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
        </div>
      </a>
      <!-- End Card -->
      <!-- Card -->
      <a class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70" href="#">
        <div class="h-52 flex flex-col justify-center items-center bg-amber-500 rounded-t-xl">
          <img src="https://img.freepik.com/free-photo/business-man-working-office-desktop_23-2148194708.jpg?t=st=1717957498~exp=1717961098~hmac=2ce5120caaadfccbb9db0d7f1510f5af9fef71a7739c8b0b4df7cb5bd0710c44&w=996" class="rounded-t-lg h-full w-full object-cover" alt="Thumbnail" />
        </div>
        <div class="p-4 md:p-6">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">Audit Keuangan</h3>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-users"></i> 1196 Peserta</p>
          <p class="mt-3 text-gray-500 dark:text-neutral-500"><i class="fas fa-video"></i> 10 Video</p>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Course -->
  </div>
</section>
<!-- End Daftar Course -->
<?= $this->endSection() ?>