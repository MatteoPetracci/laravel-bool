<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    
    public function __construct()
    {
        $this->getStudents();
    }

    public function index() 
    {
        // $students = $this->students;
        // return view('students.index', compact('students'));
        return view('students.index');
    }
    
    // Questa funzione deve ricevere un dato in entrata per mostrare quello che mi serve in questo caso l'id

    public function show($id) 
    {
        
    }
        // Configurazione tramite l'helper config 
        // Creo un file php nella cartella config

    private function getStudents() {
        // Nome del file php e nome della chiave del mio array
        $this->students = config('students.allStudents');
        // dd($this->students);
    }
}

// Dopo aver creato le funzioni creo i file dove stampare questi dati (nella cartella views)