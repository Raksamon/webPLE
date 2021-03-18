<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class mainController extends Controller
{
    public function test(request $request)
    {
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

        $E = 0;
        $I = 0;
        $S = 0;
        $N = 0;
        $T = 0;
        $F = 0;
        $J = 0;
        $P = 0;

        if ($q1 == 'a1') {
            $E++;
        }
        if ($q1 == 'b1') {
            $I++;
        }
        if ($q2 == 'a2') {
            $S++;
        }
        if ($q2 == 'b2') {
            $N++;
        }
        if ($q3 == 'a3') {
            $T++;
        }
        if ($q3 == 'b3') {
            $F++;
        }
        if ($q4 == 'a4') {
            $J++;
        }
        if ($q4 == 'b4') {
            $P++;
        }

        if ($q5 == 'a5') {
            $E++;
        }
        if ($q5 == 'b5') {
            $I++;
        }
        if ($q6 == 'a6') {
            $S++;
        }
        if ($q6 == 'b6') {
            $N++;
        }
        if ($q7 == 'a7') {
            $T++;
        }
        if ($q7 == 'b7') {
            $F++;
        }
        if ($q8 == 'a8') {
            $J++;
        }
        if ($q8 == 'b8') {
            $P++;
        }

        if ($q9 == 'a9') {
            $E++;
        }
        if ($q9 == 'b9') {
            $I++;
        }
        if ($q10 == 'a10') {
            $S++;
        }
        if ($q10 == 'b10') {
            $N++;
        }
        if ($q11 == 'a11') {
            $T++;
        }
        if ($q11 == 'b11') {
            $F++;
        }
        if ($q12 == 'a12') {
            $J++;
        }
        if ($q12 == 'b12') {
            $P++;
        }

        if ($q13 == 'a13') {
            $E++;
        }
        if ($q13 == 'b13') {
            $I++;
        }
        if ($q14 == 'a14') {
            $S++;
        }
        if ($q14 == 'b14') {
            $N++;
        }
        if ($q15 == 'a15') {
            $T++;
        }
        if ($q15 == 'b15') {
            $F++;
        }
        if ($q16 == 'a16') {
            $J++;
        }
        if ($q16 == 'b16') {
            $P++;
        }

        if ($q17 == 'a17') {
            $E++;
        }
        if ($q17 == 'b17') {
            $I++;
        }
        if ($q18 == 'a18') {
            $S++;
        }
        if ($q18 == 'b18') {
            $N++;
        }
        if ($q18 == 'a18') {
            $T++;
        }
        if ($q19 == 'b19') {
            $F++;
        }
        if ($q19 == 'a19') {
            $J++;
        }
        if ($q20 == 'b20') {
            $P++;
        }

        if ($E > $I) { //q1,5,9,13,17
            $type1 = 'E';
        } else {
            $type1 = 'I';
        }

        if ($S > $N) { //q2,6,10,14,18
            $type2 = 'S';
        } else {
            $type2 = 'N';
        }

        if ($T > $F) { //q3,7,11,15,19
            $type3 = 'T';
        } else {
            $type3 = 'F';
        }

        if ($J > $P) { //q4,8,12,16,20
            $type4 = 'J';
        } else {
            $type4 = 'P';
        }

        $type = $type1 . $type2 . $type3 . $type4;
        // echo($type);
        $ID_user = Auth::id();
        $maxID = DB::table('result')->max('ID_result');
        if ($maxID == null) {
            $ID_result = 1;
        } else {
            $ID_result = $maxID + 1;
        }

        DB::table('result')->insert([
            'ID_result' => $ID_result,
            'ID_user' => $ID_user,
            'personality' => $type
        ]);

        return view('MajorElective', ['ID_result' => $ID_result]);
    }

    public function majorElective(request $request)
    {
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
        $opt11 = $request->input('checkboxeleven');
        $opt12 = $request->input('checkboxtwelve');
        $opt13 = $request->input('checkboxthirteen');
        $opt14 = $request->input('checkboxfourteen');
        $opt15 = $request->input('checkboxfifteen');
        $opt16 = $request->input('checkboxsixteen');
        $opt17 = $request->input('checkboxseventeen');
        $opt18 = $request->input('checkboxeighteen');
        $opt19 = $request->input('checkboxnineteen');
        $opt20 = $request->input('checkboxtwenty');
        $opt21 = $request->input('checkboxtwentyone');
        $opt22 = $request->input('checkboxtwentytwo');
        $opt23 = $request->input('checkboxtwentythree');
        $opt24 = $request->input('checkboxtwentyfour');
        $opt25 = $request->input('checkboxtwentyfive');
        $opt26 = $request->input('checkboxtwentysix');
        $opt27 = $request->input('checkboxtwentyseven');
        $opt28 = $request->input('checkboxtwentyeight');
        $opt29 = $request->input('checkboxtwentynine');
        $opt30 = $request->input('checkboxthirty');
        $opt31 = $request->input('checkboxthirtyone');
        $opt32 = $request->input('checkboxthirtytwo');
        $opt33 = $request->input('checkboxthirtythree');
        $opt35 = $request->input('checkboxthirtyfive');
        $opt36 = $request->input('checkboxthirtysix');
        $opt37 = $request->input('checkboxthirtyseven');
        $opt38 = $request->input('checkboxthirtyeight');
        $opt39 = $request->input('checkboxthirtynine');
        $opt40 = $request->input('checkboxforty');
        $opt41 = $request->input('checkboxfortyone');
        $opt42 = $request->input('checkboxfortytwo');
        $opt43 = $request->input('checkboxfortythree');
        $opt44 = $request->input('checkboxfortyfour');
        $opt45 = $request->input('checkboxfortyfive');
        $opt46 = $request->input('checkboxfortysix');
        $opt47 = $request->input('checkboxfortyseven');

        $ID_result = $request->input('ID_result');

        //options array
        $opts = array(
            $opt1, $opt2, $opt3, $opt4, $opt5, $opt6, $opt7, $opt8, $opt9, $opt10, $opt11, $opt12, $opt13,
            $opt14, $opt15, $opt16, $opt17, $opt18, $opt19, $opt20, $opt21, $opt22, $opt23, $opt24, $opt25, $opt26,
            $opt27, $opt28, $opt29, $opt30, $opt31, $opt32, $opt33, $opt35, $opt36, $opt37, $opt38, $opt39, $opt40,
            $opt41, $opt42, $opt43, $opt44, $opt45, $opt46, $opt47
        );

        //find max to generate ID_majorElective
        $maxID = DB::table('majorelective')->max('ID_majorElective');
        if ($maxID == null) {
            $ID_majorElective = 1;
        } else {
            $ID_majorElective = $maxID + 1;
        }

        //insert selected subject to majorelective table
        for ($i = 0; $i < sizeof($opts); $i++) {
            if ($opts[$i] != null) { //insert only selected options                
                DB::table('majorelective')->insert([
                    'ID_majorElective' => $ID_majorElective + $i,
                    'ID_result' => $ID_result,
                    'ID_subject' => $opts[$i]
                ]);
            }
        }

        $top = DB::select('select ID_group,count(ID_subject) as countSubject 
        FROM majorelective 
        join subject 
        using (ID_subject) 
        where ID_result=?
        GROUP by (ID_group) 
        ORDER BY count(ID_subject) DESC', [$ID_result]);

        $maxIDt = DB::table('top3')->max('ID_top3');
        if ($maxIDt == null) {
            $ID_top3 = 1;
        } else {
            $ID_top3 = $maxIDt + 1;
        }
        $rank = 1;
        for ($i = 0; $rank < 4; $i++) {
            if (!isset($top[$i])) {
                break;
            }
            if ($i == 0) {
                DB::table('top3')->insert([
                    'ID_top3' => $ID_top3 + $i,
                    'ID_result' => $ID_result,
                    'ID_group' => $top[$i]->ID_group,
                    'rank' => $rank
                ]);
                continue;
            }
            if ($top[$i - 1]->countSubject == $top[$i]->countSubject) {
                DB::table('top3')->insert([
                    'ID_top3' => $ID_top3 + $i,
                    'ID_result' => $ID_result,
                    'ID_group' => $top[$i]->ID_group,
                    'rank' => $rank
                ]);
                continue;
            }
            $rank++;
            DB::table('top3')->insert([
                'ID_top3' => $ID_top3 + $i,
                'ID_result' => $ID_result,
                'ID_group' => $top[$i]->ID_group,
                'rank' => $rank
            ]);
        }

        $personalityKey = DB::table('result')->select('personality')->where('ID_result', '=', $ID_result)->value('personality');
        $personalityType = DB::table('personalitytype')->where('type', '=', $personalityKey)->get();
        $joboftype = DB::table('personalitytype')->select('job')->where('type', '=', $personalityKey)->value('job');
        $majorRank1 = DB::table('top3')->select('ID_group')->where('ID_result', '=', $ID_result)->where('rank', '=', 1)->value('ID_group');
        $majorRank2 = DB::table('top3')->select('ID_group')->where('ID_result', '=', $ID_result)->where('rank', '=', 2)->value('ID_group');
        $majorRank3 = DB::table('top3')->select('ID_group')->where('ID_result', '=', $ID_result)->where('rank', '=', 3)->value('ID_group');
        $rank1 = DB::table('subjectgroup')->select('groupName')->where('ID_group', '=', $majorRank1)->value('groupName');
        $rank2 = DB::table('subjectgroup')->select('groupName')->where('ID_group', '=', $majorRank2)->value('groupName');
        $rank3 = DB::table('subjectgroup')->select('groupName')->where('ID_group', '=', $majorRank3)->value('groupName');
        $job = null;
        $part = null;
        // major group 1 =	Artificial Intelligence
        // major group 2 = Computer Architecture and Organisation
        // major group 3 = Network and Security
        // major group 4 = Databases and Data Mining
        // major group 5 = Computer Graphics and Visualization
        // major group 6 = Software Engineering
        // major group 7 = Scientific Computing and Simulation
        // major group 8 = Concurrent, parallel and distributed systems

        if ($personalityKey == 'ISTJ') {
            if ($majorRank1 == 6) {
                if ($majorRank2 == 2 or $majorRank2 == 4) {
                    $job = 'อาจารย์';
                    $part = 'สายผู้สอนหลักสูตรไอที / ฝึกอบรมด้านไอที';
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
                }
                if ($majorRank2 == 5) {
                    $job = 'นักวิชาการคอมพิวเตอร์';
                    $part = 'Developing Software';
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
                }
            }
            if ($majorRank1 == 3) {
                $job = 'พนักงานระบบงานคอมพิวเตอร์';
                $part = 'Developing Website';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }

            if ($majorRank1 == 1) {
                $job = 'Front-end Developer';
                $part = 'Developing Website';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
        }

        if ($personalityKey == 'ESFJ') {
            $job = 'DevOps Engineering';
            $part = 'Cyber Security, Developing Website, IT management';
            DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
            DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
        }

        if ($personalityKey == 'ISFP') {
            if ($majorRank2 == 3) {
                $job = 'Quality Assurance(QA)';
                $part = 'Quality Assurance';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank2 == 2) {
                $job = 'Software Engineer';
                $part = 'Developing Software, Developing Website';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank2 == 1) {
                $job = 'Front end and Back end Developer';
                $part = 'Developing Website';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank2 == 4) {
                $job = 'Back end Developer';
                $part = 'Developing Website';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
        }

        if ($personalityKey == 'ESTJ') {
            if ($majorRank1 == 6) {
                $job = 'Software Developer';
                $part = 'Developing Software';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 4) {
                $job = 'FAVP';
                $part = 'Data Science';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
        }

        if ($personalityKey == 'INTP') {
            if ($majorRank1 == 1) {
                $job = 'CTO (หัวหน้าเจ้าหน้าที่เทคโนโลยี)';
                $part = 'Developing Software,  System Analyst, IT management';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 3) {
                $job = 'Software Engineer';
                $part = 'Cyber Security,  Database Administrator, Developing Software';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 6) {
                $job = 'Back end Developer';
                $part = 'Developing Website';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
        }

        if ($personalityKey == 'ISTP') {
            if ($majorRank1 == 1) {
                $job = 'Developer';
                $part = 'Developing Software,  System Analyst';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 3) {
                $job = 'Cyber security consultant';
                $part = 'Cyber Security';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 4) {
                $job = 'Computer System Analyst';
                $part = 'Developing Software, System Analyst';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 5) {
                $job = 'นักวิชาการคอมพิวเตอร์';
                $part = 'Developing Website, IT Support, สายการออกแบบ/เขียนแบบด้วยคอมพิวเตอร์/งานสามมิติ/Animation';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
        }


        if ($personalityKey == 'ESFP') {
            if ($majorRank1 == 3) {
                $job = 'Cloud Engineer ';
                $part = 'IT Consultant';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 5) {
                $job = 'Character design / illustrations ';
                $part = 'Illustration';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
        }

        if ($personalityKey == 'ESTP') {
            if ($majorRank1 == 1) {
                $job = 'Machine Learning';
                $part = 'IT Consultant';
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
            }
            if ($majorRank1 == 6) {
                if ($majorRank2 = 4) {
                    $job = 'Software Developer';
                    $part = 'Developing Website';
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
                }
                if ($majorRank2 == 5) {
                    $job = 'RPA Developer';
                    $part = 'Developing Website';
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['predictJob' => $job]);
                    DB::table('result')->where('ID_result', '=', $ID_result)->update(['jobPart' => $part]);
                }
            }
        }
        // echo($personalityType);

        return view('/result', ['personalityKey' => $personalityKey, 'personalityType' =>  $personalityType, 'joboftype' => $joboftype
        , 'rank1' => $rank1, 'rank2' => $rank2, 'job' => $job, 'part' => $part]);
    }

    public function history(request $request)
    {
        $id = Auth::id();
        $hi = DB::table('result')->join('personalitytype','result.personality','=','personalitytype.type')->where('ID_user', '=', $id)->orderBy('ID_result','ASC')->get();

        return view('/history', ['hi' => $hi]);
    }
}
