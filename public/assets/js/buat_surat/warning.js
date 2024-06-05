// event listener
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
        let value = "[Nama penerima]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("recipient_name_data").innerText = value;
    });

document
    .getElementById("recipient_position")
    .addEventListener("input", function (e) {
        let value = "[Jabatan penerima]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("recipient_position_data").innerText = value;
    });

document
    .getElementById("violation_date")
    .addEventListener("input", function (e) {
        let value = "[tanggal pelanggaran]";
        if (!isNaN(new Date(e.currentTarget.value))) {
            const date = new Date(e.currentTarget.value);
            value = `${date.getDate()} ${
                months[date.getMonth()]
            } ${date.getFullYear()}`;
        }
        document.getElementById("violation_date_data").innerText = value;
    });

document
    .getElementById("violation_description")
    .addEventListener("input", function (e) {
        let value = "[deskripsi pelanggaran]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("violation_description_data").innerText = value;
    });

document.getElementById("signed_place").addEventListener("input", function (e) {
    let value = "[Tempat";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("signed_place_data").innerText = value;
});

document.getElementById("signed_date").addEventListener("input", function (e) {
    let value = "tanggal, bulan, tahun]";
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
