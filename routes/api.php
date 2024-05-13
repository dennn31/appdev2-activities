<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/app',function(){
// 1. SELECT * FROM students;
    $students=DB::table('students')->get();
    return response()->json($students);
});

// 2. SELECT * FROM students WHERE grade = '10';
// $students=DB::table('students')->where('grade', 10)->get();
// return response()->json($students);

// 3. SELECT * FROM students WHERE age BETWEEN 15 AND 18;
// $students=DB::table('students')
//           ->whereBetween('age', [15, 18])
//           ->get();
//           return response()->json($students);

// 4. SELECT * FROM students WHERE city = 'Manila';
// $students=DB::table('students')->where('city', 'Manila')->get();
// return response()->json($students);

// 5. SELECT * FROM students ORDER BY age DESC;
// $students=DB::table('students')
//                ->orderBy('age', 'desc')
//                ->get();
//                return response()->json($students);

// 6. SELECT students.*, teachers.name AS teacher_name 
// FROM students 
// LEFT JOIN teachers ON students.teacher_id = teachers.id;
// $students=DB::table('students')
//         ->select('students.*', 'teachers.name AS teacher_name')
//         ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
//         ->get();
//         return response()->json($students);

// 7. SELECT teachers.*, COUNT(students.id) AS student_count 
// FROM teachers 
// LEFT JOIN students ON teachers.id = students.teacher_id 
// GROUP BY teachers.id;
// $students=DB::table('teachers')
//     ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
//     ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
//     ->groupBy('teachers.id')
//     ->get();
// return response()->json($students);

// 8. SELECT students.*, subjects.name AS subject_name 
// FROM students 
// INNER JOIN subjects ON students.subject_id = subjects.id;
// $students=DB::table('students')
//         ->join('subjects', 'students.subject_id', '=', 'subjects.id')
//         ->select('students.*', 'subjects.name AS subject_name')
//         ->get();
//         return response()->json($students);

// 9. SELECT students.*, AVG(scores.score) AS average_score 
// FROM students 
// LEFT JOIN scores ON students.id = scores.student_id 
// // GROUP BY students.id;
// $students=DB::table('students')
//     ->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
//     ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
//     ->groupBy('students.id')
//     ->get();
//     return response()->json($students);

// 10. SELECT teachers.*, COUNT(students.id) AS student_count 
// FROM teachers 
// LEFT JOIN students ON teachers.id = students.teacher_id 
// GROUP BY teachers.id 
// ORDER BY student_count DESC 
// LIMIT 5;
// $students=DB::table('teachers')
//     ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
//     ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
//     ->groupBy('teachers.id')
//     ->orderByDesc('student_count')
//     ->limit(5)
//     ->get();
//     return response()->json($students);
// });
