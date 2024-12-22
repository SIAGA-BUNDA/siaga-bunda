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
          $("#loveIcon-" + postingan_id).attr("fill", "red").attr("stroke", "red");
        }
      },
      error: function (xhr, status, error) {
        console.error("Terjadi kesalahan:", error);
        console.log(xhr.responseText); // Untuk debugging
      },
    });
  }
  