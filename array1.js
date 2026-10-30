let buah = ["mangga", "jeruk"];

console.log(buah[0]);

buah.unshift("apel"); // menambahkan element di awal array
buah.slice(2, 0, "semangka"); // menambahkan element di index 2
buah.push("pisang"); // menambahkan element di akhir array
console.log("Buah setelah di makan:", buah);

buah.shift(); // menghapus element di awal array
buah.slice(1, 1); // menghapus element di index 1
buah.pop();// menghapus element di akhir array
console.log("Buah setelah di hapus:", buah);




let orang = ["Budi", "siti"];
orang.unshift("Roni");// menambahkan element di awal array
orang.push("Dewi");
orang.splice(0, 1); // menghapus element di index 0
console.log("Hasil akhir:", orang);

