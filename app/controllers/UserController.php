<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * user
	 * @return Response
	 */
	public function index()
	{
//	  $users = DB::table('users')->where('id', 1)>get();
//	  $users = DB::table('users')->where('id', 1)->orWhere('id', 2)->get();
//    dd(DB::table('users')->count());
//    dd(DB::table('users')->lists('email', 'id'));
//    $users = DB::table('users')->where('id', '>', 1)->orderBy('email', 'desc')->take(2)->skip(0)->get();
    $users = DB::table('users')->join('posts', 'users.id', '=', 'posts.user_id')->get();

//		$data = array(
//                        'user_id' => 1,
//		 	'title' => 'Post 3',
//		 	'body' => 'Test Post 3'
//		);
//   DB::table('posts')->insert($data);
//    DB::table('users')->where('id', 4)->update($data);
    //DB::table('users')->where('id', 4)->delete();
		return View::make('user.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = DB::table('users')->where(array('id' => $id))->first();
    return View::make('user.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
