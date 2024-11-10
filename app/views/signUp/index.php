<?php if (!empty($data['user'])): ?>
    <h1>DATA USER</h1>
    <?php foreach($data['user'] as $user): ?>
        <ul>
            <li><?= $user['NAMA']; ?></li>
        </ul>
    <?php endforeach; ?>
<?php else: ?>
    <p>Data user tidak ditemukan.</p>
<?php endif; ?>
    