<?php

namespace App\Http\Controllers;

use App\feedback;
use Illuminate\Http\Request;
use DB;

class feedbackController extends Controller
{

    public function showAllfeedback()
    {
        return response()->json(feedback::all());
    }

    public function showOnefeedback($id)
    {
        return response()->json(feedback::find($id));
    }

    public function showUserFeedback($id)
    {
        $feedback = DB::table('feedback')->where('id_usuario', $id)->get();
        return response()->json($feedback);
    }

    public function showCoursefeedback($id)
    {
        $feedback = DB::table('feedback')->where('id_curso', $id)->get();
        return response()->json($feedback);
    }

    public function create(Request $request)
    {
        $feedback = feedback::create($request->all());

        return response()->json($feedback, 201);
    }

    public function update($id, Request $request)
    {
        $feedback = feedback::findOrFail($id);
        $feedback->update($request->all());

        return response()->json($feedback, 200);
    }

    public function delete($id)
    {
        feedback::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
