<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calculate(Request $request){
        $request->validate(['operation'=>'required','num1'=>'required','num2'=>'required']);
$num1= $request->input('num1');
$num2= $request->input('num2');
$op = $request->input('operation');

$result = null;
switch($op){
    case'+':
        $result = $num1+$num2;
        break;
    case'-':
        $result = $num1-$num2;
        break;
        case'*':
        $result = $num1*$num2;
        break;
        case'/':
            if($num2==0){
                $result = "error division by zero";

            }
            else{
                $result = $num1/$num2;
            }
        break;
        default:
        $result= "plz enter a correct op.";


}
return view('calculator', ['result' => $result]);
    }
}
