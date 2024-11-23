<html class="scroll-smooth">
<body class="bg-[#C1CFA1] flex items-center justify-center pt-[69px] pb-[69px] min-h-screen scroll-smooth">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">


        <div class="flex items-left justify-left gap-[310px]"> 
        <button onclick="window.location.href='<?= BASEURL ?>skrinning'" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md">
            Kembali
        </button>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-[#4D5A32] mb-4">Tes Prenatal yang Komprehensif</h1>
        </div>
        <p class="text-lg font-semibold text-gray-500 text-center mb-6">Minggu 34~36</p>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu3436" method="post">
            <!-- Buttons -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <button type="submit" name="section" value="liver" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold flex-grow">
                    Fungsi Liver
                </button>
                <button type="submit" name="section" value="sipilis" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold flex-grow">
                    Sipilis
                </button>
                <button type="submit" name="section" value="rontgen" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold flex-grow">
                    Rontgen Dada
                </button>
                <button type="submit" name="section" value="std" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold flex-grow">
                    Sexually Transmitted Diseases (STD)
                </button>
                <button type="submit" name="section" value="gbs" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold flex-grow">
                    Guillain Barre Syndrome (GBS)
                </button>
            </div>


            <!-- Sections -->
            <div class="flex flex-col items-start text-sm text-[#4D5A32] space-y-6">
                <section id="liver">
                    <h2 class="text-lg font-bold">Fungsi Liver</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Apa lbu tahu bahwa lbu yang memiliki riwayat penyakit hati dapat memberikan pengaruh buruk pada bayi di dalam kandungan?
                        <br>Jika lbu mengidap virus hepatitis, risiko terjadinya lahir mati atau prematur semakin tinggi....! </p>
                    <p class="mt-2 text-justify">Penyakit hati di trimester akhir dapat memperlambat pertumbuhan bayi dan menimbulkan akibat yang mengerikan, seperti kelahiran prematur atau kematian mendadak bayi.Jika ibu memiliki fungsi hati yang sehat maka persalinan dapat berjalan lebih baik! Hati yang sehat dapat membantu detoksifikasi selama anestesi. Hal ini akan membantu lbu menerima anestesi secara normal selama persalinan alami dan caesar. Demi kesehatan bayi dan lbu sebaiknya lakukan tes fungsi hati serta selalu menjaga kesehatan hati.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa! 
                        <br>Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus. Darah akan diambil dan disimpan di wadah spesial dan selesai! Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir! Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti.</p>
                </section>

                <section id="sipilis">
                    <h2 class="text-lg font-bold">Sipilis</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">(Note : Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan beresiko tinggi. Menurut saran dan diagnosis dari dokter kandungan.)</p>
                    <p class="mt-2 text-justify">Sipilis merupakan penyakit seksual yang sangat berbahaya yang tentunya sudah banyak diketahui para ibu. Jika lbu terjangkit sipilis, hal ini dapat menyebabkan kelahiran prematur, keguguran, atau bahkan lahir mati..! Tidak hanya itu, janin pun juga dapat ikut terjangkit sipilis. Penularan sipilis pada janin dapat dihindari jika pengobatan dilakukan dalam 16 minggu usia kehamilan. Oleh karena itu, alangkah baiknya jika ibu melakukan pemeriksaan sipilis.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa! 
                        <br>Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus. Darah akan diambil dan disimpan di wadah spesial dan selesai! Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir! Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti.</p>
                </section>

                <section id="rontgen">
                    <h2 class="text-lg font-bold">Rontgen Dada</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">(Note : Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan beresiko tinggi. Menurut saran dan diagnosis dari dokter kandungan.)</p>
                    <p class="mt-2 text-justify">Untuk para lbu! Hari persalinan sudah semakin dekat.</p>
                    <p class="mt-2 text-justify">Merupakan hal yang sangat penting bagi lbu yang akan melahirkan, baik secara alami maupun caesar, untuk segera mengidentifikasi apakah terdapat gangguan pada sistem peredaran darah dan sistem pernafasan. Salah satu cara untuk memeriksa gangguan pada sistem peredaran darah adalah rontgen dada. Dengan sebuah pemeriksaan yang umum seperti rontgen dada, lbu dapat mengidentifikasi penyakit yang berhubungan dengan paru-paru atau jantung.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Waktu pemeriksaan di rumah sakit, tentunya Anda pernah disuruh untuk mengganti baju di ruang ganti bukan?!
                        <br>Hal itu mungkin merepotkan tetapi pemeriksaan ini dilakukan agar hasil x-ray akurat. Jika tidak, barang logam akan muncul di hasil X-ray tersebut. Waktu pemeriksaan, lepaslah baju yang memiliki logam! Lepaslah aksesoris seperti kalung, anting, jam tangan, dan ikat pinggang. Setelah mengganti baju, tergantung dengan rumah sakit masing-masing, Anda akan diberikan baju pengaman di bagian bawah sebelum pemeriksaan dimulai.</p>
                </section>

                <section id="std">
                    <h2 class="text-lg font-bold">Sexually Transmitted Diseases (STD)</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Tes ini sangat penting pada proses kehamilan untuk ibu hamil yang mempunyai indikasi tertentu agar dapat melahirkan bayi yang sehat.</p>
                    <p class="mt-2 text-justify">•⁠  ⁠Chlamydia: menyebabkan kelahiran prematur dan keratitis pada janin.
                        <br>•⁠  ⁠Ureaplasma: menyebabkan kelahiran prematur, lahir mati, berat badan lahir rendah, infeksi kantung ketuban.
                        <br>•⁠  ⁠Trichomonas: menyebabkan placental abruption dan kelahiran prematur.
                        <br>•⁠  ⁠Gonore: menyebabkan abortus septik, kelahiran prematur, korioamnitis, puerperal infection, dll.
                        <br>•⁠  ⁠Mycoplasma Genitalium: menyebabkan keguguran.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Pemeriksaan dilakukan dengan menggunakan vaginoscope dengan kit pemeriksaan seperti sikat spesial untuk mengambil sel sampel.</p>
                </section>

                <section id="gbs">
                    <h2 class="text-lg font-bold">Guillain Barre Syndrome</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">( Note : Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan berisiko tinggi. Menurut saran dan diagnosis dari dokter kandungan.)</p>
                    <p class="mt-2 text-justify">GBS, atau biasa disebut streptokokus grup B, merupakan bakteri yang dapat menyebabkan sepsis dan meningitis! 
                        <br>Studi mengatakan bahwa sekitar 10-30 persen Ibu memiliki virus ini, sehingga kemungkinannya tidak kecil. Bakteri GBS terdapat pada bagian anus dan vagina. Virus ini berbahaya karena ketika lbu melahirkan, bayi dapat terkena infeksi serius, seperti meningitis atau pneumonia. Jika hasil ditemukan positif, Anda akan diberikan antibiotik selama persalinan untuk mencegah penularan pada bayi.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Pemeriksaan dilakukan dengan menggunakan cotton bud steril yang diusapkan di vagina dan bokong untuk mengambil sampel yang akan tes untuk GBS.</p>
                </section>
            </div>
        </form>
    </div>
</body>