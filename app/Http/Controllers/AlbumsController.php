<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin')->except(['create', 'edit', 'delete']);
    }
    function index() {
        // Просмотр альбомов пользователя
    }
    function create() {
        // Создание альбома пользователя
    }
    function show() {
        // Просмотр альбома пользователя
    }
    function edit() {
        // Изменение альбома пользователя
    }
    function delete() {
        // Удаление альбома пользователя
    }
}
