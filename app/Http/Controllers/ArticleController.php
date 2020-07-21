<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class ArticleController extends Controller
{
    public function index()
    {
        if(Auth::user()->role <= 2){
            $articles = Article::orderBy('id', 'DESC')->paginate(10);
        }
       
        return view('back.articles.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck( 'name', 'id');
        return view('back.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'name' => 'required|max:150|min:5',
            'description' => 'required',
        ]);
        $article = new Article();
        try {
            $data = $request->all();
            $article = $article->create($data);
        }
        catch (Exception $exception){
            return redirect()->back()->with('error', $exception->getCode());
        }
        $msg = 'مطلب جدید با موفقیت ذخیره شد';
	    return redirect(route('admin.articles'))->with('success', $msg) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all()->pluck( 'name', 'id');
        $users = User::all()->pluck( 'name', 'id');
        return view('back.articles.edit', compact('article','categories', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {

        $validatedData= $request->validate([
            'name' => 'required|max:150|min:5',
            'description' => 'required',
        ]);
        try {
            $data = $request->all();

            $article->update($data);
        }
        catch (Exception $exception){
            return redirect()->back()->with('error', $exception->getCode());
        }
        $msg = 'مطلب  با موفقیت ویرایش شد';
	    return redirect(route('admin.articles'))->with('success', $msg) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Article $article)
    {

            try {
                $article->delete();
            } catch (Exception $exception) {
                return redirect()->back()->with('warning', $exception->getCode());
            }

            $msg = ' با موفقیت حذف شد';
            return redirect()->back()->with('success', $msg);

    }



}
