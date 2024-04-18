<?php

namespace App\Http\Controllers;

use App\Category;
use App\HtmlTemplate;
use App\WordpressTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Con;
use App\Inquiry;

class CmsController extends Controller
{
    //
 public function contact_us(Request $request){
    $inquiry = new Inquiry();
    $inquiry->name=$request->full_name;
    $inquiry->category_title=$request->category_title;
    $inquiry->product=$request->product;
    $inquiry->mobile=$request->mobile;
    $inquiry->email=$request->email;
    $inquiry->message=$request->message;
    $inquiry->save();
    return ['success'=>'true','message'=>'Thank You! We will contact you shortly.'];
 }
    public function index($para,$para2='')
    {

        if($para=='html-templates'){
            $categories=Category::get();
            $htmlTemplate=HtmlTemplate::select('html_templates.*','categories.title as category_title')
            ->leftJoin('categories', 'html_templates.category_id', '=', 'categories.id')
            ->get();
            return view('pages.html-templates',['categories'=>$categories,'template'=>$htmlTemplate]);
        }else if($para=='wordpress-templates'){
            $categories=Category::get();
            $wordpressTemplate=WordpressTemplate::
            select('wordpress_templates.*','categories.title as category_title')
            ->leftJoin('categories', 'wordpress_templates.category_id', '=', 'categories.id')
            ->get();
            return view('pages.wordpress-templates',['categories'=>$categories,'template'=>$wordpressTemplate]);
        }else if($para=='contact-us'){
            return view('pages.contact-us');
        }else if($para=='about-us'){
            return view('pages.about-us');
        }else if($para=='wordpress-development'){
            return view('pages.wordpress-development');
        }else if($para=='html-website-design'){
            return view('pages.html-website-design');
        }else if($para=='social-media-marketing'){
            return view('pages.social-media-marketing');
        }else if($para=='business-online-presence'){
            return view('pages.business-online-presence');
        }else if($para=='festival-post-design'){
            return view('pages.festival-post-design');
        }else if($para=='search-engine-optimization'){
            return view('pages.search-engine-optimization');
        }else if($para=='digital-marketing'){
            return view('pages.digital-marketing');
        }else if($para=='content-writing'){
            return view('pages.content-writing');
        }else if($para=='order-now'){
            $templates = DB::table('view_templates')->where('title',$para2)->first();
            return view('pages.order-now',['templates'=>$templates]);
        }else if($para==''){
            return view('pages.home');
        }
        else{

            return "page not found";
        }

    }
}
