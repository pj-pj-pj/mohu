<?php

namespace App\Http\Controllers;

use App\Models\QuestTracker;
use App\Http\Requests\StoreQuestTrackerRequest;
use App\Http\Requests\UpdateQuestTrackerRequest;

class QuestTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestTrackerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestTracker $questTracker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestTrackerRequest $request, QuestTracker $questTracker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestTracker $questTracker)
    {
        //
    }
}
