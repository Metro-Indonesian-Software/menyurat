const elemOptionalsList = document.getElementById("optionals_list");
const elemNewOptionalsList = document.getElementById("new_optionals_list");
const elemConsideringsList = document.getElementById("considerings_list");
const elemRememberingsList = document.getElementById("rememberings_list");

let indexOptionalsList = elemOptionalsList.children.length;
let indexNewOptionalsList = elemNewOptionalsList.children.length;
let indexConsideringsList = elemConsideringsList.children.length;
let indexRememberingsList = elemRememberingsList.children.length;

// size surat
function checkHeightLetter() {
    const parentElem = document.getElementsByClassName("surat")[0];
    const parentBreakElem = document.getElementsByClassName("page-break")[0];
    const width = parentElem.clientWidth;
    const height = parentElem.clientHeight;
    const breakHeight = (width * 29.7) / 21;
    const count = Math.floor(height / breakHeight);
    // remove semua pembatas
    for (let item of parentBreakElem.children) {
        console.info(item);
        parentBreakElem.removeChild(item);
    }
    // create pembatas baru
    for (let index = 1; index <= count; index++) {
        const breakItem = document.createElement("div");
        breakItem.classList.add("page-break-item");
        breakItem.style.height = `${breakHeight * count}px`;
        parentBreakElem.appendChild(breakItem);
    }
}

checkHeightLetter();
const config = { attributes: true, childList: true, subtree: true };
new MutationObserver((mutationList, observer) => {
    checkHeightLetter();
}).observe(document.getElementsByClassName("surat")[0], config);

// submit data
document
    .getElementById("input-letter-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        // jika data optionals kosong, maka submit form utk null kan data optionals
        if (elemOptionalsList.children.length === 0) {
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "optionals");

            parentElem.appendChild(input);
            elemOptionalsList.appendChild(parentElem);
        }

        // jika data new optionals kosong, maka submit form utk null kan data new optionals
        if (elemNewOptionalsList.children.length === 0) {
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "new_optionals");

            parentElem.appendChild(input);
            elemNewOptionalsList.appendChild(parentElem);
        }

        e.target.submit();
    });

// tambah data optional
function addOptionalData() {
    const parentElem = document.createElement("div");
    parentElem.setAttribute("id", `optionals_${indexOptionalsList}`);
    parentElem.classList.add("mb-3");

    const parentElemTitle = document.createElement("div");
    parentElemTitle.classList.add("d-flex", "gap-2", "mb-3");

    const inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute("name", `optionals[${indexOptionalsList}][key]`);
    inputTitle.setAttribute("id", `optionals_${indexOptionalsList}_key`);
    inputTitle.classList.add("form-control", "fw-bold");
    inputTitle.setAttribute("placeholder", "Masukkan kata kunci...");
    inputTitle.setAttribute("required", "required");
    inputTitle.oninput = function () {
        const id = this.getAttribute("id").split("_")[1];
        onInputOptionals(id, this, "key");
    };

    const iconDelete = document.createElement("i");
    iconDelete.classList.add("fa-solid", "fa-trash");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.setAttribute(
        "id",
        `button_remove_optionals_${indexOptionalsList}`
    );
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.onclick = function () {
        const id = this.getAttribute("id").split("_")[3];
        removeOptionalsList(id);
    };
    buttonDelete.appendChild(iconDelete);

    const inputValue = document.createElement("input");
    inputValue.setAttribute("type", "text");
    inputValue.setAttribute("name", `optionals[${indexOptionalsList}][value]`);
    inputValue.setAttribute("id", `optionals_${indexOptionalsList}_value`);
    inputValue.classList.add("form-control");
    inputValue.setAttribute("placeholder", "Masukkan isi...");
    inputValue.setAttribute("required", "required");
    inputValue.oninput = function () {
        const id = this.getAttribute("id").split("_")[1];
        onInputOptionals(id, this, "value");
    };

    parentElemTitle.appendChild(inputTitle);
    parentElemTitle.appendChild(buttonDelete);
    parentElem.appendChild(parentElemTitle);
    parentElem.appendChild(inputValue);
    elemOptionalsList.appendChild(parentElem);

    // add data in preview
    const listItem = document.createElement("li");
    listItem.classList.add("lower-roman-number");
    listItem.setAttribute("id", `optionals_${indexOptionalsList}_data`);

    const row = document.createElement("span");
    row.classList.add("row");

    const spanKey = document.createElement("span");
    spanKey.classList.add("col-3");
    spanKey.setAttribute("id", `optionals_${indexOptionalsList}_key_data`);
    spanKey.innerText = "[Kata kunci semula]";

    const spanValue = document.createElement("span");
    spanValue.classList.add("col");
    spanValue.setAttribute("id", `optionals_${indexOptionalsList}_value_data`);
    spanValue.innerText = ": [Data tambahan semula]";

    row.appendChild(spanKey);
    row.appendChild(spanValue);
    listItem.appendChild(row);
    document.getElementById("optionals_data").appendChild(listItem);
    indexOptionalsList++;
}

