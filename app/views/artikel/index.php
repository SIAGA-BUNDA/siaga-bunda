<body class="bg-[#FCF1E6] pt-[20px] min-h-screen">
    <!-- Navbar -->
    <?php require_once '../app/views/templates/navbar.php'; ?>

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
                <p class="font-bold text-xl md:text-4xl text-[#4D5A32] leading-relaxed">Temukan dukungan dan informasi
                    terpercaya untuk perjalanan kehamilanmu!</p>
                <h1 class="text-5xl font-extrabold text-gray-800">Siaga Bunda</h1>
                <p class="text-xl text-gray-600">Scroll kebawah untuk artikel</p>
            </div>
            <!-- Bagian Gambar dengan Overlay -->
            <div class="w-full lg:w-1/2 flex justify-center ml-auto relative">
                <img src="<?= BASEURL ?>/img/ibuArtikel.png" alt="Literasi Bunda"
                    class="w-full max-w-[500px] h-auto rounded-lg object-cover shadow-lg z-10">
                <!-- Overlay Teks -->

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
            <button onclick="searchArticles()" class="absolute right-[15%] md:right-[26%] top-2.5">
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
            <!-- Artikel 1 -->
            <div class="bg-white p-6 rounded-[35px] flex items-center gap-0 w-full shadow-md">
                <img src="<?= BASEURL ?>/img/gendongBayi.jpeg" alt="Baby Image"
                    class="w-[200px] h-[200px] rounded-l-[35px] object-cover">
                <div class="p-4 w-full">
                    <h3 class="text-2xl font-bold text-gray-800">Cari Tahu Berat Janin 6 Bulan yang Normal</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
            <!-- Artikel 2 -->
            <div class="bg-white p-6 rounded-[35px] flex items-center gap-0 w-full shadow-md">
                <img src="<?= BASEURL ?>/img/gendongBayi.jpeg" alt="Baby Image"
                    class="w-[200px] h-[200px] rounded-l-[35px] object-cover">
                <div class="p-4 w-full">
                    <h3 class="text-2xl font-bold text-gray-800">Panduan Kehamilan Trimester Pertama</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
            <!-- Artikel 3 -->
            <div class="bg-white p-6 rounded-[35px] flex items-center gap-0 w-full shadow-md">
                <img src="<?= BASEURL ?>/img/gendongBayi.jpeg" alt="Baby Image"
                    class="w-[200px] h-[200px] rounded-l-[35px] object-cover">
                <div class="p-4 w-full">
                    <h3 class="text-2xl font-bold text-gray-800">Apa Manfaat Latihan Fisik Selama Kehamilan?</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
        </div>
    </div>
</body>