<body class="bg-[#C1CFA1] min-h-screen py-8 px-4 sm:px-6 lg:px-8">

    <div class="bg-white p-4 sm:p-6 lg:p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">

        <button onclick="window.location.href='<?= BASEURL ?>home/sesudahLogin'"
            class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold text-2xl py-3 px-10 rounded-lg shadow-md">
            Kembali
        </button>
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="<?= BASEURL ?>/img/logo.png" alt="SIAGA BUNDA" class="w-28 h-28 md:w-36 md:h-36">
        </div>

        <!-- Title -->
        <h2 class="text-center text-3xl md:text-4xl font-bold text-[#4D5A32] mb-8">
            Timeline Pemeriksaan Kehamilan
        </h2>

        <!-- Week 4-6 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mb-6 ">
            <h2 class="text-xl md:text-2xl font-semibold mb-3">
                Minggu 4~6
                <?php if ($data['week'] >= 4 && $data['week'] <= 6) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>

            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes konfirmasi kehamilan</h3>
            <?php require_once "../app/views/skrinning/cards/013.php"; ?>
        </div>

        <!-- Week 0-13 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mb-6">
            <h2
                class="text-xl md:text-2xl font-semibold mb-3">
                Minggu 0~13
                <?php if ($data['week'] < 4 || ($data['week'] < 10 && $data['week'] > 6)) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes kehamilan dini</h3>
            <ul
                class="list-disc pl-4 text-[#4D5A32] text-lg md:text-2xl p-2 ">
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu013#antibodi" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Tes keseluruhan antibodi</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu013#torch" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">TORCH</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Week 10-13 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mb-6">
            <h2
                class="text-xl md:text-2xl font-semibold mb-3 <?= $data['week'] >= 10 && $data['week'] <= 13 ? 'text-red-400' : ' text-[#4D5A32] ' ?>">
                Minggu 10~13</h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes kelainan janin trimester 1</h3>

            <ul
                class="list-disc pl-4 text-[#4D5A32] text-lg md:text-2xl p-2 <?= $data['week'] >= 10 && $data['week'] <= 13 ? 'bg-red-200 rounded-lg mt-3' : '' ?>">
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu1013#ppapp-a" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">PAPP-A</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu1013#nipt" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">NIPT</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu1013#cvs" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Chorionic Villus Sampling (CVS)</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Week 15-20 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-4 mb-4">
            <h2
                class="text-xl md:text-2xl font-semibold mb-3 <?= $data['week'] > 13 && $data['week'] <= 20 ? 'text-red-400' : ' text-[#4D5A32] ' ?>">
                Minggu 15~20</h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes kelainan janin trimester 2</h3>
            <ul
                class="list-disc pl-4 text-[#4D5A32] text-lg md:text-2xl p-2 <?= $data['week'] > 13 && $data['week'] <= 20 ? 'bg-red-200 rounded-lg mt-3' : '' ?>">
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu1520#quad" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Quad test</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu1520#amniosentesis" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Amniosentesis</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Week 24-28 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-4 mb-4">
            <h2
                class="text-xl md:text-2xl font-semibold mb-3 text-[#4D5A32] <?= $data['week'] > 20 && $data['week'] <= 28 ? 'text-red-400' : ' text-[#4D5A32] ' ?>">
                Minggu 24~28</h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes Diabetes Gestasional</h3>

            <ul
                class="list-disc pl-4 text-[#4D5A32] text-lg md:text-2xl p-2 <?= $data['week'] > 20 && $data['week'] <= 28 ? 'bg-red-200 rounded-lg mt-3' : '' ?> ">
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu2428#ogtt" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">75gr OGTT</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Week 34-36 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-4 mb-4">
            <h2
                class="text-xl md:text-2xl font-semibold mb-3 <?= $data['week'] > 28 && $data['week'] <= 36 ? 'text-red-400' : ' text-[#4D5A32] ' ?>">
                Minggu 34~36</h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes prenatal yang komprehensif</h3>

            <ul
                class="list-disc pl-4 text-[#4D5A32] text-lg md:text-2xl p-2  <?= $data['week'] > 28 && $data['week'] <= 36 ? 'bg-red-200 rounded-lg mt-3' : '' ?> ">
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu3436#liver" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Fungsi Liver</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu3436#sipilis" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Sipilis</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu3436#rontgen" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Rontgen dada</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu3436#std" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">STD</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5 list-disc">
                    <a href="<?= BASEURL ?>skrinning/minggu3436#gbs" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Guillain Barre Syndrome (GBS)</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
            </ul>
        </div>

        </form>
    </div>
</body>