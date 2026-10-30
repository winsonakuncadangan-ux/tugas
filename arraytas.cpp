#include <iostream>
#include <vector>
#include <string>

int main() {
    std::vector<std::string> tas = {"Pedang Kayu", "Perisai Besi"};

    tas.insert(tas.begin() + 0, "Potion Darah");
    tas.insert(tas.begin() + 2, "Busur Panah");
    tas.erase(tas.begin() + 3);

    std::cout << "Hasil akhir: [";
    for (size_t i = 0; i < tas.size(); ++i) {
        std::cout << tas[i] << (i + 1 < tas.size() ? ", " : "");
    }
    std::cout << "]" << std::endl;

    return 0;
}
