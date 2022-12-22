const messageUser = document.getElementById("message-registration-user");

if (messageUser) {
  if (messageUser.innerHTML.trim() === "successRegistration") {
    Swal.fire({
      title: "Registrasi Berhasil",
      text: "Silakan masuk untuk login ke akun Anda!",
      icon: "success",
    });
  }
}
