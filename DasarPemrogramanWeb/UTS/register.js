// Fungsi untuk menangani registrasi
document
  .getElementById("registerForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah submit default

    const username = document.getElementById("regUsername").value;
    const password = document.getElementById("regPassword").value;

    if (username === "" || password === "") {
      alert("Username dan password harus diisi!");
      return;
    }

    if (localStorage.getItem(username)) {
      alert("Username sudah terdaftar!");
    } else {
      localStorage.setItem(username, password);
      alert("Registrasi berhasil! Silakan login.");
    }

    document.getElementById("registerForm").reset();
  });

document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("loginUsername").value;
    const password = document.getElementById("loginPassword").value;

    const storedPassword = localStorage.getItem(username);

    if (storedPassword === password) {
      alert("Login berhasil! ");
      console.log("Silahkan menuju ke halaman utama");
      window.location.href = "homePage.html";
    } else {
      alert("Login gagal! Username atau password salah.");
    }

    document.getElementById("loginForm").reset();
 });
