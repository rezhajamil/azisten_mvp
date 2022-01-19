<?php

namespace App\Http\Controllers\User;

use App\Models\Afiliator;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class AfiliatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('afiliasi');
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
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
        ]);

        $cond=true;
        while($cond){
            $ref_code=$this->getReferralCode(3,3);
            $check= Afiliator::where('referral_code', '=', $ref_code)->first();
            if (!$check) {
                $cond=false;
            }
        }


        $afiliator=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'referral_code'=>$ref_code,
        ];

        
        $text = "Halo AZISTEN\nSaya ingin mendaftar di *Program Afiliasi AZISTEN*. Berikut data diri saya:\nNama : $request->name \nEmail : $request->email \nJenis Kelamin : $request->gender \nAlamat : $request->address \n\n Terimakasih";

        $wa_url = 'https://wa.me/6285869205026?text=' . rawurlencode($text);

        Afiliator::create($afiliator);
        return back()->with('success', $wa_url);
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
        //
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
        //
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

    public function getReferralCode($n_alp, $n_num)
    {
        $alp = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '0123456789';
        $randomCode = '';

        for ($i = 0; $i < $n_alp; $i++) {
            $index = rand(0, strlen($alp) - 1);
            $randomCode .= $alp[$index];
        }
        for ($i = 0; $i < $n_num; $i++) {
            $index = rand(0, strlen($num) - 1);
            $randomCode .= $num[$index];
        }
        $randomCode=str_split($randomCode,1);
        shuffle($randomCode);

        return implode("",$randomCode);
    }
}
