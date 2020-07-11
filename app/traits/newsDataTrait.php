<?php

namespace App\traits;

trait newsDataTrait {
    public function newsCategory() {
        return \DB::select("SELECT categories, id FROM categories");
    }
    public function newsData() {
        return \DB::select("SELECT * FROM news");
    }
}
