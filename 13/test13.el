(defun all_positive (n)
  (cond
    ((atom n) t)
    ((< (car n) 0) nil)
    (t (all_positive (cdr n)))))

(all_positive '(3 7 4 1 5))
; t    
(all_positive '(3 -7 4 1 5))
; nil    
(all_positive '(3 7 4 0 5))
; nil    
(all_positive '())
; t


(defun has_positive (n)
  (cond
    ((atom n) nil)
    ((> (car n) 0 ) t)
    (t (has_positive (cdr n)))))

(has_positive '(-3 -7 -4 0 -5))
; nil    
(has_positive '(-3 -7 -4 1 -5))
; t    
(has_positive '())
; nil


(defun positive_size (n)
  (cond
    ((atom n) 0)
    ((> (car n) 0) (+ 1 (positive_size (cdr n))))
    (t (positive_size (cdr n)))))

(positive_sum '(3 7 4 1 5))
; 20
(positive_sum '(-3 7 4 1 5))
; 17    
(positive_sum '())
; 0  


(defun positive_sum (n)
  (cond
   ((atom n) 0)
   ((< (car n) 0) (positive_sum (cdr n)))
   (t (+ (car n ) (positive_sum (cdr n))))))

(positive_size '(3 7 4 1 5))
; 5    
(positive_size '(3 -7 4 0 5))
; 3    
(positive_size '())
; 0    

