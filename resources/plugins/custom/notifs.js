var Notifs = function () {

    var handleNotifs = function(){
        
        var notify = $('.notify'),
            type = notify.data('notify'),
            message = notify.data('message'),
            title = notify.data('title');
            
            if(type == 'danger') {
                type = 'error';
            }

        if(!message == ''){
            new Noty({
                text: message,
                type: type,
                layout: 'topRight',
                timeout: 3000,
                animation: {
                    open: 'animated bounceInRight', // Animate.css class names
                    close: 'animated bounceOutRight' // Animate.css class names
                }
            }).show()
        }
    };

    return {

        //main function to initiate the module
        init: function () {
            handleNotifs();
        },
    };

}();

jQuery(document).ready(function() {
    Notifs.init();
});