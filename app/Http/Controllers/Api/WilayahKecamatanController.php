<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\WilayahKecamatan;
use App\Http\Controllers\Controller;

class WilayahKecamatanController extends Controller
{
    public function index()
    {
        try {
            $data = WilayahKecamatan::orderBy('kode')->get();
            $data = $data->map(function ($data) {
                return [
                    'kode' => $data->kode,
                    'provinsi' => $data->kabupaten->provinsi->nama,
                    'kabupaten' => $data->kabupaten->nama,
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
            $data = WilayahKecamatan::where('kode', $id)->first();
            $data =  [
                'kode' => $data->kode,
                'provinsi' => $data->kabupaten->provinsi->nama,
                'kabupaten' => $data->kabupaten->nama,
                'nama' => $data->nama,
            ];
            return response()->json([
                'success' => true,
                'message' => 'rincian kecamatan',
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
