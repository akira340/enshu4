file = open("data0501.txt", "r")
a = file.readlines()
file.close()

n = a.size()
ans = a[0].to_i()

puts "<p>"
print a[n - 2] + a[n - 1]
puts "</p>"

puts "<ol>"
for i in 1 .. n - 3
  a[i] = a[i].chomp()
  if i == ans
    puts "<li><a href=\"ok.html\">" + a[i] + "</a></li>"
  else
    puts "<li><a href=\"ng.html\">" + a[i] + "</a></li>"
  end
end
puts "</ol>"
