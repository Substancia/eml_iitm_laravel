<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\File;

class CreateController extends Controller
{
	public function home() {
		$articles = Article::all();
		return view('home', ['articles' => $articles]);
	}
	public function add(Request $request) {
		$this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);

		$articles = new Article;
		$articles->title = $request->input('title');
		$articles->description = $request->input('description');
		if($request->hasFile('file')) {
			$filename = $request->file->getClientOriginalName();
			$filesize = $request->file->getClientSize();
			$request->file->storeAs('public/images',$filename);
			$file = new File;
			$file->name = $filename;
			$file->size = $filesize;
			$file->save();
		} else {
			$file = new File;
			$file->name = '';
			$file->size = '';
			$file->save();
		}
		$articles->save();
		return redirect('/')->with('info', 'Article Saved Successfully!');
	}
	public function update($id) {
		$articles = Article::find($id);
		$file = File::find($id);
		return view('update', [
			'articles' => $articles,
			'file' => $file
		]);
	}
	public function edit(Request $request, $id) {
		$this->validate($request, [
			'title' => 'required',
			'description' => 'required'
		]);

		$data = array(
			'title' => $request->input('title'),
			'description' => $request->input('description')
		);
			// Image update option
		// if($request->hasFile('file')) {
		// 	$oldimg = File::find($id);
		// 	$oldimg->delete();
		// 	$filename = $request->file->getClientOriginalName();
		// 	$filesize = $request->file->getClientSize();
		// 	$request->file->storeAs('public/images',$filename);
		// 	$file = new File;
		// 	$file->name = $filename;
		// 	$file->size = $filesize;
		// 	$file->save();
		// }
		Article::where('id', $id)
		->update($data);
		return redirect('/')->with('info', 'Article Updated Successfully!');
	}
	public function read($id) {
		$articles = Article::find($id);
		$file = File::find($id);
		return view('read', [
			'articles' => $articles,
			'file' => $file
		]);
	}
	public function delete($id) {
		Article::where('id', $id)
		->delete();
		return redirect('/')->with('info', 'Article Deleted Successfully!');
	}
}
