(defun sigma (n)
  (cond
   ((= n 0) 0)
   (t (+ n (sigma (- n 1))))))

(sigma 5)
