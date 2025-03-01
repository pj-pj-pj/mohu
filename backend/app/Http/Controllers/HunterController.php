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
        // only fetch hunters based on the passed in bearer token on authorization
        // ---> now hunters are fetched per authenticated user
        return Hunter::where('user_id', auth('sanctum')->id())->get();
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
        if ($hunter->user_id !== auth('sanctum')->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
    
        return response()->json($hunter);
    }

    public function destroy(Hunter $hunter)
    {
        if ($hunter->user_id !== auth('sanctum')->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $hunter->delete();
        
        return [ 'message' => 'This hunter has been deleted.',
                 'deleted_hunter' => $hunter ];
    }
}
