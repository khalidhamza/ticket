<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ticket;
use DB;
use Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id       = Auth::user()->id;
        $tickets  = ticket::where('user','=',$id)->get();
        $data     = array('title'=>'My Tickts');
        return view('list_tickets')->with('tickets',$tickets)->with($data);
        //return view('tickets');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tickets');
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
        $ticket = new ticket;
        $ticket->title       = $request->input('title');
        $ticket->body        = $request->input('body');
        $ticket->user        = Auth::user()->id;
        $ticket->status      = $request->input('status');
        $ticket->save();
        return redirect('ticket');
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
        //return $id;
        $details           = ticket::find($id);
        return view('ticket-details')->with('details',$details);
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
        $edit           = ticket::find($id);
        return view('tickets')->with('ticket',$edit);
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
        //
        
        $ticket =ticket::find($id);
        $ticket->title       = $request->input('title');
        $ticket->body        = $request->input('body');
        $ticket->status      = $request->input('status');
        $ticket->update();
        return redirect('ticket');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $ticket =ticket::find($id);
        $ticket->status      = $request->input('status');
        $ticket->update();
        return redirect('ticket');
        //return view('ticket-details');

    }
}
