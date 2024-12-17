// $('.counter').counterUp({
//   delay: 10,
//   time: 2000
// });
// $('.counter').addClass('animated fadeInDownBig');
// $('h3').addClass('animated fadeIn');


$(".testimonial-carousel").owlCarousel({
  autoplay: true,
  smartSpeed: 1000,
  margin: 25,
  dots: false,
  loop: true,
  nav : true,
  navText : [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>'
  ],
  responsive: {
      0:{
          items:1
      },
      768:{
          items:2
      }
  }
});



        // function openWhatsApp() {
        //     // Recipient's phone number and the pre-filled message
        //     var phoneNumber = "917034449885"; // Example phone number
        //     var message = "Hello%20I%20need%20help"; // Pre-filled message
        //     var url = "https://wa.me/" + phoneNumber + "?text=" + message;
        //     window.open(url, "_blank"); // Open the link in a new tab
        // }


function openWhatsApp() {
    // Set a timer to check if the WhatsApp app is opened, if not, redirect to web version
    var timer = setTimeout(function() {
        window.location.href = "https://web.whatsapp.com/send?phone=917293480856";
    }, 1000);

    // Try opening WhatsApp
    window.location.href = "https://wa.me/917293480856";

    // Clear the timer if WhatsApp opens
    window.onblur = function() {
        clearTimeout(timer);
    };
}
