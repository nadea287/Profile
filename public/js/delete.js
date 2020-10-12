$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    swallConfirmDeleteProfile(".profile_delete_btn", 'delete peofile?', '.profile_banner_wrapper', 'profile');
    swallConfirmDelete(".delete_comment", "delete comment?", '.single_comment', 'comment');
    swallConfirmDelete(".delete_post_btn", 'Do you want to delete this post?', '.post-wrapper', 'post');

    function swallConfirmDeleteProfile(button, text, deleteSth, type) {
        $(button).on("click", function () {
            var id = $(this).attr('id');
            var $this = $(this);
            swal({
                title: "Are you sure?",
                text: text,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Your omment has been deleted!", {
                            icon: "success",
                        });
                        $this.closest(deleteSth).remove();
                        deleteItem(type, id);
                        location.href = "/login";
                    }
                }).fail(function (error) {
                console.log(error);
            });

        })
    }

    function swallConfirmDelete(button, text, deleteSth, type) {
        $(button).on("click", function () {
            var id = $(this).attr('id');
            var $this = $(this);
            swal({
                title: "Are you sure?",
                text: text,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Your omment has been deleted!", {
                            icon: "success",
                        });
                        $this.closest(deleteSth).remove();
                        deleteItem(type, id);
                    }
                }).fail(function (error) {
                console.log(error);
            })
        })
    }

    function deleteItem(type, id) {
        $.ajax({
            url: '/' + type + '/' + id,
            method: 'DELETE',
            data: id = id
        }).done(function (result) {

        }).fail(function (error) {
            console.log(error);
        });
    }

});
