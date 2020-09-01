$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function confirmDelete(button, text) {
        $(button).on("click", function () {
            var response = confirm(text);
            if (!response) return false;
        });
    }

    confirmDelete(".delete_post_btn", 'Do you want to delete this post?');

    $(document).on("click", ".delete_post_btn", function () {
        var id = $(this).attr('id');
        var delete_btn = $(this);
        if (confirmDelete) {
            delete_btn.closest('.post-wrapper').remove();
            $.ajax({
               url: '/post/' + id,
                method: 'DELETE',
                data: id = id
            }).done(function (result) {

            }).fail(function (error) {
                console.log(error);
            });
        } else return false;
    });

    confirmDelete('.profile_delete_btn', 'Do you want to delete your profile?');
    $(document).on("click", ".profile_delete_btn", function () {
        var id = $(this).attr('id');
        var delete_btn = $(this);
        if (confirmDelete) {
            delete_btn.closest('.profile_banner_wrapper').remove();
            $.ajax({
                url: '/profile/' + id,
                method:'DELETE',
                data: id = id
            }).done(function (result) {
                console.log(result);
            }).fail(function (error) {
                console.log(error);
            });
        } else return false;

        location.href = "/login";
    });


});
