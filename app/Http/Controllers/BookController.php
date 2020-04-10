<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function all(Request $request){
        return Book::all();
    }
    public function add(Request $request){
        $book = new Book;
        $book->title = $request->title;
        $book->availability = true;
        $book->author = $request->author;
        $book->save();

        return $book;
    }
    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return $id;
    }
    public function changeAvailability($id){
        $book = Book::findOrFail($id);
        if($book->availability)
            $book->availability = false;
        else 
            $book->availability = true;
        $book->save();
        return $book;
    }
}
