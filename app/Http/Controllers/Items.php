<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Items extends CrudController
{


    protected function setModel()
    {
        // TODO: Implement setModel() method.

        return new \App\Items();
    }

    protected function setModelUrl()
    {
        return '/items';
        return '/items/'.request()->segment(2);
    }

    protected function setViewPath()
    {
        // TODO: Implement setViewPath() method.

        return 'items';
    }



    protected $afterSaveRedirectUrl = '/items/create';

    protected $storeValidationRules = [ 'name'=>'required' ];
    protected $updateValidationRules = [ 'name'=>'required' ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     * public function create()
        {
            //
        }
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * public function store(Request $request)
        {

        }
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * public function show($id)
        {
        //
        }
     *
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * public function edit($id)
        {
        //
        }
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     *
     * public function update(Request $request, $id)
        {
            dd($request);
        }
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     * public function destroy($id)
        {
            //
        }
     */

}
