#include <iostream>

using namespace std;

int biayaTotal (int lamaParkir)
{
  int biayaParkirTotal, biayaDuaJamPertama, biayaJamBerikutnya, biayaMaksimal;
  biayaDuaJamPertama = 2000;
  biayaJamBerikutnya = 1000;
  biayaMaksimal = 10000;

  if (lamaParkir <= 2){
        biayaParkirTotal = biayaDuaJamPertama;
    } else if ( lamaParkir > 2 && lamaParkir <= 10){
        biayaParkirTotal = biayaDuaJamPertama + (lamaParkir - 2)*biayaJamBerikutnya;
    } else {
        biayaParkirTotal = biayaMaksimal;
    }
  return biayaParkirTotal;
}

int main()
{
    int lamaParkir;
    cout << "Lama Parkir (jam): " ;
    cin >> lamaParkir;

    cout << "Biaya parkir anda selama "<<lamaParkir<<" jam: "<< biayaTotal(lamaParkir) <<" rupiah.";
}
