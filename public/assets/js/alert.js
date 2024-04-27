function alertSuccess(message) {
    Swal.fire({
        position: "center",
        icon: "success",
        title: message,
        showConfirmButton: false,
        timer: 1500,
    });
}

function alertError(message) {
    Swal.fire({
        position: "center",
        icon: "error",
        title: message,
        showConfirmButton: false,
        timer: 1500,
    });
}

function alertInfo(message) {
    Swal.fire({
        position: "center",
        icon: "info",
        title: "Pemberitahuan",
        text: message,
    });
}

function alertWarning(message) {
    Swal.fire({
        position: "center",
        icon: "warning",
        title: "Pemberitahuan",
        text: message,
    });
}

function confirmDelete(e) {
    Swal.fire({
        title: "Hapus Data?",
        text: "Apakah anda yakin ingin menghapus data ini?",
        icon: "warning",
        showCancelButton: true,
        position: "center",
        confirmButtonColor: "#8538EA",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
    }).then((result) => {
        if (result.isConfirmed) {
            e.submit();
        }
    });

    return false;
}
