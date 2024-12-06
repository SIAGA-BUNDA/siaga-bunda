<body style="margin: 0; padding: 0; font-family: Helvetica, sans-serif;">

    <table style="width: 100%; border-collapse: collapse; margin: 20px auto; max-width: 595px;">
        <!-- 595px adalah lebar A4 dalam piksel -->
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
            <?php foreach ($data['symptoms'] as $key => $col) { ?>
                <tr>
                    <td style="width: 20mm; background-color: #87CEFA; color: #000; text-align: center; border: 1px solid #000; padding: 5px;"
                        colspan="2">
                        <?= $col["MINGGU"] ?>
                    </td>
                    <!-- Data Demam -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                      
                    </td>

                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;">
                        
                    </td>

                    <!-- Data Pusing -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                    </td>

                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;">✔

                    </td>

                    <!-- Data Sulit Tidur -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔
                    </td>

                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Jantung Berdebar -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Risiko TB -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Gerakan Janin -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Nyeri Perut -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Keluar Cairan -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Sakit Saat Kencing -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>

                    <!-- Data Diare Berulang -->
                    <td
                        style="background-color: #C8E6C9; text-align: center; border: 1px solid #000; padding: 5px; font-size : 20px">
                        ✔</td>
                    <td style="background-color: #fca5a5; text-align: center; border: 1px solid #000; padding: 5px;"></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>