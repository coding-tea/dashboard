<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use src\Domain\DTOs\UserDto;
use src\Domain\Services\UserService;

class UserController extends Controller
{

    public $route;
    public $folder;

    public function __construct(
        public UserService $userService,
    ) {
        $this->route = "";
        $this->folder = "";
    }

    public function index()
    {
        return view("pages." . $this->folder . ".index");
    }

    public function create()
    {
        return view("pages." . $this->folder . "create");
    }

    public function store(UserRequest $request)
    {
        $user = $this->userService->store(
            UserDto::fromRequest($request)
        );

        return redirect()->route($this->route . ".show", $user->id);
    }

    public function update(User $user, UserRequest $request)
    {
        $this->userService->update(
            $user,
            UserDto::fromRequest($request)
        );

        return redirect()->route($this->route . ".index");
    }

    public function delete(User $user)
    {
        $this->userService->delete($user);

        return redirect()->route($this->route . ".index");
    }

    public function destroy($arr)
    {
        $this->userService->deleteArrayOfIds($arr);

        return redirect()->route($this->route . ".index");
    }
}
