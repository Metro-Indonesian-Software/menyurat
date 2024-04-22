$(document).ready(function () {
    const scrollStep = 150; // Jarak scroll per langkah (sesuaikan dengan kebutuhan Anda)

    $("#scrollRightButton").click(function () {
        $(".scrolling-wrapper").animate(
            {
                scrollLeft: "+=" + scrollStep,
            },
            500
        ); // Waktu animasi (ms)
    });

    $("#scrollLeftButton").click(function () {
        $(".scrolling-wrapper").animate(
            {
                scrollLeft: "-=" + scrollStep,
            },
            500
        ); // Waktu animasi (ms)
    });

    // on submit create letter
    $("#create-blank-letter").submit(function (e) {
        e.preventDefault();

        const type = $("#type").val();

        if (type === null || type === "") {
            alertWarning(
                "Anda belum memilih template surat, silahkan pilih template surat terlebih dahulu"
            );
            return;
        }

        this.submit();
    });
});

let selectedLetterId = null;

function createBlankLetter(id) {
    const element = $(`#${id}`);
    const selectedElement = $(`#${selectedLetterId}`);

    if (selectedLetterId === id) {
        return;
    }

    // remove class selected
    selectedElement.removeClass("selected-image");
    element.addClass("selected-image");
    selectedLetterId = id;

    // set letter type value
    $("#type").val(element.children("p").html());
}
