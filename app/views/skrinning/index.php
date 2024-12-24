<body class="bg-[#FCF1E6] min-h-screen py-8 px-4 sm:px-6 lg:px-8">

    <div class="bg-white p-4 sm:p-6 lg:p-8 rounded-xl shadow-xl w-full max-w-7xl mx-auto">

        <button onclick="window.location.href='<?= BASEURL ?>home'"
            class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold text-2xl py-3 px-10 rounded-lg shadow-md !text-sm">
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
            <?php require_once "../app/views/skrinning/cards/konfirmasiKehamilan.php"; ?>
        </div>

        <!-- Week 0-13 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mb-6">
            <h2 class="text-xl md:text-2xl font-semibold mb-3">
                Minggu 0~13
                <?php if ($data['week'] < 4 || ($data['week'] <10 && $data['week'] > 6)) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes kehamilan dini</h3>
            <?php require_once "../app/views/skrinning/cards/kehamilanDini.php" ?>
        </div>

        <!-- Week 10-13 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mb-6">
            <h2 class="text-xl md:text-2xl font-semibold mb-3  text-[#4D5A32]">
                Minggu 10~13
                <?php if ($data['week'] >= 10 && $data['week'] <= 13) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes kelainan janin trimester 1</h3>

            <?php require_once "../app/views/skrinning/cards/trimester1.php" ?>
        </div>

        <!-- Week 15-20 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-4 mb-4">
            <h2 class="text-xl md:text-2xl font-semibold mb-3 text-[#4D5A32]">
                Minggu 15~20
                <?php if ($data['week'] > 13 && $data['week'] <= 20) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes kelainan janin trimester 2</h3>
            <?php require_once "../app/views/skrinning/cards/trimester2.php" ?>
        </div>

        <!-- Week 24-28 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-4 mb-4">
            <h2 class="text-xl md:text-2xl font-semibold mb-3 text-[#4D5A32]">
                Minggu 24~28
                <?php if ($data['week'] > 20 && $data['week'] <= 28) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes Diabetes Gestasional</h3>

            <?php require_once "../app/views/skrinning/cards/diabetesGestasional.php" ?>
        </div>

        <!-- Week 34-36 -->
        <div class="bg-[#F0F0F0] rounded-lg shadow p-4 mb-4">
            <h2 class="text-xl md:text-2xl font-semibold mb-3 text-[#4D5A32]">
                Minggu 34~36
                <?php if ($data['week'] > 28 && $data['week'] <= 36) { ?>
                    <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                <?php } ?>
            </h2>
            <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes prenatal yang komprehensif</h3>
            <?php require_once "../app/views/skrinning/cards/prenetal.php" ?>
        </div>

        </form>
    </div>
</body>