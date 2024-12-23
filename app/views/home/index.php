<div class="bg-[#FCF1E6] pt-[20px] pb-[69px] min-h-screen">
    <div class="md:flex text-[#D4988B] items-end w-full px-4 sm:px-6 lg:px-8 flex-wrap ">
        <?php require_once '../app/views/templates/navbarUser.php' ?>
        <div class="mx-4 sm:mx-6 lg:!mx-8 p-4 sm:p-6 lg:px-8 rounded-[35px] md:rounded-tr-none bg-white">
            <<div class="container flex items-center justify-start mt-1 text-left md:text-center md:flex-row flex-col md:gap-2 gap-2">
                <img src="img/ikon.png" alt="Logo" 
                    class="logo w-20 h-auto pt-0 md:w-32 md:h-32">
                <div class="content">
                    <h1 class="title text-2xl md:text-3xl font-bold text-[#D4988B] mt-2 md:mt-0">
                        Selamat Datang Bunda!
                    </h1>
                    <p class="description text-md md:text-base text-gray-700 mt-2 md:mt-0 py-4 md:px-0">
                        Platform yang dirancang khusus untuk mendukung kesehatan para bapak hamil.
                        Kami memahami bahwa masa kehamilan adalah perjalanan yang istimewa, namun juga penuh tantangan.
                    </p>
                </div>
            </div>
            <br><br>
            <div class="content2">
                <img src="<?= BASEURL ?>/img/ibuBayi.png" width="100%" alt="">
            </div>
            <p class="font-semibold text-[#D4988B] text-right mt-4 mr-4 px-4 pt-4 text-base md:text-xs hidden sm:block ml-auto w-max">Jelajahi setiap fitur
                pada Siaga Bunda</p>
            <div class="font-bold text-gray-800 text-right mt-4 mr-4 px-4 pb-4 text-3xl hover:text-gray-400 transition-all duration-300 ml-auto w-max">
                <a href="<?= BASEURL ?>signUp">
                    <button class="ml-auto text-xl font-bold block sm:text-[0.625rem] px-2 py-1">
                        Jelajahi Sekarang
                    </button>
                </a>
            </div>
        </div>