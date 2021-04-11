<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Identitas;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Identitas::get();
        echo json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        // var_dump($request->input('nama'));
        $store = Identitas::create(
            ['nama' => $request->input('nama'),
            'umur'=>$request->input('umur')]);
        $data["store"]=$store;
        if($store!=null){
            $data["status"]="Data disimpan";
        }
        else if($store==null){
            $data["status"]="Tidak ada data yang disimpan";
        }
        echo json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Identitas::find($id);
        echo json_encode($data);
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
        $update = Identitas::where('id',$id)->update(
            ['nama'=>$request->input('nama'),'umur'=>$request->input('umur')]
        );
        $data["update"]=$update;
        if($update>=1){
            $data["status"]="Data diupdate";
        }
        else if($update==0){
            $data["status"]="Tidak ada data yang diupdate";
        }
        echo json_encode($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Identitas::find($id)->delete();
        $data["delete"]=$delete;
        if($delete==true){
            $data["status"]="Data dihapus";
        }
        else if($delete!=true){
            $data["status"]="Tidak ada data yang dihapus";
        }
        echo json_encode($data);
    }
}