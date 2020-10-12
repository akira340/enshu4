#include<stdio.h>

void print_html(void) {
  printf("HTML\n");
}

void print_www(int n) {
  int i;
  for(i = 0; i < n; i++) {
    printf("WWW\n");
  }
}

int three(void) {
  return 3;
}

int twice(int x) {
  return 2 * x;
}

signed main(void) {
  int n;
  print_html();
  print_www(3);
  print_html();
  print_www(2);
  n = three();
  printf("%d\n", n);
  n = twice(5);
  printf("%d\n", n);
  n = twice(-12);
  printf("%d\n", n);

  return 0;
}

