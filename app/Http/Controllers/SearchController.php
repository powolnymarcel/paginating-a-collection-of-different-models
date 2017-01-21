<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function home(Request $request)
    {
        $this->validate($request, [
            'query' => 'string',
            'page' => 'integer',
        ]);

        $query = $request->get('query');

        if(empty($query)) {
            return view('welcome');
        }

        $desks = \App\Desk::where('name', 'LIKE', '%'.$query.'%')
            ->orWhere('color', 'LIKE', '%'.$query.'%')
            ->orWhere('material', 'LIKE', '%'.$query.'%')
            ->orWhere('description', 'LIKE', '%'.$query.'%')
            ->orWhere('code', 'LIKE', '%'.$query.'%')
            ->get();

        $chairs = \App\Chair::where('name', 'LIKE', '%'.$query.'%')
            ->orWhere('color', 'LIKE', '%'.$query.'%')
            ->orWhere('material', 'LIKE', '%'.$query.'%')
            ->orWhere('description', 'LIKE', '%'.$query.'%')
            ->orWhere('code', 'LIKE', '%'.$query.'%')
            ->get();

        $collection = collect([])
            ->merge($desks)
            ->merge($chairs);

        $perPage = 2;
        $page = $request->get('page', 1);
        $offset = (($page - 1) * $perPage);

        $results = new \Illuminate\Pagination\LengthAwarePaginator(
            $collection->slice($offset, $perPage)->all(),
            $collection->count(),
            $perPage,
            $page
        );

        return view('welcome')->with(compact('results'));

    }
}
