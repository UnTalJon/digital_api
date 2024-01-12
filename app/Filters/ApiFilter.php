<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
    protected $safeParameters = [];
    protected $columnMap = [];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'like' => 'like'
    ];

    public function transform(Request $request) {
        $eloQuery = [];

        foreach($this->safeParameters as $parameter => $operators) {
            $query = $request->query($parameter);

            if(!isset($query)) {
                continue;
            }
            $column = $this->columnMap[$parameter] ?? $parameter;

            foreach($operators as $operator) {
                if ($operator == 'like') {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], '%' . $query[$operator] . '%'];
                }

                if(isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}