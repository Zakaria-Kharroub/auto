<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureController extends Controller
{
    //
    public function index(){
        $voitures = Voiture::where('agence_id',auth()->user()->id)->get();
        return view('agence.voiture',compact('voitures'));
    }



    public function addVoiture(Request $request){

        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annne_fabrication' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            'description' => 'required',
        ]);

        $voiture = new Voiture();
        $voiture->marque = $request->input('marque');
        $voiture->modele = $request->input('modele');
        $voiture->annne_fabrication = $request->input('annne_fabrication');
        $voiture->prix = $request->input('prix');
        $voiture->description = $request->input('description');
        $voiture->disponibilite = 'oui';
        $voiture->agence_id = auth()->user()->id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images',$name);
            $voiture->image = $name; 
        }

        // dd($voiture);

        $voiture->save();  
        return redirect()->back()->with('message','voiture ajoutée avec succès');

    }

    public function updateVoiture(Request $request,$id){
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'annne_fabrication' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            'disponibilite' => 'required',
            'description' => 'required',
        ]);

        $voiture = Voiture::find($id);
        $voiture->marque = $request->input('marque');
        $voiture->modele = $request->input('modele');
        $voiture->annne_fabrication = $request->input('annne_fabrication');
        $voiture->prix = $request->input('prix');
        $voiture->description = $request->input('description');
        $voiture->disponibilite = $request->input('disponibilite');
        $voiture->agence_id = auth()->user()->id;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images',$name);
            $voiture->image = $name; 
        }

        $voiture->save();  
        return redirect()->back()->with('message','voiture modifiée avec succès');
    }

        
}

