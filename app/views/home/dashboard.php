<body>
    <div class="bg-[#FCF1E6] pt-[20px] min-h-screen ">

        <?php require_once '../app/views/templates/navbar.php' ?>


        <!-- section literasi bunda -->
        <div class="mx-4 sm:mx-6 lg:!mx-8   p-4 sm:p-6 lg:px-8 rounded-[35px] md:rounded-tr-none bg-white">
            <h1 class="text-center text-3xl font-bold">Literasi Bunda</h1>
            <div class="swiper-container relative px-12 my-5">
                <div class=" swiper !static">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="card xl:card-side bg-[#D9D9D9D9] md:max-h-[30rem] md:max-w-[643px] xl:h-[15rem] xl:max-w-[843px]">
                                <!-- Tambahkan aspect-ratio pada figure -->
                                <figure class="my-0 aspect-video max-h-[300px] md:max-h-[450px] xl:max-w-[20rem]">
                                    <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                        alt="Album" class="object-cover h-full w-full" />
                                </figure>
                                <div class="card-body my-0">
                                    <h2 class="card-title">New album is released!</h2>
                                    <p>Click the button to listen on Spotiwhy app.</p>
                                    <div class="card-actions justify-end mt-5 items-center">

                                        <a class="flex justify-center items-center group hover:cursor-pointer">
                                            <p class="underline">Selengkapnya</p>
                                            <svg width="28" height="16" viewBox="0 0 28 16" fill="none"
                                                class="mt-1 ml-2 group-hover:translate-x-2 duration-700"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.7071 8.70711C28.0976 8.31658 28.0976 7.68342 27.7071 7.29289L21.3431 0.928932C20.9526 0.538408 20.3195 0.538408 19.9289 0.928932C19.5384 1.31946 19.5384 1.95262 19.9289 2.34315L25.5858 8L19.9289 13.6569C19.5384 14.0474 19.5384 14.6805 19.9289 15.0711C20.3195 15.4616 20.9526 15.4616 21.3431 15.0711L27.7071 8.70711ZM0 9L27 9V7L0 7L0 9Z"
                                                    fill="#2B3440" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div
                                class="card xl:card-side bg-[#D9D9D9D9] md:max-h-[30rem] md:max-w-[643px] xl:h-[15rem] xl:max-w-[843px] ">
                                <figure class="my-0 aspect-video max-h-[300px] md:max-h-[450px] xl:max-w-[20rem]">
                                    <img src="<?= BASEURL ?>img/newsExam.png" alt="Album"
                                        class="object-cover h-full w-full object-center" />
                                </figure>
                                <div class="card-body my-0">
                                    <h2 class="card-title">New album is released!</h2>
                                    <p>Click the button to listen on Spotiwhy app.</p>
                                    <div class="card-actions justify-end mt-5 items-center">
                                        <a class="flex justify-center items-center group hover:cursor-pointer">
                                            <p class="underline">Selengkapnya</p>
                                            <svg width="28" height="16" viewBox="0 0 28 16" fill="none"
                                                class="mt-1 ml-2 group-hover:translate-x-2 duration-700"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.7071 8.70711C28.0976 8.31658 28.0976 7.68342 27.7071 7.29289L21.3431 0.928932C20.9526 0.538408 20.3195 0.538408 19.9289 0.928932C19.5384 1.31946 19.5384 1.95262 19.9289 2.34315L25.5858 8L19.9289 13.6569C19.5384 14.0474 19.5384 14.6805 19.9289 15.0711C20.3195 15.4616 20.9526 15.4616 21.3431 15.0711L27.7071 8.70711ZM0 9L27 9V7L0 7L0 9Z"
                                                    fill="#2B3440" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="card xl:card-side bg-[#D9D9D9D9] md:max-h-[30rem] md:max-w-[643px] xl:h-[15rem] xl:max-w-[843px]">
                                <!-- Tambahkan aspect-ratio pada figure -->
                                <figure class="my-0 aspect-video max-h-[300px] md:max-h-[450px] xl:max-w-[20rem]">
                                    <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                        alt="Album" class="object-cover h-full w-full" />
                                </figure>
                                <div class="card-body my-0">
                                    <h2 class="card-title">New album is released!</h2>
                                    <p>Click the button to listen on Spotiwhy app.</p>
                                    <div class="card-actions justify-end mt-5 items-center">
                                        <a class="flex justify-center items-center group hover:cursor-pointer">
                                            <p class="underline">Selengkapnya</p>
                                            <svg width="28" height="16" viewBox="0 0 28 16" fill="none"
                                                class="mt-1 ml-2 group-hover:translate-x-2 duration-700"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.7071 8.70711C28.0976 8.31658 28.0976 7.68342 27.7071 7.29289L21.3431 0.928932C20.9526 0.538408 20.3195 0.538408 19.9289 0.928932C19.5384 1.31946 19.5384 1.95262 19.9289 2.34315L25.5858 8L19.9289 13.6569C19.5384 14.0474 19.5384 14.6805 19.9289 15.0711C20.3195 15.4616 20.9526 15.4616 21.3431 15.0711L27.7071 8.70711ZM0 9L27 9V7L0 7L0 9Z"
                                                    fill="#2B3440" />
                                            </svg>
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div
                                class="card xl:card-side bg-[#D9D9D9D9] md:max-h-[30rem] md:max-w-[643px] xl:h-[15rem] xl:max-w-[843px]">
                                <!-- Tambahkan aspect-ratio pada figure -->
                                <figure class="my-0 aspect-video max-h-[300px] md:max-h-[450px] xl:max-w-[20rem]">
                                    <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                                        alt="Album" class="object-cover h-full w-full" />
                                </figure>
                                <div class="card-body my-0">
                                    <h2 class="card-title">New album is released!</h2>
                                    <p>Click the button to listen on Spotiwhy app.</p>
                                    <div class="card-actions justify-end mt-5 items-center">
                                        <a class="flex justify-center items-center group hover:cursor-pointer">
                                            <p class="underline">Selengkapnya</p>
                                            <svg width="28" height="16" viewBox="0 0 28 16" fill="none"
                                                class="mt-1 ml-2 group-hover:translate-x-2 duration-700"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.7071 8.70711C28.0976 8.31658 28.0976 7.68342 27.7071 7.29289L21.3431 0.928932C20.9526 0.538408 20.3195 0.538408 19.9289 0.928932C19.5384 1.31946 19.5384 1.95262 19.9289 2.34315L25.5858 8L19.9289 13.6569C19.5384 14.0474 19.5384 14.6805 19.9289 15.0711C20.3195 15.4616 20.9526 15.4616 21.3431 15.0711L27.7071 8.70711ZM0 9L27 9V7L0 7L0 9Z"
                                                    fill="#2B3440" />
                                            </svg>
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="swiper-button-prev !text-[#607D8B]  " id="prevBtn">
                    </button>
                    <button class="swiper-button-next !text-[#607D8B] " id="nextBtn">
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col xl:!flex-row  p-4 lg:p-8 gap-4 lg:gap-8">
            <div class="flex-none lg:w-full xl:w-[30rem] space-y-4">
                <!-- section skrinning lainnya -->
                <div class="p-4 sm:p-6 lg:p-8 rounded-xl bg-gray-300">
                    <p class=" text-2xl font-semibold">Rekomendasi Skrinning Bunda</p>
                    <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mt-4"">
                        <h2 class=" text-lg lg:text-xl font-semibold mb-3">
                        <?= $data['skrinning']["title"] ?>
                        </h2>

                        <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]"><?= $data['skrinning']["category"] ?>
                        </h3>
                        <?php require_once "../app/views/skrinning/cards/" . $data['skrinning']["medical test"] . ".php"; ?>
                        <a href="<?= BASEURL ?>skrinning">
                            <button class="btn btn-neutral mt-5 text-white ">
                                Skrinning Lainnya
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Section Ringkasan Kehamilan -->
                <div class="p-4 sm:p-6 lg:p-8 rounded-xl bg-gray-300">
                    <p class=" text-lg lg:text-2xl font-semibold">Ringkasan Kehamilan Bunda</p>
                    <hr class="my-3 border-[#4D5A32] opacity-50" />
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-[#b1f3f8] rounded-3xl py-4 flex flex-col gap-3 px-5">
                            <div
                                class="bg-[#6bcbdb] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-gauge text-3xl text-white"></i>
                            </div>
                            <div>
                                <h1 class="text-lg lg:text-xl font-semibold mb-0"><?= $data['imt'] ?> kg/m&sup2;</h1>
                                <p class="text-sm">
                                    Indeks Massa Tubuh
                                </p>
                            </div>
                        </div>
                        <div class="bg-[#f7c6c6] rounded-3xl py-4 flex flex-col gap-3 px-5">
                            <div
                                class="bg-[#cd8484] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-chart-line text-white text-xl"></i>
                            </div>
                            <div>
                                <h1 class="lg:text-xl font-semibold mb-0"><?= $data['kenaikan_berat'] ?> kg</h1>
                                <p class="text-sm">
                                    Kenaikan Berat Total
                                </p>
                            </div>
                        </div>
                        <div class="bg-[#FFFFCC] rounded-3xl py-4 flex flex-col gap-3 px-5">
                            <div
                                class="bg-[#d2d27e] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-calendar-days text-2xl text-white"></i>
                            </div>
                            <div>
                                <h1 class="text-lg lg:text-xl font-semibold mb-0"><?= $data['week'] ?>
                                    Minggu</h1>
                                <p class="text-sm">
                                    Umur Kehamilan
                                </p>
                            </div>
                        </div>
                        <div class="bg-[#E6E6FA] rounded-3xl py-4 flex flex-col gap-3 px-5  ">
                            <div
                                class="bg-[#a2a2b3] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-weight-hanging text-white text-2xl"></i>
                            </div>
                            <div>
                                <h1 class="text-lg lg:text-xl font-semibold mb-0"><?= $data['berat_badan'] ?> kg</h1>
                                <p class="text-sm">
                                    Berat Badan Terakhir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Input Button -->
                <div class="card bg-base-100 shadow-xl w-full mt-5 <?= $data['isRecorded'] ? 'hidden' : '' ?>">
                    <div class="card-body my-0">
                        <h2 class="card-title">Ayo!</h2>
                        <p>Pantau perjalanan kehamilan Anda setiap minggu untuk kesehatan Ibu dan si kecil!
                        </p>
                        <div class="card-actions justify-end">
                            <a href="<?= BASEURL ?>tracking/<?= $data['week'] ?>">
                                <button class="btn btn-neutral">Isi Data Mingguan</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section  -->
            <div class="xl:flex-1 bg-gray-300 rounded-xl flex flex-col gap-4 p-4 lg:p-8">

                <!-- Card Grafik Peningkatan Berat Badan -->
                <div class="bg-slate-100 rounded-3xl p-4 lg:p-6">
                    <h1 class="text-lg lg:text-2xl font-bold  mb-4">Grafik Peningkatan Berat Badan Bunda
                    </h1>
                    <div class=" relative h-[25rem] lg:h-[25rem] lg:p-3 bg-white">
                        <canvas id="canvas"></canvas>
                        <canvas id="copyCanvas" class="hidden w-[50rem] h-[25rem]"></canvas>
                    </div>
                    <div class=" pt-2 ml-auto w-max">
                        <a download="Chart.png" id="downloadLink">
                            <button class="btn btn-neutral text-white lg mt-3"> <span
                                    class="loading loading-spinner"></span></button>
                        </a>
                    </div>
                </div>

                <!-- Card Pemantauan Kondisi -->
                <div class="w-full bg-slate-100 rounded-3xl p-4 lg:p-6 flex-1">
                    <div class="text-lg lg:text-2xl font-bold mb-4 flex justify-between items-center">
                        <h1 class="text-2xl font-bold mb-4">Pemantauan Kondisi Bunda</h1>
                        <?php if (!empty($data['records'])) { ?>
                            <div class="relative">
                                <button id="dropdownButton" class="btn m-1 !w-[8rem]  bg-gray-400 ">
                                    Minggu <?= $data['records'][0]['MINGGU'] ?>
                                </button>
                                <ul id="dropdownContent"
                                    class="absolute hidden menu bg-base-100 rounded-box z-10 w-full p-2 shadow max-h-56 overflow-y-auto overflow-x-hidden box-border">
                                    <?php foreach ($data['records'] as $minggu): ?>
                                        <li>
                                            <a class="block px-2  py-2  text-center hover:bg-gray-200 w-full"
                                                data-value="<?= $minggu['MINGGU'] ?>">
                                                Minggu <?= $minggu['MINGGU'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="w-full bg-white">
                        <?php if (empty($data['records'])) { ?>
                            <div
                                class="flex flex-col justify-center items-center text-lg lg:text-2xl font-semibold text-stone-300 h-[25rem] gap-5">
                                <img src="<?= BASEURL ?>/img/no-data-icon.svg" alt=""
                                    class="w-[6rem] sm:w-[8rem] opacity-25">
                                <h1 class="text-2xl font-bold text-gray-400 mb-4">Belum Ada Data</h1>
                            </div>
                        <?php } else { ?>
                            <table class="table table-zebra table-sm">
                                <!-- head -->
                                <thead>
                                    <tr class="bg-[#4D5A32] text-white text-center">
                                        <th class="w-1/2">Pemantauan</th>
                                        <th class="w-1/2">Deskripsi</th>
                                    </tr>
                                </thead>

                                <tbody id="tbody">

                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                    <?php if (!empty($data['records'])) { ?>
                        <div class=" pt-2 ml-auto w-max ">
                            <a href="<?= BASEURL ?>home/report">
                                <button class="btn btn-neutral text-white lg mt-3">Unduh
                                    Laporan
                                    Pemantauan</button>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(() => {
            let activeText = "<?= $data['judul'] ?>"; // Teks yang dicocokkan
            $('#navbar a').each(function () {
                if ($(this).text().trim() === activeText) {
                    $(this).attr("id", "active-nav");
                    $(this).children('p').removeClass('hidden');
                }
            });
        });
        // START TABLE RECORD FUNCTION
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownContent = document.getElementById('dropdownContent');

        <?php if (!empty($data['records'])) { ?>
            $('document').ready(function () {
                $.ajax({
                    type: "POST",
                    url: '<?= BASEURL ?>home/getTable',
                    data: { week: <?= $data['records'][0]['MINGGU'] ?> },
                    success: function (data) {
                        $('#tbody').html(data);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr);
                    }
                });

            });


            dropdownButton.addEventListener('click', () => {
                if (dropdownContent.classList.contains('hidden')) {
                    dropdownContent.classList.add('block');
                }
                dropdownContent.classList.toggle('hidden');
            });

            document.addEventListener('click', (event) => {
                if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
                    dropdownContent.classList.add('hidden');

                }
            });

            // Close dropdown and update button text when an item is clicked
            dropdownContent.addEventListener('click', (event) => {
                const target = event.target;
                if (target.tagName === 'A') {
                    dropdownButton.textContent = target.textContent; // Update button text
                    dropdownContent.classList.add('hidden'); // Hide dropdown
                    console.log(target.dataset.value);
                    $.ajax({
                        type: "POST",
                        url: '<?= BASEURL ?>home/getTable',
                        data: { week: target.dataset.value },
                        success: function (data) {
                            $('#tbody').html(data);
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr);
                        }
                    })
                }
            });
        <?php } ?>
        //END TABLE RECORD FUNCTION

        // SWIPER ARTICLE FUNCTION
        const swiper = new Swiper('.swiper', {
            loop: true,
            spaceBetween: 10,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
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

                768: {
                    slidesPerView: 2,
                },
            }
        });
        //END SWIPER ARTICLE FUNCTION

        //  START CHART REPORT FUNCTION

        console.log($(window).width());
        let labels = new Array(41);
        for (let i = 0; i <= 40; i++) {
            labels[i] = i;
        }

        let MinValue = new Array(41);
        let MaxValue = new Array(41);
        let WeightGain = new Array(41).fill(null);

        <?php foreach ($data['records'] as $row) {
            echo "WeightGain[" . $row['MINGGU'] . " ] = " . $row['BERAT_BADAN'] - $data['preRecord']['PRA_BERAT'] . ";";
        }
        ?>

        function getMaxWeight(x, category) {
            const constant = (x - 13) / 27;
            switch (category) {
                case "underweight":
                    return constant * 16 + 2;
                case "normal":
                    return constant * 14 + 2;
                case "overweight":
                    return constant * 9.5 + 2;
                case "obese":
                    return constant * 7 + 2;
            }
        }

        function getMinWeight(x, category) {
            const constant = (x - 13) / 27;
            switch (category) {
                case "underweight":
                    return constant * 12 + 0.5;
                case "normal":
                    return constant * 11 + 0.5;
                case "overweight":
                    return constant * 6.5 + 0.5;
                case "obese":
                    return constant * 4.5 + 0.5;
            }
        }

        labels.forEach((x) => {
            let y;
            if (x > 13) {
                y = getMinWeight(x, '<?= $data['category'] ?>');
                MinValue[x] = y.toFixed(2);

                y = getMaxWeight(x, '<?= $data['category'] ?>');
                MaxValue[x] = y.toFixed(2);
            } else {
                y = (x / 13) * 0.5;
                MinValue[x] = y.toFixed(2);

                y = (2 * x) / 13;
                MaxValue[x] = y.toFixed(2);
            }
        });

        const data = {
            labels: labels,
            datasets: [
                {
                    type: "line",
                    label: "Batas Bawah Rekomendasi Kenaikan",
                    data: MinValue,
                    borderColor: "rgb(75, 192, 192)",
                    tension: 0.1,
                    backgroundColor: "rgba(174, 245, 200,0.2)",
                    fill: +1,
                    borderWidth: 0.5,
                },
                {
                    label: "Batas Atas Rekomendasi Kenaikan",
                    data: MaxValue,
                    borderColor: "rgb(75, 192, 192)",
                    backgroundColor: "rgba(174, 245, 200,0.2)",
                    tension: 0.1,
                    fill: -1,
                    borderWidth: 0.5,
                },
                {
                    label: "Kenaikan Bunda",
                    data: WeightGain,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgb(54, 162, 235)',
                    borderWidth: 1,
                },
            ],
        };

        const canvas = document.getElementById("canvas");
        var chart = new Chart(canvas, {
            type: "line",
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "bottom",
                        useBorderRadius: true,
                        borderRadius: 10,
                        labels: {
                            // This more specific font property overrides the global property
                            font: {
                                size: 14
                            }
                        }

                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Minggu Kehamilan",
                            font: {
                                size: 18,
                                weight: "bold",
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Kenaikan Berat Badan (kg)",
                            font: {
                                size: 18,
                                weight: "bold",
                            }
                        },
                        min: 0,
                        max: 18,
                        ticks: {
                            stepSize: 1,
                        },
                    },
                },
                animation: {
                    onComplete: () => {
                        // Set canvas background to white
                        function setCanvasBackground(canvas, color) {
                            const ctx = canvas.getContext("2d");
                            ctx.save();
                            ctx.globalCompositeOperation = "destination-over";
                            ctx.fillStyle = color;
                            ctx.fillRect(0, 0, canvas.width, canvas.height);
                            ctx.restore();
                        }
                        setCanvasBackground(canvas, "white");
                        // Generate base64 image and set it to download link
                    },
                },
            },
        });

        $("document").ready(function () {
            downloadLink = document.getElementById("downloadLink");
            // Create a new temporary canvas
            const tempCanvas = document.createElement("canvas");
            tempCanvas.width = 1000;
            tempCanvas.height = 500;
            const tempCtx = tempCanvas.getContext("2d");

            // Create a new Chart instance on the temporary canvas
            var tempChart = new Chart(tempCtx, {
                type: chart.config.type, // Use the same type as the original chart
                data: chart.data, // Use the same data as the original chart
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: "bottom",
                            useBorderRadius: true,
                            borderRadius: 10,
                            labels: {
                                font: {
                                    size: 14
                                }
                            }

                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: "Minggu Kehamilan",
                                font: {
                                    size: 18,
                                    weight: "bold",
                                }
                            },
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: "Kenaikan Berat Badan (kg)",
                                font: {
                                    size: 18,
                                    weight: "bold",
                                }
                            },
                            min: 0,
                            max: 20,
                            ticks: {
                                stepSize: 1,
                            },
                        },
                    },
                    animation: {
                        onComplete: () => {
                            const ctx = tempCanvas.getContext("2d");
                            ctx.save();
                            ctx.globalCompositeOperation = "destination-over";
                            ctx.fillStyle = "white";
                            ctx.fillRect(0, 0, tempCanvas.width, tempCanvas.height);
                            ctx.restore();

                            // Generate base64 image and set it to download link
                            const downloadLink = document.getElementById("downloadLink");
                            const base64Image = tempCanvas.toDataURL("image/png");
                            downloadLink.href = base64Image;
                            downloadLink.download = "chart.png";
                            $("#downloadLink button").html("Unduh Grafik");

                        },
                    },
                },
            });
        });
        //END CHART REPORT FUNCTION
    </script>
</body>