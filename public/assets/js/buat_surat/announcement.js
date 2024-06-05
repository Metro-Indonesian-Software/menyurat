const elemContentsSecondList = document.getElementById("contents_second_list");
let indexContentsSecondList = elemContentsSecondList.children.length;

// submit data
document
    .getElementById("input-letter-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        if (indexContentsSecondList === 0) {
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

function checkCountContentsSecond() {
    if (indexContentsSecondList === 0) {
        document
            .getElementById("button_remove_contents_second_data")
            .classList.add("d-none");
    } else {
        document
            .getElementById("button_remove_contents_second_data")
            .classList.remove("d-none");
    }
}

// tambah detail pemberitahuan
function addDetailAnnouncement() {
    const parentElem = document.createElement("div");
    parentElem.classList.add("mb-3");

    const label = document.createElement("label");
    label.setAttribute("for", `contents_second_${indexContentsSecondList}`);
    label.innerText = `Poin ${indexContentsSecondList + 1}`;

    const textarea = document.createElement("textarea");
    textarea.setAttribute("name", "contents[second][]");
    textarea.setAttribute("id", `contents_second_${indexContentsSecondList}`);
    textarea.classList.add("form-control");
    textarea.setAttribute("rows", "3");
    textarea.setAttribute("required", "required");
    textarea.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputDetailAnnouncement(id, this);
    };

    parentElem.appendChild(label);
    parentElem.appendChild(textarea);
    elemContentsSecondList.appendChild(parentElem);

    // add data in preview
    const listItem = document.createElement("li");
    listItem.setAttribute(
        "id",
        `contents_second_${indexContentsSecondList}_data`
    );
    listItem.classList.add("decimal-number");

    document.getElementById("contents_second_data").appendChild(listItem);
    indexContentsSecondList++;
    checkCountContentsSecond();
}

// hapus detail pemberitahuan
function removeDetailAnnouncement() {
    elemContentsSecondList.removeChild(
        elemContentsSecondList.children[indexContentsSecondList - 1]
    );

    const contentsSecondData = document.getElementById("contents_second_data");
    contentsSecondData.removeChild(
        contentsSecondData.children[indexContentsSecondList - 1]
    );
    indexContentsSecondList--;
    checkCountContentsSecond();
}

// on input detail pemberitahuan
function onInputDetailAnnouncement(index, elem) {
    let value = "";
    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }
    document.getElementById(`contents_second_${index}_data`).innerText = value;
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
        let value = "";
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
