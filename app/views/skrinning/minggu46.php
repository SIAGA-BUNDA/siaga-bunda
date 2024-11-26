<html class="scroll-smooth">
<body class="bg-[#C1CFA1] flex items-center justify-center pt-[69px] pb-[69px] min-h-screen scroll-smooth">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">


        <div class="flex items-left justify-left gap-[333px]"> 
        <button onclick="window.location.href='<?= BASEURL ?>skrinning'" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md">
            Kembali
        </button>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-[#4D5A32] mb-4">Tes Konfirmasi Kehamilan</h1>
        </div>
        <p class="text-lg font-semibold text-gray-500 text-center mb-6">Minggu 4~6</p>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu46" method="POST">
            <!-- Buttons -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <button type="submit" name="section" value="usg" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    USG
                </button>
                <button type="submit" name="section" value="kankerserviks" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    Skrining Kanker Serviks
                </button>
                <button type="submit" name="section" value="hormonkehamilan" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    Tes Hormon Kehamilan
                </button>
            </div>

            <!-- Sections -->
            <div class="flex flex-col items-start text-sm text-[#4D5A32] space-y-6">
                <section id="usg">
                    <h2 class="text-lg font-bold">USG</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Apa memang benar saya punya anak? Apakah saya… bisa jadi ibu?
                        <br>Melalui pemeriksaan USG, ibu dapat memastikan kehamilan. Jika si kecil ada di dalam perut maka ibu dapat mengetahui apakah sedang dalam posisi hamil atau tidak hamil! Tentunya jantung Anda berdebar-debar tidak sabar untuk melihat si kecil tersayang bukan? Saat pemeriksaan ini, ibu tidak akan merasa sakit dan tidak akan merasa sakit dan tidak akan membahayakan janin sehingga menjadi salah satu jenis pemeriksaan yang dapat dilakukan dengan mudah dengan dokter kandungan. Oleh karena itu, ibu pun dapat melakukannya tanpa khawatir!</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Pemeriksaan ‘ultrasound transvaginal’ akan dilakukan dengan menggunakan sebuah alat yang berbentuk seperti tongkat probe yang dimasukkan ke vagina. Mungkin para Mami khawatir jika ada benda asing yang dimasukkan ke dalam vagina. Tetapi jangan khawatir, pemeriksaan ultrasound transvaginal ini tidak menimbulkan rasa sakit. Hanya mungkin menimbulkan rasa sedikit tidak nyaman.</p>
                    <p class="mt-2 text-justify">Anda akan diminta untuk berbaring di atas ranjang pemeriksaan dan tongkat ini akan dilumasi dengan pelumas sebelum dimasukkan ke vagina. Ikuti intruksi dari dokter untuk menarik dan mengeluarkan nafas! Hu~ha~hu~ha Dokter akan menggerakan alat USG untuk melihat kondisi kantong hamil! Pemeriksaan ini hanya membutuhkan waktu singkat, hanya 10 menit saja! Bagaimana, tidak sulit bukan?!</p>
                </section>

                <section id="kankerserviks">
                    <h2 class="text-lg font-bold">Skrining Kanker Serviks</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Apakah ibu tahu bahwa kanker serviks dapat muncul pada masa kehamilan? 
                        <br>Tidak ada gejala khusus yang terjadi pada awal kehamilan jika terjangkit kanker serviks, sehingga banyak lbu yang baru ke rumah sakit karena merasakan gejalanya setelah melahirkan. Tetapi ini sudah telat karena kanker serviks telah berkembang sehingga pengobatan bisa menjadi lebih sulit. Jika pengobatan kanker serviks dilakukan sejak dini, sebagian besar akan sembuh total. Tes ini disarankan untuk dilakukan sebelum hamil Maka dari itu, sebaiknya ibu melakukan pemeriksaan kanker serviks saat pergi ke spesialis kandungan!</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Untuk screening kanker serviks, pada saat pemeriksaan dokter akan mengambil sedikit sel dari leher rahim dengan mengunakan alat seperti sikat. Sel yang diambil ini akan diperiksa dengan mikroskop untuk melihat jika terdapat kelainan pada sel tersebut.</p>
                    <p class="mt-2 text-justify">Pemeriksaan ini mungkin dapat membuat sedikit pendarahan, tetapi jangan khawatir, pemeriksaan ini tidak menyebabkan rasa sakit.</p>
                </section>

                <section id="hormonkehamilan">
                    <h2 class="text-lg font-bold">Tes Hormon Kehamilan melalui Darah</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Pemeriksaan hormon kehamilan dapat membantu memeriksa kehamilan yang tidak bisa terdeteksi jelas dengan pemeriksaan USG. Pemeriksaan ini juga dapat mendiagnosa kehamilan luar kandungan, keguguran, dan jika ada kelainan. Tes ini dilakuan terutama untuk kehamilan Ektopik (diluar kandungan), kehamilan Mola (Hamil angur). Jika diperlukan, tidak ada salahnya bagi ibu untuk melakukan pemeriksaan bukan?</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa!
                        <br> Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus. Darah akan diambil dan disimpan di wadah spesial dan selesai! Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir! Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti.</p>
                </section>
            </div>
        </form>
    </div>

</body>