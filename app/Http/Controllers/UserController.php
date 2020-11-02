<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\User as UserResource;
use App\Services\CreateUserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;

    public function __construct(CreateUserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = User::paginate(15);

        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUserRequest $request)
    {
        $this->userService->createUser($request->name, $request->email, $request->password);
        return redirect('/');
    }
}
