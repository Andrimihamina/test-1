<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ImageRequest;
use Illuminate\View\View;

class PhotoController extends Controller
{
 
    public function create(): View
    {
        return view('photo');
    }
 
    public function store(ImageRequest $request): View
    {
        $request->image->store(config('image.path'), 'public');
         
        return view('photo_ok');
    }
}