a = [3, -7, 4, 1, -5, -9, 0, -2, 6, -8];
n = a.size()

for i in 0 .. n - 1
  if a[i] < 0
    puts "minus"
  elsif a[i] % 2 == 0
    puts a[i].to_s() + ":even"
  else
    puts "odd:" + a[i].to_s()
  end
end
