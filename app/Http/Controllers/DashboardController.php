<?php

namespace App\Http\Controllers;

use App\Charts\MonthlySurveyChart;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(MonthlySurveyChart $surveyChart)
    {
        $title = 'Admin';
        $count = (object)array('survey' => Survey::count(), 'user' => User::count());
        $chart = $surveyChart->build();

        return view('admin.dashboard.index', compact('title', 'count', 'chart'));
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
