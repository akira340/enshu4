class saf4926 {
  public static void main(String[] argv) {
    int a[] = {19,18,17,16,15,14,13,12,11};
    int n = a.length;

    for(int i = 0; i < n - 1; i++) {
      for(int j = 0; j < n - i - 1; j++) {
        if(a[j] > a[j + 1]) {
          int tmp = a[j];
          a[j] = a[j + 1];
          a[j + 1] = tmp;
        }
      }

      for(int j = 0; j < n; j++){
        System.out.print(a[j]);
        System.out.print(",");
      }
      System.out.println("");
    }

    return;
  }
}
