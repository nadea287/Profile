$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".comment_edit_icon").find("i").on("click", function () {
        var a = "contenteditable";
        var edit_btn = $(this);
        var e = edit_btn.parent().parent().parent().find(".comment_body span");
        e.attr(a) === 'true' ? e.attr(a,'false') : e.attr(a, 'true');

        var comment_body = edit_btn.parent().parent().parent().find(".comment_body");

        var inner_target = edit_btn;
        if (inner_target.hasClass("fa-pencil-square-o")) {
            inner_target.removeClass("fa-pencil-square-o");
            inner_target.addClass("fa-check");
            comment_body.css({'border':'1px solid silver'});
        } else {
            inner_target.removeClass("fa-check");
            inner_target.addClass("fa-pencil-square-o");
            comment_body.css({'border':'none'});
        }
        var id = edit_btn.parent().parent().data('id');
        if ( inner_target.hasClass('fa fa-pencil-square-o')) {

        $.ajax({
            url: '/comment/' + id,
            method: 'PATCH',
            data: {'body':e.text()}
        }).done(function (result) {
            swal({
                title: result,
                icon: "success",
                button: "Close",
            });
            comment_body.parent().parent().find(".error").remove();
        }).fail(function (error) {
            console.log(error);
            var messages = error.responseJSON.errors.body
            for(var i in messages) {
                comment_body.parent().parent().append("<div class='error'>" + messages[i] + "</div>")
            }
            e.attr(a) === 'true' ? e.attr(a,'false') : e.attr(a, 'true');
            comment_body.css({'border':'1px solid silver'});
            if (inner_target.hasClass("fa-pencil-square-o")) {
                inner_target.removeClass("fa-pencil-square-o");
                inner_target.addClass("fa-check");
                comment_body.css({'border':'1px solid silver'});
            } else {
                inner_target.removeClass("fa-check");
                inner_target.addClass("fa-pencil-square-o");
                comment_body.css({'border':'none'});
            }
        });
        }
    });
});
