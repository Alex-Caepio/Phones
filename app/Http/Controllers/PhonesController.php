<?php

namespace App\Http\Controllers;
use App\Models\Phone;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;




class PhonesController extends Controller
{

    public function index(){
       

           $phones = Phone::all();
            /*foreach($phones as $phone) {
                   dump($phone->model);
               }*/
           return view('phones.index', compact('phones'));
               //$posts=Post::all();
               /*$posts=Post::where('is_published',0)->get();
               foreach($posts as $post) {
                   dump($post->title);
               }
               dump('end');*/
            }


    public function create(){

        return view('phones.create');
                
    }

       
    
    
    public function store(){

        $data = request()->validate([
            'model' => '',
            'producer' => '',
            'price' => '',
        ]);
        Phone::create($data);
            return redirect()->route('phone.index');
    }

    public function show(Phone $phone){

        return view('phones.show', compact('phone'));

    }

    public function edit(Phone $phone){

        return view('phones.edit', compact('phone'));

    }

    public function update(Phone $phone){

        $data = request()->validate([
            'model' => '',
            'producer' => '',
            'price' => '',
        ]);

        $phone->update($data);
        return redirect()->route('phone.show', $phone->id);
    }
    public function delete(Phone $phone){

        $phone->delete();

        return redirect()->route('phone.index');

    }

}

