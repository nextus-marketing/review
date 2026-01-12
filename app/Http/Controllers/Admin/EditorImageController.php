<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EditorImageController extends Controller
{
    public function upload(Request $request)
    {
        if (!$request->hasFile('image')) {
            return response()->json([
                'success' => 0,
                'message' => 'No image uploaded'
            ]);
        }

        $file = $request->file('image');

        // Validate
        if (!in_array($file->getClientOriginalExtension(), ['jpg','jpeg','png','webp'])) {
            return response()->json([
                'success' => 0,
                'message' => 'Invalid image format'
            ]);
        }

        $filename = 'blog_' . Str::random(20) . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('blogs/editor', $filename, 'public');

        return response()->json([
            'success' => 1,
            'file' => [
                'url' => asset('storage/' . $path)
            ]
        ]);
    }
}
