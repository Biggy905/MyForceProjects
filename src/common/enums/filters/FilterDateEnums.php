<?php

namespace common\enums\filters;

enum FilterDateEnums: string
{
    public function getOperator($operator): string|bool
    {
        return match ($operator) {
            FilterOperatorEnums::OPERATOR_GREAT => '>',
            FilterOperatorEnums::OPERATOR_GREAT_OR_EQUAL => '>=',
            FilterOperatorEnums::OPERATOR_LESS => '<',
            FilterOperatorEnums::OPERATOR_LESS_OR_EQUAL => '<=',
            FilterOperatorEnums::OPERATOR_BETWEEN => 'between',
            default => false,
        };
    }
}
