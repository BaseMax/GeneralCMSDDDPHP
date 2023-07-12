<?php

namespace CMS\Services;

use CMS\Models\Rule;
use CMS\Repositories\RuleRepository;

class RuleService extends Service
{
    public function find(int $rule_id): Rule
    {
        $rule = (new RuleRepository())->find($rule_id);

        return Rule::create($rule["value"]);
    }
}
