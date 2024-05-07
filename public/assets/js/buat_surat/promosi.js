const elemOptionalData = document.getElementById("optional_data");
const elemNewOptionalData = document.getElementById("new_optional_data");
const elemConsideringsData = document.getElementById("considerings_data");
const elemRememberingsData = document.getElementById("rememberings_data");

let indexOptionalData = elemOptionalData.children.length;
let indexNewOptionalData = elemNewOptionalData.children.length;
let indexConsideringsData = elemConsideringsData.children.length;
let indexRememberingsData = elemRememberingsData.children.length;

// submit data
document
    .getElementById("input-letter-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        // jika data optionals kosong, maka submit form utk null kan data optionals
        if (elemOptionalData.children.length === 0) {
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "optionals");

            parentElem.appendChild(input);
            elemOptionalData.appendChild(parentElem);
        }

        // jika data new optionals kosong, maka submit form utk null kan data new optionals
        if (elemNewOptionalData.children.length === 0) {
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "new_optionals");

            parentElem.appendChild(input);
            elemNewOptionalData.appendChild(parentElem);
        }

        e.target.submit();
    });

// tambah data optional
function addOptionalData() {
    const parentElem = document.createElement("div");
    parentElem.classList.add("mb-3");

    const parentElemTitle = document.createElement("div");
    parentElemTitle.classList.add("d-flex", "gap-2", "mb-3");

    const inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute("name", `optionals[${indexOptionalData}][key]`);
    inputTitle.classList.add("form-control", "fw-bold");
    inputTitle.setAttribute("id", `optionals-${indexOptionalData}-key`);
    inputTitle.setAttribute("placeholder", "Masukkan judul...");
    inputTitle.setAttribute("required", "required");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.onclick = function () {
        elemOptionalData.removeChild(this.parentNode.parentNode);
    };
    buttonDelete.innerText = "Hapus";

    const inputValue = document.createElement("input");
    inputValue.setAttribute("type", "text");
    inputValue.setAttribute("name", `optionals[${indexOptionalData}][value]`);
    inputValue.classList.add("form-control");
    inputValue.setAttribute("id", `optionals-${indexOptionalData}-value`);
    inputValue.setAttribute("placeholder", "Masukkan isi...");
    inputValue.setAttribute("required", "required");

    parentElemTitle.appendChild(inputTitle);
    parentElemTitle.appendChild(buttonDelete);
    parentElem.appendChild(parentElemTitle);
    parentElem.appendChild(inputValue);
    elemOptionalData.appendChild(parentElem);

    indexOptionalData++;
}

// hapus data optionals
function removeOptionalData(elem) {
    elemOptionalData.removeChild(elem.parentNode.parentNode);
}

// hapus data old optionals
function removeOldOptionalData(elem) {
    elemOptionalData.removeChild(elem.parentNode.parentNode.parentNode);
}

// tambah data new optionals
function addNewOptionalData() {
    const parentElem = document.createElement("div");
    parentElem.classList.add("mb-3");

    const parentElemTitle = document.createElement("div");
    parentElemTitle.classList.add("d-flex", "gap-2", "mb-3");

    const inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute(
        "name",
        `new_optionals[${indexNewOptionalData}][key]`
    );
    inputTitle.classList.add("form-control", "fw-bold");
    inputTitle.setAttribute("id", `new_optionals-${indexNewOptionalData}-key`);
    inputTitle.setAttribute("placeholder", "Masukkan judul...");
    inputTitle.setAttribute("required", "required");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.onclick = function () {
        elemNewOptionalData.removeChild(this.parentNode.parentNode);
    };
    buttonDelete.innerText = "Hapus";

    const inputValue = document.createElement("input");
    inputValue.setAttribute("type", "text");
    inputValue.setAttribute(
        "name",
        `new_optionals[${indexNewOptionalData}][value]`
    );
    inputValue.classList.add("form-control");
    inputValue.setAttribute(
        "id",
        `new_optionals-${indexNewOptionalData}-value`
    );
    inputValue.setAttribute("placeholder", "Masukkan isi...");
    inputValue.setAttribute("required", "required");

    parentElemTitle.appendChild(inputTitle);
    parentElemTitle.appendChild(buttonDelete);
    parentElem.appendChild(parentElemTitle);
    parentElem.appendChild(inputValue);
    elemNewOptionalData.appendChild(parentElem);

    indexNewOptionalData++;
}

// hapus data optionals
function removeNewOptionalData(elem) {
    elemNewOptionalData.removeChild(elem.parentNode.parentNode);
}

// hapus data old optionals
function removeOldNewOptionalData(elem) {
    elemNewOptionalData.removeChild(elem.parentNode.parentNode.parentNode);
}

// cek jumlah data menimbang
function checkCountConsiderings() {
    if (indexConsideringsData === 1) {
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
    label.setAttribute("for", `considerings-${indexConsideringsData}`);
    label.innerText = `Poin ${indexConsideringsData + 1}`;

    const textArea = document.createElement("textarea");
    textArea.setAttribute("name", "considerings[]");
    textArea.classList.add("form-control");
    textArea.setAttribute("id", `considerings-${indexConsideringsData}`);
    textArea.setAttribute("rows", "3");
    textArea.setAttribute("required", "required");

    parentElem.appendChild(label);
    parentElem.appendChild(textArea);
    elemConsideringsData.appendChild(parentElem);
    indexConsideringsData++;

    checkCountConsiderings();
}

// hapus data menimbang
function removeConsiderings() {
    elemConsideringsData.removeChild(
        elemConsideringsData.children[indexConsideringsData - 1]
    );
    indexConsideringsData--;

    checkCountConsiderings();
}

// cek jumlah data mengingat
function checkCountRememberings() {
    if (indexRememberingsData === 1) {
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
    label.setAttribute("for", `rememberings-${indexRememberingsData}`);
    label.innerText = `Poin ${indexRememberingsData + 1}`;

    const textArea = document.createElement("textarea");
    textArea.setAttribute("name", "rememberings[]");
    textArea.classList.add("form-control");
    textArea.setAttribute("id", `rememberings-${indexRememberingsData}`);
    textArea.setAttribute("rows", "3");
    textArea.setAttribute("required", "required");

    parentElem.appendChild(label);
    parentElem.appendChild(textArea);
    elemRememberingsData.appendChild(parentElem);
    indexRememberingsData++;

    checkCountRememberings();
}

// hapus data menimbang
function removeRememberings() {
    elemRememberingsData.removeChild(
        elemRememberingsData.children[indexRememberingsData - 1]
    );
    indexRememberingsData--;

    checkCountRememberings();
}
