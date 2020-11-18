a = [19, 64, 39, 80, 25, 15]
n = len(a);

print "abc" + "def"
print "ans:" + str(a[2])

for i in range(0, n):
    print a[i]

file = open("data0601.txt", "r")
a2 = file.readlines()
file.close()

string = a2[0].rstrip()

n1 = int(a2[1])
n2 = int(a2[2])
sum = n1 + n2
print string + str(sum)
