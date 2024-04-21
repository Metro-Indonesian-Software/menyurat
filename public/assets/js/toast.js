function success(message) {
    Swal.fire({
        toast: true,
        icon: "success",
        title: message,
        animation: true,
        position: "bottom-right",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
}

function error(message) {
    Swal.fire({
        toast: true,
        icon: "error",
        title: message,
        animation: true,
        position: "bottom-right",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
}

function info(message) {
    Swal.fire({
        toast: true,
        icon: "info",
        title: message,
        animation: true,
        position: "bottom-right",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
}

function warning(message) {
    Swal.fire({
        toast: true,
        icon: "warning",
        title: message,
        animation: true,
        position: "bottom-right",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
    });
}
