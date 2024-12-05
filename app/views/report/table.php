<?php if (in_array("RISIKO TB", $data)) { ?>
    <tr>
        masuk
    </tr>
<?php } ?>
<!-- row for Demam Lebih Dari Dua Hari -->
<tr>
    <th>Demam Lebih Dari Dua Hari</th>
    <td>
        <?= in_array('DEMAM LEBIH DUA HARI', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Pusing/Sakit Kepala Berat -->
<tr>
    <th>Pusing/Sakit Kepala Berat</th>
    <td>
        <?= in_array('PUSING', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Sulit Tidur/Cemas Berlebih -->
<tr>
    <th>Sulit Tidur/Cemas Berlebih</th>
    <td>
        <?= in_array('SULIT TIDUR/CEMAS BERLEBIH', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Jantung Berdebar/Nyeri di Dada -->
<tr>
    <th>Jantung Berdebar/Nyeri di Dada</th>
    <td>
        <?= in_array('JATUNG BERDEBAR/NYERI DI DADA', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Risiko TB -->
<tr>
    <th>Risiko TB</th>
    <td>
        <?=
            in_array('RISIKO TB', $data) ?
            'Batuk lebih dari 2 minggu atau kontak serumah dengan penderita TB' : 'tidak ada'
            ?>
    </td>
</tr>
<!-- row for Gerakan Janin -->
<tr>
    <th>Gerakan Janin</th>
    <td>
        <?= in_array('GERAKAN JANIN', $data) ?
            'tidak ada gerakan janin atau <10 kali dalam 12 jam' : 'Gerakan Janin >10 kali dalam 12 jam' ?>
    </td>
</tr>
<!-- row for Nyeri Perut Hebat -->
<tr>
    <th>Nyeri Perut Hebat</th>
    <td>
        <?= in_array('NYERI PERUT HEBAT', $data) ?
            'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Keluar Cairan dari Jalan Lahir -->
<tr>
    <th>Keluar Cairan dari Jalan Lahir</th>
    <td>
        <?= in_array('KELUAR CAIRAN DARI JALAN LAHIR', $data) ?
            'Sangat banyak atau berbau' : 'Tidak ada/ Ada dalam jumlah sedikit dan tidak berbau' ?>
    </td>
</tr>
<!-- row for Sakit Saat Kencing -->
<tr>
    <th>Sakit Saat Kencing</th>
    <td>
        <?= in_array('SAKIT SAAT KENCING', $data) ?
            'Sakit saat kencing atau keluar keputihan atau gatal di daerah kemaluan' : 'Tidak ada' ?>
    </td>
</tr>
<!-- row for Diare Berulang -->
<tr>
    <th>Diare Berulang</th>
    <td>
        <?= in_array('DIARE BERULANG', $data) ?
            'ada' : 'tidak ada' ?>
    </td>
</tr>