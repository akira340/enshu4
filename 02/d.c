#include<stdio.h>

void print_array(int a[], int n);

signed main(void) {
  int a[] = {1,3,4,7,5,9,2,6,8};
  int n = sizeof(a)/sizeof(int);

  int i, j;
  for(i = 0; i < n - 1; i++) {
    int min = i;
    for(j = i + 1; j < n; j++) {
      if(a[min] > a[j]) min = j;
    }
    int tmp = a[min];
    a[min] = a[i];
    a[i] = tmp;
    print_array(a, n);
  }

  return 0;
}

void print_array(int a[], int n)
{
  int i;
  for(i = 0; i < n; i++){
    printf("%d,",a[i]);
  }
  printf("\n");

  return;
}
