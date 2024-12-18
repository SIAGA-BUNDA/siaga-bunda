<body class="bg-[#fdf6f1] min-h-screen">
    <!-- container utama -->
    <div class="max-w-2xl shadow-md mx-auto py-6 px-10 bg-[#ffff] rounded-xl ">
        <!-- tombol back -->
        <div class="my-5">
            <button onclick="window.location.href='<?= BASEURL ?>komunitas';" class="flex items-center text-gray-500 hover:text-gray-950">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                <span class="text-lg font-medium">Kembali</span>
            </button>
        </div>

        <!-- postingan -->
        <div class="relative bg-white rounded-xl border-2 p-5 mb-6">
            <!-- tombol lapor -->
            <div class="absolute to-3 right-3">
                <label for="lapor-modal" class="text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </label> 
            </div>

            <!-- nama usernya -->
            <div class="flex items-center mb-3">
                <div class="avatar placeholder w-10 h-10 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mr-3">
                    <span class="font-bold">X</span>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">Xeyla Arfithri</h3>
                </div>
            </div>
            <p class="text-gray-600 leading-relaxed mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum asperiores accusantium sint dolor nemo saepe tempora quibusdam aspernatur assumenda illo delectus, aliquid, culpa quae itaque porro temporibus id voluptate repellat?</p>
            <!-- tombol laiks -->
            <div class="flex space-x-5 text-gray-500 text-sm">
                <button class="group hover:text-gray-800 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 group-hover:fill-red-500 group-hover:stroke-red-500">
                        <path d="M12 21s-6-5.33-9-9.33C1.13 9.34 2.76 5.5 6.5 5.5c2.04 0 3.54 1.23 4.5 2.68C12.96 6.73 14.46 5.5 16.5 5.5c3.74 0 5.37 3.84 3.5 6.17-3 4-9 9.33-9 9.33z"/>
                    </svg>
                </button>
            <!-- tombol komentar -->
                <button class="group hover:text-gray-700 flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 group-hover:fill-gray-500 group-hover:stroke-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.272 9-7.305 0-4.032-4.03-7.305-9-7.305S3 8.913 3 12.945c0 1.49.593 2.882 1.637 4.005a12.147 12.147 0 0 1-.958 3.56c-.074.195.132.383.316.286a11.43 11.43 0 0 0 3.955-2.28 9.015 9.015 0 0 0 4.05.735z"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <h4 class="text-gray-500 space-y-4 my-2 ml-8 hover:cursor-default">Balasan</h4>

        <!-- komentar -->
        <div class="space-y-4 ml-8">
            <div class="relative bg-white border-2 rounded-xl p-4">
                <!-- tombol lapor -->
                <div class="absolute top-3 right-3">
                    <label for="lapor-modal" class="text-gray-400 hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                        </svg>
                    </label>
                </div>
                <!-- nama user -->
                <div class="flex items-center mb-2">
                    <div class="avatar placeholder w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mr-2">
                        <span class="font-bold text-xs">X</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Xeyla Arfithri</h4>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, sequi blanditiis neque exercitationem nam eaque animi debitis unde nostrum maxime et dolores magni velit impedit mollitia magnam distinctio. Excepturi, et.</p>
            </div>

            <div class="relative bg-white border-2 rounded-xl p-4">
                <!-- tombol lapor -->
                <div class="absolute top-3 right-3">
                    <label for="lapor-modal" class="text-gray-400 hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                        </svg>
                    </label>
                </div>
                <!-- nama user -->
                <div class="flex items-center mb-2">
                    <div class="avatar placeholder w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mr-2">
                        <span class="font-bold text-xs">X</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Xeyla Arfithri</h4>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, sequi blanditiis neque exercitationem nam eaque animi debitis unde nostrum maxime et dolores magni velit impedit mollitia magnam distinctio. Excepturi, et.</p>
            </div>
        </div>
    </div>

    <!-- desain ngelapor -->
    <input type="checkbox" id="lapor-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Laporkan Ini</h3>
            <p class="py-4">Apakah Anda yakin ingin melaporkan komentar ini?</p>
            <div class="modal-action">
                <label for="lapor-modal" class="btn rounded-2xl bg-red-600 text-white hover:text-gray-800">Laporkan</label>
                <label for="lapor-modal" class="btn bg-gray-600 text-white hover:bg-gray-300 hover:text-gray-800 rounded-2xl">Tidak</label>
            </div>
        </div>
    </div>
</body>