<?php

use Illuminate\Support\Facades\File;

function hasHoverVideo($imagePath): bool {
    $videoPath = public_path('storage/videos/' . pathinfo($imagePath, PATHINFO_FILENAME) . '_hover.mp4');
    return file_exists($videoPath);
}

function getHoverVideoUrl($imagePath): string {
    return asset('storage/videos/' . pathinfo($imagePath, PATHINFO_FILENAME) . '_hover.mp4');
}
