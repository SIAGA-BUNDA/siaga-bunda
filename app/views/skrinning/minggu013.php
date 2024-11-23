<html class="scroll-smooth">
<body class="bg-[#C1CFA1] flex items-center justify-center pt-[69px] pb-[69px] min-h-screen scroll-smooth">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">


        <div class="flex items-left justify-left gap-[385px]"> 
        <button onclick="window.location.href='<?= BASEURL ?>/skrinning'" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md">
            Kembali
        </button>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-[#4D5A32] mb-4">Tes Kehamilan Dini</h1>
        </div>
        <p class="text-lg font-semibold text-gray-500 text-center mb-6">Minggu 0~13</p>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu013" method="post">
            <!-- Buttons -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <button type="submit" name="section" value="antibodi" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    Tes Antibodi
                </button>
                <button type="submit" name="section" value="torch" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    TORCH
                </button>
            </div>

            <!-- Sections -->
            <div class="flex flex-col items-start text-sm text-[#4D5A32] space-y-6">
                <section id="antibodi">
                    <h2 class="text-lg font-bold">Tes Keseluruhan Antibodi</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Pemeriksaan keseluruhan antibodi ini dilakukan untuk mengantisipasi jika terjadi pendaraan pada saat proses persalinan dan untuk mendeteksi apakah Ibu memiliki rhesus darah yang tidak kompatibel dengan si kecil. </p>
                    <p class="mt-2 text-justify">Jika Anda berencana untuk melakukan transfusi darah, tes skrining antibodi wajib dilakukan! 
                        <br>Tes skrining antibodi berguna untuk mendeteksi keberadaan antibodi tak terduga dalam serum darah. Berbeda dengan antibodi darah ABO, antibodi tak terduga adalah antibodi yang sulit dideteksi keberadaannya. Jika terdapat antibodi tak terduga, hal ini dapat menyebabkan masalah besar saat melakukan transfusi darah. Maka dari itu, tes skrining antibodi wajib dilakukan untuk memeriksa keberadaan antibodi tak terduga sebelum transfusi darah.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa! 
                        <br>Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus. Darah akan diambil dan disimpan di wadah spesial dan selesai! Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir! Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti total.</p>
                </section>

                <section id="torch">
                    <h2 class="text-lg font-bold">TORCH</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Pernahkah Anda mendengar tentang tes TORCH? 
                        <br>Sebagian bisa dicegah terlebih dahulu dari penyakit yang dapat mempengaruhi janin dengan memeriksa Toxoplasma, Rubella, Citomegalo virus, dan infeksi Herpes simpleks. Hanya dengan pemeriksaan darah ibu tiga bulan sebelum kehamilan. </p>
                    <p class="mt-2 text-justify">Jika Ibu terinfeksi saat kehamilan, penyakit ini yang bisa mempengaruhi janin. Jika terinfeksi, janin dapat lahir dengan cacat, memiliki masalah mata atau otak, atau kemungkinan bayi lahir dengan masalah kesehatan tertentu, seperti gangguan pendengaran, kebutaan, atau radang paru-paru. Mari kita periksa terlebih dahulu melalui tes TORCH. </p>
                    <p class="mt-2 text-justify">Jika Anda menerima hasil positif TORCH, tidak berarti Anda terinfeksi atau janin Anda pasti terinfeksi!. Tergantung pada jenis antibodi yang Anda miliki, dengan pemeriksaan lanjutan dan konsultasi lebih lanjut dengan dokter Anda, Anda mungkin akan diberikan pengobatan yang sesuai.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Tes TORCH adalah tes darah sederhana dan biasanya tidak memerlukan persiapan khusus. Jika ibu menderita kondisi medis lainnya, harap beri tahu dokter. Dan jika Anda sedang mengonsumsi obat apa pun, pastikan untuk memberi tahu dokter Anda sebelum tes. Bila perlu, kami akan meminta Anda untuk berpuasa atau berhenti minum obat untuk sementara waktu. Karena ini adalah tes darah, sebaiknya kenakan baju lengan pendek untuk mempermudah proses pengambilan darah di hari tes.</p>
                </section>
            </div>
        </form>
    </div>

</body>