<body style="margin: 0; padding: 0; font-family: Helvetica, sans-serif;">
    <div style="width: 100%; margin-bottom: 25px;">
        <div style="width: 15%; float:left;">
            <img src="<?= BASEURL ?>/img/logo.png" alt="" style="height: 100%; align-items: center;">
        </div>
        <div style="width: 70%; float:left; padding-top: 20px; padding-left: 20px;">
            <h1 style="margin: 0px; margin-top: 10px;">Lembar Pemantaun Ibu Hamil </h1>
            <h4 style="margin: 0px;">Ibu Hamil Memantau Kondisinya Setiap Minggu. Jika ditemukan kondisi pada kolom merah, bawa Ibu ke fasilitas kesehatan</h4>
        </div>
    </div>

    <table style="width: 100%; border-collapse: collapse; margin: 20px auto; max-width: 595px;">
        <!-- Header -->
        <thead>
            <tr>
                <th style="width: 30mm; background-color: #87CEFA; color: #000; text-align: center; border: 1px solid #000; padding: 5px;"
                    colspan="2" rowspan="2">Minggu Kehamilan</th>
                <?php foreach ($data['headers'] as $header) { ?>
                    <th style="width: 30mm; background-color: #87CEFA; color: #000; text-align: center; border: 1px solid #000; padding: 5px;"
                        colspan="2"><?= $header ?></th>
                <?php } ?>
            </tr>
            <tr>
                <?php foreach ($data['subHeaders'] as $subHeader) { ?>
                    <?php foreach ($subHeader as $key => $value) { ?>
                        <td
                            style="background-color: <?= $key == '0' ? '#C8E6C9' : '#fca5a5' ?>; text-align: center; border: 1px solid #000; padding: 5px;">
                            <?= $value ?>
                        </td>
                    <?php } ?>
                <?php } ?>
            </tr>
        </thead>
        <!-- Body -->
        <tbody>
            <?php foreach ($data['symptoms'] as $col) { ?>
                <tr>
                    <td style="width: 20mm; background-color: #87CEFA; color: #000; text-align: center; border: 1px solid #000; padding: 5px;"
                        colspan="2">
                        <?= $col["MINGGU"] ?>
                    </td>
                    <?php foreach ($data['subHeaders'] as $key => $subHeader) { ?>
                        <?php if (!in_array($key, explode(',', $col["GEJALA"]))) { ?>

                            <td
                                style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                                ✔
                            </td>
                            <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;">
                            </td>
                        <?php } else { ?>
                            <td
                                style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                            </td>
                            <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;">
                                ✔
                            </td>
                        <?php } ?>
                    <?php } ?>

                    <!-- Data Demam -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>