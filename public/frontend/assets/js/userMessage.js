const messageUser = document.getElementById("messageuser");

if (messageUser) {
  if (messageUser.innerHTML.trim() === "wrongPass") {
    Swal.fire({
      title: "Login Gagal",
      text: "Password yang anda masukkan salah!",
      icon: "error",
    });
  } else {
    Swal.fire({
      title: "Login Gagal",
      text: "Username atau email yang anda masukkan salah!",
      icon: "error",
    });
  }
}
