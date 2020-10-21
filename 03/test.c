#include<stdio.h>
#include<string.h>

void meta() {printf("<meta charset=\"utf-8\">\n");}
void title(char *s) {printf("<title>%s</title>\n", s);}
void h1(char *s) {printf("<h1>%s</h1>\n", s);}
void link(char *href) {printf("<link rel=\"stylesheet\" href=\"%s\">\n", href);}
void ok(char *s) {printf("<li><a href=\"http://133.54.224.240/penshu4_2020/67170575/ex03/ok.html\">%s</a></li>\n", s);}
void ng(char *s) {printf("<li><a href=\"http://133.54.224.240/penshu4_2020/67170575/ex03/ng.html\">%s</a></li>\n", s);}
void p(char *s) {printf("<p>%s</p>\n", s);}

int main(void) {
  char str[128];
  int i, n;

  FILE *fp = fopen("data0301.txt", "r");

  printf("Content-type: text/html\n\n");
  printf("<!DOCTYPE html>\n");
  printf("<html lang=\"ja\">\n");
  meta();
  printf("<head>\n");
  title("風に吹かれて");

  printf("</head>\n");
  printf("<body>\n");

  h1("風に吹かれて");
  printf("How many codes must a student write<br>\n");
  printf("Before he gets a credit?<br>\n");

  fscanf(fp, "%s", str);
  p(str);
  fscanf(fp, "%d", &n);
  printf("<ol>\n");
  for(i = 0; i < 4; i++) {
    fscanf(fp, "%s", str);
    if(i == n - 1) ok(str);
    else ng(str);
  }
  printf("</ol>\n");

  printf("</body>\n");
  printf("</html>\n");

  return 0;
}
