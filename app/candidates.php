<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $table = 'candidates';
    protected $fillable = [
        'posisi',
        'sumber_informasi',
        'nama_lengkap',
        'picture',
        'noktp',
        'nonpwp',
        'nobpjs',
        'anak_ke',
        'tempat_lahir',
        'tanggal_lahir',
        'provinsi',
        'domisili',
        'kecamatan',
        'kelurahan',
        'jenis_kelamin',
        'agama',
        'suku',
        'alamat_domisili',
        'email',
        'nohp',
        'status_perkawinan',
        'pendidikan_akhir',
        'about',
        'supported_file',
        'expected_sallary'
    ];
    public function provinsi()
    {
        return $this->belongsTo(id_provinces::class, 'provinsi');
    }
    public function domisili()
    {
        return $this->belongsTo(id_domisilis::class, 'domisili');
    }
    public function kecamatan()
    {
        return $this->belongsTo(id_kecamatans::class, 'kecamatan');
    }
    public function kelurahan()
    {
        return $this->belongsTo(id_kelurahans::class, 'kelurahan');
    }
    public function agama()
    {
        return $this->belongsTo(id_agamas::class, 'agama');
    }
    public function suku()
    {
        return $this->belongsTo(id_sukus::class, 'suku');
    }
    public function posisi()
    {
        return $this->belongsTo(jobvacancy::class, 'posisi');
    }
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
