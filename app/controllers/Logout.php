<?php

/**
 * 
 */
class Logout extends Controller
{
	
	public function index()
	{
		if ($this->model('Mahasiswa')->logout()) {
			header('Location:' .BASEURL. '');
		}
	}
}