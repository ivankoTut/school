<?php

namespace App\Http\Controllers;

use App\Services\GiaServices;
use Illuminate\Http\Request;

class GiaController extends Controller
{
    /**
     * @param GiaServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index( GiaServices $services)
    {
        $posts = $services->getAllBlog();

        return view('gia.index', compact('posts'));
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

    public function showCat($cat, GiaServices $services)
    {
        $posts = $services->getCatPosts($cat);

        return view('gia.cat', compact('posts'));
    }

    public function showPost($id, GiaServices $services)
    {
        $post = $services->initCatId($services->getCatId())->getPost($id);

        return view('gia.show', compact('post'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
