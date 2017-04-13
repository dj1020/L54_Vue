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

        // 結果看起正確，但因為有 children => [] 的關係，所以出現空目錄的情況
        $columns = [
            'id',
            'id as value',
            'name as label',
            'parent_id',
        ];
        $menusData = Menu::where('parent_id', null)
            ->with([
                'children'          => function ($q) use ($columns) {
                    $q->select($columns);
                },
                'children.children' => function ($q) use ($columns) {
                    $q->select($columns);
                },
            ])
            ->get($columns)
            ->toArray();

        $this->removeAllEmptyChildren($menusData);

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

    private function removeAllEmptyChildren(&$items)
    {
        foreach ($items as $k => &$v) {
            if (isset($v['children'])) {
                if (empty($v['children'])) {
                    unset($v['children']);
                } elseif (is_array($v['children'])) {
                    $this->removeAllEmptyChildren($v['children']);
                }
            }
        }
    }
}