// hapus data optionals
function removeOptionalsList(index) {
    elemOptionalsList.removeChild(
        document.getElementById(`optionals_${index}`)
    );
    document
        .getElementById("optionals_data")
        .removeChild(document.getElementById(`optionals_${index}_data`));
}

// event listener optionals
function onInputOptionals(index, elem, key) {
    let value = "";

    switch (key) {
        case "key":
            value = "[Kata kunci semula]";
            break;
        case "value":
            value = "[Data tambahan semula]";
            break;
    }

    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }

    if (key === "value") {
        value = `: ${value}`;
    }

    document.getElementById(
        `optionals_${index}_${key}_data`
    ).innerText = `${value}`;
}

// tambah data new optionals
function addNewOptionalData() {
    const parentElem = document.createElement("div");
    parentElem.setAttribute("id", `new_optionals_${indexNewOptionalsList}`);
    parentElem.classList.add("mb-3");

    const parentElemTitle = document.createElement("div");
    parentElemTitle.classList.add("d-flex", "gap-2", "mb-3");

    const inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute(
        "name",
        `new_optionals[${indexNewOptionalsList}][key]`
    );
    inputTitle.setAttribute("id", `new_optionals_${indexNewOptionalsList}_key`);
    inputTitle.classList.add("form-control", "fw-bold");
    inputTitle.setAttribute("placeholder", "Masukkan kata kunci...");
    inputTitle.setAttribute("required", "required");
    inputTitle.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputNewOptionals(id, this, "key");
    };

    const iconDelete = document.createElement("i");
    iconDelete.classList.add("fa-solid", "fa-trash");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.setAttribute(
        "id",
        `button_remove_new_optionals_${indexNewOptionalsList}`
    );
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.onclick = function () {
        const id = this.getAttribute("id").split("_")[4];
        removeNewOptionalsList(id);
    };
    buttonDelete.appendChild(iconDelete);

    const inputValue = document.createElement("input");
    inputValue.setAttribute("type", "text");
    inputValue.setAttribute(
        "name",
        `new_optionals[${indexNewOptionalsList}][value]`
    );
    inputValue.setAttribute(
        "id",
        `new_optionals_${indexNewOptionalsList}_value`
    );
    inputValue.classList.add("form-control");
    inputValue.setAttribute("placeholder", "Masukkan isi...");
    inputValue.setAttribute("required", "required");
    inputValue.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputNewOptionals(id, this, "value");
    };

    parentElemTitle.appendChild(inputTitle);
    parentElemTitle.appendChild(buttonDelete);
    parentElem.appendChild(parentElemTitle);
    parentElem.appendChild(inputValue);
    elemNewOptionalsList.appendChild(parentElem);

    // add data in preview
    const listItem = document.createElement("li");
    listItem.classList.add("lower-roman-number");
    listItem.setAttribute("id", `new_optionals_${indexNewOptionalsList}_data`);

    const row = document.createElement("span");
    row.classList.add("row");

    const spanKey = document.createElement("span");
    spanKey.classList.add("col-3");
    spanKey.setAttribute(
        "id",
        `new_optionals_${indexNewOptionalsList}_key_data`
    );
    spanKey.innerText = "[Kata kunci baru]";

    const spanValue = document.createElement("span");
    spanValue.classList.add("col");
    spanValue.setAttribute(
        "id",
        `new_optionals_${indexNewOptionalsList}_value_data`
    );
    spanValue.innerText = ": [Data tambahan baru]";

    row.appendChild(spanKey);
    row.appendChild(spanValue);
    listItem.appendChild(row);
    document.getElementById("new_optionals_data").appendChild(listItem);
    indexNewOptionalsList++;
}

// hapus data optionals
function removeNewOptionalsList(index) {
    elemNewOptionalsList.removeChild(
        document.getElementById(`new_optionals_${index}`)
    );
    document
        .getElementById("new_optionals_data")
        .removeChild(document.getElementById(`new_optionals_${index}_data`));
}

// event listener new optionals
function onInputNewOptionals(index, elem, key) {
    let value = "";

    switch (key) {
        case "key":
            value = "[Kata kunci baru]";
            break;
        case "value":
            value = "[Data tambahan baru]";
            break;
    }

    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }

    if (key === "value") {
        value = `: ${value}`;
    }

    document.getElementById(
        `new_optionals_${index}_${key}_data`
    ).innerText = `${value}`;
}

// cek jumlah data menimbang
function checkCountConsiderings() {
    if (indexConsideringsList === 1) {
        // sembunyikan tombol hapus
        document
            .getElementById("button_remove_considerings_data")
            .classList.add("d-none");
    } else {
        // tampilkan tombol hapus
        document
            .getElementById("button_remove_considerings_data")
            .classList.remove("d-none");
    }
}

