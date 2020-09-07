<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use URL;

class LanguageController extends Controller
{
    public function setLocale($locale) {
        Session::put('locale', $locale);
        return redirect(url(URL::previous()));
    }
}
