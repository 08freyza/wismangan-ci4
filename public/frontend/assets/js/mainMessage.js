const message = document.getElementById("message-notify-frontend");

if (message) {
    if (message.innerHTML.trim() === "successRegistration") {
        Swal.fire({
            title: "Registrasi Berhasil",
            text: "Silakan masuk ke akun Anda",
            icon: "success",
        });
    } else if (message.innerHTML.trim() === "wrongPassword") {
        Swal.fire({
            title: "Login Gagal",
            text: "Password yang anda masukkan salah",
            icon: "error",
        });
    } else if (message.innerHTML.trim() === "wrongEmailUsername") {
        Swal.fire({
            title: "Login Gagal",
            text: "Email atau username yang anda masukkan salah!",
            icon: "error",
        });
    } else if (message.innerHTML.trim() === "successLogin") {
        Swal.fire({
            title: "Login Berhasil",
            icon: "success",
        });
    } else {
        Swal.fire({
            title: "Logout Berhasil",
            icon: "success",
        });
    }
}