<html class="scroll-smooth">
<body class="bg-[#C1CFA1] flex items-center justify-center pt-[69px] pb-[69px] min-h-screen scroll-smooth">

    <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">


        <div class="flex items-left justify-left gap-[310px]"> 
        <button onclick="window.location.href='<?= BASEURL ?>skrinning'" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg shadow-md">
            Kembali
        </button>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-[#4D5A32] mb-4">Tes Kelainan Janin Trimester 1</h1>
        </div>
        <p class="text-lg font-semibold text-gray-500 text-center mb-6">Minggu 10~13</p>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu1013" method="post">
            <!-- Buttons -->
            <div class="flex items-center justify-center gap-4 mb-8">
                <button type="submit" name="section" value="papp-a" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    PAPP-A
                </button>
                <button type="submit" name="section" value="nipt" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    NIPT
                </button>
                <button type="submit" name="section" value="cvs" class="bg-[#E6F4D7] hover:bg-green-300 text-[#4D5A32] px-6 py-3 rounded-lg shadow-md font-semibold w-1/3">
                    Chorionic Villus Sampling (CVS)
                </button>
            </div>

            <!-- Sections -->
            <div class="flex flex-col items-start text-sm text-[#4D5A32] space-y-6">
                <section id="papp-a">
                    <h2 class="text-lg font-bold">PAPP-A</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">(Note : Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan beresiko tinggi. Menurut saran dan diagnosis dari dokter kandungan.)</p>
                    <p class="mt-2 text-justify">Protein plasma yang dibentuk di dalam plasenta dan merupakan hal yang normal pada darah ibu hamil. Pemeriksaan ini ditujukan untuk melihay risiko malformasi janin dengan memeriksa kelainan kromosom seperti sindrom down melalui pemeriksaan protein plasma tersebut. Anda dapat melakukan tes malformasi dini dengan menggabungkan tes darah dan pemeriksaan ketebalan leher janin.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Ini adalah tes darah yang pastinya sudah sering para Mami lakukan! Ya, tes darah biasa! 
                        <br>Pemeriksaan dilakukan dengan mengambil sampel darah. Tidak ada persiapan khusus. Darah akan diambil dan disimpan di wadah spesial dan selesai! Mungkin banyak dari para Mami yang takut dengan tes darah. Jangan khawatir! Tes ini hanya memakan waktu 1 menit dan selesai dalam sekejap mata! Tetapi pada situasi tertentu, mungkin akan memakan waktu 5 menit sebelum pendarahan berhenti.</p>
                </section>

                <section id="nipt">
                    <h2 class="text-lg font-bold">NIPT</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">Setiap rumah sakit/klinik memiliki berbagai pemeriksaan yang berbeda seperti verify, harmony, dan sebagainya. Pemeriksaan dilakukan setelah minggu ke-10 dimana telah terbentuk DNA untuk menganalisis tinggi rendahnya resiko down syndrome, sindrom edward, serta kelainan pada kromosom lainnya. Pemeriksaan ini disarankan untuk lbu hamil yang mempunyai resiko tinggi. Disarankan untuk ibu hamil dengan usia 38 tahun ke atas.</p>
                    <p class="mt-2 text-justify">Meskipun memiliki kemampuan deteksi dan akuransi yang baik, pemeriksaan ini tidak disarankan untuk pemeriksaan lanjutan bagi lbu yang memperoleh hasil resiko tinggi pada tes quad. Kekurangan pemeriksaan ini adalah, jika hasil menunjukkan kelainan kromosom, misalnya terdapat risiko down sydrom, Anda wajib untuk melakukan pemeriksaan air ketuban untuk memastikannya. Akan tetapi, pemeriksaan ini memiliki risiko rendah hingga 0% sehingga lebih dipilih oleh orang banyak daripada tes chorionic dan tes air ketuban.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Tes NIPT adalah tes darah yang mudah dilakukan dengan mengambil sampel darah yang dibutuhkan.</p>
                    <p class="mt-2 text-justify">•⁠  ⁠Dapat dilakukan sejak minggu ke -10.
                        <br>•⁠ Periksalah untuk trisomi 21, 18 dan 13. Anda juga dapat memilih tes haploploid kromosom, dan tes untuk mengecek aneuploid pada kromosom jenis kelamin(monokromosom X, XXX, XXY, XYY).
                        <br>•⁠  ⁠Hasil pemeriksaan biasanya akan keluar dalam 2-4 hari kerja dari waktu penerimaan sampel.</p>
                    <p class="mt-2 text-justify">NIPT memiliki tingkat kesalahan terendah (0,1%).</p>
                </section>

                <section id="cvs">
                    <h2 class="text-lg font-bold">Chorionic Villus Sampling (CVS)</h2>
                    <p class="text-sm font-semibold pt-5">Untuk apa pemeriksaan ini?</p>
                    <p class="mt-2 text-justify">(Note : Tes ini dianjurkan sesuai dengan kondisi ibu hamil yang mempunyai indikasi kehamilan beresiko tinggi. Menurut saran dan diagnosis dari dokter kandungan.)</p>
                    <p class="mt-2 text-justify">Tes chorionic berfungsi untuk mendeteksi kelainan pada kromosom janin.</p>
                    <p class="mt-2 text-justify">Jaringan chorion (plasenta) berasal dari sel telur yang telah dibuahi, oleh karena itu plasenta memiliki susunan kromosom yang sama dengan janin! Untuk pemeriksaan ini sampel kromosom diambil dari plasenta secara langsung ataupun melalui kulturisasi untuk menganalisa DNA dan enzim. Pemeriksaan ini diketahui memiliki tingkat akurasi yang sangat tinggi jika pada hasil pemeriksaan ditemukan adanya kelainan pada kromosom. Pemeriksaan lainnya, seperti tes aminocentesis, dapat dilakukan setelah usia kehamilan mencapai minggu ke-16. Sedangkan tes chorionic dapat dilakukan sejak usia kehamilan mencapai minggu ke-9 sehingga kelainan kromosom janin dapat diketahui melalui diagnosis dini! Walaupun Anda tidak suka membayangkannya, jika hasil pemeriksaan menunjukkan cacat janin mungkin Anda akan disarankan untuk melakukan aborsi medis...<br>Oleh karena itu, pemeriksaan dini penting agar dapat mengurangi risiko atau komplikasi aborsi.</p>
                    <p class="mt-2 text-justify">Meskipun pemeriksaan memiliki banyak kelebihan, pemeriksaan ini mempunyai potensi melukai janin hingga 1,5 - 3%. Oleh karena itu, dibutuhkan pertimbangan yang matang sebelum melakukan tes ini.</p>
                    <p class="text-sm font-semibold pt-5">Bagaimana prosedur pemeriksaannya?</p>
                    <p class="mt-2 text-justify">Sebelum pemeriksaan CVS akan dilakukan pemeriksaan dengan USG terlebih dahulu untuk memonitor detak jantung bayi, ukuran rahim, besarnya rahim, pertumbuhan janin dan memastikan letak plasenta. Untuk mulai, perut bagian bawah akan diberikan suntikan anestetik local.</p>
                    <p class="mt-2 text-justify">Pemeriksaan akan mengikuti letak plasenta yang mungkin berbeda di setiap orang. Pemeriksaan dapat dilakukan dengan memasukan catheter melalui serviks untuk mengambil sampel dari hirupan janin atau dengan cara menyuntikan jarum melalui perut dan rahim untuk mengumpulkan hembusan janin. Mungkin para mami merasa khawatir karena ini melibatkan benda asing yang akan dimasukkan ke dalam tubuh. Tetapi rata-rata para mami yang telah mengikuti tes ini tidak merasakan rasa sakit tertentu dan hanya merasa ada yang menekan, jadi Anda tidak perlu khawatir.</p>
                    <p class="mt-2 text-justify">Hal yang perlu diperhatikan untuk Anda yang akan melakukan pemeriksaan CVS! 
                        <br> Pada hari pemeriksaan, Anda dapat makan pagi seperti biasa dan setelah itu hanya minum minuman bergula dalam jumlah banyak. Jika Anda banyak minum dan menahan pipis sehingga kantung kemih penuh, ini akan dapat membantu memberikan hasil yang lebih jelas pada pemeriksaan usg. Jangan lupa untuk mengecek jenis golongan darah Anda. Jika golongan darah Anda adalah Rh(-) maka dibutuhkan injeksi globulin! </p>
                    <p class="mt-2 text-justify">Pemeriksaan akan memakan waktu sekitar 30 menit - 1 jam. Setelah pemeriksaan selesai disarankan untuk beristirahat penuh, tidak melakukan olahraga esktrim, hubungan intim dan hindari penggunaan tampon untuk beberapa hari ini.
                </section>
            </div>
        </form>
    </div>

</body>