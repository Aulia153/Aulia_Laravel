<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload() {
        return view('upload');
    }

    public function proses_upload(Request $request) {
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        //menyimpan data yang diupload e variabel file
        $file = $request->file('file');
        //nama file
        echo 'File Name: ' .$file->getClientOriginalName().'<br>';
        //Ekstensi file
        echo 'File Extension: ' .$file->getClientOriginalExtension().'<br>';
        //real path
        echo 'File Real Path: ' .$file->getRealPath().'<br>';
        //ukuran file
        echo 'File Size: ' .$file->getSize().'<br>';
        //tipe mime
        echo 'File Mime Type: ' .$file->getMimeType();
        //isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        //upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());
    }

    // public function upload_resize(Request $request) {
    //     $this->validate($request, [
    //         'file' => 'required',
    //         'keterangan' => 'required',
    //     ]);

    //     //Tentukan path lokasi upload
    //     $path = public_path('img/logo');

    //     //jika folder belum ada
    //     if (!File::isDirectory($path)) {
    //         //maka folder tersebut akan dibuat
    //         File::makeDirectory($path, 0777, true);
    //     }

    //     //mengambil file image dari form
    //     $file = $request->file('file');

    //     //membuat name file dari gabungan tanggal dan uniqid()
    //     $fileName = 'logo_'. uniqid() . '.' .$file->getClientOriginalExtension();

    //     //membuat canvas image sebesar dimensi
    //     $canvas = Image::canvas(200, 200);

    //     //resize image sesuai dimensi dengan mempertahankan ratio
    //     $resizeImage = Image::make($file)->resize(null, 200, function($constraint) {
    //         $constraint->aspectRatio();
    //     });

    //     //memasukkan image yang telah diresize ke dalam canvas
    //     $canvas->insert($resizeImage, 'center');

    //     //simpan image ke folder
    //     if($canvas->save($path . '/' . $fileName)) {
    //         return redirect(route('upload'))->with('success', 'Data berhassil ditambahkan!');
    //     } else {
    //         return redirect(route('upload'))->with('error', 'Data gagal ditambahkan!');
    //     }
    // }
}
