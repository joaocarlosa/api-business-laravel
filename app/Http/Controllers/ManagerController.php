<?php

namespace App\Http\Controllers;


use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ManagerController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Manager::all();
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        try {
            Manager::create($request->all());
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

        $manager = Manager::find($id);
        if($manager){
            $manager->company;
            $manager->colaborator;
            return $manager;
        }
        return response()->json([
            'message' => 'error.'
        ], 404);
    }

    public function destroy($id)
    {
        if(Manager::destroy($id)){
            return response()->json([
                'message' => 'success..'
            ], 201);
        }
        return response()->json([
            'message' => 'error.'
        ], 404);

    }
}
