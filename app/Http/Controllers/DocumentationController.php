<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx,txt|max:2048',
        ]);

        if ($file = $request->file('file')) {
            $path = $file->store('uploads', 'public');
            return back()
                ->with('success', 'File uploaded successfully.')
                ->with('file', $path);
        }

        return back()->with('error', 'File upload failed.');
    }
}
