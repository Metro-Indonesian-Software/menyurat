$(document).ready(function () {
    // on submit create letter
    $("#create-selected-letter").submit(function (e) {
        e.preventDefault();
        e.currentTarget.action = `surat/${selectedLetterSlug}`;
        console.log(e.currentTarget.action);
        this.submit();
    });
});

let selectedLetterSlug = null;

function createSelectedLetter(id) {
    $("#create-selected-letter #title").val("");
    selectedLetterSlug = id;
}
