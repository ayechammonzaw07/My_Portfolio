<?php

namespace App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| PageController
|--------------------------------------------------------------------------
| Handles rendering all static portfolio pages. Each method returns
| a Blade view for the corresponding section of the portfolio.
| Keeping page logic separate from the main routes file
| follows MVC principles and keeps code maintainable.
*/

class PageController extends Controller
{
    /**
     * Display the home / hero section of the portfolio.
     * This is the landing page visitors see first.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page with professional introduction,
     * skills overview, and profile image.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the skills page showing technical proficiency
     * across frontend, backend, database, and tools.
     */
    public function skills()
    {
        return view('pages.skills');
    }

    /**
     * Display the work experience and mentorship page.
     * Shows professional experience and mentorship contributions.
     */
    public function experience()
    {
        return view('pages.experience');
    }

    /**
     * Display the projects showcase page.
     * Shows project cards with descriptions, tech stacks, and links.
     */
    public function projects()
    {
        return view('pages.projects');
    }

    /**
     * Display the services page with available offerings.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the contact page with form and contact information.
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
