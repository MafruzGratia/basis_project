<?php

namespace App\mymodule;
use App\Models\employee;

use Illuminate\Database\Eloquent\Model;

class EmployeeMethod
{
    /**
     * Static method to paginate any model data.
     *
     * @param string $model The model class to paginate.
     * @param int $page Current page number.
     * @param int $perPage Number of items per page.
     * @return array
     */
    public static function paginate($model, $page = 1, $perPage = 10)
    {
        // Calculate offset
        $offset = ($page - 1) * $perPage;

        // Query the data with offset and limit
        $results = $model::query()
                         ->offset($offset)
                         ->limit($perPage)
                         ->get();

        // Count total records
        $total = $model::query()->count();

        // Total number of pages
        $totalPages = ceil($total / $perPage);

        // Range of items on the current page
        $from = $offset + 1;
        $to = min($offset + $perPage, $total);

        return [
            'data' => $results,
            'total' => $total,
            'per_page' => $perPage,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'from' => $from,
            'to' => $to
        ];
    }
}


