<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\WilayahProvinsi;
use App\Http\Controllers\Controller;

class WilayahProvinsiController extends Controller
{
    public function index()
    {
        try {
            $data = WilayahProvinsi::orderBy('kode')->get();
            $data = $data->map(function ($data) {
                return [
                    'kode' => $data->kode,
                    'nama' => $data->nama,
                ];
            });
            return response()->json([
                'success' => true,
                'message' => 'daftar provinsi',
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
            $data = WilayahProvinsi::where('kode', $id)->first();
            $data =  [
                'kode' => $data->kode,
                'nama' => $data->nama,
            ];
            return response()->json([
                'success' => true,
                'message' => 'rincian provinsi',
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
