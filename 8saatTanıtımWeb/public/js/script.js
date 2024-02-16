// ******    *******
//   **      ** * **
//   **  **  **   **

function openItem(item) {
    var status = document.getElementById(item).style.display;
    if (status == "block") {
        document.getElementById(item).style.display = "none";
    } else {
        document.getElementById(item).style.display = "block";
    }
}
$(".slickGenerateMainClass").slick({
    infinite: true,
    slidesToShow: 4,
    arrows: false,
    dots: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

function okays() {
    Swal.fire({
        title: "Başvuru Kaydınız Alınmıştır!",
        text: "Başvurunuz Tamamlanmıştır En Kısa Sürede Sizinle İletişime Geçilecektir!",
        icon: "success",
        showConfirmButton: false,
        timer: 1500,
    });
}

function sender() {
    Swal.fire({
        title: "Mesajınız Gönderilmiştir!",
        text: "En Kısa zamanda Size Geri Bildirim verilecektir",
        icon: "success",
        showConfirmButton: false,
        timer: 1500,
    });
}
