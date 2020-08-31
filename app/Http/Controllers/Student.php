<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
  public function index() {
    $students = [
      [
        'nome' => 'Sara',
        'cognome' => 'Lusa',
        'Media' => '8'
      ],
      [
        'nome' => 'Anna',
        'cognome' => 'Rossi',
        'Media' => '8'
      ],
      [
        'nome' => 'Viola',
        'cognome' => 'Berti',
        'Media' => '8'
      ],
    ];
    // dd(['data' => $students]);
    // dd(compact('students'));

    return view('students', compact('students'));
  }
}
