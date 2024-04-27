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

    $(".form-select-status").change(function () {
        if (!url.searchParams.has("active")) {
            url.searchParams.append("active", this.value);
        } else {
            url.searchParams.set("active", this.value);
        }

        if (
            url.searchParams.has("active") &&
            url.searchParams.get("active") === ""
        ) {
            url.searchParams.delete("active");
        }

        location.replace(url.href);
    });
});
