#include<iostream>
using namespace std;

int main () {
    char a[11], b;
    cin >> a;
    for (int i=0;i<11;i++) {
        cout << a[i] << endl;
        b = b+(int)a[i];
        cout << (int)b << endl;
    }
    cout << b << endl;
return 0;
}

