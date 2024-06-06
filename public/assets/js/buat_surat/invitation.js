// event listener
document.getElementById("attachment").addEventListener("input", function (e) {
    let value = "[Lampiran]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("attachment_data").innerText = value;
});

document.getElementById("subject").addEventListener("input", function (e) {
    let value = "[Perihal]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("subject_data").innerText = value;
});

document
    .getElementById("recipient_name")
    .addEventListener("input", function (e) {
        let value = "[Tujuan surat]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("recipient_name_data").innerText = value;
    });

document
    .getElementById("recipient_address")
    .addEventListener("input", function (e) {
        let value = "";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("recipient_address_data").innerText = value;
    });

document.getElementById("event_date").addEventListener("input", function (e) {
    let value = "[hari, tanggal]";
    if (!isNaN(new Date(e.currentTarget.value))) {
        const date = new Date(e.currentTarget.value);
        value = `${days[date.getDay()]}, ${date.getDate()} ${
            months[date.getMonth()]
        } ${date.getFullYear()}`;
    }
    document.getElementById("event_date_data").innerText = value;
});

document.getElementById("event_time").addEventListener("input", function (e) {
    let value = "[waktu]";
    if (e.currentTarget.value !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("event_time_data").innerText = value;
});

document.getElementById("event_place").addEventListener("input", function (e) {
    let value = "[tempat]";
    if (e.currentTarget.value !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("event_place_data").innerText = value;
});

document.getElementById("event_name").addEventListener("input", function (e) {
    let value = "[acara]";
    if (e.currentTarget.value !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("event_name_data").innerText = value;
    document.getElementById("event_name_data_2").innerText = value;
});

document.getElementById("signed_date").addEventListener("input", function (e) {
    let value = "[Tanggal]";
    if (!isNaN(new Date(e.currentTarget.value))) {
        const date = new Date(e.currentTarget.value);
        value = `${date.getDate()} ${
            months[date.getMonth()]
        } ${date.getFullYear()}`;
    }
    document.getElementById("signed_date_data").innerText = value;
});

document.getElementById("signed_name").addEventListener("input", function (e) {
    let value = "[Nama yang bertanda tangan]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("signed_name_data").innerText = value;
});

document
    .getElementById("signed_position")
    .addEventListener("input", function (e) {
        let value = "[Jabatan yang bertanda tangan]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("signed_position_data").innerText = value;
    });
