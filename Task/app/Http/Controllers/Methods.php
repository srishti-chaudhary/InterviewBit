<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\Participants;
use App\Interviews;
use App\Interview_Participants;

class Methods extends Controller
{
    public function getParticipants (Request $request) {
        $results = Participants::all();
        return response() -> json($results);
    }

    public function getInterview (Request $request) {
        $results = Interviews::all();
        return response() -> json($results);
    }

    public function getInterviewParticipant (Request $request) {
        $results = Interview_Participants::where('I_ID', '=', $request->input('I_ID'))->get();
        return response() -> json($results);
    }

    public function addInterview (Request $request) {
        $interview = new Interviews ([
            'I_ID'=> $request->input('I_ID');
            'Date'=> $request->input('Date');
            'Start_Time'=> $request->input('Start_Time');
            'End_Time'=> $request->input('End_Time');
        ]);
        $interview->save();
        return response() -> json('YES')
    }

    public function addInterviewParticipant (Request $request) {
        $interview = new Interview_Participants ([
            'P_ID'=> $request->input('P_ID');
            'I_ID'=> $request->input('I_ID');
            'User_ID'=> $request->input('User_ID');
        ]);
        $interview->save();
        return response() -> json('YES')
    }

}
