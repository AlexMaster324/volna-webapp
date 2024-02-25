<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index() {
        // Просмотр плейлистов пользователя
    }
    function create() {
        // Создание плейлиста пользователя
    }
    function show() {
        // Просмотр плейлиста пользователя
    }
    function edit() {
        // Изменение плейлиста пользователя
    }
    function delete() {
        // Удаление плейлиста пользователя
    }
}

