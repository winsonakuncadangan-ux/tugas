#include <iostream>
#include <vector>
#include <string>
using namespace std;

int main() {

vector<string> daftarlagu = {"Ini Abadi", "Monokrom"};

    daftarlagu.insert(daftarlagu.begin() + 1, "everything u are");
    daftarlagu.push_back("Aitakatta");
    daftarlagu.erase(daftarlagu.begin());
    cout << "Hasil akhir:";
    for (string item : daftarlagu) {
        cout << item << " ";
    }
    cout << endl;
}