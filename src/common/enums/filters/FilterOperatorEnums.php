<?php

namespace common\enums\filters;

enum FilterOperatorEnums: string
{
    case OPERATOR_IS = 'is';
    case OPERATOR_IS_NOT = 'is_not';
    case OPERATOR_IS_EMPTY = 'is_empty';
    case OPERATOR_IS_NOT_EMPTY = 'is_not_empty';
    case OPERATOR_BETWEEN = 'between';
    case OPERATOR_CONTAINS = 'contains'; // operator: ilike %word%
    case OPERATOR_NOT_CONTAINS = 'not_contains'; // operator: not ilike %word%
    case OPERATOR_LESS = 'less'; // operator: <
    case OPERATOR_LESS_OR_EQUAL = 'less_equal'; // operator: <=
    case OPERATOR_GREAT = 'great'; // operator: >
    case OPERATOR_GREAT_OR_EQUAL = 'great_equal'; // operator: >=
    case OPERATOR_EQUAL = 'equal'; // operator: =
    case OPERATOR_NOT_EQUAL = 'not_equal'; //operator: !=
}
