file = open("data0501.txt" , "r")
a = file.readlines()
file.close()

n = len(a)

for i in range(0, n):
    a[i] = a[i].rstrip()

ans = int(a[0])

print "<p>"
print a[5]
print a[6]
print "</p>"

print "<ol>"
for i in range(1, n - 2):
    if i == ans:
        print "<li><a href=\"ok.html\">" + a[i] + "</a></li>"
    else:
        print "<li><a href=\"ng.html\">" + a[i] + "</a></li>"
print "</ol>"
