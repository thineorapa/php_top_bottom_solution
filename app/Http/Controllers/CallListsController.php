<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallList;

class CallListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calllists.index')->with(
            'calllists',
            CallList::orderBy('level', 'asc')->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $button = array_keys($request->all());
        $button_pressed = end($button);
        $calllistToSwitch = CallList::find($id);
        $allCallList = CallList::all();
        $previous_level = $calllistToSwitch->level;

        switch ($button_pressed) {
            case "top":
                foreach ($allCallList as $calllist) {
                    if ($calllist->level < $calllistToSwitch->level) {
                        $calllist->update([
                            'level' => $calllist->level + 1
                        ]);
                    }
                }

                $calllistToSwitch->update([
                    'level' => 1
                ]);
                break;
            case "bottom":
                foreach ($allCallList as $calllist) {
                    if ($calllist->level > $calllistToSwitch->level) {
                        $calllist->update([
                            'level' => $calllist->level - 1
                        ]);
                    }
                }

                $calllistToSwitch->update([
                    'level' => count($allCallList)
                ]);
                break;

            case "up":
                foreach ($allCallList as $calllist) {
                    if ($calllist->level == $previous_level - 1) {
                        $calllist->update([
                            'level' => $calllist->level + 1
                        ]);
                        break;
                    }
                }

                $calllistToSwitch->update([
                    'level' => $previous_level - 1
                ]);

                break;
            case "down":
                foreach ($allCallList as $calllist) {
                    if ($calllist->level == $previous_level + 1) {
                        $calllist->update([
                            'level' => $calllist->level - 1
                        ]);
                        break;
                    }
                }

                $calllistToSwitch->update([
                    'level' => $previous_level + 1
                ]);

                break;
            default:
                return;
        }

        return redirect(route('call-list.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
