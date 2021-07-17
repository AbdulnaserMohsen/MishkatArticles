<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function categories()
    {
      $categories = Category::paginate(10);
      return view('admin.categories',compact('categories'));
    }

    protected function validator(array $data)
    {
         return Validator::make($data, [
              'name' => ['required', 'string', 'max:255' , 'regex:/^([a-zA-Z0-9\-_,\.:\/\(\)& ]{3,})+$/u'],
          ]);
    }

    function add_category(Request $request)
    {
        $this->validator($request->all())->validate();

        $category= new Category();
        $category->name =$request->get('name');
        $category->save();

        return response()->json(['success'=>'successfull','message'=>'Added Successfully']);
        //return back();
    }
    function update_category($id,Request $request)
    {
        $this->validator($request->all())->validate();

        $category = Category::find($id);
        $category->name =$request->get('name');
        $category->save();

        return response()->json(['success'=>'successfull','message'=>'Updated Successfully']);
    }
    function delete_category($id)
    {
        $category = Category::find($id);
        if($category)
        {
            try
            {
                $category->delete();
            }
            catch(\Exception $ex)
            {
                if(Str::contains($ex->getMessage(), 'Cannot delete or update a parent row: a foreign key constraint fails '))
                {
                  return response()->json(['success'=>'faild','message'=>'Error: Can not delete this category as It is used in articles']);
                }
                return response()->json(['success'=>'faild','message'=>'Error: '.$ex->getMessage()]);
            }
        }
        else
        {
            return response()->json(['success'=>'faild','message'=>'this is item is not found']);
        }


        return response()->json(['success'=>'successfull','message'=>'Deleted Successfully']);
    }


}
