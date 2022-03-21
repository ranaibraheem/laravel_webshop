<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = ProductCategory::latest()->paginate(5);
        $trashCat = ProductCategory::onlyTrashed()->latest()->paginate(3);

        return view('admin.category.index', compact('categories','trashCat'));
    }

    public function AddCategory(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:product_categories|max:255',
            
        ],
        
        [
            'name.required' => 'Please Input Category Name',
            'name.max' => 'Category Less Then 255Cars',
            
        ]);


// ---------------two ways to insert data in database-------------
ProductCategory::insert([
    'name' => $request->name,
    'user_id' => Auth::user()->id,
    'created_at' => Carbon::now()
]);

        // ProductCategory::insert([
        //     'name'  => $request->name,
        //     'created_at' =>Carbon::now()
        // ]);

        // $category = new ProductCategory;
        // $category->name = $request->name;
        // $category->save();

            return Redirect()->back()->with('success', 'Category Inserted Successfully');

    }



    public function Edit($id){
        $categories = ProductCategory::find($id);
        // $categories = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('categories'));
    }

    public function Update(Request $request ,$id){
        $update = ProductCategory::find($id)->update([
            'name' => $request->name,
            'user_id' => Auth::user()->id
        ]);

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // DB::table('categories')->where('id',$id)->update($data);



        return Redirect()->route('all.category')->with('success', 'Category Updated Successfull');


    }

    public function SoftDelete($id){
        $delete = ProductCategory::find($id)->delete();
        return Redirect()->back()->with('success','Category Soft Deleted Successfully');
    }


    public function Restore($id){
        $delete = ProductCategory::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','Category Restored Successfully');
    }

    public function Pdelete($id){
        $delete = ProductCategory::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success','Category Permanently Deleted');
    }

}

