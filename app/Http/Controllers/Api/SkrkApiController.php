<?php

namespace App\Http\Controllers\Api;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Skrk;
use DataTables;
use Storage;
use File;

class SkrkApiController extends Controller
{
    public function json(Request $request){
        // $data = Skrk::select('*');
        if ($request->ajax()) {
            $data = Skrk::select('gid','no_upt_imb','kelurahan','kecamatan','persil_imb','no_imb','no_skrk','nama_jalan','alamat_pem','nama_pemoh','no_imb','no_skrk')->where('no_imb', '!=', null)->where('no_skrk', '!=', null)->where('alamat_pem', '!=', null);
            // dd($data);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        // $gid = $data->gid;
                        // dd($gid);
                        $view = route('show', $data);
                        $btn = '<input type="hidden" name="gid" id="gid" value="'.$data->gid.'">';
                        $btn = $btn . '<a href="'.$view.'" target="_blank" onclick="show_json('.$data->gid.')" data-gid="'.$data->gid.'" class="edit btn btn-info btn-sm mr-2 mb-2">
                        View
                        </a>';
                        $btn = $btn . '<a href="javascript:void(0)" onclick="edit_json('.$data->gid.')" data-gid="'.$data->gid.'" data-toggle="modal" data-target="#modal-lg" class="edit btn btn-primary btn-sm mr-2 mb-2">
                        Update
                        </a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('home1');
        // return response()->json($data);
    }

    public function show_json($gid)
    {
        $aspects = Skrk::find($gid);
        // dd($aspects);
        return response()->json($aspects);
    }

    public function store_json(Request $request)
    {
        if ($request->hasFile('scan_skrk')) {
            if (Storage::exists('public/scan_skrk/'.$request->emp_scan_skrk)) {
                // dd('exist');
                Storage::delete('public/scan_skrk/'.$request->emp_scan_skrk);
            }
            $image = $request->file('scan_skrk');
            // $destinationPath = 'public/scan_imb/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $image->storeAs('public/scan_skrk', $fileName);
            // dd($image);
            // $filename = "$profileImage";
        }else {
            $fileName = $request->emp_scan_skrk;
        }
        if ($request->hasFile('scan_imb')) {
            if (Storage::exists('public/scan_imb/'.$request->emp_scan_imb)) {
                Storage::delete('public/scan_imb/'.$request->emp_scan_imb);
            }
            $image1 = $request->file('scan_imb');
            $fileName1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->storeAs('public/scan_imb', $fileName1);
        }else {
            $fileName1 = $request->emp_scan_imb;
        }
        if ($request->hasFile('scan_zoning')) {
            if (Storage::exists('public/scan_zoning/'.$request->emp_scan_zoning)) {
                Storage::delete('public/scan_zoning/'.$request->emp_scan_zoning);
            }
            $image2 = $request->file('scan_zoning');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/scan_zoning', $fileName2);
        }else {
            $fileName2 = $request->emp_scan_zoning;
        }
        if ($request->hasFile('scan_gamba')) {
            if (Storage::exists('public/scan_gambar_imb/'.$request->emp_scan_gamba)) {
                Storage::delete('public/scan_gambar_imb/'.$request->emp_scan_gamba);
            }
            $image3 = $request->file('scan_gamba');
            $fileName3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->storeAs('public/scan_gambar_imb', $fileName3);
        }else {
            $fileName3 = $request->emp_scan_gamba;
        }
        Skrk::updateOrCreate([
        // Product::update([
            'gid' => $request->gid
        ],
        [
            'no_upt' => $request->no_upt,
            'no_upt_skrk' => $request->no_upt_skrk,
            'tgl_skrk' => $request->tgl_skrk,
            'pemohon' => $request->pemohon,
            'alamat_per' => $request->alamat_per,
            'permohonan' => $request->permohonan,
            'peruntukan' => $request->peruntukan,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'no_upt_imb' => $request->no_upt_imb,
            'no_imb' => $request->no_imb,
            'tgl_imb' => $request->tgl_imb,
            'atas_nama' => $request->atas_nama,
            'nama_pemoh' => $request->nama_pemoh,
            'persil_imb' => $request->persil_imb,
            'pengguna_1' => $request->pengguna_1,
            'luas_bangu' => $request->luas_bangu,
            'tinggi_ban' => $request->tinggi_ban,
            'jumlah_lan' => $request->jumlah_lan,
            'jumlah_lan' => $request->jumlah_lan,
            'scan_skrk' => $fileName,
            'scan_imb' => $fileName1,
            'scan_zoning' => $fileName2,
            'scan_gamba' => $fileName3,
        ]);        

        return response()->json(['success'=>'Data SKRK saved successfully.']);
    }
    public function delete_json($gid)
    {
        $data = Skrk::find($gid);

        if (Storage::exists('public/scan_imb/'.$data->scan_imb)) {
            // dd('exist');
            Storage::delete('public/scan_imb/'.$data->scan_imb);
        }

        Skrk::find($gid)->delete();
      
        return response()->json(['success'=>'Data SKRK deleted successfully.']);
    }
}
