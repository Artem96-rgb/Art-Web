/************************************************************* burger-menu ****************************************************/


let burger = document.querySelector(".burger");

burger.addEventListener("click", event => {
    event.target.classList.toggle("burger-active");
});

$('.burger').click(function () {
    $('.burger').toggleClass('burger-active');
    $('.main-navigation').toggleClass('nav-active');
});


/************************************************************* map ************************************************************/


function initMap() {
    // The location of Uluru
    const uluru = {
        lat: -25.344,
        lng: 131.036
    };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: uluru,
    });
    // The marker, positioned at Uluru
    // const marker = new google.maps.Marker({
    //     position: uluru,
    //     map: map,
    // });

    var iconBase = '../../wp-content/uploads/2020/11/marker.png';
    var marker = new google.maps.Marker({
        position: uluru,
        map: map,
        icon: iconBase,
    });
}

/************************************************************* slider ************************************************************/

let swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 20,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },

        768: {
            slidesPerView: 5,
        }
    }
});


/************************************************************* Load More On Photos Page  ******************************************/

let batch = 3;
$(".load-item").each(function (index) {
    if (index >= batch) {
        $(this).fadeOut("slow").addClass("hide");
    }
});
$("#loadMore").on("click", function (e) {
    e.preventDefault();
    $(".load-item:hidden").slice(0, 1).slideDown();
    if ($(".load-item:hidden").length == 0) {
        $(this).fadeOut("slow");
    }
});
if ($(".load-item:hidden").length == 0) {
    $("#loadMore").fadeOut("slow");
} else {
    $("#loadMore").fadeIn("slow");
}


/************************************************************* Tabs on the Presentations Page  *************************************/

$(".post-item").isotope({
    // options
    itemSelector: ".s",
});

$(".presentations-tabs__link").click(function () {
    $(".presentations-tabs__link").removeClass("active")
    $(this).addClass("active");

    let selector = $(this).attr("data-filter")
    $(".post-item").isotope({
        filter: selector
    });

    return false
});
