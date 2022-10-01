<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CollaboratorController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return Collaborator::all();
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        try {
            Collaborator::create($request->all());
            return response()->json([
                'message' => 'Success.'
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'error.'
            ], 404);
        }
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $collaborator = Collaborator::find($id);
        if($collaborator){
            $collaborator->manager;
            $collaborator->company;
            return $collaborator;
        }
        return response()->json([
            'message' => 'error.'
        ], 404);
    }

    public function destroy($id)
    {

        if(Collaborator::destroy($id)){
            return response()->json([
                'message' => 'success..'
            ], 201);
        }
        return response()->json([
            'message' => 'error.'
        ], 404);

    }
}
