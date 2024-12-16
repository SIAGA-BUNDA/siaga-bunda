<body class="flex h-full bg-[#C1CFA1] font-sans items-center justify-center ">
    <div class="main bg-white">
        <img src="<?= BASEURL ?>img/ikon.png" class="ml-3" alt="Komunitas">
        <h1 class="text-[#4D5A32] text-7xl">Komunitas</h1>
        <br>
        <?php
        $a = ['Muhammad'=> 'aowkaowkaokw', 'keyla'=> 'tes1',"irgi aja"=> 'absdja dnjas da w dadsasdasdkasndkasdkasdasd asdasdkasd asd asdasdas asdasjdbjasbdjbajDBJABSDjbSJDbaskdjbasdjbasjdbasjdbasbdjasdbjasdbjasdbjsad asda;sdasdksand'];
        foreach ($a as $key => $value) { ?>
            <div class="flex postingann flex-col items-center justify-center w-full">
                <div class="postingan flex flex-col items-cDenter justify-center p-4">
                    <div class="postinganAtas flex flex-row w-full">
                        <div class="profil flex-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="rounded-full bg-[#DDE4C4] w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                        </div>
                        <div class="options flex-1 flex items-end justify-end">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="isiPostingan text-justify mt-4 w-full">
                        <h2 class="font-bold underline truncate"><?=$key?></h2>
                        <p class="truncate"> <?= $value ?></p>
                    </div>

                    <div class="likeComment flex flex-row w-full mt-4">
                        <div class="like flex-1 flex items-start justify-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 h-6" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                        <label for="modal-<?=$key?>" class="komen flex-1 flex items-end justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class=" w-6 h-6" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                            </svg>
                        </label>
                    </div>

                    <!-- POP UP KOMEN -->
                    <input type="checkbox" id="modal-<?=$key?>" class="modal-toggle hidden" />
                    <div class="modal" role="dialog">
                        <div class="modal-box bg-white w-full h-50 p-8 rounded-xl shadow-lg relative">
                            <div class="w-full mt-6 p-5 rounded-md bg-[#ececec] border border-[#D9D9D9] ">
                                <div class="flex items-center gap-2">
                                    <i class=" fa-solid fa-user text-gray-700 mt-1"></i>
                                    <h1 class="text-lg font-bold"><?=$key?></h1>
                                </div>
                                <h3 class="text-lg font-thin text-wrap truncate"><?=$value?></h3>
                            </div>
                            <div class="mx-2">
                                <p class="py-4 font-semibold">Berikan komentar anda</p>
                                <textarea class="w-full h-72 p-5 text-sm border border-gray-300 rounded-lg resize-none mb-1 comment"
                                    placeholder="Tulis komentar..."></textarea>
                            </div>
                            <div class="modal-action">
                                <label for="modal-<?=$key?>"
                                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                                <label for="#" class="btn btn-neutral btn-disabled" id="btn-submit">Submit</label>
                            </div>
                        </div>
                        <label for="modal-<?=$key?>" class="modal-backdrop"></label>
                    </div>
                </div>
            </div>
            <br>
            <?php
        }
        ?>
    </div>
</body>
<style>
    .postingan {
        background-color: #D1D1D1;
        width: 75%;
    }

    ;

    .isiPostingan {
        width: 75%;
    }

    .main {
        width: 75%;
    }
</style>


<script>
    $('.comment').keyup(function() {
        const box  = $(this).closest('.modal-box')
        if(this.value.trim() != ""){
            box.find('#btn-submit').removeClass("btn-disabled")
        }else{
            box.find('#btn-submit').addClass("btn-disabled")
        }
    })

    $('.btn-submit')
</script>