<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class CompanyController extends Controller{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Company::all();
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        try {
            Company::create($request->all());
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

        $company = Company::find($id);
        if($company){
            $company->company;
            $company->manager;
            return $company;
        }
        return response()->json([
            'message' => 'error.'
        ], 404);
    }

}
