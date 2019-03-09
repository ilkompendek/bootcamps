
/*
3. Buatlah function untuk mencetak pattern persegi dari karakter “@” dan “=” yang
mempunyai sebuah parameter sebagai nilai panjang dengan nilai parameter harus ganjil.
Jika function itu dijalankan:

drawImage(5);
akan dicetak di layar:

= = @ = =
= @ @ @ =
@ @ @ @ @
= @ @ @ =
= = @ = =



*/
#include <iostream>

using namespace std;

void drawImage(int parameter){
    int i, j;
    parameter = parameter / 2;
        for (i=0; i<parameter; i++){

            for (j=i; j<parameter; j++){
                cout<<"= ";
            }
            for (j=0; j<i; j++){
                cout<<"@ ";
            }
            for (j=0; j<i+1; j++){
                cout<<"@ ";
            }
            for (j=i; j<parameter; j++){
                cout<<"= ";
            }
            cout<<endl;
        }
        for (i=0; i<parameter+1; i++){
            for (j=0; j<i; j++){
                cout<<"= ";
            }
            for (j=i; j<parameter; j++){
                cout<<"@ ";
            }
            for (j=i; j<parameter+1; j++){
                cout<<"@ ";
            }
            for (j=0; j<i; j++){
                cout<<"= ";
            }
            cout<<endl;
        }
    }


int main()
{
    int nilai;
    cout << "Masukan nilai panjang gambar (ganjil): ";
    cin>> nilai;

    if(nilai % 2 == 0){
        cout<<"Nilai panjang tidak ganjil";
    } else {
        drawImage(nilai);
    }
    return 0;
}
