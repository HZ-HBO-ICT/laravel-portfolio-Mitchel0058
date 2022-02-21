<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = \App\Models\Blogposts::latest('date_added')->get();

        return view('blog', [
            'blogposts' => $blogposts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('blog-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        request()->validate([
            'main_text' => 'required',
            'link' => 'required'
        ]);

        $blogpost = new \App\Models\Blogposts();

        $blogpost->main_text = request('main_text');
        $blogpost->date_added = now();
        $blogpost->link = request('link');

        $blogpost->save();

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $post = \App\Models\Post::where('slug', $id)->firstOrFail();

        return view('posts/' . $post->slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (($blogpost = \App\Models\Blogposts::find($id)) === null) {
            abort(404);
        };

        return view('blog-edit', [
            'blogpost' => $blogpost
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'main_text' => 'required',
            'link' => 'required'
        ]);

        $blogpost = \App\Models\Blogposts::find($id);
        $blogpost->updated_at = now();
        $blogpost->main_text = request('main_text');
        $blogpost->link = request('link');

        $blogpost->save();

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if (($blogpost = \App\Models\Blogposts::find($id)) === null) {
            abort(404);
        };
        $blogpost->delete();

        return redirect('/blog');
    }
}
