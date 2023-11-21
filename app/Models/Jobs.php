<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobs extends Model
{
    use HasFactory;

    protected $table = 'jobs';


    public function getJob(Request $request)
    {
        //$return = self::select('jobs.*');

        $return = $this->select('jobs.*');

        // search term
        $search = $request->get('search');
        if (!empty($search)) {
            $return = $return->where('job_title', 'like', '%' . $search . '%')
                ->orWhere('min_salary', 'like', '%' . $search . '%')
                ->orWhere('max_salary', 'like', '%' . $search . '%');
        }

        $return = $return->orderBy('id', 'desc')
            ->paginate(20);

        return $return;
    }
}