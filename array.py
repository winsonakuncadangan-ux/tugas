buah = ["mangga", "jeruk"]

print(buah[1])

buah.insert(1, "apelhijau") # menambahkan element di index x
buah.insert(0, "apelmerah") # menambahkan element di awal list atau 0
buah.append("pisang") # menambahkan element di akhir list
print("Buah setelah di makan:", buah)

buah.pop(0)
buah.pop(2)
print("Setelah dihapus", buah)

orang = ["Budi", "siti"]
orang.insert(1, "roni") # menambahkan element di index 1
orang.append("joko") # menambahkan element di paling atas list
orang.pop(0) # menghapus element
print("hasil akhir:", orang)