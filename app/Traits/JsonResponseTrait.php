<?php

namespace App\Traits;

trait JsonResponseTrait
{
    public function JsonResponse($message,$status){
        $response=['message'=>$message,'status'=>$status];
        return response()->json($response,$status);
    }
<<<<<<< HEAD
    public function JsonResponseShow($data,$message,$status){
        $response=['data'=>$data,
                   'message'=>$message,
                   'status'=>$status ];
        return response($response);
    }

=======
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
}

