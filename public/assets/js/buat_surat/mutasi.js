// input data
const signedPlace = document.getElementById("signed_place");
const signedDate = document.getElementById("signed_date");
const mutatedName = document.getElementById("mutated_name");
const mutatedPosition = document.getElementById("mutated_position");
const newPosition = document.getElementById("new_position");
const newOfficeLocation = document.getElementById("new_office_location");
const effectiveDate = document.getElementById("effective_date");
const signedName = document.getElementById("signed_name");
const signedPosition = document.getElementById("signed_position");

// data surat
const signedPlaceData = document.getElementById("signed_place_data");
const signedDateData = document.getElementById("signed_date_data");
const mutatedNameData = document.getElementById("mutated_name_data");
const mutatedPositionData = document.getElementById("mutated_position_data");
const newPositionData = document.getElementById("new_position_data");
const newOfficeLocationData = document.getElementById(
    "new_office_location_data"
);
const effectiveDateData = document.getElementById("effective_date_data");
const signedNameData = document.getElementById("signed_name_data");
const signedPositionData = document.getElementById("signed_position_data");
const signedNameData2 = document.getElementById("signed_name_data_2");
const signedPositionData2 = document.getElementById("signed_position_data_2");

// event listener
signedPlace.addEventListener("input", function (e) {
    let value = "[Tempat";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    signedPlaceData.innerText = value;
});

signedDate.addEventListener("input", function (e) {
    let value = "tanggal, bulan, tahun]";
    if (!isNaN(new Date(e.currentTarget.value))) {
        const date = new Date(e.currentTarget.value);
        value = `${date.getDate()} ${
            months[date.getMonth()]
        } ${date.getFullYear()}`;
    }
    signedDateData.innerText = value;
});

mutatedName.addEventListener("input", function (e) {
    let value = "[Nama yang dimutasi]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    mutatedNameData.innerText = value;
});

mutatedPosition.addEventListener("input", function (e) {
    let value = "[Jabatan yang dimutasi]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    mutatedPositionData.innerText = value;
});

newPosition.addEventListener("input", function (e) {
    let value = "[Jabatan baru]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    newPositionData.innerText = value;
});

newOfficeLocation.addEventListener("input", function (e) {
    let value = "[Lokasi kantor baru]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    newOfficeLocationData.innerText = value;
});

effectiveDate.addEventListener("input", function (e) {
    let value = "[hari, tanggal, bulan, tahun]";
    if (!isNaN(new Date(e.currentTarget.value))) {
        const date = new Date(e.currentTarget.value);
        value = `${days[date.getDay()]}, ${date.getDate()} ${
            months[date.getMonth()]
        } ${date.getFullYear()}`;
    }
    effectiveDateData.innerText = value;
});

signedName.addEventListener("input", function (e) {
    let value = "[Nama yang bertanda tangan]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    signedNameData.innerText = value;
    signedNameData2.innerText = value;
});

signedPosition.addEventListener("input", function (e) {
    let value = "[Jabatan yang bertanda tangan]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    signedPositionData.innerText = value;
    signedPositionData2.innerText = value;
});
