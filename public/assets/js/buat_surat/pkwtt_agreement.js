const elemSectionsList = document.getElementById("sections_list");
let indexSectionsList = elemSectionsList.children.length;

// submit data
document
    .getElementById("input-letter-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        if (elemSectionsList.children.length === 0) {
            console.info("sections kosong");
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "sections");

            parentElem.appendChild(input);
            elemSectionsList.appendChild(parentElem);
        }

        e.target.submit();
    });

// tambah data sections
function addSectionsData() {
    const parentElem = document.createElement("div");
    parentElem.setAttribute("id", `sections_${indexSectionsList}`);
    parentElem.classList.add("mb-3");

    const label = document.createElement("label");
    label.setAttribute("for", `sections_${indexSectionsList}_title`);

    const parentElemTitle = document.createElement("div");
    parentElemTitle.classList.add("d-flex", "gap-2", "mb-3");

    const inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute("name", `sections[${indexSectionsList}][title]`);
    inputTitle.setAttribute("id", `sections_${indexSectionsList}_title`);
    inputTitle.classList.add("form-control", "fw-bold");
    inputTitle.setAttribute("placeholder", "Masukkan judul pasal...");
    inputTitle.setAttribute("required", "required");
    inputTitle.oninput = function () {
        const id = this.getAttribute("id").split("_")[1];
        onInputSectionsTitle(id, this);
    };

    const iconDelete = document.createElement("i");
    iconDelete.classList.add("fa-solid", "fa-trash");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.setAttribute(
        "id",
        `button_remove_sections_${indexSectionsList}`
    );
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.onclick = function () {
        const id = this.getAttribute("id").split("_")[3];
        removeSectionsData(id);
    };
    buttonDelete.appendChild(iconDelete);

    const inputContent = document.createElement("textarea");
    inputContent.setAttribute(
        "name",
        `sections[${indexSectionsList}][content]`
    );
    inputContent.setAttribute("id", `sections_${indexSectionsList}_content`);
    inputContent.classList.add("ckeditor", "form-control");
    inputContent.setAttribute("rows", "3");

    parentElemTitle.appendChild(inputTitle);
    parentElemTitle.appendChild(buttonDelete);
    parentElem.appendChild(label);
    parentElem.appendChild(parentElemTitle);
    parentElem.appendChild(inputContent);
    elemSectionsList.appendChild(parentElem);

    // add data in preview
    const parent = document.createElement("div");
    parent.setAttribute("id", `sections_${indexSectionsList}_data`);

    const numberOfSections = document.createElement("p");
    numberOfSections.classList.add("mt-3", "fw-bold", "text-center");

    const title = document.createElement("p");
    title.classList.add("fw-bold", "text-center");
    title.setAttribute("id", `sections_${indexSectionsList}_title_data`);
    title.innerText = "[Judul pasal]";

    const content = document.createElement("div");
    content.setAttribute("id", `sections_${indexSectionsList}_content_data`);

    parent.appendChild(numberOfSections);
    parent.appendChild(title);
    parent.appendChild(content);
    document.getElementById("sections_data").appendChild(parent);

    createCKEDITOR(inputContent);
    defineNumberedSections();
    indexSectionsList++;
}

// hapus data sections
function removeSectionsData(index) {
    elemSectionsList.removeChild(document.getElementById(`sections_${index}`));
    document
        .getElementById("sections_data")
        .removeChild(document.getElementById(`sections_${index}_data`));

    defineNumberedSections();
}

function defineNumberedSections() {
    for (let index = 0; index < elemSectionsList.children.length; index++) {
        document.getElementById("sections_list").children[
            index
        ].children[0].innerText = `Pasal ${index + 1}`;
        document.getElementById("sections_data").children[
            index
        ].children[0].innerText = `Pasal ${index + 1}`;
    }
}

// on input sections content
function onInputSectionsTitle(index, elem) {
    let value = "[Judul pasal]";
    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }
    document.getElementById(`sections_${index}_title_data`).innerText = value;
}

// event listener
document.getElementById("first_name").addEventListener("input", function (e) {
    let value = "[Nama pihak pertama]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("first_name_data").innerText = value;
    document.getElementById("first_name_data_2").innerText = value;
});

document
    .getElementById("first_position")
    .addEventListener("input", function (e) {
        let value = "[Jabatan pihak pertama]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("first_position_data").innerText = value;
        document.getElementById("first_position_data_2").innerText = value;
    });

document
    .getElementById("first_address")
    .addEventListener("input", function (e) {
        let value = "[Jabatan pihak pertama]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("first_address_data").innerText = value;
    });

document.getElementById("second_name").addEventListener("input", function (e) {
    let value = "[Nama pihak kedua]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("second_name_data").innerText = value;
    document.getElementById("second_name_data_2").innerText = value;
});

document
    .getElementById("second_place_of_birth")
    .addEventListener("input", function (e) {
        let value = "[Tempat";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("second_place_of_birth_data").innerText = value;
    });

document
    .getElementById("second_date_of_birth")
    .addEventListener("input", function (e) {
        let value = "Tanggal lahir]";
        if (!isNaN(new Date(e.currentTarget.value))) {
            const date = new Date(e.currentTarget.value);
            value = `${date.getDate()} ${
                months[date.getMonth()]
            } ${date.getFullYear()}`;
        }
        document.getElementById("second_date_of_birth_data").innerText = value;
    });

document
    .getElementById("second_address")
    .addEventListener("input", function (e) {
        let value = "[Jabatan pihak pertama]";
        if (e.currentTarget.value.trim() !== "") {
            value = e.currentTarget.value.trim();
        }
        document.getElementById("second_address_data").innerText = value;
    });

document.getElementById("signed_place").addEventListener("input", function (e) {
    let value = "[Tempat";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("signed_place_data").innerText = value;
});

document.getElementById("signed_date").addEventListener("input", function (e) {
    if (!isNaN(new Date(e.currentTarget.value))) {
        const date = new Date(e.currentTarget.value);
        const value = `${date.getDate()} ${
            months[date.getMonth()]
        } ${date.getFullYear()}`;

        document.getElementById("signed_date_day_data").innerText =
            days[date.getDay()];
        document.getElementById("signed_date_data").innerText = value;
        document.getElementById("signed_date_data_2").innerText = value;
    } else {
        document.getElementById("signed_date_day_data").innerText = ".........";
        document.getElementById("signed_date_data").innerText = ".........";
        document.getElementById("signed_date_data_2").innerText =
            "tanggal, bulan, tahun]";
    }
});
