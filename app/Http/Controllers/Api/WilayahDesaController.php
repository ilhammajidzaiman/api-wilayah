<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\WilayahDesa;
use App\Http\Controllers\Controller;

class WilayahDesaController extends Controller
{
    public function index()
    {
        try {
            $data = WilayahDesa::orderBy('kode')->get();
            $data = $data->map(function ($data) {
                return [
                    'kode' => $data->kode,
                    'provinsi' => $data->kecamatan->kabupaten->provinsi->nama,
                    'kabupaten' => $data->kecamatan->kabupaten->nama,
                    'kecamatan' => $data->kecamatan->nama,
                    'nama' => $data->nama,
                ];
            });
            return response()->json([
                'success' => true,
                'message' => 'daftar kabupaten',
                'data' => $data
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'something went wrong while fetching data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $data = WilayahDesa::where('kode', $id)->first();
            $data =  [
                'kode' => $data->kode,
                'provinsi' => $data->kecamatan->kabupaten->provinsi->nama,
                'kabupaten' => $data->kecamatan->kabupaten->nama,
                'kecamatan' => $data->kecamatan->nama,
                'nama' => $data->nama,
            ];
            return response()->json([
                'success' => true,
                'message' => 'rincian desa',
                'data' => $data
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'something went wrong while fetching data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
