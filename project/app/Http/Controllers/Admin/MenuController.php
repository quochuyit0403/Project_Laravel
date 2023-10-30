<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create() {
        return view('admin.menu.add', [
            'title' => 'Day la trang them '
        ]);
    }

    public function travel(CreateFormRequest $request) {
        dd($request->input());
    }
}
