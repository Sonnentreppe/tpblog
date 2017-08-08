<?php
namespace Admin\Model;
use Think\Model;
 class SettingModel extends Model{
     function getAll(){
         $data = $this->select();
         $result= array();

         foreach( $data as $row){
           $result[$row['key']] = $row['val'];

         }

         return $result;

     }

   }



 ?>
