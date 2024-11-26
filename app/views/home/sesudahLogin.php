<body>


    <div class="flex justify-center  w-full h-full py-5 ">
        <div class=" relative w-[80rem]  bg-stone-100 rounded-xl p-5">
            <h1 class="text-4xl font-bold text-[#4D5A32] text-center">Grafik Peningkatan Berat Badan</h1>
            <!-- Tambahkan elemen wrapper scrollable -->
            <canvas id="canvas" class="bg-white mt-3"></canvas>
            <a download="Chart.png" id="downloadLink" >
            <button class="btn btn-primary mt-5 text-bold">Download</button>
        </a>
        </div>

    </div>

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
</body>