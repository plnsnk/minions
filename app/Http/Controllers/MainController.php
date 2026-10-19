<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Cartoon;
use App\Models\Minion;
use App\Models\Movie;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $minions = Movie::where('teg', 'minion')->get();
        $despicables = Movie::where('teg', 'despicable')->get();
       return view('index', [
           'minions' => $minions,
           'despicables' => $despicables,
       ]);
    }

    public function show()
    {
       $questions = Question::with('answers')->orderBy('sort')->get();
       return view('test', [
           'questions' => $questions,

       ]);
    }

    public function result(Request $request)
    {
        $request->validate([
            'answers' => 'required|array',
        ]);

        $ids = $request->input('answers', []);

        $votes = [];
        foreach (Answer::whereIn('id', $ids)->get() as $answer) {
            $votes[$answer->minion_id] = ($votes[$answer->minion_id] ?? 0) + 1;
        }

        if (empty($votes)) {
            return redirect('quiz')->withErrors('Вы еще не прошли тест');
        }

        arsort($votes);
        $minion = Minion::find(array_key_first($votes));

        // статистика прохождений
        Result::create(['minion_id' => $minion->id]);

        // HTML-сертификат — только для вошедших
        if (Auth::check()) {
            $fileName = 'certificates/cert_' . Auth::id() . '_' . time() . '.html';

            // рендерим шаблон в строку и сохраняем как файл
            $html = view('certificate', [
                'user'   => Auth::user(),     // ← объект, не id!
                'minion' => $minion,
            ])->render();

            Storage::disk('public')->put($fileName, $html);

            Certificate::create([
                'user_id'   => Auth::id(),
                'minion_id' => $minion->id,
                'path'      => $fileName,
            ]);
        }

        return view('result', ['minion' => $minion]);
    }
    public function minions()
    {
        $minions = Minion::get();
        return view('minions', [
            'minions' => $minions
        ]);

    }
}
