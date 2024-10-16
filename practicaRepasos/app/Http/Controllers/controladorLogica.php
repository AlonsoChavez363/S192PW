<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorLogica extends Controller

{
     public function realizarConversion(Request $request)
    {
        $resultado = null;
        
        if ($request->filled('mb')) {
            $mb = $request->input('mb');
            $resultado = $mb / 1000;
        
        } elseif ($request->filled('gb')) {
            $gb = $request->input('gb');
            $resultado = $gb * 1000;

        } elseif ($request->filled('gt')) {
            $gb = $request->input('gt');
            $resultado = $gb / 1000;

        } elseif ($request->filled('tb')) {
            $tb = $request->input('tb');
            $resultado = $tb * 1000;  

        }
        return "el resultado de la operacion es: $resultado";
    }

}

