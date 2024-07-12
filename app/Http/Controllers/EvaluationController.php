<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    protected $evaluation;

    public function __construct()
    {
        $this->evaluation = new Evaluation();
    }

    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluation', compact('evaluations'));
    }
}
