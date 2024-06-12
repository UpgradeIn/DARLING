<?= $this->extend('layouts/template') ?>

<?= $this->section('page_title') ?>
    Learning Path Page | Damri Course
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="w-full mx-auto px-5 mt-12 py-8 sm:px-20 sm:py-10 sm:mt-20">
    <div class="flex flex-col sm:flex-row justify-between items-center w-full mx-auto text-3xl font-bold space-y-4 sm:space-y-0">
        <h1 class="w-full sm:w-auto text-center sm:text-left">Daftar Learning Path</h1>
        <div class="w-full sm:w-1/4">
            <label for="icon" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                    <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </div>
                <input type="text" id="searchInput" name="icon" class="py-2 px-4 ps-11 block w-full bg-transparent border-gray-300 shadow-sm rounded-lg text-sm text-gray-700 focus:z-10 focus:border-gray-900 focus:ring-gray-600 placeholder:text-gray-500 dark:border-neutral-700 dark:text-neutral-500 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Cari Learning Path" onkeyup="filterCards()">
            </div>
        </div>
    </div>
    <!-- Card Learning Path -->
    <div class="h-full mt-4 bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div id="cardContainer" class="p-4 md:p-6 grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
            <?php foreach ($data_learning_path as $learning_path) : ?>        
            <a class="group flex flex-row bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800" href="<?= base_url('learning-path/').$learning_path['slug'] ?>" data-title="Akuntansi">
                <img src="<?= base_url('images-thumbnail/').$learning_path['thumbnail'] ?>" alt="Deskripsi Gambar" class="w-1/4 object-cover rounded-l-xl" />
                <div class="p-4 md:p-5 w-3/4">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl group-hover:text-xl text-black font-semibold text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                <?= $learning_path['name'] ?>
                            </h3>
                            <p class="text-sm dark:text-neutral-500" style="display: flex; align-items: center;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="margin-right: 4px;">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                                </svg>
                                12 Courses
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
            
            <!-- hapus data dummy -->
            
        </div>
    </div>
    <!-- End Card Learning Path -->
</section>

<script>
    function filterCards() {
  var input, filter, cardContainer, cards, title, i;
  input = document.getElementById("searchInput");
  filter = input.value.toLowerCase();
  cardContainer = document.getElementById("cardContainer");
  cards = cardContainer.getElementsByTagName("a");

  for (i = 0; i < cards.length; i++) {
    title = cards[i].getAttribute("data-title");
    if (title.toLowerCase().indexOf(filter) > -1) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}
</script>

<?= $this->endSection() ?>