<?php

namespace common\enums\filters;

enum FilterTextEnums: string
{
    public static function getOperator($operator): string|bool
    {
        return match ($operator) {
            FilterOperatorEnums::OPERATOR_IS => 'is',
            FilterOperatorEnums::OPERATOR_IS_NOT => 'is_not',
            FilterOperatorEnums::OPERATOR_CONTAINS => 'ilike',
            FilterOperatorEnums::OPERATOR_NOT_CONTAINS => 'not ilike',
            default => false,
        };
    }
}