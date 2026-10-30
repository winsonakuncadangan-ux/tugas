#include <iostream>
#include <vector>
#include <string>
using namespace std;

int main() {
vector<string> buah = {"mangga", "jeruk"};

    cout << buah[0] << endl; //akses element dari index

    buah.insert(buah.begin(), "apel");// nambah element di awal vector
    buah.insert(buah.begin() + 2, "semangka");// nambah element di index ke 2 vector
    buah.push_back("pisang");// nambah element di akhir vector
    cout << "Setelah ditambah:";
    for (string item : buah) {
        cout << item << " ";
    }
    cout << endl;
    
    buah.erase(buah.begin());// hapus element di awal vector
    buah.erase(buah.begin() + 1);// hapus element di index ke 1 vector
    buah.pop_back();//  hapus element di akhir vector
    cout << "Setelah dihapus:";
    for (string item : buah) {
        cout << item << " ";
    }
    cout << endl;

    vector<string> orang = {"Budi", "siti"};
    orang.insert(orang.begin(), "roni");// nambah element di index ke 0 vector
    orang.push_back("dewi");// nambah element di akhir vector
    orang.erase(orang.begin());// hapus element di awal vector
    cout << "Hasil akhir:";
    for (string item : orang) {
        cout << item << " ";
    }
    cout << endl;
}