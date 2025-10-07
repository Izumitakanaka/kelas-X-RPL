#include <iostream>
using namespace std;

int main() {
    int bln, tgl;
    cout << "Zodiacers" << endl;
    cout << "==================" << endl;
    cout << "Inputkan bulan lahir anda (1-12): ";
    cin >> bln;
    cout << "Inputkan tanggal lahir anda (1-31): ";
    cin >> tgl;

    if (bln == 1) { // Januari
        if (tgl >= 1 && tgl <= 19) {
            cout << "bintang anda capricorn" << endl;
            cout << "Hidupmu akan penuh dengan tangga kesuksesan!" << endl;
        }
        else if (tgl >= 20 && tgl <= 31) {
            cout << "bintang anda aquarius" << endl;
            cout << "Gagal? Coba lagi besok!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 2) { // Februari
        if (tgl >= 1 && tgl <= 18) {
            cout << "bintang anda aquarius" << endl;
            cout << "Mimpi besarmu akan segera terwujud!" << endl;
        }
        else if (tgl >= 19 && tgl <= 29) {
            cout << "bintang anda pisces" << endl;
            cout << "Jangan menyerah, nasib baik sedang menantimu!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 3) { // Maret
        if (tgl >= 1 && tgl <= 20) {
            cout << "bintang anda pisces" << endl;
            cout << "Rezeki akan mengalir seperti air!" << endl;
        }
        else if (tgl >= 21 && tgl <= 31) {
            cout << "bintang anda aries" << endl;
            cout << "Hari-harimu akan penuh kejutan!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 4) { // April
        if (tgl >= 1 && tgl <= 19) {
            cout << "bintang anda aries" << endl;
            cout << "Semangatmu akan membawamu ke puncak!" << endl;
        }
        else if (tgl >= 20 && tgl <= 30) {
            cout << "bintang anda taurus" << endl;
            cout << "Kesabaranmu akan terbayar lunas!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 5) { // Mei
        if (tgl >= 1 && tgl <= 20) {
            cout << "bintang anda taurus" << endl;
            cout << "Cinta dan uang akan menghampirimu!" << endl;
        }
        else if (tgl >= 21 && tgl <= 31) {
            cout << "bintang anda gemini" << endl;
            cout << "Bersiaplah untuk perubahan besar!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 6) { // Juni
        if (tgl >= 1 && tgl <= 20) {
            cout << "bintang anda gemini" << endl;
            cout << "Keputusan tepat akan membawa keberuntungan!" << endl;
        }
        else if (tgl >= 21 && tgl <= 30) {
            cout << "bintang anda cancer" << endl;
            cout << "Masa sulit akan segera berlalu!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 7) { // Juli
        if (tgl >= 1 && tgl <= 22) {
            cout << "bintang anda cancer" << endl;
            cout << "Kebahagiaan akan datang bertubi-tubi!" << endl;
        }
        else if (tgl >= 23 && tgl <= 31) {
            cout << "bintang anda leo" << endl;
            cout << "Jangan khawatir, semuanya akan baik-baik saja!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 8) { // Agustus
        if (tgl >= 1 && tgl <= 22) {
            cout << "bintang anda leo" << endl;
            cout << "Kesuksesan sedang menantimu di depan!" << endl;
        }
        else if (tgl >= 23 && tgl <= 31) {
            cout << "bintang anda virgo" << endl;
            cout << "Kerja kerasmu tidak akan sia-sia!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 9) { // September
        if (tgl >= 1 && tgl <= 22) {
            cout << "bintang anda virgo" << endl;
            cout << "Hari esok akan lebih cerah!" << endl;
        }
        else if (tgl >= 23 && tgl <= 30) {
            cout << "bintang anda libra" << endl;
            cout << "Kejutan menyenangkan akan segera tiba!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 10) { // Oktober
        if (tgl >= 1 && tgl <= 22) {
            cout << "bintang anda libra" << endl;
            cout << "Impianmu akan menjadi kenyataan!" << endl;
        }
        else if (tgl >= 23 && tgl <= 31) {
            cout << "bintang anda scorpio" << endl;
            cout << "Kekuatan batinmu akan membawamu sukses!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 11) { // November
        if (tgl >= 1 && tgl <= 21) {
            cout << "bintang anda scorpio" << endl;
            cout << "Nasib baik sedang berjalan menujumu!" << endl;
        }
        else if (tgl >= 22 && tgl <= 30) {
            cout << "bintang anda sagitarius" << endl;
            cout << "Petualangan barumu akan membawa kebahagiaan!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else if (bln == 12) { // Desember
        if (tgl >= 1 && tgl <= 21) {
            cout << "bintang anda sagitarius" << endl;
            cout << "Masa depan cerah menantimu!" << endl;
        }
        else if (tgl >= 22 && tgl <= 31) {
            cout << "bintang anda capricorn" << endl;
            cout << "Tetap semangat, hasil manis akan datang!" << endl;
        }
        else {
            cout << "Tanggal tidak valid!" << endl;
        }
    }
    else {
        cout << "Bulan tidak valid!" << endl;
    }

    return 0;
}