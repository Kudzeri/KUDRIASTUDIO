<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager as Image;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $webpFilename = time() . '.webp';

        // Оптимизация и сохранение изображения
        $optimizedImage = Image::make($image)
            ->resize(1200, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->encode('webp', 90);

        // Сохраняем в папку storage/app/public/images
        $optimizedImage->save(storage_path('app/public/images/' . $webpFilename));

        // Сохраняем оригинал (опционально)
        $image->storeAs('public/images', $filename);

        return response()->json([
            'original' => asset('storage/images/' . $filename),
            'optimized' => asset('storage/images/' . $webpFilename),
        ]);
    }
}
