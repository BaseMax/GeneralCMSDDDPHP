<?php

namespace CMS\Http\Controllers;

use CMS\Http\Request;
use CMS\Services\RuleService;
use CMS\Services\UserService;

class UserRuleController extends Controller
{
    public function show(Request $request, int $id)
    {
        $user = (new UserService())->find([
            "email" => $request->postParams["email"],
            "password" => $request->postParams["password"]
        ]);

        $result = (new RuleService())->find($user->getRuleId());

        return json_encode([
            "permission" => $result
        ]);
    }
}
