<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ImageRequest;
use Illuminate\View\View;
use App\Repositories\PhotosRepositoryInterface;

class PhotoController extends Controller
{
 
    public function create(): View
    {
        return view('photo');
    }
 
    public function store(ImageRequest $request, PhotosRepositoryInterface $photosRepository): View
    {
        $photosRepository->save($request->image);
         
        return view('photo_ok');
    }
}