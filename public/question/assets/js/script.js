// JavaScript
var selectedCard = null;

function toggleCardSelection(cardId) {
  var card = document.getElementById(cardId);

  if (card === selectedCard) {
    // Unselect the card
    card.classList.remove("selected");
    selectedCard = null;
  } else {
    // Select the card and unselect the previously selected card (if any)
    if (selectedCard !== null) {
      selectedCard.classList.remove("selected");
    }

    card.classList.add("selected");
    selectedCard = card;
  }
}

// Event listeners for card click
document.getElementById("card-1").addEventListener("click", function() {
  toggleCardSelection("card-1");
});
document.getElementById("card-2").addEventListener("click", function() {
  toggleCardSelection("card-2");
});
document.getElementById("card-3").addEventListener("click", function() {
  toggleCardSelection("card-3");
});
document.getElementById("card-4").addEventListener("click", function() {
  toggleCardSelection("card-4");
});
document.getElementById("card-5").addEventListener("click", function() {
  toggleCardSelection("card-5");
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

