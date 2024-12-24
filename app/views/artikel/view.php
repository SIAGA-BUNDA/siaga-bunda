<body class="bg-[#FCF1E6] pt-[20px] min-h-screen">
    <!-- Navbar -->
    <?php require_once('../app/views/templates/' . (isset($_SESSION['user']) ? 'navbar.php' : 'navbarUser.php')) ?>
    <div class="mx-4 sm:mx-6 lg:!mx-8   p-6 sm:p-6 lg:!px-[20rem] rounded-[35px] md:rounded-tr-none bg-white">
        <h1 class="text-3xl font-bold text-gray-800 mb-4 xl:mt-5">
            <?= $data['article']['JUDUL_ARTIKEL'] ?>
        </h1>
        <p class="text-gray-600 text-sm mb-6">Penulis: <?= $data['article']['NAMA'] ?> ·
            <?= $data['article']['WAKTU'] ?></p>
        <!-- Gambar -->
        <div class="aspect-video max-h-[20rem] md:max-h-[450px] xl:max-w-full mb-8">
            <img src="<?= BASEURL . $data['article']['PATH'] ?>" alt="Gambar bayi"
                class="rounded object-cover w-full h-full" />
        </div>
        <!-- Konten -->
        <div class="w-full md:w-2/3 text-gray-700 text-justify">
            <?= $data['article']['ISI_ARTIKEL'] ?>
        </div>

    </div>
</body>