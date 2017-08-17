<?php

namespace App\Http\Controllers;

use App\Services\MethodologyServices;
use Illuminate\Http\Request;

class MethodologyController extends Controller
{
    /**
     * @param MethodologyServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(MethodologyServices $services)
    {
        $posts = $services->getAllBlog();

        return view('methodology.index', compact('posts'));
    }


    /**
     * @param $cat
     * @param MethodologyServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCat($cat, MethodologyServices $services)
    {
        $posts = $services->getCatPosts($cat);

        return view('methodology.cat', compact('posts'));
    }


    /**
     * @param $cat
     * @param $sub
     * @param MethodologyServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSubCat($cat, $sub, MethodologyServices $services)
    {
        $posts = $services->getSubCatPosts($cat, $sub);

        return view('methodology.cat', compact('posts'));
    }


    /**
     * @param $id
     * @param MethodologyServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPost($id, MethodologyServices $services)
    {
        $post = $services->initCatId($services->getCatId())->getPost($id);

        return view('methodology.show', compact('post'));
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
