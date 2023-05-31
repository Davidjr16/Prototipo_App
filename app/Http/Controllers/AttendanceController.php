<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\User;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function asistencia(Request $request)
    {
        $userId = $request->input('user_id');
        $state = $request->input('state');

        //veirificar Si El Usuario Existe
        $user = User::find($userId);
        if(!$user){
            return \response()->json(['error' =>'Usuario no existente'], 404);
        }

        //Tomar La Asistencia 
        $attendance = new Attendance();
        $attendance->user_id = $userId;
        $attendance->state = $state; //Estado de la solicitud
        $attendance->date = $fechaActual;
        $attendance->save();

        return response()->json(['message' => 'Asistencia Realizada'], 200);
    }
}
