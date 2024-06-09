const elemOrderDetailsList = document.getElementById("order_details_list");
let indexOrderDetailsList = elemOrderDetailsList.children.length;
let numberOfOrderDetails = 1;

// submit data

document
    .getElementById("input-letter-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        if (elemOrderDetailsList.children.length === 0) {
            const parentElem = document.createElement("div");
            parentElem.classList.add("mb-3", "d-none");

            const input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "order_details");

            parentElem.appendChild(input);
            elemOrderDetailsList.appendChild(parentElem);
        }

        e.target.submit();
    });

// tambah data order details
function addOrderDetailsData() {
    const parentElem = document.createElement("div");
    parentElem.setAttribute("id", `order_details_${indexOrderDetailsList}`);

    const parentLabel = document.createElement("div");
    parentLabel.classList.add(
        "d-flex",
        "gap-2",
        "mb-3",
        "justify-content-between"
    );

    const labelProduct = document.createElement("label");
    labelProduct.classList.add("align-self-center", "text-primer");
    labelProduct.innerText = `Barang ${numberOfOrderDetails}`;

    const iconDelete = document.createElement("i");
    iconDelete.classList.add("fa-solid", "fa-trash");

    const buttonDelete = document.createElement("button");
    buttonDelete.setAttribute("type", "button");
    buttonDelete.classList.add("btn", "btn-danger");
    buttonDelete.setAttribute(
        "id",
        `button_remove_order_details_${indexOrderDetailsList}`
    );
    buttonDelete.onclick = function () {
        const id = this.getAttribute("id").split("_")[4];
        removeOrderDetails(id);
    };
    buttonDelete.appendChild(iconDelete);

    const parentData = document.createElement("div");
    parentData.classList.add("row");

    const parentName = document.createElement("div");
    parentName.classList.add("col-lg-4", "mb-3");

    const labelName = document.createElement("label");
    labelName.setAttribute(
        "for",
        `order_details_${indexOrderDetailsList}_name`
    );
    labelName.innerText = "Nama Barang";

    const inputName = document.createElement("input");
    inputName.setAttribute("type", "text");
    inputName.setAttribute(
        "name",
        `order_details[${indexOrderDetailsList}][name]`
    );
    inputName.setAttribute("id", `order_details_${indexOrderDetailsList}_name`);
    inputName.classList.add("form-control");
    inputName.setAttribute("required", "required");
    inputName.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputOrderDetails(id, this, "name");
    };

    const parentQuantity = document.createElement("div");
    parentQuantity.classList.add("col-lg-4", "mb-3");

    const labelQuantity = document.createElement("label");
    labelQuantity.setAttribute(
        "for",
        `order_details_${indexOrderDetailsList}_quantity`
    );
    labelQuantity.innerText = "Jumlah";

    const inputQuantity = document.createElement("input");
    inputQuantity.setAttribute("type", "number");
    inputQuantity.setAttribute(
        "name",
        `order_details[${indexOrderDetailsList}][quantity]`
    );
    inputQuantity.setAttribute(
        "id",
        `order_details_${indexOrderDetailsList}_quantity`
    );
    inputQuantity.classList.add("form-control");
    inputQuantity.setAttribute("required", "required");
    inputQuantity.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputOrderDetails(id, this, "quantity");
    };

    const parentPrice = document.createElement("div");
    parentPrice.classList.add("col-lg-4", "mb-3");

    const labelPrice = document.createElement("label");
    labelPrice.setAttribute(
        "for",
        `order_details_${indexOrderDetailsList}_price`
    );
    labelPrice.innerText = "Harga Satuan";

    const inputPrice = document.createElement("input");
    inputPrice.setAttribute("type", "number");
    inputPrice.setAttribute(
        "name",
        `order_details[${indexOrderDetailsList}][price]`
    );
    inputPrice.setAttribute(
        "id",
        `order_details_${indexOrderDetailsList}_price`
    );
    inputPrice.classList.add("form-control");
    inputPrice.setAttribute("required", "required");
    inputPrice.oninput = function () {
        const id = this.getAttribute("id").split("_")[2];
        onInputOrderDetails(id, this, "price");
    };

    parentLabel.appendChild(labelProduct);
    parentLabel.appendChild(buttonDelete);

    parentName.appendChild(labelName);
    parentName.appendChild(inputName);
    parentQuantity.appendChild(labelQuantity);
    parentQuantity.appendChild(inputQuantity);
    parentPrice.appendChild(labelPrice);
    parentPrice.appendChild(inputPrice);
    parentData.appendChild(parentName);
    parentData.appendChild(parentQuantity);
    parentData.appendChild(parentPrice);

    parentElem.appendChild(parentLabel);
    parentElem.appendChild(parentData);
    elemOrderDetailsList.appendChild(parentElem);

    // add data in preview
    const row = document.createElement("tr");
    row.setAttribute("id", `order_details_${indexOrderDetailsList}_data`);

    const tdNumber = document.createElement("td");
    tdNumber.innerText = `${numberOfOrderDetails}.`;

    const tdName = document.createElement("td");
    tdName.setAttribute(
        "id",
        `order_details_${indexOrderDetailsList}_name_data`
    );

    const tdQuantity = document.createElement("td");
    tdQuantity.setAttribute(
        "id",
        `order_details_${indexOrderDetailsList}_quantity_data`
    );

    const tdPrice = document.createElement("td");
    tdPrice.setAttribute(
        "id",
        `order_details_${indexOrderDetailsList}_price_data`
    );

    row.appendChild(tdNumber);
    row.appendChild(tdName);
    row.appendChild(tdQuantity);
    row.appendChild(tdPrice);
    document.getElementById("order_details_data").appendChild(row);

    indexOrderDetailsList++;
    numberOfOrderDetails++;
}

function removeOrderDetails(index) {
    elemOrderDetailsList.removeChild(
        document.getElementById(`order_details_${index}`)
    );
    document
        .getElementById("order_details_data")
        .removeChild(document.getElementById(`order_details_${index}_data`));

    // perbarui urutan nama barang
    for (let num = 0; num < elemOrderDetailsList.children.length; num++) {
        elemOrderDetailsList.children[
            num
        ].children[0].children[0].innerText = `Barang ${num + 1}`;

        document.getElementById("order_details_data").children[
            num
        ].children[0].innerText = `${num + 1}.`;

        numberOfOrderDetails = num + 2;
    }

    if (elemOrderDetailsList.children.length === 0) {
        numberOfOrderDetails = 1;
    }
}

function onInputOrderDetails(index, elem, key) {
    let value = "";
    if (elem.value.trim() !== "") {
        value = elem.value.trim();
    }
    document.getElementById(`order_details_${index}_${key}_data`).innerText =
        value;
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

document.getElementById("order_number").addEventListener("input", function (e) {
    let value = "[Nomor pesanan anda]";
    if (e.currentTarget.value.trim() !== "") {
        value = e.currentTarget.value.trim();
    }
    document.getElementById("order_number_data").innerText = value;
});

document.getElementById("order_date").addEventListener("input", function (e) {
    let value = "[Tanggal pesanan]";
    if (!isNaN(new Date(e.currentTarget.value))) {
        const date = new Date(e.currentTarget.value);
        value = `${date.getDate()} ${
            months[date.getMonth()]
        } ${date.getFullYear()}`;
    }
    document.getElementById("order_date_data").innerText = value;
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
