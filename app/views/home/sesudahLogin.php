
<div class="bg-[#C1CFA1] pt-[20px] pb-[69px] min-h-screen ">    
    <div class="menu grid grid-cols-2 text-[#4D5A32] items-center w-full px-4 ">
        <div class="flex justify-start space-x-6">
            <p class="font-bold text-xl pl-2 pr-10">Siaga Bunda</p>
            <a href="<?=BASEURL?>home/sesudahLogin" class="bg-[#4D5A32] text-white text-center rounded-3xl px-4 py-2 hover:bg-white hover:text-[#4D5A32] rounded shadow-lg transition-all duration-300">Home</a>
            <a href="<?=BASEURL?>home/calculator" class="px-4 py-2 text-center rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300">Calculator</a>
            <a href="<?=BASEURL?>home/komunitas" class="px-4 py-2 text-center rounded-3xl hover:bg-white hover:text-[#4D5A32]  transition-all duration-300">Komunitas</a>
        </div>

        <div class="flex justify-end space-x-4">
                <div class="flex px-6 py-2 rounded-3xl bg-white space-x-6">
                    <p>User</p>
                    <a href="profil"><i class=" fa-solid fa-user"></i></a>
                </div>
        </div>
    </div>
    
    <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
            <img src="img/ikon.png" alt="">
            <span>
                <h1 class="font-semibold text-2xl text-black">Selamat Datang Bunda!</h1>
                <br>
                <p>Platform yang dirancang khusus untuk mendukung kesehatan para bapak hamil. Kami memahami bahwa masa kehamilan adalah perjalanan yang istimewa, namun juga penuh tantangan.</p>
            </span>
    </div>
    <div class="text-center">
        <p class="text-black pt-7 font-semibold text-2xl">Artikel</p>
    </div>

    <div class="flex items-center justify-center mb-8 relative swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 1</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information you'd like to display.</p>
                    </div>    
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 2</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information you'd like to display.</p>
                    </div>        
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 3</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information you'd like to display.</p>
                    </div>    
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description" class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 4</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information you'd like to display.</p>
                    </div>        
                </div>
            </div>
        </div>

        <button class="absolute left top-1/2 transform -translate-y-1/2  bg-transparent text-[#4D5A32] text-3xl pt-10 focus:outline-none swiper-button-prev " id="prevBtn">
        </button>
        <button class="absolute right top-1/2 transform -translate-y-1/2   bg-transparent text-[#4D5A32] text-3xl pt-10 focus:outline-none swiper-button-next" id="nextBtn">
        </button>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            spaceBetween: 10, 
            slidesPerView: 1, 
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1, 
                },
 
                1024: {
                    slidesPerView: 2, 
                },
            }
        });
    </script>


    <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
        <p class="font-semibold text-black text-2xl px-4 pb-3">BMI (Body to Mass Index) Bunda</p>
        <p class="text-center">GRAPH BMI</p> 
        <div class="bg-[#4D5A32] text-white text-right mt-4 mr-4 px-4 py-2 hover:bg-white hover:text-[#4D5A32] rounded-lg shadow-lg transition-all duration-300 ml-auto w-max">
            <a href="<?=BASEURL?>tracking">
                    <button class="ml-auto block">
                        Update Berat
                    </button>
            </a>
        </div>
    </div>

    <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
        <p class="font-semibold text-black text-2xl px-4">Rekomendasi Skrinning Bunda</p>
        <div class="bg-[#E6F4D7] mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
            <ul class="list-disc pl-4 text-[#4D5A32] text-lg md:text-xl p-2 <?= $data['week'] >= 4 && $data['week'] <= 6 ? 'bg-red-200 rounded-lg mt-3' : '' ?>">
                <p class="pb-4">Minggu 4-6</p>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu46#usg" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">USG</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu46#kankerserviks" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Skrining Kanker Serviks</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
                <li class="hover:bg-stone-300 py-1 px-2 ml-5">
                    <a href="<?= BASEURL ?>skrinning/minggu46#hormonkehamilan" class="flex items-center cursor-pointer">
                        <label class="flex-grow cursor-pointer">Tes Hormon kehamilan melalui darah</label>
                        <button class="text-[#4D5A32] text-2xl md:text-3xl">&gt;</button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bg-[#4D5A32] text-white text-right mt-4 mr-4 px-4 py-2 hover:bg-white hover:text-[#4D5A32] rounded-lg shadow-lg transition-all duration-300 ml-auto w-max">
            <a href="<?=BASEURL?>skrinning">
                    <button class="ml-auto block">
                        Skrinning Lainnya
                    </button>
            </a>
        </div>
    </div>
</div>

