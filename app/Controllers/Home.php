<?php

namespace App\Controllers;

use App\Models\StaffModel;
use App\Models\BorrowerModel;
use App\Models\BookModel;
use App\Models\PublisherModel;
use App\Models\CategoryModel;
use App\Models\BorrowModel;
use App\Controllers\BaseController;

class Home extends BaseController
{
    protected $staffmodel;
    protected $borrowermodel;
    protected $bookmodel;
    protected $publishermodel;
    protected $categorymodel;
    protected $borrowmodel;


    public function __construct()
    {
        $this->staffmodel = new StaffModel();
        $this->borrowermodel = new BorrowerModel();
        $this->bookmodel = new BookModel();
        $this->publishermodel = new PublisherModel();
        $this->categorymodel = new CategoryModel();
        $this->borrowmodel = new BorrowModel();
    }

    public function index()
    { 
        if(session('id'))
        {
            return redirect()->to(base_url('home'));
        }
        return view('login');
    }

    public function home()
    {
        if(!session('id'))
        {
            return redirect()->to(base_url())->with('error', 'Anda harus Login');
        }

        $data = array(
            'qstaff' => $this->staffmodel->countall(),
            'qborrower' => $this->borrowermodel->countall(),
            'qbook' => $this->bookmodel->countall(),
            'qpublisher' => $this->publishermodel->countall(),
            'qcategory' => $this->categorymodel->countall(),
            'qborrow' => $this->borrowmodel->countall(),

            
        );

        return view('home', $data);
    }
}
