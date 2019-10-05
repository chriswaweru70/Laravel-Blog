<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAbout()
    {
        $first = 'Chris';
        $second = 'Kamau';
        $surname = 'Waweru';

        $sister = 'Vivian';
        $last = 'Njambi';

        $enumerator = 'Peter';
        $wish = ' Waweru';

        $name1 = 'Jane';
        $name2 = ' Mwangi';
        $name3 = ' Waweru';
        $name4 = 'Mwangi';

    
        $expect = $sister. " " . $last;
        $fullname = $first . " " . $second . " " . $surname;
        $identification= $enumerator. " " . $wish;
        $identify = $name1 . " " . $name2 . " " . $name3;
        $email = 'chriswaweru70@gmail.com';
        
        $data = [];
        $data['email'] = $email;
        $data['identification']  = $identification;
        $data['identify'] = $identify;

   
       
        return view('pages.about')->withData($data);
                                   
        // ->withName ($expect)
                                    //  ->withDad ( $identification)
                                    //  ->withWife( $identify);
    }
    public function getContact()
    {
        return view('pages.contact');
    }
}
