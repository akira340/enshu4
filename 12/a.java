class saf4926 {
  public static void main(String[] argv) {
    int a[] = {3, -7, 4, 1, -5, -9, 0, -2, 6, -8};

    for(int i = 0; i < a.length; i++) {
      if(a[i] < 0)
        System.out.println("minus");
      else if(a[i] % 2 == 0)
        System.out.println(a[i] + ":even");
      else
        System.out.println("odd:" + a[i]);
    }

    return;
  }
}
