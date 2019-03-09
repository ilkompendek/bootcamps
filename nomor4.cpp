/*
4). Sebuah mesin penjual mandiri mempunyai stok uang kembalian 500, 1.000, 2.000, 5.000, 10.000, 20.000 dan 50.000.
Buatlah sebuah function untuk menentukan kembalian yang paling tepat, dengan paramater function total belanja dan jumlah uang!

Misalnya: Total belanja 15.500, uang yang dimasukkan ke mesin adalah 50.000, sedangkan kembalian adalah 34.500, sehingga output yang dibutuhkan adalah:
- selembar 20.000
- selembar 10.000
- dua lembar 2.000
- satu koin 500

Clue: maka jika function dijalankan:
hitungKembalian(15500, 50000);
result:
1 x 20000
1 x 10000
2 x 2000
1 x 500
=================================================


*/


#include <iostream>

using namespace std;

int hitungpecahan(int uang, int pecahan){
    uang = uang / pecahan;
    return uang;
}

int main()
{
    int totalBelanja,kembalian, uang, lembar;
    cout << "Total belanja: ";
    cin >> totalBelanja;
    cout << "Masukan uang anda! ";
    cin >> uang;

    kembalian = uang - totalBelanja;
    //cout<< totalBelanja<<", "<<uang<<"\nKembaliannya: "<<kembalian<<"\n";

    if(kembalian/((-1)*kembalian) == 1){
        cout<<"Uang anda kurang";
    }

    while (kembalian > 400){
        if (kembalian>=50000){
            cout<<hitungpecahan(kembalian, 50000)<<" x 50000\n";
            kembalian = kembalian % 50000;
            //cout<< kembalian;
        } else if (kembalian>=20000){
            cout<<hitungpecahan(kembalian, 20000)<<" x 20000\n";
            kembalian = kembalian % 20000;
            //cout<< kembalian;
        } else if (kembalian>=10000){
            cout<<hitungpecahan(kembalian, 10000)<<" x 10000\n";
            kembalian = kembalian % 10000;
            //cout<< kembalian;
        } else if (kembalian>=5000){
            cout<<hitungpecahan(kembalian, 5000)<<" x 5000\n";
            kembalian = kembalian % 5000;
            //cout<< kembalian;
        } else if (kembalian>=2000){
            cout<<hitungpecahan(kembalian, 2000)<<" x 2000\n";
            kembalian = kembalian % 2000;
            //cout<< kembalian;
        } else if (kembalian>=1000){
            cout<<hitungpecahan(kembalian, 1000)<<" x 1000\n";
            kembalian = kembalian % 1000;
            //cout<< kembalian;
        } else if (kembalian>=500){
            cout<<hitungpecahan(kembalian, 500)<<" x 500\n";
            kembalian = kembalian % 500;
            //cout<< kembalian;
        }
    }


    return 0;
}
