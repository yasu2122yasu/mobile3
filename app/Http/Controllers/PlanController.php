<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    public function search(Request $request)
    {
        //Requestで送られてきた値を代入
        $search_mobile_GB = $request->input('mobile_GB');
        $search_mobile_limited_speed = $request->input('mobile_limited_speed');
        $search_mobile_fees = $request->input('mobile_fees');
        $search_internet_type = $request->input('internet_type');
        $search_internet_GB = $request->input('internet_GB');
        $search_internet_speed = $request->input('internet_speed');
        $search_internet_fees = $request->input('internet_fees');

        //session()を使用し検索条件を一時的に保存し代入（検索結果画面から検索画面に戻った時の値の保持が目的）
        $old_mobile_GB = $request->session()->get("old_mobile_GB");
        $old_mobile_limited_speed = $request->session()->get("old_mobile_limited_speed");
        $old_mobile_fees = $request->session()->get("old_mobile_fees");
        $old_internet_type = $request->session()->get("old_internet_type");
        $old_internet_GB = $request->session()->get("old_internet_GB");
        $old_internet_speed = $request->session()->get("old_internet_speed");
        $old_internet_fees = $request->input('old_internet_fees');


        //session()で一時的に保存した値をforget()で削除
        $request->session()->forget(
        [
          'old_mobile_GB',
          'old_mobile_limited_speed',
          'old_mobile_fees',
          'old_internet_type',
          'old_internet_GB',
          'old_internet_speed',
          'old_internet_fees'
        ]);

        //configから各項目をそれぞれ代入
        $mobile_GBs = config('mobile_GBs');
        $mobile_limited_speeds = config('mobile_limited_speeds');
        $mobile_feess = config('mobile_feess');
        $internet_types = config('internet_types');
        $internet_GBs = config('internet_GBs');
        $internet_speeds = config('internet_speeds');
        $internet_feess = config('internet_feess');


        //view(search.blade.php)に変数を渡す。14個
        $data = [
            "mobile_GBs" => $mobile_GBs,
            "mobile_limited_speeds" => $mobile_limited_speeds,
            "mobile_feess" => $mobile_feess,
            "internet_types" => $internet_types,
            "internet_GBs" => $internet_GBs,
            "internet_speeds" => $internet_speeds,
            "internet_feess" => $internet_feess,
            "old_mobile_GB" => $old_mobile_GB,
            "old_mobile_limited_speed" => $old_mobile_limited_speed,
            "old_mobile_fees" => $old_mobile_fees,
            "old_internet_type" => $old_internet_type,
            "old_internet_GB" => $old_internet_GB,
            "old_internet_speed" => $old_internet_speed,
            "old_internet_fees" => $old_internet_fees,

        ];

        return view('/search', $data);
    }


//クエリビルダでplanメソッドを利用するために、Plan $planとする。
    public function result(Request $request, Plan $plan)
      {
        //Requestで送られてきた値を代入
        $search_mobile_GB = $request->input('mobile_GB');
        $search_mobile_limited_speed = $request->input('mobile_limited_speed');
        $search_mobile_fees = $request->input('mobile_fees');
        $search_internet_type = $request->input('internet_type');
        $search_internet_GB = $request->input('internet_GB');
        $search_internet_speed = $request->input('internet_speed');
        $search_internet_fees = $request->input('internet_fees');

        //クエリビルダを使用し、planテーブルの中身を$queryに代入
        $query = Plan::query();


        //０（未選択）でない場合、dbのmobile_GB　と　$search_mobile_GB　が一致していれば取得
        if (!is_null($search_mobile_GB) && $search_mobile_GB != 0) {
            $query->where('mobile_GB', $search_mobile_GB)->get();
        }

        if (!is_null($search_mobile_limited_speed) && $search_mobile_limited_speed != 0) {
            $query->where('mobile_limited_speed', $search_mobile_limited_speed)->get();
        }

        if (!is_null($search_mobile_fees) && $search_mobile_GB != 0) {
            $query->where('mobile_fees', $search_mobile_fees)->get();
        }

        if (!is_null($search_internet_GB) && $search_internet_GB != 0) {
            $query->where('internet_GB', $search_internet_GB)->get();
        }

        if (!is_null($search_internet_speed) && $search_internet_speed != 0) {
            $query->where('internet_speed', $search_internet_speed)->get();
        }

        if (!is_null($search_internet_fees) && $search_internet_fees != 0) {
            $query->where('internet_fees', $search_internet_fees)->get();
        }





        //1ページ10件でページネーションを追加　（orderBy()を使用し、plansを昇順で表示）
        $plans = $query->orderBy('id', 'asc')->paginate(10);

        $mobile_GBs = config('mobile_GBs');
        $mobile_limited_speeds = config('mobile_limited_speeds');
        $mobile_feess = config('mobile_feess');
        $internet_types = config('internet_types');
        $internet_GBs = config('internet_GBs');
        $internet_speeds = config('internet_speeds');
        $internet_feess = config('internet_feess');

        $request->session()->put("old_mobile_GB", $search_mobile_GB);
        $request->session()->put("old_mobile_limited_speed", $search_mobile_limited_speed);
        $request->session()->put("old_mobile_fees", $search_mobile_fees);
        $request->session()->put("old_internet_type", $search_internet_type);
        $request->session()->put("old_internet_GB", $search_internet_GB);
        $request->session()->put("old_internet_speed", $search_internet_speed);
        $request->session()->put("old_internet_fees", $search_internet_fees);

        $old_mobile_GB = $request->session()->get("old_mobile_GB");
        $old_mobile_limited_speed = $request->session()->get("old_mobile_limited_speed");
        $old_mobile_fees = $request->session()->get("old_mobile_fees");
        $old_internet_type = $request->session()->get("old_internet_type");
        $old_internet_GB = $request->session()->get("old_internet_GB");
        $old_internet_speed = $request->session()->get('old_internet_speed');
        $old_internet_fees = $request->session()->get('old_internet_fees');

        //こちらはview（search.blade.php）に作る「戻るボタン」の動作のための記述です
        if ($request->get('back')){
            return redirect('/search')->withInput([ 
                $old_mobile_GB, 
                $old_mobile_limited_speed, 
                $old_mobile_fees, 
                $old_internet_type, 
                $old_internet_GB,
                $old_internet_speed,
                $old_internet_fees,
            ]);
        }

        //view(result.blade.php)に変数を渡す
        $data = [
            "search_mobile_GB" => $search_mobile_GB,
            "search_mobile_limited_speed" => $search_mobile_limited_speed,
            "search_mobile_fees" => $search_mobile_GB,
            "search_internet_type" => $search_internet_type,
            "search_internet_GB" => $search_internet_GB,
            "search_internet_speed" => $search_internet_speed,
            "search_internet_fees" => $search_internet_fees,
            "plans" => $plans,
            "mobile_GBs" => $mobile_GBs,
            "mobile_limited_speeds" => $mobile_limited_speeds,
            "mobile_feess" => $mobile_feess,
            "internet_types" => $internet_types,
            "internet_GBs" => $internet_GBs,
            "internet_speeds" => $internet_speeds,
            "internet_feess" => $internet_feess,
            "old_mobile_GB" => $old_mobile_GB,
            "old_mobile_limited_speed" => $old_mobile_limited_speed,
            "old_mobile_fees" => $old_mobile_fees,
            "old_internet_type" => $old_internet_type,
            "old_internet_GB" => $old_internet_GB,
            "old_internet_speed" => $old_internet_speed,
            "old_internet_fees" => $old_internet_fees,
        ];

        return view('/result', $data);
    }
}