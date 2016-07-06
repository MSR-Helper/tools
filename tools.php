<?php 
class tools
{
  public function generateRandomCode($min = 10, $max = 16)
  {
      $big_chars = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $chars = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
      $numbers = array(0,1,2,3,4,5,6,7,8,9);
      $loop = rand($min , $max);
      $code = '';
      for ($xx=0;$xx<$loop;$xx++)
      {
          $rand = rand(1,5);
          if ($rand == 1 || $rand == 2)
              $code .= $big_chars[rand(0,25)];
          if ($rand == 3 || $rand == 4)
              $code .= $chars[rand(0,25)];
          if ($rand == 5)
              $code .= $numbers[rand(0,9)];
      }
      return $code;
  }
}
?>
