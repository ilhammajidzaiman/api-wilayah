<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\WilayahKabupaten;
use App\Http\Controllers\Controller;

class WilayahKabupatenController extends Controller
{
    public function index()
    {
        try {
            $data = WilayahKabupaten::orderBy('kode')->get();
            $data = $data->map(function ($data) {
                return [
                    'kode' => $data->kode,
                    'provinsi' => $data->provinsi->nama,
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
            $data = WilayahKabupaten::where('kode', $id)->first();
            $data =  [
                'kode' => $data->kode,
                'provinsi' => $data->provinsi->nama,
                'nama' => $data->nama,
            ];
            return response()->json([
                'success' => true,
                'message' => 'rincian kabupaten',
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
