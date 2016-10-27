<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function imageUpload(Request $request)
    {
        return $this->upload($request, 'images');
    }

    public function fileUpload(Request $request)
    {
        return $this->upload($request, 'files');
    }

    public function imageManager()
    {
        return $this->manager('images');
    }

    public function fileManager()
    {
        return $this->manager('files');
    }

    /**
     * @param Request $request
     * @param string $path
     * @return array|bool
     */
    protected function upload(Request $request, $path)
    {
        // checking file is valid.
        if ($request->file('file')->isValid()) {
            $link = $request->file->store($path);
            return ['filelink' => '/' . $link];
        } else {
            // sending back with error message.
            return false;
        }
    }

    /**
     * @param string $path
     * @return array
     */
    protected function manager($path)
    {
        $result = [];
        $files = Storage::files($path);

        if ($path == 'images') {
            foreach ($files as $file) {
                $link = '/uploads/' . $file;
                $result[] = [
                    'thumb' => $link,
                    'image' => $link,
                    'title' => 'Image'
                ];
            }
        }
        elseif ($path == 'files') {
            foreach ($files as $file) {
                $link = '/uploads/' . $file;
                $result[] = [
                    'link' => $link,
                    'size' => Storage::size($file),
                    'title' => 'File',
                    'name' => 'File',
                ];
            }
        }

        return $result;
    }
}
