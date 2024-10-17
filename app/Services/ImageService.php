<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{

    public static function resizeImageAndStorage(UploadedFile $file, $folderName)
    {

        $maxWidth = 1280;
        $maxHeight = 720;

        // Nombre temporal para la imagen redimensionada
        $tempImagePath = tempnam(sys_get_temp_dir(), 'resized_image');
        $targetPath = "{$tempImagePath}.jpg";

        // Obtener las dimensiones originales
        list($width, $height) = getimagesize($file->getRealPath());

        // Calcular la relación de aspecto
        $aspectRatio = $width / $height;

        // Calcular nuevas dimensiones manteniendo la relación de aspecto
        if ($width > $height) {
            $newWidth = min($maxWidth, $width);
            $newHeight = $newWidth / $aspectRatio;
        } else {
            $newHeight = min($maxHeight, $height);
            $newWidth = $newHeight * $aspectRatio;
        }

        // Crear una nueva imagen con las nuevas dimensiones
        $newImage = imagecreatetruecolor($newWidth, $newHeight);

        // Crear la imagen desde el archivo original
        $source = imagecreatefromjpeg($file->getRealPath());

        // Redimensionar la imagen
        imagecopyresampled($newImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // Guardar la nueva imagen
        imagejpeg($newImage, $targetPath, 75); // 75 es la calidad de la imagen

        // Liberar memoria
        imagedestroy($source);
        imagedestroy($newImage);


        // Guardar la imagen redimensionada en el almacenamiento público
        $foto = Storage::disk('public')->put($folderName, new \Illuminate\Http\File($targetPath));

        // Eliminar el archivo temporal
        @unlink($targetPath);

        return $foto;
    }
}
