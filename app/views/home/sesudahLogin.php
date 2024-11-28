<div class="bg-[#C1CFA1] pt-[20px] pb-[69px] min-h-screen ">
    <div class="menu grid grid-cols-2 text-[#4D5A32] items-center w-full px-4 ">
        <div class="flex justify-start space-x-6">
            <p class="font-bold text-xl pl-2 pr-10">Siaga Bunda</p>
            <a href="<?= BASEURL ?>home/sesudahLogin"
                class="bg-[#4D5A32] text-white text-center rounded-3xl px-4 py-2 hover:bg-white hover:text-[#4D5A32] rounded shadow-lg transition-all duration-300">Home</a>
            <a href="<?= BASEURL ?>home/calculator"
                class="font-semibold px-4 py-2 text-center rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300">Calculator</a>
            <a href="<?= BASEURL ?>home/komunitas"
                class="font-semibold px-4 py-2 text-center rounded-3xl hover:bg-white hover:text-[#4D5A32]  transition-all duration-300">Komunitas</a>
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
            <p>Platform yang dirancang khusus untuk mendukung kesehatan para bapak hamil. Kami memahami bahwa masa
                kehamilan adalah perjalanan yang istimewa, namun juga penuh tantangan.</p>
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
                        <img src="your-image-url.jpg" alt="Image Description"
                            class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 1</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information
                            you'd like to display.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description"
                            class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 2</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information
                            you'd like to display.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description"
                            class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 3</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information
                            you'd like to display.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl relative">
                    <div class="p-4">
                        <img src="your-image-url.jpg" alt="Image Description"
                            class="w-full h-auto rounded-lg shadow-md object-cover">
                    </div>

                    <div class="px-6 py-4">
                        <h2 class="text-lg font-semibold text-gray-700">Section Heading 4</h2>
                        <p class="text-gray-600 mt-2">Here is the content of your section. Add any text or information
                            you'd like to display.</p>
                    </div>
                </div>
            </div>
        </div>

        <button
            class="absolute left top-1/2 transform -translate-y-1/2  bg-transparent text-[#4D5A32] text-3xl pt-10 focus:outline-none swiper-button-prev "
            id="prevBtn">
        </button>
        <button
            class="absolute right top-1/2 transform -translate-y-1/2   bg-transparent text-[#4D5A32] text-3xl pt-10 focus:outline-none swiper-button-next"
            id="nextBtn">
        </button>
    </div>




    <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
        <h1 class="text-2xl font-bold text-[#4D5A32] mb-4">Grafik Peningkatan Berat Badan</h1>
        <div class=" relative h-[40rem] w-[80rem] flex justify-center bg-stone-100 rounded-xl p-5">
            <!-- Tambahkan elemen wrapper scrollable -->
            <canvas id="canvas" class="bg-white"></canvas>
        </div>
        <div
            class=" mt-4 mr-4 px-4 py-2 ml-auto w-full ">
            <a href="<?= BASEURL ?>tracking">
                <button class="btn text-white btn-primary">
                    Update Berat
                </button>
            </a>
            <a download="Chart.png" id="downloadLink">
                <button class="btn btn-primary mt-5 text-white">Download</button>
            </a>
        </div>
    </div>

    <div class="bg-white mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
        <p class="font-semibold text-black text-2xl px-4">Rekomendasi Skrinning Bunda</p>
        <div class="bg-[#E6F4D7] mx-4 mt-4 sm:p-6 lg:p-8 rounded-3xl">
            <ul
                class="list-disc pl-4 text-[#4D5A32] text-lg md:text-xl p-2 <?= $data['week'] >= 4 && $data['week'] <= 6 ? 'bg-red-200 rounded-lg mt-3' : '' ?>">
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
        <div
            class="bg-[#4D5A32] text-white text-right mt-4 mr-4 px-4 py-2 hover:bg-white hover:text-[#4D5A32] rounded-lg shadow-lg transition-all duration-300 ml-auto w-max">
            <a href="<?= BASEURL ?>skrinning">
                <button class="ml-auto block">
                    Skrinning Lainnya
                </button>
            </a>
        </div>
    </div>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let labels = new Array(41);
    for (let i = 0; i <= 40; i++) {
        labels[i] = i;
    }

    let MinValue = new Array(41);
    let MaxValue = new Array(41);
    let WeightGain = new Array(41).fill(null);

    <?php foreach ($data["weightData"] as $row) {
        echo "WeightGain[" . $row['MINGGU'] . " ] = " . $row['BERAT_BADAN'] - $row['PRA_BERAT'] . ";";
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
            },
            {
                label: "Batas Atas Rekomendasi Kenaikan",
                data: MaxValue,
                borderColor: "rgb(75, 192, 192)",
                backgroundColor: "rgba(174, 245, 200,0.2)",
                tension: 0.1,
                fill: -1,
            },
            {
                label: "Kenaikan Bunda",
                data: WeightGain,
                backgroundColor: "rgb(255, 99, 132)",
                pointRadius: 5
            },
        ],
    };

    const canvas = document.getElementById("canvas");
    var chart = new Chart(canvas, {
        type: "line",
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    labels: {
                        // This more specific font property overrides the global property
                        font: {
                            size: 18
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
                        text: "Berat Badan (kg)",
                        font: {
                            size: 18,
                            weight: "bold",
                        }
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
                    const base64Image = chart.toBase64Image();
                    const downloadLink = document.getElementById("downloadLink");
                    downloadLink.href = base64Image;
                },
            },

        },
    });


</script>