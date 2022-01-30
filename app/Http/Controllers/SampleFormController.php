<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Models\contact;

use Illuminate\Pagination\Paginator;

class SampleFormController extends Controller
{

	private $formItems = ["family-name","first-name","gender","email","zip-code","adress","building","opinion"];


	private $validator = [
		// "family-name"."first-name" => "required|string|min:0",
		"first-name" => "required|string|max:100",
		"family-name"=> "required|string|max:100",
		"opinion" => "required|string|max:120",
		'email' => 'required', 'string', 'email:strict,dns,spoof', 'max:255', 'unique:users',
		'zip-code' => 'regex:/\A\d{3}[-]\d{4}\z/',
	];

	function show(){
		return view("form");
	}

	function post(Request $request){
		
		$input = $request->only($this->formItems);
		
		$validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return redirect()->route('form.show')
				->withInput()
				->withErrors($validator);
		}

		//セッションに書き込む
		$request->session()->put("form_input", $input);
        // dd($input);
        return redirect()->route('form.confirm');
	}

    function confirm(Request $request){
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");
        // dd($input);
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->route('form.show');
		}
        return view("form_confirm",["input" => $input]);

	}	
    
    function send(Request $request){
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");

        //戻るボタンが押された時
		if($request->has("back")){
			return redirect()->route('form.show')
				->withInput($input);
		}
		

		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect()->route('form.show');
		}


		// dd($full);
		//ここでメールを送信するなどを行う
		// ↓苗字名前をフルネームに結合
		contact::insert(['fullname'=>$input["family-name"].''.$input["first-name"],'gender'=>$input["gender"],'email'=>$input["email"],'postcode'=>$input["zip-code"],'address'=>$input["adress"],'building_name'=>$input["building"],'opinion'=>$input["opinion"]]);

		//セッションを空にする
		$request->session()->forget("form_input");


		return redirect()->route('form.complete');
	}

	function complete(){	
		return view("form_complete");
	}

	function search(Request $request){	


		$searchname = $request->input('full-name');
		$searchgender = $request->input('gender');
		$searchdate1 = $request->input('updated_at1');
		$searchdate2 = $request->input('updated_at2');
		$searchemail = $request->input('email');


		$posts= contact::select('contacts.*')
						->orderby('ID','ASC')
						->get();
		// dd($posts);
		$posts_num = count($posts);

		$posts= contact::paginate(5);
		$posts->firstItem();
		$posts->lastItem();

		return view('search',compact('posts','posts_num','searchname','searchdate1','searchdate2','searchemail'));
	}

	function index(Request $request)
	{

		$searchname = $request->input('full-name');
		$searchgender = $request->input('gender');
		$searchdate1 = $request->input('updated_at1');
		$searchdate2 = $request->input('updated_at2');
		$searchemail = $request->input('email');


		$query = contact::query();

		if(!empty($searchname)){
			$query->where('fullname',"{$searchname}");
		}

		if(!empty($searchgender)){
			$query->where('gender',"{$searchgender}");
		}

		// if(!empty($searchdate)){
		// 	$query->whereBetween('updated_at',["$searchdate1","$searchdate2"]);
		// }

		if(!empty($searchdate1)){
			$query->where('updated_at','>=',"{$searchdate1}");
		}


	// なぜか”以下”ではなく”未満”になってしまう

		if(!empty($searchdate2)){
			$query->where('updated_at','<=',"{$searchdate2}");
		}




		if(!empty($searchemail)){
			$query->where('email',"{$searchemail}");
		}




		$posts = $query->get();

		$posts_num = count($posts);
		// dd($posts);
		// $posts= contact::paginate(5);
		// 		dd($posts);

		// $posts->firstItem();
		// $posts->lastItem();

		return view('result',compact('posts','posts_num','searchname','searchdate1','searchdate2','searchemail'));

	}

		public function destroy($id)
			{

				$posts= contact::select('contacts.*')
									->orderby('ID','ASC')
									->get();
				// dd(posts);
				$contact_id=contact::find($id);
				// contact::find($id);
					return view('delete',compact('contact_id'));
			}

}