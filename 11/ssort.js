function ssort(a) {
  var i,j,tmp,min;
  var n = a.length;

  for(i = 0; i < n - 1; i++) {
    min = i;
    for(j = i + 1; j < n; j++) {
      if(a[j] < a[min])
        min = j;
    }
    tmp = a[min];
    a[min] = a[i];
    a[i] = tmp;
  }
}

function print_array(a) {
  var i;
  var n = a.length;
  for(i = 0; i < n; i++) {
    document.write(a[i]);
    document.write(",");
  }
  document.write("<br>");
}

