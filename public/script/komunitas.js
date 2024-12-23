function addLike(postingan_id) {
  $.ajax({
    url: BASEURL + "komunitas/addLike/" + postingan_id,
    type: "GET",
    dataType: "json", 
    success: function (response) {
      if (response && response.jumlah_suka !== undefined) {
        $("#jumlah-suka-" + postingan_id).text(response.jumlah_suka);        
        $("#loveIcon-" + postingan_id)
          .attr("fill", "red")
          .attr("stroke", "red");
      }
    },
    error: function (xhr, status, error) {
      console.error("Terjadi kesalahan:", error);
      console.log(xhr.responseText); 
    },
  });
}
$('.comment').keyup(function () {
  const box = $(this).closest('.modal-box')
  if (this.value.trim() != "") {
    box.find('#btn-submit').removeClass("btn-disabled")
  } else {
    box.find('#btn-submit').addClass("btn-disabled")
  }
})
$(document).ready(function () {
    let timeout; 
  
    $("#search-dropdown").on("input", function () {
      const searchInput = $(this).val(); 
      console.log("Input: " + searchInput); 
  
      
      clearTimeout(timeout);
  
      
      timeout = setTimeout(function () {
          console.log("AJAX request would be sent here with input:", searchInput); 
          $.ajax({
            url: BASEURL + "komunitas/search",
            type: "POST",
            data: { search: searchInput },
            success: function (response) {
              const currentInput = $("#search-dropdown").val();
  
              
              document.open(); 
              document.write(response); 
              document.close(); 
  
              
              $("#search-dropdown").val(currentInput);
            },
            error: function (xhr, status, error) {
              console.error("AJAX error:", error); 
            },
          });
      }, 1000); 
    });
  });