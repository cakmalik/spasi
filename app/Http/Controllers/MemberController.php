<?php

namespace App\Http\Controllers;
use SweetAlert;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function lengkapiData()
    {
       return view('member.form');
    }
    public function store(Request $request)
    {
        $nia = Auth::user()->username;
        if (Member::where('nia', $nia)->exists()) {
            alert()->error('Anda sudah terdaftar','MAAF !');
            return back();
        }else{
            $request->validate([
                    'nik'=>'required',
                    'nama_lengkap'=>'required',
                    'nama_panggilan'=>'required',
                    // 'alamat'=>'required',
                    'desa'=>'required',
                    'kecamatan'=>'required',
                    'kota'=>'required',
                    'provinsi'=>'required',
                    'hp'=>'required',
                    // 'ayah'=>'required',
                    // 'pekerjaan_ayah'=>'required',
                    // 'ibu'=>'required',
                    // 'pekerjaan_ibu'=>'required',
                    // 'anak_ke'=>'required',
                    // 'jml_saudara'=>'required',
                    'cabang'=>'required',
                    'angkatan'=>'required',
                    'foto'=>'image|mimes:jpg,png,jpeg|max:524',
                ]);
                if ($request->file('foto')) {
                    $path = $request->file('foto')->storeAs('public/foto', $nia . '.jpg');
                    $data['foto']=$nia.'.jpg';
                }
            $data =$request->all();
            $data['nia']=Auth::user()->username;
            if ($request->codesp=='spasi') {
                Member::create($data);
                alert()->success('Melengkapi data', 'Berhasil');
                return back();
            } else {
                alert()->error('Password registrasi salah', 'MAAF');
                return back();
            }
        }
    }
    public function show($id)
    {
        $member = Member::find($id)->first();
        return view('admin.memberShow',compact('member'));
    }
    public function datasaya()
    {
        $nia = Auth::user()->username;
        $mem = Member::where('nia',$nia)->first();
        return view('member.datasaya',compact('mem'));
    }
}