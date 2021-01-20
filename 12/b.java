class saf4926 {
  public static void main(String[] argv) {

    int a[] = {91,46,93,62,42,80,52,51};
    int n = a.length;

    for(int i = 0; i < n; i++) {
      int min = i;
      for(int j = i + 1; j < n; j++) {
        if(a[min] > a[j])
          min = j;
      }
      int tmp = a[i];
      a[i] = a[min];
      a[min] = tmp;
    }

    for(int i = 0; i < n; i++){
      System.out.print(a[i]);
      System.out.print(",");
    }
    System.out.println("");

    return;
  }
}
