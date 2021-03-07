<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class mainController extends Controller
{
    public function test(request $request){
        $q1 = $request->input('select1');
        $q2 = $request->input('select2');
        $q3 = $request->input('select3');
        $q4 = $request->input('select4');
        $q5 = $request->input('select5');
        $q6 = $request->input('select6');
        $q7 = $request->input('select7');
        $q8 = $request->input('select8');
        $q9 = $request->input('select9');
        $q10 = $request->input('select10');
        $q11 = $request->input('select11'); 
        $q12 = $request->input('select12');
        $q13 = $request->input('select13');
        $q14 = $request->input('select14');
        $q15 = $request->input('select15');
        $q16 = $request->input('select16');
        $q17 = $request->input('select17');
        $q18 = $request->input('select18');
        $q19 = $request->input('select19');
        $q20 = $request->input('select20');

        $E=0;$I=0;$S=0;$N=0;$T=0;$F=0;$J=0;$P=0;
        
        if($q1=='a1'){
            $E++;
        }
        if($q1=='b1'){
            $I++;
        }
        if($q2=='a2'){
            $S++;
        }
        if($q2=='b2'){
            $N++;
        }
        if($q3=='a3'){
            $T++;
        }
        if($q3=='b3'){
            $F++;
        }
        if($q4=='a4'){
            $J++;
        }
        if($q4=='b4'){
            $P++;
        }

        if($q5=='a5'){
            $E++;
        }
        if($q5=='b5'){
            $I++;
        }
        if($q6=='a6'){
            $S++;
        }
        if($q6=='b6'){
            $N++;
        }
        if($q7=='a7'){
            $T++;
        }
        if($q7=='b7'){
            $F++;
        }
        if($q8=='a8'){
            $J++;
        }
        if($q8=='b8'){
            $P++;
        }

        if($q9=='a9'){
            $E++;
        }
        if($q9=='b9'){
            $I++;
        }
        if($q10=='a10'){
            $S++;
        }
        if($q10=='b10'){
            $N++;
        }
        if($q11=='a11'){
            $T++;
        }
        if($q11=='b11'){
            $F++;
        }
        if($q12=='a12'){
            $J++;
        }
        if($q12=='b12'){
            $P++;
        }

        if($q13=='a13'){
            $E++;
        }
        if($q13=='b13'){
            $I++;
        }
        if($q14=='a14'){
            $S++;
        }
        if($q14=='b14'){
            $N++;
        }
        if($q15=='a15'){
            $T++;
        }
        if($q15=='b15'){
            $F++;
        }
        if($q16=='a16'){
            $J++;
        }
        if($q16=='b16'){
            $P++;
        }

        if($q17=='a17'){
            $E++;
        }
        if($q17=='b17'){
            $I++;
        }
        if($q18=='a18'){
            $S++;
        }
        if($q18=='b18'){
            $N++;
        }
        if($q18=='a18'){
            $T++;
        }
        if($q19=='b19'){
            $F++;
        }
        if($q19=='a19'){
            $J++;
        }
        if($q20=='b20'){
            $P++;
        }

        if($E >$I){ //q1,5,9,13,17
            $type1='E';
        }else{
            $type1='I';
        }

        if($S >$N){ //q2,6,10,14,18
            $type2='S';
        }else{
            $type2='N';
        }

        if($T >$F){ //q3,7,11,15,19
            $type3='T';
        }else{
            $type3='F';
        }

        if($J >$P){ //q4,8,12,16,20
            $type4='J';
        }else{
            $type4='P';
        }

        $type = $type1.$type2.$type3.$type4;
        //echo($type);
        $ID_user = Auth::id();
        $maxID = DB::table('result')->max('ID_result');
        if($maxID == null){
            $ID_result = 1;
        }else{
            $ID_result = $maxID+1;
        }        

        DB::table('result')->insert([
            'ID_result' => $ID_result,
            'ID_user' => $ID_user,
            'personality' => $type
        ]);
        
        return view('MajorElective/ArtiIntel',['ID_result'=>$ID_result]);
        
    }

    public function artiIntel(request $request){
        $opt1 = $request->input('checkboxOne');
        $opt2 = $request->input('checkboxTwo');
        $opt3 = $request->input('checkboxThree');
        $opt4 = $request->input('checkboxFour');
        $opt5 = $request->input('checkboxFive');
        $opt6 = $request->input('checkboxSix');
        $opt7 = $request->input('checkboxSeven');
        $opt8 = $request->input('checkboxEight');
        $opt9 = $request->input('checkboxNine');
        $opt10 = $request->input('checkboxTen');
        //get value from hidden input
        $ID_result = $request->input('ID_result');

        //options array
        $opts = array($opt1, $opt2, $opt3, $opt4, $opt5, $opt6, $opt7, $opt8, $opt9, $opt10); 

        //find max to generate ID_majorElective
        $maxID = DB::table('majorelective')->max('ID_majorElective');
        if($maxID == null){
            $ID_majorElective = 1;
        }else{
            $ID_majorElective = $maxID+1;
        }        

        //insert selected subject to majorelective table
        for($i=0; $i<sizeof($opts); $i++){
            if($opts[$i] != null){ //insert only selected options                
                DB::table('majorelective')->insert([
                    'ID_majorElective' => $ID_majorElective+$i,
                    'ID_result' => $ID_result,
                    'ID_subject' => $opts[$i]
                ]);
            }
        }

        return view('MajorElective/comArch',['ID_result'=>$ID_result]);
    }

    public function comArch(request $request){
        $opt1 = $request->input('checkboxOne');
        $opt2 = $request->input('checkboxTwo');
        $opt3 = $request->input('checkboxThree');
        $opt4 = $request->input('checkboxFour');
        $opt5 = $request->input('checkboxFive');
      
        echo($opt1);
    }

    public function ComGraph(request $request){
        $opt1 = $request->input('checkboxOne');
        $opt2 = $request->input('checkboxTwo');
        $opt3 = $request->input('checkboxThree');
        $opt4 = $request->input('checkboxFour');
       
        echo($opt1);
    }

    public function data(request $request){
        $opt1 = $request->input('checkboxOne');
        $opt2 = $request->input('checkboxTwo');
        $opt3 = $request->input('checkboxThree');

        echo($opt1);
    }

    public function netSecurity(request $request){
        $opt1 = $request->input('checkboxOne');
        $opt2 = $request->input('checkboxTwo');
        $opt3 = $request->input('checkboxThree');
        $opt4 = $request->input('checkboxFour');
        $opt5 = $request->input('checkboxFive');
        $opt6 = $request->input('checkboxSix');
        $opt7 = $request->input('checkboxSeven');
        $opt8 = $request->input('checkboxEight');
        $opt9 = $request->input('checkboxNine');
        $opt10 = $request->input('checkboxTen');
        $opt11 = $request->input('checkboxele');
        $opt12 = $request->input('checkboxtwel');
        $opt13 = $request->input('checkboxthirdteen');
        $opt14 = $request->input('checkboxfourteen');
       
        echo($opt1);
    }

    public function parallel(request $request){
        $opt1 = $request->input('checkboxOne');
       
        echo($opt1);
    }

    public function ScienComp(request $request){
        $opt1 = $request->input('checkboxOne');
       
        echo($opt1);
    }

    public function softEn(request $request){
        $opt1 = $request->input('checkboxOne');
        $opt2 = $request->input('checkboxTwo');
        $opt3 = $request->input('checkboxThree');
        $opt4 = $request->input('checkboxFour');
        $opt5 = $request->input('checkboxFive');
        $opt6 = $request->input('checkboxSix');
        $opt7 = $request->input('checkboxSeven');

        echo($opt1);
    }
}
