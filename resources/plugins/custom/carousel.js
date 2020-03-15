var Delete = function () {

    // ------------------------------------------------------- //
    // Devices
    // ------------------------------------------------------ //
    var handleOwlCarousel = function() {

        $('.category').owlCarousel({
            dots: false,
            nav: true,
            loop: true,
            smartSpeed:500,
            navText: ['<i class="ion-chevron-left" aria-hidden="true"></i>', 
                '<i class="ion-chevron-right" aria-hidden="true"></i>'
            ],
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:7,
                    nav:true
                }
            }
        });
	
    };

    return {
        //main function to initiate the module
        init: function () {
            handleOwlCarousel();
        }
    };

}();

jQuery(document).ready(function() {
    Delete.init();
});