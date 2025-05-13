<?php

namespace App\Http\Middleware;

use Closure;
use Intervention\Image\ImageManager as Image;
use Illuminate\Support\Facades\Storage;

class OptimizeImages
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $imagePath = public_path($request->path());
        $cachedPath = public_path('img/cache/' . md5($request->path()) . '.webp');

        // Проверяем, существует ли кэшированное изображение
        if (file_exists($cachedPath)) {
            return response()->file($cachedPath, ['Content-Type' => 'image/webp']);
        }

        // Проверяем, что запрос возвращает изображение
        if ($response->headers->get('Content-Type') && str_contains($response->headers->get('Content-Type'), 'image')) {
            if (file_exists($imagePath)) {
                // Генерируем оптимизированное изображение
                $image = Image::make($imagePath)
                    ->resize(1200, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode('webp', 90);

                // Сохраняем в кэш
                $image->save($cachedPath);

                // Возвращаем изображение
                return response($image, 200)
                    ->header('Content-Type', 'image/webp');
            }
        }

        return $response;
    }
}
