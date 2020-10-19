<?php

namespace App\Http\Controllers;

use App\Databuku;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    public function __construct()
    {
        $this->Databuku = new Databuku();
    }
     public function index()
    {
        $databukus = Databuku::all();
        return view('databuku.index', compact('databukus'));
    }
    public function create()
    {
        return view('databuku.create');
    }
    public function store()
    {
        $databuku = databuku::create($this->validateRequest());
        $this->storeImage($databukus);

        return redirect()->back()->with(['success' => 'data berhasil dibuat' ]);
    }
    private function validateRequest()
    {
                return tap(request()->validate([
                    'Nama' => 'required',
                    'Alamat' => 'required',
                    'Photo' => 'required',
                    'images'      => 'file|image|max:5000',
                    'telephone' => 'required',
                    'JK' => 'required',
                    'Agama' => 'required',
                    'Tgl Lahir' => 'required',
                    'Asal Sekolah' => 'required',
                    'Tnama ibu' => 'required',
                    'Nama Ayah' => 'required',
        ]), function(){
            if(request()->hasFIle('images')){
                request()->validate([
                    'images'  => 'file|image|max:5000',
                ]);
            }
        });
    }
    private function storeImage($databuku){
        if(request()->has('image')){
            $databuku->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $datadiri->images))->fit(300,300,null, 'top-left');
         
            $image->save();
        }
        }
    }
    

                