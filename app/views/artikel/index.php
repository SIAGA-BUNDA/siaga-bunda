<body class="bg-[#FCF1E6] pt-[20px] min-h-screen">
    <!-- Navbar -->
    <?php require_once('../app/views/templates/' . (isset($_SESSION['user']) ? 'navbar.php' : 'navbarUser.php')) ?>

    <!-- Hero Section -->
    <div class="lg:mx-8 sm:mx-6 p-4 sm:p-6 lg:px-8 rounded-[35px] rounded-tr-none bg-white mb-10">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <!-- Bagian Teks dan Logo -->
            <div class="w-full lg:w-1/2 text-center lg:text-left space-y-4">
                <!-- Logo -->
                <div class="flex justify-center lg:justify-start mb-10">
                    <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-40 h-40 object-contain">
                </div>
                <!-- Teks -->
                <p class="font-bold text-xl md:text-4xl ext-gray-500 leading-relaxed">Temukan dukungan dan informasi
                    terpercaya untuk perjalanan kehamilanmu!</p>
                <h1 class="text-5xl font-extrabold text-gray-800">Siaga Bunda</h1>
                <p class="text-xl text-gray-600">Scroll kebawah untuk artikel</p>
            </div>
            <!-- Bagian Gambar dengan Overlay -->
            <div class="w-full lg:w-1/2 flex justify-center ml-auto relative">
                <img src="<?= BASEURL ?>/img/ibuArtikel.png" alt="Literasi Bunda"
                    class="w-full max-w-[500px] h-auto rounded-lg object-cover shadow-lg z-10">
            </div>
        </div>
    </div>


    <!-- Artikel Section -->
    <div class="container mx-auto px-4 md:px-10 max-w-5xl pb-16">
        <h2 class="text-center text-3xl font-bold text-gray-700 mb-4">Literasi Bunda</h2>
        <!-- Input Search dengan Ikon Kaca Pembesar -->
        <div class="flex justify-end mb-6 relative">
            <input type="text" id="searchInput" placeholder="Cari Artikel"
                class="w-full md:w-1/2 border rounded-full py-2 px-6 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#D4988B]">
            <button onclick="searchArticles()" class="absolute right-1 md:right-[2%] top-2.5">
                <i class="fa-solid fa-magnifying-glass text-gray-500"></i>
            </button>
        </div>

        <script>
            function searchArticles() {
                let input = document.getElementById("searchInput").value.toLowerCase();
                let articles = document.querySelectorAll("#articleList > div");

                articles.forEach(article => {
                    let title = article.querySelector("h3").innerText.toLowerCase();
                    let content = article.querySelector("p").innerText.toLowerCase();

                    if (title.includes(input) || content.includes(input)) {
                        article.style.display = "flex"; // Tampilkan jika cocok
                    } else {
                        article.style.display = "none"; // Sembunyikan jika tidak cocok
                    }
                });
            }
        </script>

        <!-- Daftar Artikel -->
        <div class="space-y-6" id="articleList">
            <?php foreach ($data['articles'] as $key => $artikel) { ?>
                <div class="bg-white p-6 rounded-[35px] flex flex-col xl:!flex-row items-center gap-0 w-full shadow-md">
                    <img src="<?= BASEURL . $artikel['PATH'] ?>" alt="Baby Image"
                        class=" xl:!w-[200px] xl:min-h-[14rem] max-h-[16rem] aspect-video rounded-lg object-cover">
                    <div class="px-4 w-full flex flex-col space-y-5">
                        <h3 class="text-2xl font-bold text-gray-800"><?= $artikel['JUDUL_ARTIKEL'] ?></h3>
                        <p class="text-lg text-justify">
                            <?= substr(strip_tags($data['contents'][count($data['contents']) - 1 - $key]), 0, 600) ?>....
                        </p>
                        <a class="flex justify-end items-center group hover:cursor-pointer"
                            href="<?= BASEURL . 'artikel/' . base64_encode($artikel['ARTIKEL_ID']) ?> ">
                            <p class="underline">Selengkapnya</p>
                            <svg width="28" height="16" viewBox="0 0 28 16" fill="none"
                                class="mt-1 ml-2 group-hover:translate-x-2 duration-700" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.7071 8.70711C28.0976 8.31658 28.0976 7.68342 27.7071 7.29289L21.3431 0.928932C20.9526 0.538408 20.3195 0.538408 19.9289 0.928932C19.5384 1.31946 19.5384 1.95262 19.9289 2.34315L25.5858 8L19.9289 13.6569C19.5384 14.0474 19.5384 14.6805 19.9289 15.0711C20.3195 15.4616 20.9526 15.4616 21.3431 15.0711L27.7071 8.70711ZM0 9L27 9V7L0 7L0 9Z"
                                    fill="#2B3440" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>