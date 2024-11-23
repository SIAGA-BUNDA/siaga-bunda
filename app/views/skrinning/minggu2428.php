<html class="scroll-smooth">
<body class="bg-[#C1CFA1] flex items-center justify-center pt-[69px] pb-[69px] min-h-screen scroll-smooth">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">


        <div class="flex items-left justify-left gap-[350px]"> 
        <button onclick="window.location.href='<?= BASEURL ?>skrinning'" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md">
            Kembali
        </button>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-[#4D5A32] mb-4">Tes Diabetes Gestasional</h1>
        </div>
        <p class="text-lg font-semibold text-gray-500 text-center mb-6">Minggu 24~28</p>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu2428" method="post">
            <!-- Buttons -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <button type="submit" name="section" value="ogtt" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    75gr OGTT
                </button>
            </div>

            <!-- Sections -->
            <div class="flex flex-col items-start text-sm text-[#4D5A32] space-y-6">
                <section id="ogtt">
                    <h2 class="text-lg font-bold">75gr OGTT</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Diabetes gestasional berarti penyakit diabetes yang tidak muncul sebelum kehamilan. Persentase penderita diabetes gestrasional termasuk cukup tinggi, yaitu sekitar 3 persen dari keseluruhan ibu hamil.</p>
                    <p class="mt-2 text-justify">Tes toleransi Glukosa Oral 75g, salah satu dari metode pemeriksaan diabetes gestasional, dilakukan dengan mengambil sampel darah 1 jam setelah mengkonsumsi 75 gram glukosa. Jika hasilnya mencapai 140 atau lebih, akan dilakukan pemeriksaan ulang.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa! 
                        <br>Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus.Darah akan diambil dan disimpan di wadah spesial dan selesai!</p>
                    <p class="mt-2 text-justify">Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir!
                        <br>Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti.</p>
                </section>
            </div>
        </form>
    </div>

</body>