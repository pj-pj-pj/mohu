<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Quest::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|max:120',
            'main_goal' => 'required|max:120',
            'description' => 'required|max:255',
            'difficulty' => 'required',
            'hr_points' => 'required',
            'reward' => 'required',
            'location' => 'required',
            'hunting_fee' => 'required'
        ]);

        $quest = Quest::create($fields);

        return response()->json([
            'message' => 'New quest has been stored in the database',
            'new_quest' => $quest
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quest $quest)
    {
        return $quest;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quest $quest)
    {
        $fields = $request->validate([
            'title' => 'required|max:120',
            'main_goal' => 'required|max:120',
            'description' => 'required|max:255',
            'difficulty' => 'required',
            'hr_points' => 'required',
            'reward' => 'required',
            'location' => 'required',
            'hunting_fee' => 'required'
        ]);

        $quest->update($fields);

        return response()->json([
            'message' => 'Quest has been updated',
            'updated_quest' => $quest
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quest $quest)
    {
        $quest->delete();

        return [ 'message' => 'This quest has been deleted.',
                 'deleted_quest' => $quest ];
    }
}
