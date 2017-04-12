<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $menus = Menu::all()->map(function (Menu $menu) {
                return [
                    'name'   => $menu->name,
                    'parent' => $menu->parentName,
                    'route'  => $menu->route(),
                ];
            })->values()->toArray();

            return response()->json($menus);
        }

        return view('menus.index');
    }

    public function cascaderData()
    {
        // $menusData = json_decode(file_get_contents(storage_path('cascaderSampleData.json')), true);

        // 重構完畢，看一下 /menus/create2 發現選項多了許多不是 root element 的項目
        $columns = [
            'id',
            'id as value',
            'name as label',
            'parent_id',
        ];
        $menusData = Menu::with([
            'children'          => function ($q) use ($columns) {
                $q->select($columns);
            },
            'children.children' => function ($q) use ($columns) {
                $q->select($columns);
            },
        ])->get($columns);

        return $menusData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();

        return view('menus.create', compact('menus'));
    }

    public function create2()
    {
        return view('menus.create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = Menu::create($request->all());

        return redirect('/menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
