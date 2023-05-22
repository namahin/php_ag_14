<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psy\Util\Json;

class AssignmentController extends Controller
{

//    Question 1
    function Question1(Request $request): string{
        $name=$request->input('name');
        return "My name is " . $name;
    }


//    Question 2
    function Question2(Request $request): string{
        $userAgent=$request->header('User-Agent');
        return "The name of agent is " . $userAgent;
    }


//    Question 3
    function Question3(Request $request): string{
        $page=$request->page;
        return $page . " page retrieved successfully";
    }


//    Question 4
    function Question4(Request $request):JsonResponse{
        $content=array(
            'message'=> 'Success',
            'data'=>[
                'name'=> 'John Doe',
                'age'=> 25
            ]
        );
        return response()->json($content);
    }


//    Question 5
    function Question5(Request $request): bool
    {
        $avatarFile=$request->file('avatar');
        $avatarFile->storeAs('uploads',$avatarFile->getClientOriginalName());
        $avatarFile->move(public_path('uploads'), $avatarFile->getClientOriginalName());

        return true;
    }


//    Question 6
    function Question6(Request $request): array|string|null{
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;
    }


//    Question 7
    function Question7(Request $request): JsonResponse{
        $email=$request->input('email');

//        Check email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email format.'
            ]);
        }

        return response()->json([
            'email' => $email,
            'success' => true,
            'message' => 'Form submitted successfully.'
        ]);
    }
}
