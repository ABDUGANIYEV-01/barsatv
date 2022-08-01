<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|View|Factory
    {
      $videos = Video::orderByDesc("created_at")->paginate(4);

        return view('videos.index',[
            'videos' => $videos

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response|null
     */
    public function create(): ?Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response|null
     */
    public function store(Request $request): ?Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response|null
     */
    public function show(int $id): ?Response
    {
        //
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
    public function destroy(int $id): void
    {
        //
    }
}
