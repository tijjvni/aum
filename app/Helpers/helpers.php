<?php

use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;

function formatDate($date)
{
    $date = date_create($date);
    $date = date_format($date, 'd M, Y');
    return $date;
}


// function formatAgo($date)
// {
//   $date = date_create($date);
//   $date = date_format($date, 'd M, Y');
//   $date = diffForHumans($date);
//   return $date;
// }


// // borrowers date return function
function returnDate($date)
{
    $date = date_create($date);
    $date = date_format($date, 'D d M, Y');
    return $date;
}

function formatTime($date)
{
    $date = date_create($date);
    $date = date_format($date, 'H:i A');
    return $date;
}
function returnTime($date)
{
    $date = date_create($date);
    $date = date_format($date, 'H:i A');
    return $date;
}



function returnDateTime($date)
{
    $date = date_create($date);
    $date = date_format($date, 'H:iA, d M');
    return $date;
}

function getRandomColor($array)
{
    $randomIndex = array_rand($array);
    $randomElement = $array[$randomIndex];
    return $randomElement;
}

function moneyFormat($money)
{
    $salary =  number_format("$money", 2);
    return $salary;
}
function digitFormat($digit)
{
    return  number_format("$digit");
}

function currentUser()
{
    // $user = User::with(['roles'])->where('id', auth()->user()->id)->get();
    return auth()->user();
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function schoolID($table, $column)
{
    $config = [
        'table' => $table,
        'length' => 12,
        'prefix' => 'BT-SMS/' . date('y') . '/',
        'field' => $column
    ];

    // now use it
    $id = IdGenerator::generate($config);

    // // use within single line code
    // $id = IdGenerator::generate(['table' => $table, 'length' => 12, 'prefix' => 'BT-SMS/' . date('y') . '/']);

}