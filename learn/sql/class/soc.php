<?php

/**
 * @author admin
 * @copyright 2015
 */
class urlf {

function get_content($hostname, $path) 
  { 
    $line = ""; 
    // ������������� ����������, ��� �������� 
    // �������� � ��������� $hostname 
    $fp = fsockopen($hostname, 80, $errno, $errstr, 30/*�������*/); 
    // ��������� ���������� ��������� ���������� 
    if (!$fp) echo "$errstr ($errno)<br />\n"; 
    else 
    { 
      // ��������� HTTP-������ ��� �������� ��� ������� 
      $headers = "GET $path HTTP/1.1\r\n"; 
      $headers .= "Host: $hostname\r\n"; 
      $headers .= "Connection: Close\r\n\r\n"; 
      // ���������� HTTP-������ ������� 
      fwrite($fp, $headers); 
      // �������� ����� 
      while (!feof($fp)) 
      { 
        $line .= fgets($fp, 1024); 
      } 
      fclose($fp); 
    } 
    return $line; 
  
  } 
    
    
}
  /*$hostname = ; 
  $path = "/";*/ 
 // ������������� ������� ����� ������ �������. 
  // ���� ��� �������� �� ���������, ��� �� ����� ���������� 
 // set_time_limit(180);
  //$ooo = new urlf; 
  //echo $ooo->get_content("ros-tros.ru", "/pr.html"); 


?>