<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
    	$database = [
        [
            'name' => 'Assignment',
            'date' => '21/03/2018',
            'pic' => 'Ken Land'
        ],
        [
            'name' => 'Group Project',
            'date' => '01/01/2018',
            'pic' => 'Tsu Chauw'
        ],
        [
            'name' => 'Assignment',
            'date' => '12/02/2018',
            'pic' => 'Celine'
        ]
    ];
    	$tasks = $database;
    	return view('task/index', compact('tasks'));
    }

    public function get($id) {
    	$databaseOne = [
        [
            'name' => 'Assignment',
            'date' => '21/03/2018',
            'pic' => 'Ken Land'
        ],
        [
            'name' => 'Group Project',
            'date' => '01/01/2018',
            'pic' => 'Tsu Chauw'
        ],
        [
            'name' => 'Assignment',
            'date' => '12/02/2018',
            'pic' => 'Celine'
        ]
    ];
    $taskOne = $databaseOne[$id];
    // dd($task);
    return view('task/every', compact('taskOne'));
    }



}
