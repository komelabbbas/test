var Delete = function () {

    var handleConfirmation = function() {
        $('[data-confirmation="alert"]').on('click',function() {
            $this = $(this);
            message = $this.data('message')
            
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                        deleteUser($this);
                } 
            });
            return false;
        });
    };

    var deleteUser = function($this){
        var url = $this.attr('href'),token = $this.data('token');
        console.log(url);
        $.ajax({
            type: 'POST',
            data : {_method : 'delete' , _token : token},
            url: url,
            success: function (data) {
                // toastr['success']('User Deleted', "Success");
                console.log(data);
                swal(data.message, {
                    icon: "success",
                  });
                // window.setTimeout('location.reload()', 500);
            },
            error: function (data) {
                new Noty({
                    text: 'There was an error',
                    type: 'error',
                    layout: 'topRight',
                    timeout: 3000,
                    animation: {
                        open: 'animated bounceInRight', // Animate.css class names
                        close: 'animated bounceOutRight' // Animate.css class names
                    }
                }).show()
            }
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleConfirmation();
        }
    };

}();

jQuery(document).ready(function() {
    Delete.init();
});