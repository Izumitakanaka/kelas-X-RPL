#include <iostream>
using namespace std;

int main() {
    int n;
    cout << "segitiga siku-siku" << endl;

    cout << "------------------" << endl;
    cout << "-        -       - -" << endl;
    cout << "-      -  -      -  -" << endl;
    cout << "-    -      -    -   -" << endl;
    cout << "-   -         -  -   -" << endl;
    cout << "- -            - -   -" << endl;
    cout << "-                -   -" << endl;
    cout << "- -            - -   -" << endl;
    cout << "-   -         -  -   -" << endl;
    cout << "-    -      -    -   -" << endl;
    cout << "-      -  -      -   -" << endl;
    cout << "-        -       -   -" << endl;
    cout << "------------------   -" << endl;
    cout << "-------------------  -" << endl;
    cout << "-------------------- -" << endl;
    cout << "----------------------" << endl;
    cout << "Masukkan tinggi segitiga: ";
    cin >> n;

    cout << "\nSegitiga Kiri Bawah:\n";
    for (int i = 1; i <= n; i++) {
        for (int j = 1; j <= i; j++) cout << "|";
        cout << endl;
    }

    cout << "\nSegitiga Kiri Atas:\n";
    for (int i = n; i >= 1; i--) {
        for (int j = 1; j <= i; j++) cout << "|";
        cout << endl;
    }

    cout << "\nSegitiga Kanan Bawah:\n";
    for (int i = 1; i <= n; i++) {
        for (int j = 1; j <= n - i; j++) cout << " ";
        for (int j = 1; j <= i; j++) cout << "|";
        cout << endl;
    }

    cout << "\nSegitiga Kanan Atas:\n";
    for (int i = n; i >= 1; i--) {
        for (int j = 1; j <= n - i; j++) cout << " ";
        for (int j = 1; j <= i; j++) cout << "|";
        cout << endl;
    }

    return 0;
}
