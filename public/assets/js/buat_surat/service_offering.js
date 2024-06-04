const elemContentsSecondList = document.getElementById("contents_second_list");
let indexContentsSecondList = elemContentsSecondList.children.length;

// submit data
document
    .getElementById("input-letter-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        // jika data optionals kosong, maka submit form utk null kan data optionals
        if (elemContentsSecondList.children.length === 0) {
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "contents[second]");

            parentElem.appendChild(input);
            elemContentsSecondList.appendChild(parentElem);
        }

        e.target.submit();
    });

// tambah deskripsi penawaran
function addDescriptionOffering() {
    const parentElem = document.createElement("div");
    parentElem.setAttribute("id", `contents_second_${indexContentsSecondList}`);
    parentElem.classList.add("mb-3");

    const parentElemTitle = document.createElement("div");
    parentElemTitle.classList.add("d-flex", "gap-2", "mb-3");

    const inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute(
        "name",
        `contents[second][${indexContentsSecondList}][key]`
    );
    inputTitle.setAttribute(
        "id",
        `contents_second_${indexContentsSecondList}_key`
    );
    inputTitle.classList.add("form-control", "fw-bold");
    inputTitle.setAttribute("placeholder", "Masukkan kata kunci...");
    inputTitle.setAttribute("required", "required");
    inputTitle.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputDescriptionOffering(id, this, "key");
    };

    const iconDelete = document.createElement("i");
    iconDelete.classList.add("fa-solid", "fa-trash");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.setAttribute(
        "id",
        `button_remove_contents_second_${indexContentsSecondList}`
    );
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.onclick = function () {
        const id = this.getAttribute("id").split("_")[4];
        removeDescriptionOffering(id);
    };
    buttonDelete.appendChild(iconDelete);

    const inputValue = document.createElement("textarea");
    inputValue.setAttribute(
        "name",
        `contents[second][${indexContentsSecondList}][value]`
    );
    inputValue.setAttribute(
        "id",
        `contents_second_${indexContentsSecondList}_value`
    );
    inputValue.classList.add("form-control");
    inputValue.setAttribute("rows", "3");
    inputValue.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputDescriptionOffering(id, this, "value");
    };

    parentElemTitle.appendChild(inputTitle);
    parentElemTitle.appendChild(buttonDelete);
    parentElem.appendChild(parentElemTitle);
    parentElem.appendChild(inputValue);
    elemContentsSecondList.appendChild(parentElem);

    // add data in preview
    const parent = document.createElement("div");
    parent.setAttribute(
        "id",
        `contents_second_${indexContentsSecondList}_data`
    );

    const listItem = document.createElement("li");
    listItem.classList.add("decimal-number", "fw-bold");
    listItem.setAttribute(
        "id",
        `contents_second_${indexContentsSecondList}_key_data`
    );
    listItem.innerText = "[Kata kunci]";

    const span = document.createElement("span");
    span.classList.add("d-block");
    span.setAttribute(
        "id",
        `contents_second_${indexContentsSecondList}_value_data`
    );
    span.innerText = "[Tuliskan deskripsi untuk mendukung penawaran anda]";

    parent.appendChild(listItem);
    parent.appendChild(span);
    document.getElementById("contents_second_data").appendChild(parent);
    indexContentsSecondList++;
}

// hapus deskripsi penawaran
function removeDescriptionOffering(index) {
    elemContentsSecondList.removeChild(
        document.getElementById(`contents_second_${index}`)
    );
    document
        .getElementById("contents_second_data")
        .removeChild(document.getElementById(`contents_second_${index}_data`));
}

// event listener deskripsi penawaran
function onInputDescriptionOffering(index, elem, key) {
    let value = "";

    switch (key) {
        case "key":
            value = "[Kata kunci]";
            break;
        case "value":
            value = "[Tuliskan deskripsi untuk mendukung penawaran anda]";
            break;
    }

    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }

    document.getElementById(
        `contents_second_${index}_${key}_data`
    ).innerText = `${value}`;
}

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
        let value = "Di tempat";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("recipient_address_data").innerText = value;
    });

document
    .getElementById("contents_first")
    .addEventListener("input", function (e) {
        let value = "";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("contents_first_data").innerText = value;
    });

document
    .getElementById("contents_third")
    .addEventListener("input", function (e) {
        let value = "";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("contents_third_data").innerText = value;
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
