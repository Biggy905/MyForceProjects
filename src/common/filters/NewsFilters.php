<?php

namespace common\filters;

use common\enums\NewsFiltersAttrEnums;

final class NewsFilters
{
    public static function toFilter(array $filters): array
    {
        return (new NewsFilters)->clearFilter($filters);
    }

    private function clearFilter($filters): array
    {
        /*
        $filters = [
            'filter' => [
                'attribute' => 'id',
                'operator' => 'is',
                'value' => [],
            ],
            'page' => 1,
            'limit' => 50,
        ];
        */
        $cleanFilters = [];
        if (empty($filters['page']) && $filters['page'] <= 0
        ) {
            $filters['page'] = 1;
        }

        if (empty($filters['limit']) && $filters > 100) {
            $filters['limit'] = 25;
        }

        foreach ($filters['filter'] as $index => $filter) {
            if (!$this->validateAttributes($filter['attribute'])) {
                continue;
            }
            if (!$this->validateOperator($filter['operator'])) {
                continue;
            }


        }

        return $cleanFilters;
    }

    private function validateAttributes($attributes): bool
    {
        //$status = Filter
        return false;
    }

    private function validateOperator($operator): bool
    {
        //$status = Filter

        return false;
    }
}
