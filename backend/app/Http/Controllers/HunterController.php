<?php

namespace App\Http\Controllers;

use App\Models\Hunter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class HunterController extends Controller implements HasMiddleware
{
    public static function middleware() 
    {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show'])
        ];
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hunter::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:8',
            'sex' => ['required', 'string', Rule::in(['Male', 'Female'])],
            'character_slot' => 'required'
        ]);

        // $hunter = Hunter::create($fields);
        $hunter = $request->user()->hunters()->create($fields);

        return response()->json([
            'message' => 'New hunter has been stored in the database',
            'new_hunter' => $hunter
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hunter $hunter)
    {
        return $hunter;
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Hunter $hunter)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hunter $hunter)
    {
        $hunter->delete();

        return [ 'message' => 'This hunter has been deleted.',
                 'deleted_hunter' => $hunter ];
    }
}
