<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Word;
use \SimpleXMLElement;
use \DOMDocument;

class WordController extends Controller
{
    public function index(Request $request)
    {
        return Word::all();
    }

    public function getUnusedWords(Request $request) {
        return Word::all()->where('already_used', '=', '0');
    }
}
