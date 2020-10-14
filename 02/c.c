#include<stdio.h>

int mindex(int a[], int s, int e) {
  int i, ret = s;
  for(i = s + 1; i < e; i++) {
    if(a[ret] > a[i]) ret = i;
  }
  return ret;
}

signed main(void) {
  int a[] = {3,7,4,1,5,9,2,6,8};
  int ans1, ans2;

  ans1 = mindex(a,0,9);
  ans2 = mindex(a,4,6);

  printf("%d,%d\n", a[ans1], a[ans2]);
  return 0;
}

