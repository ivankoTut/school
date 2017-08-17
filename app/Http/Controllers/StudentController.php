<?php

namespace App\Http\Controllers;

use App\Services\StudentServices;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * @param StudentServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index( StudentServices $services)
    {
        $posts = $services->getAllBlog();

        return view('student.index', compact('posts'));
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
     * @param $cat
     * @param StudentServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCat($cat, StudentServices $services)
    {
        $posts = $services->getCatPosts($cat);

        return view('student.cat', compact('posts'));
    }

    /**
     * @param $id
     * @param StudentServices $services
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPost($id, StudentServices $services)
    {
        $post = $services->initCatId($services->getCatId())->getPost($id);

        return view('student.show', compact('post'));
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
