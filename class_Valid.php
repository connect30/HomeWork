<?php

class Valid {
    public static $email;
    
    public static function validEmail($email) {
       $pat_email = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2}/';;   
       if (!$email) throw new Exception ('E-mail не указан');
       
          if (mb_strlen($email) > 25) throw new Exception ('Слишком длинный e-mail');
       
              
               if (!preg_match($pat_email, $email)) throw new Exception('E-mail указан неправильно');

             
          
             if ($email)  return TRUE;
          
        
          
      
        
    }
}


//$res = new Valid;
try {
    Valid::validEmail('avolovodovskii@mail.550000000000000000000000000000000');    
} catch (Exception $exc) {
    echo $exc->getMessage();
}


//Valid::validEmail();