<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemanController extends Controller
{
    private $dt = [
        [
            'idbuku'=>1,
            'namateman'=>'Yuanes Idah Blili',
            'alamat'=>'Jl. Lurus Terus Blok D.29A',
            'kota'=>'Denpasar',
            'wa'=>'08778877',
        ],
        [
            'idbuku'=>2,
            'namateman'=>'Yunita Sari dewi Purnama',
            'alamat'=>'Jl. Lika-liku D No 29A',
            'kota'=>'Denpasar',
            'wa'=>'0866554433',
        ],
    ];
    public function index(){
        $data = $this->dt;
        return view('teman', compact('data') );
    }
    public function detail( $id ){
        $data = collect($this->dt)->firstWhere('idbuku',$id);
        
        if(!$data){
            abort(404,"Data Tidak ada yang sesuai dengan id");
        }

        return view('detailview', compact('data'));
    }
}
