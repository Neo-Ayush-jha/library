<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\Pass;
use App\Models\Admin;
use App\Models\Image;
use DateTime;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }
    
   public function viewBooks(){
       $data['books']=Book::all();
       $ata['categorys']=Category::all();
       return view('admin.manage.manageBook', $data,$ata);
   }
//    public function viewPass(){
//        $data['passs']=Pass::all();
//        return view('admin.manage.managePass', $data);
//    }
    public function cat(Request $req){
        if($req->method() == "POST"){
            $data=$req->validate([
                'cat_title'=>'required',
                'cat_description'=>'required',
            ]);
            Category::create($data);
            return redirect()->back();
        }
        return view("admin.insert.addBook");
    }


    public function show(){
        $data ['category']= Category::all();
        return view("admin.insert.addBook",$data);
    }

    public function store(Request $request){
        // dd($request);die;
        $request->validate([
            'book_name'=>'required',
            'category_id'=>'required',
            'book_cover_images'=>'required',
            'about_book'=>'required',
            'auther_name'=>'required',
        ]);
       
                if($request->hasFile("book_cover_images")){
                    $file=$request->file("book_cover_images");

                    $coverName=rand().'_'.time().'_'.$file->getClientOriginalName();

                    $file->move(\public_path("book_cover_images/"),$coverName);

                $book = new Book();
                $book->book_name=$request->book_name;
                $book->category_id=$request->category_id;
                $book->book_cover_images=$coverName;
                $counter = 0;
                $book->about_book=$request->about_book;
                $book->auther_name=$request->auther_name;
                $book->save();
            }
            if($request->hasFile("images")){
                $files=$request->file('images');
                foreach($files as $file){
                    $imageName=rand().'_'.time().'_'.$file->getClientOriginalName();
                    $request['book_id']=$book->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("images/"),$imageName);
                    Image::create($request->all());
                }
            }

        return redirect()->back();
    }

    public function destroy(Request $req, $id){
        $data = Book::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function edit(Request $req, $id){

    }

    public function approvePass($id){
        $book = Pass::find($id);
        $book->status='1';
        $book->save();
        return redirect()->route('admin.manage.approvePass');
    }
    public function expirePass($id){
        $book = Pass::find($id);
        $book->status="-1";
        $book->save();
        return redirect()->route('admin.manage.expirePass');
    }

    public function generatePayment(){
        $passs = Pass::where('status','1')->get();
        $now = new DateTime();

        foreach($passs as $pass){
            $dateOfJoin = new DateTime($pass->created_at);
            $start_year= $dateOfJoin ->format('Y');
            $nowYear =$now->format("Y");

             for($year = $start_year;$year <= $nowYear;$year++){
                if($start_year == $nowYear){
                    $start_month = $dateOfJoin->format('m');
                    $end_month = $now ->format('m');
                }
                elseif($year == $start_year){
                    $start_month= $dateOfJoin->format('m');
                    $end_month = 12;
                }
                elseif($year == $nowYear){
                    $start_month=01;
                    if($now->format('d') > $dateOfJoin->format('d')){
                        $end_month = $now->format('m');
                    }
                    else{
                        $end_month = $now->format('m') -1;
                    }
                }
                else{
                    $start_month = 01;
                    $end_month = 12;
                }
                for($month = $start_month; $month <= $end_month; $month++){
                    $result = new DateTime("$year-$month-".$dateOfJoin->format('d'));
                    $newDate=$result->format('Y-m-d');
                    $pass_id=$pass->id;
                    $payment=Payment::where([['pass_id',$pass_id],['due_date',$newDate]])->get();
                    if($payment->count() == 0){
                        $newPay = new Payment();
                        $newPay->pass_id=$pass_id;
                        $newPay->amount=700;
                        $newPay->due_date=$newDate;
                        $newPay->save();
                    }
                }
             }
        }
        return view('admin.fee');
    }
    public function pay(){
        $this->generatePayment();
        $data['countPass'] = Pass::all()->count();
        $data['due_payment']=Payment::where("status","due")->get();
        return view("admin/fee",$data);
    }
}