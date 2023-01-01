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
        $count = (object)array('survey' => Survey::count(), 'user' => User::count());

        return view('admin.dashboard.index', compact('title', 'count'));
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
