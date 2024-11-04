<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;

class DownloadController extends Controller
{
    public function downloadFolder($folder)
    {
        $folderPath = public_path("docs/{$folder}");

        // Verifica que la carpeta exista
        if (!is_dir($folderPath)) {
            return back()->with('error', 'La carpeta no existe.');
        }

        $zip = new ZipArchive;
        $zipFileName = "{$folder}.zip";
        $zipPath = public_path($zipFileName);

        // Elimina el archivo ZIP previo si existe
        if (file_exists($zipPath)) {
            unlink($zipPath);
        }

        // Crea el archivo ZIP
        if ($zip->open($zipPath, ZipArchive::CREATE) === TRUE) {
            $files = glob("{$folderPath}/*");
            
            foreach ($files as $file) {
                $zip->addFile($file, basename($file));
            }

            $zip->close();
        } else {
            return back()->with('error', 'No se pudo crear el archivo ZIP.');
        }

        // Descarga el ZIP y elimina después
        return response()->download($zipPath)->deleteFileAfterSend(true);
    }
}