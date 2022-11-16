<?php

namespace App\Http\Controllers;

use Jorenvh\Share\ShareFacade;

class SocialController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $shareComponent = ShareFacade::page(
            url()->current(),//or any url you want to share
            'Your share text comes here')
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('post', compact('shareComponent'));
    }
}
