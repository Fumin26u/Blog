<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    /**
     * uploading images of CKEditor
     *
     * @param Request $request
     */

    public function upload(Request $request) {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            // var_dump($file);

            // 保存用ファイル名を生成
            $storeFilename =
                // ファイル名
                pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).
                // 名前の重複対策(アップロード時間の付与)
                '_'. time(). '.'.
                // 拡張子をつける
                $file->getClientOriginalExtension();

            // アップロード処理
            $file->storeAs('public/uploads', $storeFilename);
            // ckeditor.jsに返却するデータを生成する
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'. $storeFilename);
            $msg = 'アップロードが完了しました';
            $res = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // HTMLを返す
            @header('Content-type: text/html; charset=utf-8');
            echo $res;
        }
    }
}
