<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Throwable;

class PsychologistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.psychologist.index', [
                'psychologists' => Psychologist::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.psychologist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $this -> validateData($request);

        try {
            $psychologist = new Psychologist();
            $this -> stackData($psychologist, $validData);
            return redirect('/psychologists');
        } catch (Throwable $e) {
            return redirect('/psychologists/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Psychologist $psychologist)
    {
        $password = $this->secureDecrypt($psychologist->password);
        return view('auth.psychologist.show', [
            'psychologist' => $psychologist,
            'password' => $password,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psychologist =  Psychologist::findOrFail($id);
        return view('auth.psychologist.edit', [
            'psychologist' => $psychologist
        ]);
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
        $validData = $this -> validateData($request);
        $psychologist = Psychologist::findorFail($id);
        $this -> stackData($psychologist, $validData);
        return redirect('/psychologists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psychologist = Psychologist::findOrFail($id);
        $psychologist->delete();

        return redirect('/psychologists');
    }


    private function secureEncrypt(String $stringPassword){
        return Crypt::encryptString($stringPassword);
    }

    private function secureDecrypt(String $passwordCrypt){
        return Crypt::decryptString($passwordCrypt);
    }

    private function validateData(Request $request){
        $validData = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'role' => 'required',
        ]);
        return $validData;
    }

    private function stackData(Psychologist $psychologist, array $validData){
        $psychologist->name = $validData['name'];
        $psychologist->lastname = $validData['lastname'];
        $psychologist->email = $validData['email'];
        $psychologist->password = $this->secureEncrypt($validData['password']);
        $psychologist->phone = $validData['phone'];
        $psychologist->state = $validData['state'];
        $psychologist->role = $validData['role'];
        $psychologist->save();
    }

}
