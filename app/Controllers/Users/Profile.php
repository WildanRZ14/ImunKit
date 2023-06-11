<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use App\Models\NewsModel;

class Profile extends BaseController
{
   public function index()
   {
      $model = new NewsModel();
      $data['news'] = $model->getNews();

      // Memuat hanya 15 artikel
      $data['news'] = array_slice($data['news'], 0, 15);

      $data['limitWords'] = function ($text, $limit) {
         $words = explode(' ', $text);
         if (count($words) > $limit) {
             $limitedText = implode(' ', array_slice($words, 0, $limit));
             return $limitedText . '...';
         }
         return $text;
     };
      return view('users/index', $data);
   }
}

function limitWords($text, $limit) {
   $words = str_word_count($text, 1);
   $limitedWords = array_slice($words, 0, $limit);
   $limitedText = implode(' ', $limitedWords);
   return $limitedText;
}