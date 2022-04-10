<!DOCTYPE html>
<html lang="jp">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div class="text-center mt-4">
        <h2>検索結果</h2>


        @if(isset($search_mobile_GB) && $search_mobile_GB != 0)
            @foreach($mobile_GBs as $key => $mobile_GB)
                @foreach($plans as $plan)
                    @if($key == $plan->$mobile_GB)
                        <span>スマホの容量：{{$mobile_GB}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif

       @if(isset($search_mobile_limited_speed) && $search_mobile_limited_speed != 0)
            @foreach($mobile_limited_speeds as $key => $mobile_limited_speed)
                @foreach($plans as $plan)
                    @if($key == $plan->$mobile_limited_speed)
                        <span>スマホの回線速度：{{$mobile_limited_speed}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif

         @if(isset($search_mobile_fees) && $search_mobile_fees != 0)
            @foreach($mobile_feess as $key => $mobile_fees)
                @foreach($plans as $plan)
                    @if($key == $plan->$mobile_fees)
                        <span>スマホ料金：{{$mobile_fees}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif


         @if(isset($search_internet_type) && $search_internet_type != 0)
            @foreach($internet_types as $key => $internet_type)
                @foreach($plans as $plan)
                    @if($key == $plan->$internet_type)
                        <span>インターネットの種類：{{$internet_type}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif


         @if(isset($search_internet_GB) && $search_internet_GB != 0)
            @foreach($internet_GBs as $key => $internet_GB)
                @foreach($plans as $plan)
                    @if($key == $plan->$internet_GB)
                        <span>インターネットの容量：{{$internet_GB}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif


        @if(isset($search_internet_speed) && $search_internet_speed != 0)
            @foreach($internet_speeds as $key => $internet_speed)
                @foreach($plans as $plan)
                    @if($key == $plan->$internet_speed)
                        <span>インターネットの回線速度：{{$internet_speed}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif

        @if(isset($search_internet_fees) && $search_internet_fees != 0)
            @foreach($internet_feess as $key => $internet_fees)
                @foreach($plans as $plan)
                    @if($key == $plan->$internet_fees)
                        <span>インターネットの料金：{{$internet_fees}}</span>
                        @php
                            break;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        @endif

   


    <!-- 検索した条件と一致するプランがあれば表示 --> 

    @foreach($plans as $plan)

    <div class="card m-5">
        <div class="m-4 row">
            <div class="col-10">

                <h4>
                    {{ $plan->plan_name }}
                </h4>
    @endforeach

    <div class="pagination justify-content-center">{{ $plans->appends(request()->query())->links() }}</div>

    <!-- 一致する条件がなければ、次の要件を出す -->
    @if($plans->isEmpty())
        <div class="text-center mt-5">
            <p class="mt-4">{{ "お探しですのプランはありませんでした。他の検索条件を試してみてください。" }}</p>
        </div>
    @endif

    <div class="row justify-content-center mb-3">
        <a class="text-decoration-none mt-2" href="/search" name="back" style="color: gray;">検索画面へ戻る</a>
    </div>
</html>