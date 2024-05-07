$(document).ready(function () {
    changeProvince();
});

let data = {
    province: $("#default-province").val(),
    region: $("#default-region").val(),
    district: $("#default-district").val(),
    urban_village: $("#default-urban-village").val(),
};

const elemProvince = $("#province");
const elemRegion = $("#region");
const elemDistrict = $("#district");
const elemUrbanVillage = $("#urban_village");

function createOption(elemParent, value, name, currentValue, callback) {
    const childElement = document.createElement("option");
    childElement.setAttribute("value", value);
    childElement.innerText = name;

    if (value == currentValue) {
        childElement.setAttribute("selected", "selected");
        callback();
    }

    elemParent.append(childElement);
}

function removeOption(elemParent) {
    elemParent.children().not(":first").remove();
}

function changeProvince() {
    // get and check updated value
    const updatedValue = elemProvince.val();

    if (data.province !== updatedValue && updatedValue !== "") {
        data = {
            province: updatedValue,
            region: "",
            district: "",
            urban_village: "",
        };
    }

    if (data.province === "") {
        return;
    }

    // set data
    elemProvince.val(data.province);

    // add disabled attribute
    elemRegion.attr("disabled", "disabled");
    elemDistrict.attr("disabled", "disabled");
    elemUrbanVillage.attr("disabled", "disabled");

    //  reset value
    elemRegion.val("");
    elemDistrict.val("");
    elemUrbanVillage.val("");
    removeOption(elemRegion);
    removeOption(elemDistrict);
    removeOption(elemUrbanVillage);

    // get region
    fetch(`${window.origin}/api/geographic/${data.province}/region`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    })
        .then((response) => response.json())
        .then((response) => {
            // remove disabled attribute
            elemRegion.removeAttr("disabled");

            for (let item of response.data) {
                createOption(
                    elemRegion,
                    item.id,
                    `${item.type} ${item.name}`,
                    data.region,
                    function () {
                        changeRegion();
                    }
                );
            }
        });
}

function changeRegion() {
    // get and check updated value
    const updatedValue = elemRegion.val();
    if (data.region !== updatedValue && updatedValue !== "") {
        data = {
            ...data,
            region: elemRegion.val(),
            district: "",
            urban_village: "",
        };
    }

    if (data.region === "") {
        return;
    }

    // add disabled attribute
    elemDistrict.attr("disabled", "disabled");
    elemUrbanVillage.attr("disabled", "disabled");

    //  reset value
    elemDistrict.val("");
    elemUrbanVillage.val("");
    removeOption(elemDistrict);
    removeOption(elemUrbanVillage);

    // get region
    fetch(`${window.origin}/api/geographic/${data.region}/district`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    })
        .then((response) => response.json())
        .then((response) => {
            // remove disabled attribute
            elemDistrict.removeAttr("disabled");

            for (let item of response.data) {
                createOption(
                    elemDistrict,
                    item.id,
                    item.name,
                    data.district,
                    function () {
                        changeDistrict();
                    }
                );
            }
        });
}

function changeDistrict() {
    // check and get updated value
    const updatedValue = elemDistrict.val();
    if (data.district !== updatedValue && updatedValue !== "") {
        data = {
            ...data,
            district: elemDistrict.val(),
            urban_village: "",
        };
    }

    if (data.district === "") {
        return;
    }

    // add disabled attribute
    elemUrbanVillage.attr("disabled", "disabled");

    //  reset value
    elemUrbanVillage.val("");
    removeOption(elemUrbanVillage);

    // get region
    fetch(`${window.origin}/api/geographic/${data.district}/urban-village`, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    })
        .then((response) => response.json())
        .then((response) => {
            // remove disabled attribute
            elemUrbanVillage.removeAttr("disabled");

            for (let item of response.data) {
                createOption(
                    elemUrbanVillage,
                    item.id,
                    item.name,
                    data.urban_village,
                    function () {
                        changeUrbanVillage();
                    }
                );
            }
        });
}

function changeUrbanVillage() {
    // check and get updated value
    data.urban_village = elemUrbanVillage.val();
}
