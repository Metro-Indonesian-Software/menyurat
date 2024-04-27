$(document).ready(function () {
    // on submit create letter
    $("#create-selected-letter").submit(function (e) {
        e.preventDefault();
        e.currentTarget.action = `/surat/${selectedLetterSlug}`;
        this.submit();
    });

    // on submit update number of letter
    $("#update-number-of-letter").submit(function (e) {
        e.preventDefault();
        e.currentTarget.action = `/surat/${selectedLetterIdNumber}`;
        this.submit();
    });
});

let selectedLetterSlug = null;
let selectedLetterIdNumber = null;

function createSelectedLetter(slug) {
    $("#create-selected-letter #title").val("");
    selectedLetterSlug = slug;
}

function updateNumberOfLetter(id) {
    $("#update-number-of-letter #number_of_letter").val("");
    selectedLetterIdNumber = id;
}
