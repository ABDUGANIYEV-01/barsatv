<?php

namespace App\Http\Controllers;

use App\Models\Live;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|View|Factory
     */
    public function index() :Application|View|Factory
    {
        $lives = Live::orderByDesc("created_at")->paginate(10);

        return view('lives.index',[
            'lives' => $lives

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id): Application|Factory|View
    {
        $id = Live::find($id);
        return view('lives.show',[
            'id' => $id

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, int $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response|null
     */
    public function destroy(int $id): ?Response
    {
        //
    }
}
