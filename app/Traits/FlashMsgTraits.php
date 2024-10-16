<?php

namespace App\Traits;


trait FlashMsgTraits
{
 
    public static function created($msgType = 'success', $msg = 'create' )
    {
        
      
        if ($msg == 'create') {
            return toastr()->progressBar(false)->timeOut(1000) 
            ->$msgType('تم حفظ البيانات بنجاح');
        }

         else if  ($msg == 'update') {
            return toastr()->progressBar(false)->timeOut(1000) 
            ->$msgType('تم تعديل البيانات بنجاح');
        }

        else if ($msg == 'destroy') {
            return toastr()->progressBar(false)->timeOut(1000) 
            ->$msgType('تم حذف البيانات بنجاح');
        }

       else {
            return toastr()->$msgType($msg);
        }
  
       
    }

}
