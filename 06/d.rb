a = [91,46,93,62,42,80,52,51]
n = a.size()

for i in 0 .. n - 1
  min = i
  for j in i + 1 .. n - 1
    if(a[j] < a[min])
      min = j
    end
  end
  tmp = a[i]
  a[i] = a[min]
  a[min] = tmp
end

for i in 0..n-1
  puts a[i]
end
