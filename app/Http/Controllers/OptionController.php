<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;
use App\Question;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $option = new Option;

        $option->name = $request->name;
        $option->type = $request->type;
        $option->description = $request->description;
        $option->question_id = $request->question_id;

        $option->save();

        return response()->json($option);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option = Option::find($id);

        return response()->json($option);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $option = Option::find($id);

      $option->name = $request->name;
      $option->type = $request->type;
      $option->description = $request->description;

      $option->save();

      return response()->json($option);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if(Option::destroy($id)){
        return response()->json(true);
      }else{
        return response()->json(false);
      }
    }
}
