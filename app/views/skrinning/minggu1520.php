<html class="scroll-smooth">
<body class="bg-[#C1CFA1] flex items-center justify-center pt-[69px] pb-[69px] min-h-screen scroll-smooth">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">


        <div class="flex items-left justify-left gap-[300px]"> 
        <button onclick="window.location.href='<?= BASEURL ?>/skrinning'" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md">
            Kembali
        </button>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-[#4D5A32] mb-4">Tes Kelainan Janin Trimester 2</h1>
        </div>
        <p class="text-lg font-semibold text-gray-500 text-center mb-6">Minggu 15~20</p>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu1520" method="post">
            <!-- Buttons -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <button type="submit" name="section" value="quad" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    Quad Test
                </button>
                <button type="submit" name="section" value="amniosentesis" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    Amniosentesis
                </button>
            </div>

            <!-- Sections -->
            <div class="flex flex-col items-start text-sm text-[#4D5A32] space-y-6">
                <section id="quad">
                    <h2 class="text-lg font-bold">Quad Test</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">(Note: Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan beresiko tinggi. Menurut saran dan diagnosis dari dokter kandungan).</p>
                    <p class="mt-2 text-justify">Tes quad berfungsi untuk memeriksa kelainan kromosom pada janin, seperti cacat tabung saraf, down syndrome, Edward syndrome, patau, atau turner syndrome. Banyak Ibu yang ketakutan setelah melihat hasil 'resiko tinggi' pada hasil pemeriksaan...
                        <br> Hasil 'resiko tinggi' hanya menunjukkan bahwa janin memiliki kemungkinan tinggi mengidap down syndrome atau cacat tabung saraf sehingga dibutuhkan pemeriksaan lanjutan, ini bukan berarti janin pasti memiliki kelainan! Sebaliknya, hasil 'resiko rendah' berarti janin memiliki peluang rendah mengidap down syndrome atau cacat tabung saraf, tetapi bukan berarti tidak memiliki peluang sedikitpun. Ada beberapa kasus dimana Ibu melahirkan bayi cacat walaupun pemeriksaan menunjukkan hasil normal...!</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa! Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus. Darah akan diambil dan disimpan di wadah spesial dan selesai!</p>
                    <p class="mt-2 text-justify">Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir! 
                        <br>Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti.</p>
                </section>

                <section id="amniosentesis">
                    <h2 class="text-lg font-bold">Amniosentesis</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">(Note : Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan beresiko tinggi. Menurut saran dan diagnosis dari dokter kandungan).</p>
                    <p class="mt-2 text-justify">Tes aminocentesis merupakan pemeriksaan yang dapat memastikan adanya kelainan kromosom pada bayi, seperti down syndrome! Pemeriksaan kelainan kromosom ini dilakukan dengan mengambil air ketuban dalam rahim menggunakan jarum suntik.</p>
                    <p class="mt-2 text-justify">
                    •⁠  Ibu berusia 35 tahun ke atas.<br>
                    •⁠  Hasil skrining prenatal menunjukan risiko tinggi.<br>
                    •⁠  Ibu pernah melahirkan bayi dengan kelainan kromosom.<br>
                    •⁠  Ibu atau Ayah memiliki kelainan kromosom.<br>
                    •⁠  Ada saudara dekat yang memiliki kelainan kromosom.<br>
                    •⁠  Pernah melahirkan anak dengan kelainan saraf.<br>
                    •⁠  Ibu atau Ayah memiliki kelainan saraf.<br>
                    •⁠  Muncul hasil yang abnormal pada pemeriksaan glikoprotein janin.<br>
                    •⁠  Terdapat kelainan pada janin berdasarkan tes USG.<br>
                    •⁠  Memiliki keturunan kelainan kromosom di keluarga.</p>
                    <p class="mt-2 text-justify">Jika memiliki salah satu dari tanda di atas, lbu harus melakukan tes amniocentesis.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Pemeriksaan dilakukan dengan ultrasound untuk memeriksa keadaan bayi, cairan ketuban, plasenta, dan 20-30cc cairan ketuban akan diambil dari sekitar dinding perut. Cara ini sangat efektif dan aman sehingga mami tidak perlu khawatir. </p>
                    <p class="mt-2 text-justfy">Sebelum pemeriksaan, akan lebih baik jika mami dapat menahan kencing agar kandung kemih terisi dan lebih mudah untuk diperiksa.
                        <br>Setelah pemeriksaan, untuk keamanan mami dan si kecil dianjurkan untuk istirahat seharian yang cukup. Jika terdapat rasa sakit pada bagian perut, demam atau keluar cairan, mami harus mengunjungi dokter.</p>
                </section>
            </div>
        </form>
    </div>

</body>