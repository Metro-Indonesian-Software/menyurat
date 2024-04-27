$(document).ready(function () {
    $.fn.focusOnLastCharacter = function () {
        var input = $(this);
        var value = input.val();
        input.focus().val("").val(value);
    };

    $.fn.updateTitle = function () {
        // get csrf token and define data
        const token = document.head
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
        const commonId = window.location.pathname.split("/")[2];
        const data = { _token: token, title: $(this).val().trim() };

        fetch(`${window.origin}/surat/${commonId}/api`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.status === "success") {
                    success(data.message);

                    const children = $(".letter-title h6").children()[0];
                    $(".letter-title h6").html(`${$(this).val()} `);
                    $(".letter-title h6").append(children);
                } else if (data.status === "error") {
                    error(data.errors.title[0]);
                }
            });
    };

    // $(".letter-title i").click(function () {
    //     $(this).parent().addClass("d-none");
    //     $(this).parent().siblings("input").removeClass("d-none");
    //     $(this).parent().siblings("input").focusOnLastCharacter();
    // });

    let prevTitle = $(".letter-title h6").html().split(" <i")[0].trim();

    $(".letter-title h6").click(function () {
        $(this).addClass("d-none");
        $(this).siblings("input").removeClass("d-none");
        $(this).siblings("input").focusOnLastCharacter();
    });

    $(".letter-title input").focusout(function (event) {
        $(this).siblings("h6").removeClass("d-none");
        $(this).addClass("d-none");

        if ($(this).val().trim() !== prevTitle) {
            prevTitle = $(this).val().trim();
            $(this).updateTitle();
        }
    });

    $(".letter-title input").keyup(function (event) {
        if (event.which === 13) {
            $(this).siblings("h6").removeClass("d-none");
            $(this).addClass("d-none");
        }
    });
});
