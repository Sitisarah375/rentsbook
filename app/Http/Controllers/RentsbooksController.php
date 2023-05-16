<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\book;
use App\Models\Category;
use Illuminate\Http\Request;

class RentsbooksController extends Controller
{
    /**     
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function book()
     {
         $book = book::all();
         $category = Category::all();
         return view('dashboard.book', compact('book', 'category'));
     }
 
     public function add(Request $request)
     {
            // dd($request->all());

         $request->validate([
             'judul' => 'required',
             'penulis' => 'required',
             'penerbit' => 'required',
             'kategori' => 'required',
             'sinopsis' => 'required',
             'image' => 'required',
         ]);
         $input = $request->all();
         if($image = $request->file('image')) {
             $destinationPath = 'image/';
             $coverImage = date('YmdHis').'.'. $image->getCLientOriginalExtension();
             $image->move($destinationPath, $coverImage);
             $input['image'] = "$coverImage";
         }

         Book::create($input);

     return redirect('/book')->with('success', 'Berhasil membuat !');
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

        public function storePesan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create($request->all());
        return redirect('/');
    }

    public function pesan()
    {
        $pesan = Pesan::get();
        return View('dashboard.pesan', compact('pesan'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rentsbooks  $rentsbooks
     * @return \Illuminate\Http\Response
     */
    public function show(Rentsbooks $rentsbooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rentsbooks  $rentsbooks
     * @return \Illuminate\Http\Response
     */
    public function editBook($id){
        $book = Book::where('id', $id)->first();
        $category = Category::all();
        return view('dashboard.bookedit', compact('book', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rentsbooks  $rentsbooks
     * @return \Illuminate\Http\Response
     */

        public function updateBook(Request $request, $id)
        {
            // dd($request->all());
            $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'image' => 'required',
            ]);

            $input = $request->except(['_token', '_method']);
  
            if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $coverImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
            }else{
            unset($input['image']);
            }
          
            Book::where('id', $id)->update($input);

            return redirect('/book')->with('edit', 'Berhasil edit data user');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rentsbooks  $rentsbooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rentsbooks $rentsbooks)
    {
      //
    }
}
