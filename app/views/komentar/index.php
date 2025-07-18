<body class="bg-[#fdf6f1] min-h-screen p-10">
    <!-- container utama -->
    <div class="w-full shadow-md mx-auto py-6 px-10 bg-[#ffff] rounded-xl ">
        <!-- tombol back -->
        <div class="my-5">
            <button onclick="window.location.href='<?= BASEURL ?>komunitas';"
                class="flex items-center text-gray-500 hover:text-gray-950">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                <span class="text-lg font-medium">Kembali</span>
            </button>
        </div>

        <!-- postingan -->
        <div class="relative bg-white rounded-xl border-2 p-5 mb-6">
            <!-- tombol lapor -->


            <!-- nama usernya -->
            <div class="flex items-center mb-3">
                <div
                    class="avatar placeholder w-10 h-10 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mr-3">
                    <span class="font-bold">X</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700"><?= $data['postingan']['NAMA'] ?></h3>
                </div>
            </div>
            <p class="text-gray-600 leading-relaxed mb-4"><?= $data['isi_postingan'] ?></p>
            <!-- tombol laiks -->
            <div class="flex space-x-3 text-gray-500 text-sm">
                <div class="flex items-center space-x-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                        <path
                            d="M12 21s-6-5.33-9-9.33C1.13 9.34 2.76 5.5 6.5 5.5c2.04 0 3.54 1.23 4.5 2.68C12.96 6.73 14.46 5.5 16.5 5.5c3.74 0 5.37 3.84 3.5 6.17-3 4-9 9.33-9 9.33z" />
                    </svg>
                    <span><?= $data['postingan']['JUMLAH_SUKA'] ?></span>
                </div>

                <!-- tombol komentar -->
                <div class=" flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 20.25c4.97 0 9-3.272 9-7.305 0-4.032-4.03-7.305-9-7.305S3 8.913 3 12.945c0 1.49.593 2.882 1.637 4.005a12.147 12.147 0 0 1-.958 3.56c-.074.195.132.383.316.286a11.43 11.43 0 0 0 3.955-2.28 9.015 9.015 0 0 0 4.05.735z" />
                    </svg>
                    <span><?= $data['commentCount'] ?></span>
                </div>
            </div>
        </div>

        <h4 class="text-gray-500 space-y-4 my-2 ml-8 hover:cursor-default">Balasan</h4>

        <!-- komentar -->

        <div class="space-y-4 ml-8">
            <div class="relative bg-white border-2 rounded-xl p-4">
                <!-- tombol lapor -->
                <div class="absolute top-3 right-3">
                
                </div>

                <?php
                    $i = 0;
                    foreach ($data['komentar'] as $komentar) { ?>
                        <?php $komentar_id = $komentar['KOMENTAR_ID'];?>
                        <!-- nama user -->
                        <div class="relative bg-white border-2 rounded-xl p-4">

                        <div class="flex items-center mb-2">
                            <div
                                class="avatar placeholder w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mr-2">
                                <span class="font-bold text-xs">X</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">
                                    <?= htmlspecialchars($komentar['NAMA'], ENT_QUOTES, 'UTF-8') ?>
                                </h4>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed ml-1">
                            <?= htmlspecialchars($data['isiKomentar'][$i], ENT_QUOTES, 'UTF-8') ?>
                        </p>


                        
                            <!-- tombol lapor -->
                            <div class="absolute top-3 right-3">
                            <label for="options_modal_<?= $komentar_id ?>"
                  class="options flex-2 grow-1 flex hover:cursor-pointer justify-start tooltip tooltip-bottom"
                  data-tip="Report">
                  <i class="fa-regular fa-flag"></i>
                </label>
                            </div>
                        </div>
                        <input type="checkbox" id="options_modal_<?= $komentar_id ?>" class="modal-toggle hidden" />
          <form class="modal" role="dialog" method="POST" action="<?= BASEURL ?>komunitas/addLaporanKomentar">
            <div class=" modal-box bg-white w-full h-50 p-8 rounded-xl shadow-lg relative">
              <div class="w-full mt-10 p-5 rounded-md bg-[#ececec] border border-[#D9D9D9] ">
                <div class="flex items-center gap-2">
                  <i class=" fa-solid fa-user text-gray-700 mt-1"></i>
                  <h1 class="text-lg font-bold"><?= $komentar['NAMA'] ?></h1>
                </div>
                <h3 class="text-lg font-thin text-wrap truncate"><?= $data['isiKomentar'][$i] ?></h3>
              </div>
              <div class="mx-2">
                <p class="py-4 font-semibold">Berikan Keterangan</p>
                <textarea name="isi_laporan" class="w-full h-72 p-5 text-sm border border-gray-300 rounded-lg resize-none mb-1 comment"
                  placeholder="Tulis komentar..."></textarea>
              </div>
              <div class="modal-action">
                <input type="hidden" id="input-<?= $komentar_id ?>" name="komentar_id" value="<?= $komentar_id ?>" />
                <label for="options_modal_<?= $komentar_id ?>"
                  class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                <button type="submit" class="!btn !btn-neutral" id="btn-submit">Submit</button>
              </div>
            </div>
            <label for="options_modal_<?= $komentar_id ?>" class="modal-backdrop"></label>
          </form>
                    <?php
                    $i++;
                }
                ?>

            </div>
        </div>


</body>