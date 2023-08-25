<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    //
    public function view(){
        return view('videos.VideosController');
    }
    // 
    public function index()
    {
        $sections = Section::with('videos')->get();
        return $sections;
    }
    // Section CRUD methods
    public function storeSection(Request $request)
    {
        Section::create([
            'title' => $request->input('section_name'),
            // 'slug' => Str::slug($request->input('section_name')),
        ]);

        return redirect('/videosControl')->with('success', 'Section added successfully.');
    }

    public function updateSection(Request $request, $id)
    {
        $section = Section::findOrFail($id);
        $section->update([
            'title' => $request->input('section_name'),
            // 'slug' => Str::slug($request->input('section_name')),
        ]);

        return redirect('/videosControl')->with('success', 'Section updated successfully.');
    }

    public function deleteSection($id)
    {
        Section::findOrFail($id)->delete();
        return redirect('/videosControl')->with('success', 'Section deleted successfully.');
    }

    // Video CRUD methods
    public function storeVideo(Request $request)
    {
        Video::create([
            'section_id' => $request->input('section_id'),
            'title' => $request->input('video_title'),
            'url' => $request->input('video_url'),
        ]);

        return redirect('/videosControl')->with('success', 'Video added to section successfully.');
    }

    public function updateVideo(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->update([
            'section_id' => $request->input('section_id'),
            'title' => $request->input('video_title'),
            'url' => $request->input('video_url'),
        ]);

        return redirect('/videosControl')->with('success', 'Video updated successfully.');
    }

    public function deleteVideo($id)
    {
        Video::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Video deleted successfully.');
    }
}
