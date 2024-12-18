<div class="md:flex text-[#D4988B] items-end w-full px-4 sm:px-6 lg:px-8 flex-wrap hidden ">
    <!-- Navbar Start -->
    <div class="flex-grow bg-white navbar-start">
        <div class="flex justify-start items-center space-x-0 sm:space-x-4 md:space-x-2 lg:space-x-6 bg-[#FCF1E6] rounded-br-3xl py-5"
            id="navbar">
            <p class=" font-extrabold lg:pr-10 text-xl mr-2">Siaga Bunda</p>
            <!-- Home -->

            <a href="<?= BASEURL ?>home/sesudahLogin"
                class="md:px-3 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl sm:px-2 py-2 hover:bg-white hover:text-[#4D5A32] transition-all duration-300 font-medium">
                <p class="hidden md:block lg:font-bold">Home</p>
            </a>

            <!-- Kalkulator -->
            <a href="<?= BASEURL ?>Kalkulator"
                class="md:px-3 text-[#D4988B] py-2 text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-[#4D5A32] font-medium">
                <p class="hidden md:block lg:font-bold">Kalkulator</p>
            </a>

            <!-- Komunitas -->
            <a href="<?= BASEURL ?>komunitas"
                class="md:px-3 py-2 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-[#4D5A32] font-medium">
                <p class="hidden md:block lg:font-bold">Komunitas</p>
            </a>

            <!-- Artikel -->
            <a href="<?= BASEURL ?>artikel"
                class="md:px-3 py-2 text-[#D4988B] text-center rounded-full md:rounded-2xl lg:rounded-3xl hover:bg-white hover:text-[#4D5A32] font-medium">
                <p class="hidden md:block lg:font-bold">Artikel</p>
            </a>
        </div>
    </div>

    <!-- User Greeting -->
    <div class="flex items-end">
        <div
            class="flex px-4 lg:px-6 items-center rounded-t-[35px] bg-white space-x-2 md:space-x-6 py-5 justify-center sm:justify-end">
            <div class=" bg-[#585858] text-white rounded-full py-3 px-3 flex space-x-3 items-center ">
                <i class="fa-solid fa-user"></i>
            </div>
            <p class="md:font-medium md:text-sm text-gray-700">Usernamennya</p>
            <i class="fa-solid fa-chevron-down text-gray-700"></i>
        </div>
    </div>
</div>

<div class="flex items-center bg-[#fffefe] rounded-full p-3 flex-grow justify-between  mx-4 my-5 md:hidden" id="navbar">
    <img src="<?= BASEURL ?>img/ikon.png" alt="" class="max-h-14">

    <a class=" text-[#D4988B] rounded-full py-2 px-3 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Home">
        <i class="fa-solid fa-house text-base"></i>
        <p class="hidden sm:block">Home</p>
    </a>

    <a class="text-[#D4988B] rounded-full py-2 px-4 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Kalkulator">
        <i class="fa-solid fa-calculator text-xl"></i>
        <p class="hidden sm:block">Kalkulator</p>
    </a>

    <a class="text-[#D4988B] rounded-full py-2 px-3 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Komunitas">
        <i class="fa-solid fa-comments text-xl"></i>
        <p class="hidden sm:block">Komunitas</p>
    </a>

    <a class="text-[#D4988B] rounded-full py-2 px-3 flex space-x-3 items-center hover:text-white hover:bg-[#D4988B]"
        href="<?= BASEURL ?>Artikel">
        <i class="fa-regular fa-newspaper text-xl"></i>
        <p class="hidden sm:block">Artikel</p>
    </a>

    <div class=" bg-[#585858] text-white rounded-full py-3 px-3 flex space-x-3 items-center ">
        <i class="fa-solid fa-user"></i>
    </div>
</div>

<script>
    $(document).ready(() => {
        let activeText = $(document).find("title").text(); // Teks yang dicocokkan
        $('#navbar a').each(function () {
            if ($(this).text().trim() === activeText) {
                $(this).attr("id", "active-nav");
                $(this).children('p').removeClass('hidden');
            }
        });

        // $('#navbar a').on('click',()=>{
        //     $('#active-nav').removeAttr('id');
        //     $(this).attr("id","active-nav");
        // })
    });
</script>