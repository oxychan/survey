<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use App\Http\Requests\Form1Request;
use App\Http\Requests\Form2Request;
use App\Http\Requests\Form3Request;
use App\Http\Requests\Form4Request;
use Illuminate\Support\Facades\Session;

class SurveyController extends Controller
{
    public function createSurveyStepOne()
    {
        $survey = Session::get('survey');

        return view('user.survey1', compact('survey'));
    }

    public function storeSurveyStepOne(Form1Request $request)
    {
        $validatedData = $request->safe()->except(['pj_lain', 'sb_lain']);

        if (empty(Session::get('survey'))) {
            $survey = new Survey();
            $survey->fill($validatedData);

            Session::put('survey', $survey);
        } else {
            $survey = Session::get('survey');
            $survey->fill($validatedData);

            Session::put('survey', $survey);
        }

        return redirect()->route('survey.step.two');
    }

    public function createSurveyStepTwo()
    {
        $survey = Session::get('survey');

        return view('user.survey2', compact('survey'));
    }

    public function storeSurveyStepTwo(Form2Request $request)
    {
        $validatedData = $request->safe()->except(['_token']);

        $survey = Session::get('survey');
        $survey->fill($validatedData);

        Session::put('survey', $survey);

        return redirect()->route('survey.step.three');
    }

    public function createSurveyStepThree()
    {
        $survey = Session::get('survey');

        return view('user.survey3', compact('survey'));
    }

    public function storeSurveyStepThree(Form3Request $request)
    {
        $validatedData = $request->safe()->except(['_token']);


        $survey = Session::get('survey');
        $survey->fill($validatedData);

        Session::put('survey', $survey);

        return redirect()->route('survey.step.four');
    }

    public function createSurveyStepFour()
    {
        $survey = Session::get('survey');

        return view('user.survey4', compact('survey'));
    }

    public function storeSurveyStepFour(Form4Request $request)
    {
        $validatedData = $request->safe()->except(['_token']);

        $survey = Session::get('survey');
        $survey->fill($validatedData);
        $survey->save();

        Session::forget('survey');

        return redirect()->route('index');
    }
}
