<?php

namespace App\Http\Controllers;

use App\Models\Seance;

use App\Models\Film;

use App\Models\CategorieFilm;

use Illuminate\Http\Request;

class Seances2Control extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $LesSeances = Seance :: all();
        return view('Seances.gestionSeances', ['LesSeances' => $LesSeances]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $LesSeances = Seance :: all();
        $LesCategoriesFilm = CategorieFilm :: all();
        return view('Seances.createSeances', ['LesSeances' => $LesSeances , 'LesCategoriesFilm' => $LesCategoriesFilm]);

        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
       
        $Seance = new Seance();
        $Film = new Film();
        $CategorieFilm = new CategorieFilm();

        $CategorieFilm ->idCat = $request -> input('idCat');
        $CategorieFilm ->nomCat = $request -> input('nomCat');

        $idCat = $CategorieFilm->idCat +1;


        
        $Film->titre = $request -> input('titre');
        $Film->duree = $request -> input('duree');
        $Film->idCat = $idCat;
        $Film->save();
        $idFilm = $Film->idFilm;
        
        
        

        $Seance ->dateSeance = $request -> input('dateSeance');
        $Seance ->heureDeb = $request -> input('heureDeb');
        $Seance ->heureFin = $request -> input('heureFin');
        $Seance->idFilm = $idFilm;
        $Seance -> save();

        return redirect('Seance');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $s = Seance::find($id);
        $CategorieFilm = $s -> CategorieFilm;
        return view('Seances.detailSeance', ['uneSeance'=>$s]);
        return view('Seance.detailSeance', ['UneSeance' =>$s, 'CategorieFilm' =>$CategorieFilm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Seance = \App\Models\Seance::find($id);
        return view('Seances.editSeances', compact('Seance','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Seance = Seance::find($id);
        $Seance ->Film->titre = $request -> input('titre');
        $Seance ->Film->CategorieFilm->nomCat = $request -> input('nomCat');
        $Seance ->dateSeance = $request -> input('dateSeance');
        $Seance ->heureDeb = $request -> input('heureDeb');
        $Seance ->Film->duree = $request -> input('duree');
        $Seance -> save();
        return redirect('Seance');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Seance = Seance::find($id);
        $Seance -> delete();
        return redirect('Seance');
    }
}
