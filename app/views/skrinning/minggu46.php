<body class="bg-[#C1CFA1] flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-wd md:max-w-lg">

        <!-- Logo -->
        <div class="flex justify-center mb-4">
            <img src="<?=BASEURL?>/img/logo.png" alt="SIAGA BUNDA" class="w-20 h-20">
        </div>

        <!-- Title -->
        <h2 class="text-center text-2xl font-bold text-[#4D5A32] mb-6">Verify your email</h2>

        <!-- Form -->
        <form action="<?=BASEURL?>skrinning/minggu46" method="post">
            <!-- USG Button -->
            
            <button type="submit" name="section" value ="usg" class="text-[#4D5A32] text-2xl md:text-3xl">
                USG
            </button>

            <!-- Skrining Kanker Serviks Button -->
            
            <button type="submit" name="section" value="kankerserviks" class="text-[#4D5A32] text-2xl md:text-3xl">
                Skrining Kanker Serviks
            </button>

            <!-- Tes Hormon Kehamilan Button -->
            
            <button type="submit" name="section" value="hormonkehamilan" class="text-[#4D5A32] text-2xl md:text-3xl">
                Tes Hormon Kehamilan melalui darah
            </button>
            
            <!-- Instruksi -->
            <div class="flex items-center justify-center text-sm text-[#4D5A32]">
                <p class="text-center text-xl text-[#4D5A32] mb-6">Kami telah mengirim link verifikasi kepada email anda untuk reset Password. Link tersebut akan kadaluarsa setelah 24 jam</p>   
            </div>
        </form>
    </div>

</body>

<!-- Sections based on the section data passed via POST -->
<?php if (isset($data['section'])): ?>
    <?php if ($data['section'] == 'usg'): ?>
        <section id="usg">
            <h2>USG</h2>
            <p>Content for USG section...</p>
        </section>
    <?php elseif ($data['section'] == 'kankerserviks'): ?>
        <section id="kankerserviks">
            <h2>Skrining Kanker Serviks</h2>
            <p>Content for Skrining Kanker Serviks section...</p>
        </section>
    <?php elseif ($data['section'] == 'hormonkehamilan'): ?>
        <section id="hormonkehamilan">
            <h2>Tes Hormon Kehamilan</h2>
            <p>Content for Tes Hormon Kehamilan section...</p>
        </section>
    <?php endif; ?>
<?php endif; ?>
