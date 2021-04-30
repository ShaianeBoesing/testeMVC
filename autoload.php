<?php

spl_autoload_register(function($archive_name)
{
   if (file_exists('Controllers/'.$archive_name.'.php')) 
   {
       require 'Controllers/'.$archive_name.'.php';
   } else if (file_exists('Core/'.$archive_name.'.php'))
   {
       require 'Core/'.$archive_name.'.php';
   } else if(file_exists('Models/'.$archive_name.'.php'))
   {          
       require 'Models/'.$archive_name.'.php';
   }
});

?>