// tambah data menimbang
function addConsiderings() {
    const parentElem = document.createElement("div");
    parentElem.classList.add("mb-3");

    const label = document.createElement("label");
    label.setAttribute("for", `considerings_${indexConsideringsList}`);
    label.innerText = `Poin ${indexConsideringsList + 1}`;

    const textArea = document.createElement("textarea");
    textArea.setAttribute("name", "considerings[]");
    textArea.setAttribute("id", `considerings_${indexConsideringsList}`);
    textArea.classList.add("form-control");
    textArea.setAttribute("rows", "3");
    textArea.setAttribute("required", "required");
    textArea.oninput = function () {
        const id = this.getAttribute("id").split("_")[1];
        onInputConsiderings(id, this);
    };

    parentElem.appendChild(label);
    parentElem.appendChild(textArea);
    elemConsideringsList.appendChild(parentElem);

    // add preview data
    const listItem = document.createElement("li");
    listItem.setAttribute("id", `considerings_${indexConsideringsList}_data`);
    listItem.classList.add("decimal-number");

    document.getElementById("considerings_data").appendChild(listItem);
    indexConsideringsList++;
    checkCountConsiderings();
}

// hapus data menimbang
function removeConsiderings() {
    elemConsideringsList.removeChild(
        elemConsideringsList.children[indexConsideringsList - 1]
    );

    const consideringsData = document.getElementById("considerings_data");
    consideringsData.removeChild(
        consideringsData.children[indexConsideringsList - 1]
    );
    indexConsideringsList--;
    checkCountConsiderings();
}

// on input considerings
function onInputConsiderings(index, elem) {
    let value = "";
    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }
    document.getElementById(`considerings_${index}_data`).innerText = value;
}

// cek jumlah data mengingat
function checkCountRememberings() {
    if (indexRememberingsList === 1) {
        // sembunyikan tombol hapus
        document
            .getElementById("button_remove_rememberings_data")
            .classList.add("d-none");
    } else {
        // tampilkan tombol hapus
        document
            .getElementById("button_remove_rememberings_data")
            .classList.remove("d-none");
    }
}

// tambah data mengingat
function addRememberings() {
    const parentElem = document.createElement("div");
    parentElem.classList.add("mb-3");

    const label = document.createElement("label");
    label.setAttribute("for", `rememberings_${indexRememberingsList}`);
    label.innerText = `Poin ${indexRememberingsList + 1}`;

    const textArea = document.createElement("textarea");
    textArea.setAttribute("name", "rememberings[]");
    textArea.setAttribute("id", `rememberings_${indexRememberingsList}`);
    textArea.classList.add("form-control");
    textArea.setAttribute("rows", "3");
    textArea.setAttribute("required", "required");
    textArea.oninput = function () {
        const id = this.getAttribute("id").split("_")[1];
        onInputRememberings(id, this);
    };

    parentElem.appendChild(label);
    parentElem.appendChild(textArea);
    elemRememberingsList.appendChild(parentElem);

    // add preview data
    const listItem = document.createElement("li");
    listItem.setAttribute("id", `rememberings_${indexRememberingsList}_data`);
    listItem.classList.add("decimal-number");

    document.getElementById("rememberings_data").appendChild(listItem);
    indexRememberingsList++;
    checkCountRememberings();
}

// hapus data menimbang
function removeRememberings() {
    elemRememberingsList.removeChild(
        elemRememberingsList.children[indexRememberingsList - 1]
    );

    const rememberingsData = document.getElementById("rememberings_data");
    rememberingsData.removeChild(
        rememberingsData.children[indexRememberingsList - 1]
    );
    indexRememberingsList--;
    checkCountRememberings();
}

// on input rememberings
function onInputRememberings(index, elem) {
    let value = "";
    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }
    document.getElementById(`rememberings_${index}_data`).innerText = value;
}

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

document
    .getElementById("employee_name")
    .addEventListener("input", function (e) {
        let value = "[Nama yang bersangkutan]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("employee_name_data").innerText = value;
    });

document.getElementById("position").addEventListener("input", function (e) {
    let value = "[Jabatan semula]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("position_data").innerText = `: ${value}`;
});

document.getElementById("salary").addEventListener("input", function (e) {
    let value = "[Gaji pokok semula]";
    if (e.currentTarget.value.trim() !== "") {
        value = `Rp.${e.currentTarget.value.trim()}`;
    }
    document.getElementById("salary_data").innerText = `: ${value}`;
});

document.getElementById("new_position").addEventListener("input", function (e) {
    let value = "[Jabatan baru]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("new_position_data").innerText = `: ${value}`;
});

document.getElementById("new_salary").addEventListener("input", function (e) {
    let value = "[Gaji pokok semula]";
    if (e.currentTarget.value.trim() !== "") {
        value = `Rp.${e.currentTarget.value.trim()}`;
    }
    document.getElementById("new_salary_data").innerText = `: ${value}`;
});

document
    .getElementById("decidings_first")
    .addEventListener("input", function (e) {
        let value = "";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("decidings_first_data").innerText = value;
    });

document
    .getElementById("decidings_second")
    .addEventListener("input", function (e) {
        let value = "";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("decidings_second_data").innerText = value;
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
