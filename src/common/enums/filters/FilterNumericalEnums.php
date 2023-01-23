<?php

namespace common\enums\filters;

enum FilterNumericalEnums: string
{
    public function getOperator($operator): string|bool
    {
        return match ($operator) {
            FilterOperatorEnums::OPERATOR_LESS => '<',
            FilterOperatorEnums::OPERATOR_LESS_OR_EQUAL => '<=',
            FilterOperatorEnums::OPERATOR_GREAT => '>',
            FilterOperatorEnums::OPERATOR_GREAT_OR_EQUAL => '>=',
            FilterOperatorEnums::OPERATOR_EQUAL => '=',
            FilterOperatorEnums::OPERATOR_NOT_EQUAL => '!=',
            default => false,
        };
    }
}
