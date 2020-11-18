a = [91,46,93,62,42,80,52,51]
n = len(a)

for i in range(0, n):
    min = i
    for j in range(i + 1, n):
        if(a[j] < a[min]):
            min = j
    tmp = a[i]
    a[i] = a[min]
    a[min] = tmp

for i in range(0, n):
    print a[i]
