a = [19, 64, 39, 80, 25, 15]
n = a.size()
puts "abc" + "def"
puts "ans:"+a[2].to_s()

for i in 0 .. n - 1
  puts a[i]
end

file = open("data0601.txt", "r")
a2 = file.readlines()
file.close()

str = a2[0].chomp()

n1 = a2[1].to_i()
n2 = a2[2].to_i()
sum = n1 + n2
puts str + sum.to_s()
