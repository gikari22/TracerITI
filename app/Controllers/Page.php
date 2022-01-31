<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view("about");
	}
    
    public function contact()
	{
		echo view("contact");
	}
    
    public function faqs()
	{
		echo view("faqs");
    }

    public function login()
	{
		echo view("login");
    }

     public function register()
	{
		echo view("register");
    }

    public function welcomeUser()
	{
		echo view("WelcomeUser");
    }

     public function adminDashboard()
	{
		echo view("adminDashboard");
    }
}