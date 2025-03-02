<?php

namespace App\Http\Controllers;

use App\Models\QuestTracker;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Validation\Rule;

class QuestTrackerController extends Controller implements HasMiddleware
{
    public static function middleware() 
    {
        return [
            new Middleware('auth:sanctum')
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth('sanctum')->user(); // Get authenticated user

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $hunterIds = $user->hunters()->pluck('id'); // Get all hunter IDs for the user

        return QuestTracker::whereIn('hunter_id', $hunterIds)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "quest_id" => [
                "required",
                "exists:quests,id",
                Rule::unique('quest_trackers')->where((function ($query) use ($request) {
                    return $query->where('hunter_id', $request->hunter_id);
                }))
            ],
            "hunter_id" => "required|exists:hunters,id",
            "status" => "in:untaken,accepted,completed"
        ]);

        // gets specific hunter
        $hunter = $request->user()->hunters()->where('id', $fields['hunter_id'])->first();

        if (!$hunter) {
            return response()->json(['error' => 'Unauthorized or invalid hunter'], 403);
        }
    
        // Create quest tracker for the found hunter
        $quest_tracker = $hunter->questTrackers()->create($fields);

        return response()->json([
            'message' => 'New quest_tracker has been stored in the database',
            'new_quest_tracker' => $quest_tracker
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestTracker $questTracker)
    {
        return $questTracker;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestTracker $questTracker)
    {
        $fields = $request->validate([
            "status" => "in:untaken,accepted,completed"
        ]);

        // Ensure the quest tracker belongs to a hunter owned by the authenticated user
        if ($request->user()->hunters()->where('id', $questTracker->hunter_id)->doesntExist()) {
            return response()->json(['error' => 'Unauthorized or invalid hunter'], 403);
        }

        // Create quest tracker for the found hunter
        $questTracker->update($fields);

        return response()->json([
            'message' => 'Quest_tracker has been updated in the database',
            'updated_qt' => $questTracker
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestTracker $questTracker)
    {
        $questTracker->delete();

        return [ 'message' => 'This quest-tracker has been deleted.',
                 'deleted_qt' => $questTracker ];
    }
}
