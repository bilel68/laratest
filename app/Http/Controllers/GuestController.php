<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Guest;
use App\Com;
class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      $guests = Guest::all();
      return view('guest', ['guests' => $guests]);
    }
    public function getOne($id)
    {
      $guest = Guest::find($id);
      return view('guest', ['guest' => $guest]);
    }
    
    public function newGuestForm()
    {
      $coms = Com::all();
      $comsArray = Array();
      foreach ($coms as $com){
        $comsId[] = $com->id;
        $comsArray[$com->id]= $com->description;
      }
      return view('newGuest',['coms' => $comsArray, 'comsId' => $comsId]);
    }

    public function insertOne(Request $request)
    {
      $guest = new Guest;
      $guest->name = $request->name;
      $guest->sex = $request->sex;
      $guest->save();

      foreach ($request->coms as $key => $value) {
       $existingCom = Superpower::find($value);
       $hero->coms()->attach($existingCom->id);
     }

     return redirect('/Guests');
   }

}
