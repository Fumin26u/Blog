<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{

    public function index(Request $request)
    {
        $image = $request->file('upload');

        $path = $image->store('/admin/image', 'admin'); // ランダム文字列のファイル名で保存する
        $fileName = pathinfo($path)['basename']; // 保存後のファイル名を取得

        $url = "/uploads/admin/image/" . $fileName; // アップロードした後に画像が見れるURLを設定してください

        $param = [
            'uploaded' => 1,
            'fileName' => $fileName,
            'url'      => $url
        ];

        return response()->json($param, 200);
    }
}
