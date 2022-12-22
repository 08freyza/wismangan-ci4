const messageStatus = document.getElementById("message-home-user");

if(messageStatus) {
    if (messageStatus.innerHTML.trim() === "successLogin") {
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