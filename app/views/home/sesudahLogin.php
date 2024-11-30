<body>
    <div class="bg-[#C1CFA1] pt-[20px] min-h-screen ">
        <div class=" grid grid-cols-2 text-[#4D5A32] items-center w-full px-8  ">
            <div class="flex justify-start space-x-6">
                <p class="font-bold text-xl pl-2 pr-10">Siaga Bunda</p>
                <a href="<?= BASEURL ?>home/sesudahLogin"
                    class="bg-[#4D5A32] text-white text-center rounded-3xl px-4 py-2 hover:bg-white hover:text-[#4D5A32] shadow-lg transition-all duration-300">Home</a>
                <a href="<?= BASEURL ?>home/calculator"
                    class="px-4 py-2 text-center rounded-3xl hover:bg-white hover:text-[#4D5A32] transition-all duration-300">Calculator</a>
                <a href="<?= BASEURL ?>home/komunitas"
                    class="px-4 py-2 text-center rounded-3xl hover:bg-white hover:text-[#4D5A32]  transition-all duration-300">Komunitas</a>
            </div>

            <div class="flex justify-end space-x-4 ">
                <div class="flex px-6 py-2 rounded-3xl bg-white space-x-6">
                    <p>User</p>
                    <a href="profil"><i class=" fa-solid fa-user"></i></a>
                </div>
            </div>
        </div>

        <div class=" mx-4 lg:mx-5 mt-4 sm:p-6 lg:p-8 rounded-3xl bg-green-50">
            <!-- <img src="img/ikon.png" alt=""> -->
            <h1 class="text-center text-3xl font-bold text-gray-700 mb-4">Literasi Bunda</h1>

            <div class="relative">
                <div class="lg:mx-5 swiper relative lg:w-[82rem]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="card lg:card-side bg-base-100 hover:cursor-pointer  ">
                                <figure>
                                    <img class="object-cover lg:w-[30rem] h-full" src="<?= BASEURL ?>/img/newsExam.png"
                                        alt="Album" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">Section Heading 1</h2>
                                    <p>Here is the content of your section. Add any text or
                                        information
                                        you'd like to display.</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn tess bg-[#8BC34A] text-white">Lebih Banyak</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div class="card lg:card-side bg-base-100 hover:cursor-pointer">
                                <figure>
                                    <img class="object-cover lg:w-[30rem] h-full" src="<?= BASEURL ?>/img/newsExam.png"
                                        alt="Album" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">Section Heading 1</h2>
                                    <p>Here is the content of your section. Add any text or
                                        information
                                        you'd like to display.</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn bg-[#8BC34A] text-white">Lebih Banyak</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div class="card lg:card-side bg-base-100 hover:cursor-pointer">
                                <figure>
                                    <img class="object-cover lg:w-[30rem] h-full" src="<?= BASEURL ?>/img/newsExam.png"
                                        alt="Album" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">Section Heading 1</h2>
                                    <p>Here is the content of your section. Add any text or
                                        information
                                        you'd like to display.</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn bg-[#8BC34A] text-white">Lebih Banyak</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide ">
                            <div class="card lg:card-side bg-base-100 hover:cursor-pointer">
                                <figure>
                                    <img class="object-cover lg:w-[30rem] h-full" src="<?= BASEURL ?>/img/newsExam.png"
                                        alt="Album" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">Section Heading 1</h2>
                                    <p>Here is the content of your section. Add any text or
                                        information
                                        you'd like to display.</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn bg-[#8BC34A] text-white">Lebih Banyak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="swiper-button-prev text-[#607D8B] " id="prevBtn">
                </button>
                <button class="swiper-button-next text-[#607D8B] " id="nextBtn">
                </button>
            </div>
        </div>

        <div class="flex p-5 gap-5 lg:h-[76rem] ">
            <div class="lg:h-full flex-none w-[30rem]">
                <div class="sm:p-6 lg:p-8 rounded-xl lg:w-[30rem] bg-[rgba(28,29,30,0.95)]">
                    <p class="text-white text-2xl">Rekomendasi Skrinning Bunda</p>
                    <div class="bg-[#F0F0F0] rounded-lg shadow p-6 mt-6 ">
                        <h2 class="text-xl  font-semibold mb-3">
                            Minggu 4~6
                            <?php if ($data['week'] >= 4 && $data['week'] <= 6) { ?>
                                <span class="badge badge-lg bg-red-200">Rekomendasi Bunda</span>
                            <?php } ?>
                        </h2>

                        <h3 class="text-lg md:text-xl font-medium text-[#4D5A32]">Tes konfirmasi kehamilan</h3>
                        <?php require_once "../app/views/skrinning/cards/013.php"; ?>
                        <a href="<?= BASEURL ?>skrinning">
                            <button class="btn bg-[#8BC34A] mt-5 hover:bg-[rgba(77,90,50,1)]  text-white ">
                                Skrinning Lainnya
                            </button>
                        </a>
                    </div>
                    <!-- <div class=" mr-4  ml-auto w-max">
                     -->
                </div>
                <div class=" mt-4 sm:p-6 lg:p-8 rounded-xl lg:w-[30rem] bg-[rgba(28,29,30,0.95)]">
                    <p class=" text-white text-2xl">Ringkasan Kehamilan Bunda</p>
                    <hr class="my-3 border-[#c5c7c1] opacity-50" />
                    <div class="grid grid-cols-[10rem,10rem] gap-5">
                        <div class="bg-[#b1f3f8] rounded-3xl w-[10rem] h-[10rem] p-3  flex flex-col gap-5">
                            <div
                                class="bg-[#6bcbdb] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-gauge text-3xl text-white"></i>
                            </div>
                            <div>
                                <h1 class="text-2xl font-semibold mb-0">45 kg/m&sup2;</h1>
                                <p class="text-sm">
                                    Indeks Massa Tubuh
                                </p>
                            </div>
                        </div>
                        <div class="bg-[#f7c6c6] rounded-3xl w-[10rem] h-[10rem] p-3  flex flex-col gap-5">
                            <div
                                class="bg-[#cd8484] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-chart-line text-white text-xl"></i>
                            </div>
                            <div>
                                <h1 class="text-2xl font-semibold mb-0">45 kg</h1>
                                <p class="text-sm">
                                    Kenaikan Berat Total
                                </p>
                            </div>
                        </div>
                        <div class="bg-[#FFFFCC] rounded-3xl w-[10rem] h-[10rem] p-3  flex flex-col gap-5">
                            <div
                                class="bg-[#d2d27e] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-calendar-days text-2xl text-white"></i>
                            </div>
                            <div>
                                <h1 class="text-2xl font-semibold mb-0">5 Minggu</h1>
                                <p class="text-sm">
                                    Umur Kehamilan
                                </p>
                            </div>
                        </div>
                        <div class="bg-[#E6E6FA] rounded-3xl w-[10rem] h-[10rem] p-3  flex flex-col gap-5">
                            <div
                                class="bg-[#a2a2b3] p-2 rounded-full w-[3rem] h-[3rem] flex items-center justify-center">
                                <i class="fa-solid fa-calendar-days text-2xl text-white"></i>
                            </div>
                            <div>
                                <h1 class="text-2xl font-semibold mb-0">5 kg</h1>
                                <p class="text-sm">
                                    Berat Badan Terakhir
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class=" mr-4  ml-auto w-max">
                    <a href="<?= BASEURL ?>skrinning">
                        <button class="btn bg-[rgba(77,90,50,0.9)] mt-5 hover:bg-[rgba(77,90,50,1)]  text-white ">
                            Skrinning Lainnya
                        </button>
                    </a>-->
                </div>
                <div class="card bg-base-100 image-full shadow-xl w-full  lg:h-[13rem] mt-5">
                    <figure>
                        <!-- <img src="<?= BASEURL ?>/img/perutIbu.png" /> -->
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Ayo!</h2>
                        <p> pantau perjalanan kehamilan Anda setiap minggu untuk kesehatan Ibu dan si kecil!</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Isi Data Mingguan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-gray-400 rounded-xl flex flex-col h-full gap-5 p-5">
                <div class="bg-slate-100 rounded-3xl p-5 w-full">
                    <h1 class="text-2xl font-bold text-[#4D5A32] mb-4">Grafik Peningkatan Berat Badan Bunda</h1>
                    <div class=" relative h-[25rem] bg-white">
                        <!-- Tambahkan elemen wrapper scrollable -->
                        <canvas id="canvas"></canvas>
                    </div>
                    <div class=" pt-2 ml-auto w-max">
                        <a download="Chart.png" id="downloadLink">
                            <button class="btn btn-neutral text-white lg mt-3">Unduh Grafik</button>
                        </a>
                    </div>
                </div>
                <div class="w-full bg-slate-100 rounded-3xl p-5 h-full">
                    <div class="flex w-full justify-between items-center">
                        <h1 class="text-2xl font-bold text-[#4D5A32] mb-4">Pemantauan Kondisi Bunda</h1>
                        <div class="dropdown ">
                            <div tabindex="0" role="button" class="btn m-1 flex items-center text-sm">
                                <p>Minggu</p>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul tabindex="0"
                                class="dropdown-content menu bg-base-100 rounded-box z-[1] w-51 p-2 shadow">
                                <li><a>Minggu 1</a></li>
                                <li><a>Minggu 2</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white">
                        <table class="table table-zebra table-sm">
                            <!-- head -->
                            <thead>
                                <tr class="bg-[#4D5A32] text-white">
                                    <th>Pemantauan</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row for Demam Lebih Dari Dua Hari -->
                                <tr>
                                    <th>Demam Lebih Dari Dua Hari</th>
                                    <td>Tidak ada</td>
                                </tr>
                                <!-- row for Pusing/Sakit Kepala Berat -->
                                <tr>
                                    <th>Pusing/Sakit Kepala Berat</th>
                                    <td>Tidak Ada</td>
                                </tr>
                                <!-- row for Sulit Tidur/Cemas Berlebih -->
                                <tr>
                                    <th>Sulit Tidur/Cemas Berlebih</th>
                                    <td>Tidak Ada</td>
                                </tr>
                                <!-- row for Jantung Berdebar/Nyeri di Dada -->
                                <tr>
                                    <th>Jantung Berdebar/Nyeri di Dada</th>
                                    <td>Tidak Ada</td>
                                </tr>
                                <!-- row for Risiko TB -->
                                <tr>
                                    <th>Risiko TB</th>
                                    <td> Tidak ada
                                        batuk
                                        lebih dari
                                        2 minggu
                                        atau kontak
                                        serumah
                                        dengan
                                        penderita
                                        TB</td>
                                </tr>
                                <!-- row for Gerakan Janin -->
                                <tr>
                                    <th>Gerakan Janin</th>
                                    <td>Blue</td>
                                </tr>
                                <!-- row for Nyeri Perut Hebat -->
                                <tr>
                                    <th>Nyeri Perut Hebat</th>
                                    <td>Cy Ganderton</td>
                                </tr>
                                <!-- row for Keluar Cairan dari Jalan Lahir -->
                                <tr>
                                    <th>Keluar Cairan dari Jalan Lahir</th>
                                    <td>Quality Control Specialist</td>
                                </tr>
                                <!-- row for Sakit Saat Kencing -->
                                <tr>
                                    <th>Sakit Saat Kencing</th>
                                    <td>Blue</td>
                                </tr>
                                <!-- row for Diare Berulang -->
                                <tr>
                                    <th>Diare Berulang</th>
                                    <td>Blue</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=" pt-2 ml-auto w-max">
                        <a download="Chart.png" id="downloadLink">
                            <button class="btn btn-neutral text-white lg mt-3">Unduh Laporan Pemantauan</button>
                        </a>
                    </div>
                </div>


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


</body>