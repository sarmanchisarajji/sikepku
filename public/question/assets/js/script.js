
// Splash Screen==============/
window.addEventListener('load', function() {
  var splash = document.getElementById('splash');
  var navbar = document.getElementById('navbar');

  setTimeout(function() {
    splash.style.display = 'none';
    navbar.style.display = 'none';
  }, 3000);
});



// $(document).ready(function() {
//   $('.card').click(function() {
//     // Menghapus kelas "selected" dari semua card kecuali card yang dipilih
//     $('.card').not(this).removeClass('selected');

//     // Toggle kelas "selected" pada card yang dipilih
//     $(this).toggleClass('selected');

//     // Mengambil nilai card yang dipilih
//     var selectedCard = $(this).attr('id');

//     // Mengirim data ke server menggunakan AJAX
//     $.ajax({
//         url: '/simpan-pilihan',
//         type: 'POST',
//         data: {
//             selectedCard: selectedCard
//         },
//         success: function(response) {
//             console.log(response);
//             // Tambahkan logika atau tindakan lainnya setelah berhasil mengirim data ke server
//         },
//         error: function(xhr, status, error) {
//             console.log(xhr.responseText);
//             // Tambahkan penanganan error jika diperlukan
//         }
//     });
//   });
// });

