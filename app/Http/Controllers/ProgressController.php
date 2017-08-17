<?php

namespace App\Http\Controllers;

use App\Services\ProgressServices;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    /**
     * @param ProgressServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index( ProgressServices $services)
    {
        $posts = $services->getAllBlog();

        return view('progress.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param $id
     * @param ProgressServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, ProgressServices $services)
    {
        $post = $services->initCatId($services->getCatId())->getPost($id);

        return view('progress.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
