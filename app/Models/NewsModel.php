<?php

namespace App\Models;

use CodeIgniter\Model;
use jcobhams\NewsApi\NewsApi;

class NewsModel extends Model
{
    protected $newsApi;

    public function __construct($apiConfig = null)
    {
        parent::__construct($apiConfig);
        $this->newsApi = new NewsApi('ea1b061e351e451dad78a3be5ed14915');
    }

    public function getNews()
    {
        try {
            $all_articles = $this->newsApi->getEverything('Immunization for babies');
    
            $articles = $all_articles->articles;
            $articles = json_decode(json_encode($articles), true);
    
            return $articles;
        } catch (\Exception $e) {
            log_message('error', 'News API Error: ' . $e->getMessage());
            return []; // Mengembalikan array kosong jika terjadi kesalahan
        }
    }
}
