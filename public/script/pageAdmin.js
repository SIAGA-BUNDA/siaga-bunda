// function untuk ganti-ganti konten
function showContent(contentId) {
    document.querySelectorAll('.content-section').forEach((section) => {
        section.classList.add('hidden');
    });

    document.getElementById(contentId).classList.remove('hidden');
    }

    // Default: konten 'Tambah Artikel' bakal muncul pas halaman dimuat
    document.addEventListener('DOMContentLoaded', function () {
    showContent('tambah-artikel');
    });

    function setActiveMenu(element) {
    document.querySelectorAll('ul li').forEach((item) => {
    item.classList.remove('font-bold', 'text-green-950');
    });
    element.classList.add('font-bold', 'text-green-950');
    }