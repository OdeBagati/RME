<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUmumPasienRequest;
use App\Http\Requests\StoreUnknownPasienRequest;
use App\Http\Requests\StoreNewbornPasienRequest;
use App\Http\Requests\UpdateUmumPasienRequest;
use App\Http\Requests\UpdateUnknownPasienRequest;
use App\Http\Requests\UpdateNewbornPasienRequest;

class PasienController extends Controller
{
    private function getPasienTypeRequest($type, $isCreate = true) {
        if ($type == "1") {
            return $isCreate ? new StoreUmumPasienRequest : new UpdateUmumPasienRequest;
        } else if ($type == "2") {
            return $isCreate ? new StoreUnknownPasienRequest : new UpdateUnknownPasienRequest;
        } else if ($type == "3") {
            return $isCreate ? new StoreNewbornPasienRequest : new UpdateNewbornPasienRequest;
        } 
        return false;
    }

    public function index()
    {
        $pasiens = Pasien::all();
        $countUmum = Pasien::where('pasien_type', '1')->count();
        $countUnknown = Pasien::where('pasien_type', '2')->count();
        $countBayi = Pasien::where('pasien_type', '3')->count();

        $data = [
            'pasiens' => $pasiens,
            'countUmum' => $countUmum,
            'countUnknown' => $countUnknown,
            'countBayi' => $countBayi
        ];

        return view('dashboard.pasien.index', $data);
    }

    public function create()
    {
        return view('dashboard.pasien.create');
    }

    public function store(Request $request)
    {
        // get validation rule
        $type = $request->input("pasien_type");
        $pasienTypeRequest = $this->getPasienTypeRequest($type);
        if(!$pasienTypeRequest) {
            return back()->with("error", "invalid pasien type");
        }
        // validating request & create pasien
        $data = $request->validate($pasienTypeRequest->rules());
        Pasien::create($data);

        return redirect('/registerPasien/create');
    }

    public function edit(Pasien $pasien) {
        return view('dashboard.pasien.edit')->with('pasien', $pasien);
    }

    public function update(Pasien $pasien, Request $request) {
        $type = $pasien->pasien_type;
        $pasienTypeRequest = $this->getPasienTypeRequest($type, false);
        $data = $request->validate($pasienTypeRequest->rules());
        $pasien->update($data);
        return redirect()->route('pasiens.index')->with('success', 'berhasil update pasien');
    }

    public function destroy(Pasien $pasien) {
        $id = $pasien->id;
        $pasien->delete();
        return redirect()->route('pasiens.index')->with("success', 'berhasil menghapus pasien dengan id {$id}");
    }
}
