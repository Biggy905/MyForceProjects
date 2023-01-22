<?php

namespace common\filters;

use common\enums\NewsFiltersAttrEnums;

final class NewsFilters
{
    public function toFilter(array $filters): array
    {
        return $this->clearFilter($filters);
    }

    private function clearFilter($filters): array
    {
        /*
        $filters = [
            'filter' => [
                'attribute' => 'id';
                'value' => [],
            ]
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
            if ($this->validAttributes($index)) {
                $cleanFilters[] = $filter;
            }
        }

        return $cleanFilters;
    }

    private function validAttributes($index): ?bool
    {
        $attr = match ($index) {
            NewsFiltersAttrEnums::ATTR_ID->value,
            NewsFiltersAttrEnums::ATTR_DESCRIPTION->value,
            NewsFiltersAttrEnums::ATTR_TITLE->value,
            NewsFiltersAttrEnums::ATTR_DATE->value => true,
            default => null,
        };

        return empty($attr);
    }

    private function validOperation($index): ?bool
    {
        $operator = match ($index) {
            default => null,
        };

        return empty($operator);
    }
}
