<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $categories = Category::paginate(4);
        return view('admin.categories.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create') ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();  //edit validated function
        //get image
        $image = $request->image;
        $newImageName  = time().'(-)'.$image->getClientOriginalName();
        $image->storeAs('categories', $newImageName, 'public');
        $data['image'] = $newImageName;


        
        Category::create($data);
        return to_route('admin.categories.create')->with('add_category_status','Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return to_route('admin.categories.index')->with('update_category_status','category list updated successfuly') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('admin.categories.index')->with('delete_category_status','category has been deleted successfuly');
    }

   // public function search(StoreCategoryRequest $request)
 //   {
 //       $search = $request->search; // search is the of input type in search form 
  //      $test = Category::where('name','LIKE','%'.$search.'%')->paginate(3);
   //     return view('admin.categories.index',get_defined_vars());
        
    //}
}
