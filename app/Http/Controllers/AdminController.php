<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\book;
use App\Models\Pesan;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(){
        $userr = User::all();
        $book = book::all();
        $category = Category::all();
        return View('dashboard.index', compact('userr', 'book', 'category'));
    }

    public function category(){
        $category = Category::all();
        return view('dashboard.category', compact('category'));
    }

    public function storeCategory(Request $request){
        $request->validate([
            'category_name' => 'required',
        ]);
        Category::create([
            'category_name' => $request->category_name,
        ]);
        return redirect('/category');
    }

    public function rentlog(){
        return view('dashboard.rentlog');
    }

    public function indexUsers()
    {
        $data = User::get();
        return View('dashboard.user', compact('data'));
    }

    public function editUsers($id){
        $user = User::where('id', $id)->first();
        return view('dashboard.useredit', compact('user'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'no_hp' =>'required',
            'address' =>'required',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
        ]);
        return redirect('/users')->with('edit', 'Berhasil edit data user');
    }

    public function destroy($id)
    {
        book::where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Berhasil menghapus');
    }

    public function destroyUser($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Berhasil menghapus');
    }

    public function destroyCategory($id)
    {
        Category::where('categoryID', $id)->delete();
        return redirect()->back()->with('danger', 'Berhasil menghapus');
    }

    public function destroyPesan($id)
    {
        Pesan::where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Berhasil menghapus');
    }
}
