#include<stdio.h>

signed main(void) {
  FILE* file;
  char str[16];

  file = fopen("data0101.txt", "r");

  int i;
  for(i = 0; i < 5; i++) {
    fscanf(file, "%s", str);
    printf("<%s>", str);
  }
  printf("\n");

  fclose(file);

  return 0;
}

