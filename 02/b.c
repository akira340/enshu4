#include<stdio.h>

signed main(void) {
  FILE* file;
  file = fopen("data0101.txt", "r");
  printf("<table>\n");

  int i, j;
<<<<<<< HEAD
  char str;
  for(i = 0; i < 4; i++) {
    printf("<tr>");
    for(j = 0; j < 4; j++) {
      fscanf(file, "%s", &str);
      printf("<td>%s</td>", &str);
=======
  char str[16];
  for(i = 0; i < 4; i++) {
    printf("<tr>");
    for(j = 0; j < 4; j++) {
      fscanf(file, "%s", str);
      printf("<td>%s</td>", str);
>>>>>>> a8158f15560c73c7f0de2b3ea5f733d4f675e355
    }
    printf("</tr>\n");
  }

  printf("</table>\n");
  return 0;
}

