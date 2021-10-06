<?php

namespace App\Http\Controllers;

use App\blog;
use App\candidates;
use App\id_agamas;
use App\id_sukus;
use App\jobvacancy;
use App\Mail\confirmationToCandidate;
use App\Mail\confirmationToHRD;
use App\popupWindow;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class webpageController extends Controller
{
    public function index()
    {
        $popup = popupWindow::orderBy('created_at', 'DESC')->get();
        if (count($popup) > 0) {
            return view('webpage.index', ['popup' => $popup[0]]);
        } else {
            return view('webpage.index');
        }
    }
    public function connect()
    {
        return view('webpage.connect');
    }
    public function tentangkami()
    {
        return view('webpage.tentangkami');
    }
    public function blog()
    {
        $blogs = blog::with('user')->orderBy('created_at', 'DESC')->get();
        return view('webpage.blog', ['blogs' => $blogs]);
    }
    public function viewBlog($title)
    {
        $blog = blog::with('user')->where('title', $title)->get();
        return view('webpage.viewblog', ['blog' => $blog[0]]);
    }
    public function galeri()
    {
        $album = DB::table('albums')
            ->orderBy('albums.created_at', 'DESC')
            ->select('albums.*')
            ->get();
        foreach ($album as $item => $list) {
            $album[$item]->photo = DB::table('file_documents')
                ->where('file_documents.fileId', $list->id)
                ->get();
        }
        return view('webpage.galeri', ['album' => $album]);
        // return $album;
    }
    public function karir()
    {
        $jobs = jobvacancy::orderBy('created_at', 'desc')->get();
        return view('webpage.karir', ['jobs' => $jobs]);
    }
    public function getKarirDetail($title)
    {
        $jobs = jobvacancy::where('title', $title)->get();
        return view('webpage.karirDetail', ['jobs' => $jobs[0]]);
        // return $jobs[0];
    }
    public function formRegisterKarir($title)
    {
        $jobs = jobvacancy::where('title', $title)->get();
        $agama = id_agamas::orderBy('agama_name', 'ASC')->get();
        $suku = id_sukus::orderBy('suku_name', 'ASC')->get();
        return view('webpage.karirDaftar', ['jobs' => $jobs[0], 'agama' => $agama, 'suku' => $suku]);
        // return $agama;
    }
    public function applyKarir(Request $request)
    {
        $jobs = jobvacancy::where('title', $request->posisi)->get();
        $candidate = new candidates();
        $candidate->posisi = $jobs[0]->id;
        $candidate->sumber_informasi = $request->sumber_informasi;
        $candidate->nama_lengkap = $request->nama_lengkap;
        $candidate->noktp = $request->noktp;
        $candidate->nonpwp = $request->nonpwp;
        $candidate->nobpjs = $request->nobpjs;
        $candidate->anak_ke = $request->anak_ke;
        $candidate->tempat_lahir = $request->tempat_lahir;
        $candidate->tanggal_lahir = $request->tanggal_lahir;
        $candidate->provinsi = $request->provinsi;
        $candidate->domisili = $request->domisili;
        $candidate->kecamatan = $request->kecamatan;
        $candidate->kelurahan = $request->kelurahan;
        $candidate->jenis_kelamin = $request->jenis_kelamin;
        $candidate->agama = $request->agama;
        $candidate->suku = $request->suku;
        $candidate->alamat_domisili = $request->alamat_domisili;
        $candidate->email = $request->email;
        $candidate->nohp = $request->nohp;
        $candidate->status_perkawinan = $request->status_perkawinan;
        $candidate->pendidikan_akhir = $request->pendidikan_akhir;
        $candidate->expected_sallary = $request->expected_sallary;
        $candidate->about = $request->about;
        if ($request->hasFile('supported_file') && $request->hasFile('picture')) {
            // $request->file('supported_file')->move('storage/file/' . $request->nama_lengkap, $request->file('supported_file')->getClientOriginalName());
            // $candidate->supported_file = $request->file('supported_file')->getClientOriginalName();
            // $request->file('picture')->move('storage/file/' . $request->nama_lengkap, $request->file('picture')->getClientOriginalName());
            // $candidate->picture = $request->file('picture')->getClientOriginalName();
            $uploadFile = Cloudinary::upload($request->file('supported_file')->getRealPath(), [
                'folder' => 'asset/candidate'
            ])->getSecurePath();
            $candidate->supported_file = $uploadFile;
            $uploadPic = Cloudinary::upload($request->file('picture')->getRealPath(), [
                'folder' => 'asset/candidate/picture'
            ])->getSecurePath();
            $candidate->picture = $uploadPic;
        }
        $candidate->save();
        Mail::to($candidate->email)->send(new confirmationToCandidate($candidate));
        Mail::to('hrd@btsa.co.id')->cc('ga@btsa.co.id')->send(new confirmationToHRD($candidate));
        return view('webpage.karirSelesai', ['jobs' => $jobs[0], 'candidate' => $candidate]);
        // return $jobs[0];
    }
    // Career Form Needs
    public function getprovinsi()
    {
        $provinsi = DB::table('id_provinces')
            ->orderBy('id_provinces.province_name', 'ASC')
            ->select('id_provinces.*')
            ->get();
        return ($provinsi);
    }

    public function getdomisili($provinces_id)
    {
        $domisili = DB::table('id_domisilis')
            ->where('id_domisilis.provinces_id', '=', $provinces_id)
            ->orderBy('id_domisilis.domisili_name', 'ASC')
            ->select('id_domisilis.*')
            ->get();
        return ($domisili);
    }
    public function getkecamatan($id)
    {
        $kecamatan = DB::table('id_kecamatans')
            ->where('id_kecamatans.domisilis_id', '=', $id)
            ->orderBy('id_kecamatans.kecamatan_name', 'ASC')
            ->select('id_kecamatans.*')
            ->get();
        return ($kecamatan);
    }

    public function getkelurahan($id)
    {
        $kelurahan = DB::table('id_kelurahans')
            ->where('id_kelurahans.kecamatans_id', '=', $id)
            ->orderBy('id_kelurahans.kelurahan_name', 'ASC')
            ->select('id_kelurahans.*')
            ->get();
        return ($kelurahan);
    }
}
