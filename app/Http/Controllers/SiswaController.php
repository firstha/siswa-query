<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function soal1()
    {
        $siswa = Siswa::all();
        return view('siswa.soal1', compact('siswa'));
    }

    public function soal2()
    {
        $siswa = Siswa::selectRaw("CONCAT(nama_depan, ' ', nama_belakang) as nama_lengkap, tempat_lahir, tanggal_lahir, 
        CASE WHEN jenis_kelamin = 0 THEN 'Laki-laki' ELSE 'Perempuan' END as jenis_kelamin")->get();

        return view('siswa.soal2', compact('siswa'));
    }

    public function soal3()
    {
        $siswa = Siswa::whereYear('tanggal_lahir', 2000)
            ->get()
            ->map(function ($s) {
                return [
                    'nama_lengkap' => "{$s->nama_depan} {$s->nama_belakang}",
                    'tempat_lahir' => $s->tempat_lahir,
                    'tanggal_lahir' => Carbon::parse($s->tanggal_lahir)->format('d-m-Y'),
                    'jenis_kelamin' => $s->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan'
                ];
            });

        return view('siswa.soal3', compact('siswa'));
    }

    public function soal4()
    {
        $siswa = Siswa::whereYear('tanggal_lahir', 2000)
            ->get()
            ->map(function ($s) {
                return [
                    'nama_lengkap' => "{$s->nama_depan} {$s->nama_belakang}",
                    'tempat_tanggal_lahir' => "{$s->tempat_lahir}, " . \Carbon\Carbon::parse($s->tanggal_lahir)->format('d-m-Y'), // Format sesuai clue
                    'jenis_kelamin' => $s->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan'
                ];
            });

        return view('siswa.soal4', compact('siswa'));
    }

}
