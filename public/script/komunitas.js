function addLike(postingan_id) {
  $.ajax({
    url: "/siaga-bunda/web/public/komunitas/addLike/" + postingan_id,
    type: "GET",
    dataType: "json", // Pastikan respons diparse sebagai JSON
    success: function (response) {
      if (response && response.jumlah_suka !== undefined) {
        // Perbarui jumlah suka
        $("#jumlah-suka-" + postingan_id).text(response.jumlah_suka);

        // Ubah warna ikon menjadi merah
        $("#loveIcon-" + postingan_id)
          .attr("fill", "red")
          .attr("stroke", "red");
      }
    },
    error: function (xhr, status, error) {
      console.error("Terjadi kesalahan:", error);
      console.log(xhr.responseText); // Untuk debugging
    },
  });
}

$(document).ready(function () {
    let timeout; // Variabel untuk menyimpan timeout
  
    $("#search-dropdown").on("input", function () {
      const searchInput = $(this).val(); // Ambil nilai dari input
      console.log("Input: " + searchInput); // Tampilkan nilai input di console
  
      // Hapus timeout sebelumnya jika ada
      clearTimeout(timeout);
  
      // Set timeout baru
      timeout = setTimeout(function () {
          console.log("AJAX request would be sent here with input:", searchInput); // Menandakan bahwa AJAX akan dijalankan
          $.ajax({
            url: "/siaga-bunda/web/public/komunitas/search",
            type: "POST",
            data: { search: searchInput },
            success: function (response) {
              const currentInput = $("#search-dropdown").val();
  
              // Ganti seluruh konten HTML
              document.open(); // Bersihkan dokumen
              document.write(response); // Tulis respons HTML baru
              document.close(); // Selesaikan proses penulisan
  
              // Tetapkan kembali nilai input setelah konten diperbarui
              $("#search-dropdown").val(currentInput);
            },
            error: function (xhr, status, error) {
              console.error("AJAX error:", error); // Tangani kesalahan AJAX
            },
          });
      }, 1000); // Tunggu 2000 ms (2 detik) sebelum mengirim permintaan
    });
  });