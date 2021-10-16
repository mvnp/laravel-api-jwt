<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blocks as Blocks;
use App\Http\Resources\Blocks as BlocksResource;

class BlocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Blocks::all();
        return BlocksResource::collection($blocks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $block = new Blocks;
        $block->name = $request->input('name');
        $block->description = $request->input('description');
        $block->slug = $request->input('slug');
        $block->enabled = $request->input('enabled');

        if($block->save()){
            return new BlocksResource($block);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blocks = Artigo::findOrFail($id);
        return new BlocksResource($blocks);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $block = Blocks::findOrFail($id);
        if( $block->delete() ){
            return new BlocksResource($block);
        }
    }
}
