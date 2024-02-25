<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiobooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except(['create', 'edit', 'delete']);
    }

    function index() {
        // Просмотр аудиокниг пользователя
    }
    function create() {
        // Создание аудиокниг пользователя
    }
    function show() {
        // Просмотр аудиокниг пользователя
    }
    function edit() {
        // Изменение аудиокниг пользователя
    }
    function delete() {
        // Удаление аудиокниг пользователя
    }
}
