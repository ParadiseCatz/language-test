(setq a 10)
(loop 
   (setq a (+ a 1))
   (terpri)
   (when (> a 10) (write a))
)