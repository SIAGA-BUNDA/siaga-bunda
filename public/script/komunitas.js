function addLike(postingan_id) {
    $.ajax({
        url: '/siaga-bunda/web/public/komunitas/addLike/' + postingan_id,
        type: 'GET',
        dataType: 'json', // Tambahkan ini untuk memastikan response diparse sebagai JSON
        success: function(response) {
            if (response && response.jumlah_suka !== undefined) {
                $('#jumlah-suka-' + postingan_id).text(response.jumlah_suka);
            }
        },
        error: function(xhr, status, error) {
            console.error("Terjadi kesalahan:", error);
            console.log(xhr.responseText); // Tambahkan ini untuk debugging
        }
    });
}