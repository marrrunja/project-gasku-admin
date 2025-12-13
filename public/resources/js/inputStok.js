const tambah = document.getElementById("btn-tambah");
const kurang = document.getElementById("btn-kurang");
const input = document.querySelector("input[name = jumlahGas]");

const KEYDOWN_ALLOWED_KEYS = [
  "Control",
  "Alt",
  "Shift",
  "Tab",
  "ArrowUp",
  "ArrowDown",
  "ArrowLeft",
  "ArrowRight",
  "Home",
  "End",
  "PageUp",
  "PageDown",
  "Backspace",
  "Delete",
];

let i = 0;

function isNumber(char) {
  return char >= "0" && char <= "9";
}

input.addEventListener("keydown", function(e) {
  if (isNumber(e.key)) {
    // Biarkan karakter angka tetap bisa diketik
  } else if (KEYDOWN_ALLOWED_KEYS.includes(e.key)) {
    // Biarkan tombol tertentu seperti navigasi dan hapus tetap bisa dipakai
  } else {
    // Cegah input selain angka dan tombol yang diizinkan
    e.preventDefault();
  }
});

input.addEventListener("input", function() {
  // Ketika pengguna mengetikkan nilai, pastikan itu adalah angka atau kosong
  const inputValue = input.value;
  if (!inputValue || !isNaN(inputValue)) {
    i = parseInt(inputValue) || 0; // Ubah nilai input menjadi angka
  } else {
    input.value = i; // Kembalikan ke nilai yang valid jika input tidak valid
  }
});

tambah.addEventListener("click", function() {
  if (i < 30) {
    i++;
    input.value = i;
  }
});

kurang.addEventListener("click", function() {
  if (i > 0) {
    i--;
    input.value = i;
  } else {
    input.value = 0; // Pastikan nilai input tidak kosong
  }
});
