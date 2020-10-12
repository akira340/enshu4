#include<stdio.h>

signed main(void) {
  int a[] = {3, 7, -4, 1, -5, -9, 0, -2, 6, -8};
  int n = sizeof(a)/sizeof(int);

  int i;
  for(i = 0; i < n; i++) {
    if(a[i] > 0) {
      printf("plus:%d", a[i]);
    } else if(a[i] < 0) {
      printf("%d:minus", a[i]);
    } else {
      printf("zero");
    }
    printf("\n");
  }

  return 0;
}
