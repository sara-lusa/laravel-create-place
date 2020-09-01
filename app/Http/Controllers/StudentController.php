<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index() {

    $students = Student::all();

    // $students = [
    //   [
    //     'nome' => 'Sara',
    //     'cognome' => 'Lusa',
    //     'media' => '8'
    //   ],
    //   [
    //     'nome' => 'Anna',
    //     'cognome' => 'Rossi',
    //     'media' => '8'
    //   ],
    //   [
    //     'nome' => 'Viola',
    //     'cognome' => 'Berti',
    //     'media' => '8'
    //   ],
    // ];
    // dd(['data' => $students]);
    // dd(compact('students'));

    return view('students', compact('students'));
  }
}