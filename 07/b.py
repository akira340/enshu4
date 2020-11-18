a = [3, -7, 4, 1, -5, -9, 0, -2, 6, -8]
n = len(a)

for i in range(0, n):
    if a[i] < 0:
        print "minus"
    elif a[i] % 2 == 0:
        print str(a[i]) + ":even"
    else:
        print "odd:" + str(a[i])
