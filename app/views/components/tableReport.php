<!-- row for Demam Lebih Dari Dua Hari -->
<tr>
    <th>Demam Lebih Dari Dua Hari</th>
    <td class="<?= in_array('Demam', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Demam', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Pusing/Sakit Kepala Berat -->
<tr>
    <th>Pusing/Sakit Kepala Berat</th>
    <td class="<?= in_array('Pusing', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Pusing', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Sulit Tidur/Cemas Berlebih -->
<tr>
    <th>Sulit Tidur/Cemas Berlebih</th>
    <td class="<?= in_array('Sulit Tidur', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Sulit Tidur', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Jantung Berdebar/Nyeri di Dada -->
<tr>
    <th>Jantung Berdebar/Nyeri di Dada</th>
    <td class="<?= in_array('Jantung Berdebar', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Jantung Berdebar', $data) ? 'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Risiko TB -->
<tr>
    <th>Risiko TB</th>
    <td class="<?= in_array('Risiko TB', $data) ? 'text-red-400' : '' ?>">
        <?=
            in_array('Risiko TB', $data) ?
            'Batuk lebih dari 2 minggu atau kontak serumah dengan penderita TB' : 'tidak ada'
            ?>
    </td>
</tr>
<!-- row for Gerakan Janin -->
<tr>
    <th>Gerakan Janin</th>
    <td class="<?= in_array('Gerakan Janin', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Gerakan Janin', $data) ?
            'tidak ada gerakan janin atau <10 kali dalam 12 jam' : 'Gerakan Janin >10 kali dalam 12 jam' ?>
    </td>
</tr>
<!-- row for Nyeri Perut Hebat -->
<tr>
    <th>Nyeri Perut Hebat</th>
    <td class="<?= in_array('Nyeri Perut', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Nyeri Perut', $data) ?
            'ada' : 'tidak ada' ?>
    </td>
</tr>
<!-- row for Keluar Cairan dari Jalan Lahir -->
<tr>
    <th>Keluar Cairan dari Jalan Lahir</th>
    <td class="<?= in_array('Keluar Cairan', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Keluar Cairan', $data) ?
            'Sangat banyak atau berbau' : 'Tidak ada/ Ada dalam jumlah sedikit dan tidak berbau' ?>
    </td>
</tr>
<!-- row for Sakit Saat Kencing -->
<tr>
    <th>Sakit Saat Kencing</th>
    <td class="<?= in_array('Sakit Kencing', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Sakit Kencing', $data) ?
            'Sakit saat kencing atau keluar keputihan atau gatal di daerah kemaluan' : 'Tidak ada' ?>
    </td>
</tr>
<!-- row for Diare Berulang -->
<tr>
    <th>Diare Berulang</th>
    <td class="<?= in_array('Diare', $data) ? 'text-red-400' : '' ?>">
        <?= in_array('Diare', $data) ?
            'ada' : 'tidak ada' ?>
    </td>
</tr>