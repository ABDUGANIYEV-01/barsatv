<?php

namespace App\Http\Controllers;

use App\Models\Ballnew;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class BallnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|View|Factory
     */
    public function index(): Application|View|Factory
    {
        $ballnews = Ballnew::orderByDesc("created_at")->paginate(6);

        return view('ballnews.index',[
        'ballnews' => $ballnews

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
     * @return void
     */
    public function show(int $id): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response|null
     */
    public function edit(int $id): ?Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response|null
     */
    public function update(Request $request, int $id): ?Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(    int $id): void
    {
        //
    }
}
