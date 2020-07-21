<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class CategoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role <= 1){
            $categories = Category::orderBy('id', 'DESC')->paginate(10);
            $categories1 = Category::all();
            return view('back.categories.categories', compact('categories', 'categories1'));
        }
        else{

            $msg = ' دسترسی ندارید به این صفحه';
            return redirect(route('admin.index'))->with('warning', $msg);
            } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role <= 1){
        $categories = Category::all();
        return view('back.categories.create', compact('categories'));
        }
        else{

            $msg = ' دسترسی ندارید به این صفحه';
            return redirect(route('admin.index'))->with('warning', $msg);
            } 
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
            'name' => 'required',
        ]);
        $category = new Category();
        try {
            $category->create($request->all());
        }
        catch (Exception $exception){
            return redirect()->back()->with('error', $exception->getCode());
        }


        $msg = 'موضوع با موفقیت ذخیره شد';
        return redirect(route('admin.categories'))->with('success', $msg);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if(Auth::user()->role <= 1){
        $categories = Category::all();
        return view('back.categories.edit', compact('category', 'categories'));
        }
        else{

            $msg = ' دسترسی ندارید به این صفحه';
            return redirect(route('admin.index'))->with('warning', $msg);
            } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $validatedData= $request->validate([
            'name' => 'required',
        ]);
        try {
            $category->update($request->all());
        }
        catch (Exception $exception){
            return redirect()->back()->with('error', $exception->getCode());
        }

        $msg = 'ویرایش با موفقیت انجام شد';

        return redirect()->back()->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,Category $category)
    {
        if(Auth::user()->role <= 1){

        try {
            $category->delete();
        }
        catch (Exception $exception){
            return redirect()->back()->with('error', $exception->getCode());
        }

        $msg = ' با موفقیت حذف شد';
        return redirect()->back()->with('warning', $msg);
        }  
        else{

        $msg = ' دسترسی ندارید به این صفحه';
        return redirect(route('admin.index'))->with('warning', $msg);
        } 
    }
}
