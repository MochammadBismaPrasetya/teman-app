<?php namespace App\Controllers;

use App\Models\PagesModel;

class Pages extends BaseController
{
    protected $pagesModel;

    public function __construct()
    {
        $this->pagesModel = new PagesModel();
    }

	public function bisma()
	{
        $data = [
            'title' => 'Bisma'
        ];
		return view('pages/bisma', $data);
	}
	public function rava()
	{
        $data = [
            'title' => 'Bisma'
        ];
        return view('pages/rava', $data);
	}
	public function wahid()
	{
        $data = [
            'title' => 'Bisma'
        ];
		return view('pages/wahid', $data);
	}
}