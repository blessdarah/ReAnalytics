<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilsController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->file('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $originalName = implode("-", explode(" ", $originalName));

            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);

            $fileName = $fileName . '_' . time() . '.' . $extension;

            // move the file
            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/images/' . $fileName);
            $message = "Image uploaded successfully";
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$message')</script>";

            @header('Content-Type: text/html; charset: utf-8');
            echo $response;
        }
    }
}
