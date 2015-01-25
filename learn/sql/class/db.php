<?php

/**
 * @author admin
 * @copyright 2015
 */
class db {
 
        function __construct() {
		 
         $this->pdo = new PDO('mysql:host=localhost;dbname=cs_first', 'root', '');

		}	
    
 }


?>