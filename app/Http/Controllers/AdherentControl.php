<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Models\Adherent;

    use Illuminate\Support\Facades\Auth;

    class AdherentControl extends Controller
        {
            public function getAdmin(){
                $admin = Adherent::all();
                return view('Adherent.listeAdherent', ['Adherent'=>$admin]);
            }

            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id = Auth::user()->idAdherent;
        $LeAdherent = Adherent::find($id);
        return view('Adherent.gestionAdherent', ['LeAdherent' => $LeAdherent]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $LeAdherent = \App\Models\Adherent::find($id);
        return view('Adherent.editAdherent', compact('LeAdherent','id'));
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
        $LeAdherent = Adherent::find($id);
        $LeAdherent->adresse = $request->input('adresse');
        $LeAdherent->CP = $request->input('CP');
        $LeAdherent->telephone = $request->input('telephone');
        $LeAdherent->courriel = $request->input('courriel');
        $LeAdherent->save();
        return redirect('Adherent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    }

?>
