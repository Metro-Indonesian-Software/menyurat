// event listener
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

document.getElementById("mutated_name").addEventListener("input", function (e) {
    let value = "[Nama yang dimutasi]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("mutated_name_data").innerText = value;
});

document
    .getElementById("mutated_position")
    .addEventListener("input", function (e) {
        let value = "[Jabatan yang dimutasi]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("mutated_position_data").innerText = value;
    });

document.getElementById("new_position").addEventListener("input", function (e) {
    let value = "[Jabatan baru]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("new_position_data").innerText = value;
});

document
    .getElementById("new_office_location")
    .addEventListener("input", function (e) {
        let value = "[Lokasi kantor baru]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("new_office_location_data").innerText = value;
    });

document
    .getElementById("effective_date")
    .addEventListener("input", function (e) {
        let value = "[hari, tanggal, bulan, tahun]";
        if (!isNaN(new Date(e.currentTarget.value))) {
            const date = new Date(e.currentTarget.value);
            value = `${days[date.getDay()]}, ${date.getDate()} ${
                months[date.getMonth()]
            } ${date.getFullYear()}`;
        }
        document.getElementById("effective_date_data").innerText = value;
    });

document.getElementById("signed_name").addEventListener("input", function (e) {
    let value = "[Nama yang bertanda tangan]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("signed_name_data").innerText = value;
    document.getElementById("signed_name_data_2").innerText = value;
});

document
    .getElementById("signed_position")
    .addEventListener("input", function (e) {
        let value = "[Jabatan yang bertanda tangan]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("signed_position_data").innerText = value;
        document.getElementById("signed_position_data_2").innerText = value;
    });
