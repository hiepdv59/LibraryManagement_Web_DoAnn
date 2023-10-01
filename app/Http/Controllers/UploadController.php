<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function index(Request $request)
    {
        request()->validate([
            'file'  => 'required|max:20480',
        ]);
        if ($files = $request->file('file')) {
            //store file into document folder
            $info = pathinfo($_FILES['file']['name']);
            $ext = $info['extension']; // get the extension of the file
            $newname = md5(basename($request->file('file'))) . '.' . $ext;

            $target = 'images/upload/' . $newname;
            move_uploaded_file($_FILES['file']['tmp_name'], $target);
            return Response()->json([
                "success" => true,
                "url" => url("/images/upload/" . baseName($target)),
                "fileName" => basename($newname),
                "fileUrl" => url("/images/upload/" . baseName($target))
            ]);
        }

        return Response()->json([
            "success" => false,
            "file" => ''
        ]);
    }
}
