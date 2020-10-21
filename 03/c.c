#include<stdio.h>

void p(char *s) {printf("<p>%s</p>\n", s);}

int main(void) {
  char str[128];
  int i, n;

  FILE *fp = fopen("data0301.txt", "r");
  fscanf(fp, "%s", str);
  p(str);
  printf("<ol>\n");
  fscanf(fp, "%d", &n);
  for(i = 0; i < 4; i++) {
    fscanf(fp, "%s", str);
    if(i == n - 1) printf("<li><a href=\"ok.html\">%s</a></li>\n", str);
    else printf("<li><a href=\"ng.html\">%s</a></li>\n", str);
  }
  printf("</ol>\n");

  return 0;
}
