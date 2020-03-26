<?php

namespace App\Http\Controllers;

use App\Repositories\TaxRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userRepository;
    private $taxRepository;

    public function __construct(UserRepositoryInterface $userRepository, TaxRepositoryInterface $taxRepository)
    {
        $this->middleware(['auth', 'approved','role'], ['except' => ['id_check']]);
        $this->userRepository = $userRepository;
        $this->taxRepository = $taxRepository;
    }

    // 마이정보-패스워드입력 화면
    public function confirm_index()
    {
        return view('users.confirm_index');
    }

    // 마이정보-비밀번호체크
    public function confirm_check(Request $request)
    {
        if (!$this->userRepository->password_check($request)) {
            return back();
        }

        return redirect()->route('my_show');
    }

    // 마이정보-수정입력 화면
    public function my_show()
    {
        $user = $this->userRepository->findById();
        $taxs = $user->taxs;

        if (!is_array($taxs)) {
            $taxs[] = '';
        }

        return view('users.company', compact('user','taxs'));
    }

    // 마이정보-수정 업데이트
    public function my_update(Request $request)
    {
        $request['password'] = $this->userRepository->makePassword($request['password']);

        $this->userRepository->update($request);

        if ($request['type'] == "company") {
            $this->taxRepository->update($request);
        }

        return redirect()->route('my_show');
    }

    // 회원가입-아이디체크
    public function id_check(Request $request)
    {
        $user_id = $this->userRepository->findByUserId($request->data);
        $result = response()->json(['result'=> $user_id], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);

        return $result;
    }

}
