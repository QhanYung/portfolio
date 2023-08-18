<?php
namespace App\Http\Controllers\HumanResources\HRDept;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class HRDeptController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
		$this->middleware('highMgmtAccess:1,14'/*, ['only' => ['show', 'edit', 'update']]*/);
	}

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('humanresources.hrdept.index');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request, Staff $staff)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Staff $staff)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Staff $staff)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Staff $staff)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Staff $staff)
	{
		//
	}
}
