<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //route{pages}
     public function resources ()
     {
        return view ('pages.resources');
     }
     public function trust ()
     {
        return view ('pages.trust');
     }
    public function appConnectors ()
    {
        return view('pages.app-connectors');
    }
    public function pricing ()
    {
        return view('pages.pricing');
    } 
    //route{pages/why-bitly}
    public function bitly101 ()
    {
        return view('pages.why-bitly.bitly-101');
    }
    public function enterpriseClass ()
    {
        return view('pages.why-bitly.enterprise-class');
    }
    public function integrationsApi ()
    {
        return view('pages.why-bitly.integrations-api');
    }
    //route{pages/products}
    public function linkManagement ()
    {
        return view('pages.products.link-management');
    }
    public function qrCodes ()
    {
        return view('pages.products.qr-codes');
    }
    public function linkInBio ()
    {
        return view('pages.products.link-in-bio');
    }
    //route{pages/landing}
    public function discoverEnterprise ()
    {
        return view('pages.landing.discover-enterprise');
    }
}
