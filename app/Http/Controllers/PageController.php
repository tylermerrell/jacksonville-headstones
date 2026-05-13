<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    // Core pages
    public function home(): Response
    {
        return Inertia::render('Home');
    }

    public function about(): Response
    {
        return Inertia::render('About');
    }

    public function gallery(): Response
    {
        return Inertia::render('Gallery');
    }

    public function contact(): Response
    {
        return Inertia::render('Contact');
    }

    // Product pages
    public function uprightMonuments(): Response
    {
        return Inertia::render('Products/UprightMonuments');
    }

    public function flatMarkers(): Response
    {
        return Inertia::render('Products/FlatMarkers');
    }

    public function bronzeMemorials(): Response
    {
        return Inertia::render('Products/BronzeMemorials');
    }

    public function slantBevelMarkers(): Response
    {
        return Inertia::render('Products/SlantBevelMarkers');
    }

    public function customEngraving(): Response
    {
        return Inertia::render('Products/CustomEngraving');
    }

    public function restoration(): Response
    {
        return Inertia::render('Products/Restoration');
    }

    public function petMemorials(): Response
    {
        return Inertia::render('Products/PetMemorials');
    }

    // Service area pages
    public function stAugustine(): Response
    {
        return Inertia::render('ServiceAreas/StAugustine');
    }

    public function orangePark(): Response
    {
        return Inertia::render('ServiceAreas/OrangePark');
    }

    public function jacksonvilleBeach(): Response
    {
        return Inertia::render('ServiceAreas/JacksonvilleBeach');
    }

    public function fernandinaBeach(): Response
    {
        return Inertia::render('ServiceAreas/FernandinaBeach');
    }

    public function macclenny(): Response
    {
        return Inertia::render('ServiceAreas/Macclenny');
    }

    // Resource pages
    public function resources(): Response
    {
        return Inertia::render('Resources/Index');
    }

    public function buyingGuide(): Response
    {
        return Inertia::render('Resources/BuyingGuide');
    }

    public function pricing(): Response
    {
        return Inertia::render('Resources/Pricing');
    }

    public function faq(): Response
    {
        return Inertia::render('Resources/Faq');
    }

    // Cemetery hub + spokes
    public function cemeteries(): Response
    {
        return Inertia::render('Cemeteries/Index');
    }

    public function evergreen(): Response
    {
        return Inertia::render('Cemeteries/Evergreen');
    }

    public function jacksonvilleNational(): Response
    {
        return Inertia::render('Cemeteries/JacksonvilleNational');
    }

    public function hardageGiddens(): Response
    {
        return Inertia::render('Cemeteries/HardageGiddens');
    }

    public function riversideMemorial(): Response
    {
        return Inertia::render('Cemeteries/RiversideMemorial');
    }

    public function jacksonvilleMemoryGardens(): Response
    {
        return Inertia::render('Cemeteries/JacksonvilleMemoryGardens');
    }

    public function magnoliaCemetery(): Response
    {
        return Inertia::render('Cemeteries/MagnoliaCemetery');
    }

    public function sanLorenzo(): Response
    {
        return Inertia::render('Cemeteries/SanLorenzo');
    }

    public function craigMemorial(): Response
    {
        return Inertia::render('Cemeteries/CraigMemorial');
    }

    public function bosqueBello(): Response
    {
        return Inertia::render('Cemeteries/BosqueBello');
    }

    public function greenPine(): Response
    {
        return Inertia::render('Cemeteries/GreenPine');
    }

    public function beachesMemorial(): Response
    {
        return Inertia::render('Cemeteries/BeachesMemorial');
    }

    public function leeKirklandSmith(): Response
    {
        return Inertia::render('Cemeteries/LeeKirklandSmith');
    }
}
