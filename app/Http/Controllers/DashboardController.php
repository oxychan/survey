<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Admin';

        return view('admin.dashboard.index', compact('title'));
    }

    public function userList()
    {
        $users = User::all();
        $title = 'User';

        return view('admin.dashboard.user', compact('users', 'title'));
    }

    public function surveyList()
    {
        $surveys = Survey::all();
        $title = 'Survey';

        return view('admin.dashboard.survey', compact('surveys', 'title'));
    }
}
