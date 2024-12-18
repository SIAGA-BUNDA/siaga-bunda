<div class="bg-[#FCF1E6] pt-[20px] pb-[69px] min-h-screen ">    
    <div class="menu grid grid-cols-2 text-[#D4988B] items-center w-full px-8 ">
        <div class="flex justify-start space-x-6">  
            <p class="  font-bold text-2xl pl-2 pr-10">Siaga Bunda</p>
            <a href="<?= BASEURL ?>home"
                    class="font-semibold bg-[#D4988B] text-white text-center border-2 border-[#D4988B] rounded-3xl px-4 py-2 hover:bg-white hover:text-[#4D5A32] shadow-lg transition-all duration-300 font-medium">Home</a>
                <a href="<?= BASEURL ?>home/calculator"
                    class="font-semibold px-4 py-2 text-center border-2 border-[#FCF1E6] rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300 font-medium">Calculator</a>
                <a href="<?= BASEURL ?>home/komunitas"
                    class="font-semibold px-4 py-2 text-center border-2 border-[#FCF1E6] rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300 font-medium">Komunitas</a>
            </div>

        <div class="flex justify-end space-x-4">
                <div class="flex px-6 py-2 rounded-3xl bg-white space-x-6">
                    <a href="<?= BASEURL ?>/signUp" class="font-semibold bg-[#D4988B] px-4 py-2 text-center border-2 border-[#D4988B] shadow-lg text-white rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300">Daftar Sekarang</a>
                    <a href="<?= BASEURL ?>/signIn" class="font-semibold bg-[#D4988B] px-4 py-2 text-center rounded-3xl border-2 border-[#D4988B] shadow-lg text-white rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300">Login</a>
                </div>
        </div>
    </div>
        
    <div class="bg-white mx-4 sm:p-6 lg:p-8 rounded-3xl shadow p-6 pt-2">
        <div class="flex justify items-center mt-10 relatif">
            <img src="img/ikon.png" alt="">
            <span>
                <h1 class="font-bold text-3xl text-[#D4988B]">Selamat Datang Bunda!</h1>
                <br>
                <p class="text-black pr-4">Platform yang dirancang khusus untuk mendukung kesehatan para bapak hamil. Kami memahami bahwa masa
                    kehamilan adalah perjalanan yang istimewa, namun juga penuh tantangan.</p>
            </span>
        </div>
        <br><br><br>
        <div class="content2">
            <img src="<?=BASEURL?>/img/ibuBayi.png" width="100%" alt="">
        </div>
        <p class="font-semibold text-grey text-right mt- mr-4 px-4 pt-4 text-xl ml-auto w-max">Jelajahi setiap fitur pada Siaga Bunda</p>
        <div class="font-bold text-[#677D85] text-right mt-4 mr-4 px-4 pb-4 text-3xl hover:text-gray-300 transition-all duration-300 ml-auto w-max">
            <a href="<?= BASEURL ?>signUp">
                <button class="ml-auto block">
                    Jelajahi Sekarang
                </button>
            </a>
        </div>
    </div>