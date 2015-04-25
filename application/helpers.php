<?php
function dateDiffCust($start,$end=false)
{
   $return = array();
   
   try {
      $start = new DateTime($start);
      $end = new DateTime($end);
      $form = $start->diff($end);
   } catch (Exception $e){
      return $e->getMessage();
   }
   
   $display = array('y'=>'yıl',
               'm'=>'A',
               'd'=>'G',
               'h'=>'Sa',
               'i'=>'Dk'
               );
   foreach($display as $key => $value){
      if($form->$key > 0){
         $return[] = $form->$key.' '.($form->$key > 1 ? $value : $value);
      }
   }
   
   return implode($return, ', ');
}
