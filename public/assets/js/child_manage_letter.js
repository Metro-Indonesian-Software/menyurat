$(document).ready(function () {
    const url = new URL(window.location.href);
    $(".form-select-order").change(function () {
        if (!url.searchParams.has("orderBy")) {
            url.searchParams.append("orderBy", this.value);
        } else {
            url.searchParams.set("orderBy", this.value);
        }
        location.replace(url.href);
    });

    // on submit update number of letter
    $("#update-number-of-letter").submit(function (e) {
        e.preventDefault();
        e.currentTarget.action = `/surat/${selectedLetterIdNumber}`;
        this.submit();
    });
});

let selectedLetterIdNumber = null;

function updateNumberOfLetter(id) {
    $("#update-number-of-letter #number_of_letter").val("");
    selectedLetterIdNumber = id;
}
