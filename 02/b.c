#include<stdio.h>

signed main(void) {
  FILE* file;
  file = fopen("data0101.txt", "r");
  printf("<table>\n");

  int i, j;
  char str[16];
  for(i = 0; i < 4; i++) {
    printf("<tr>");
    for(j = 0; j < 4; j++) {
      fscanf(file, "%s", str);
      printf("<td>%s</td>", str);
    }
    printf("</tr>\n");
  }

  printf("</table>\n");
  return 0;
}

