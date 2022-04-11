<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>最適プランの検索</title>
</head>
  <body>
    <div class="text-center mt-4">
      <h2>最高の通信キャリア・Wi-fi環境を手に入れよう！</h2>
    </div>    
      <div class="row mt-3 mb-5">
        <div class="col-md-6 offset-md-3">
          <form method="get" action="/result" class="search-form">
          
            @csrf
                
                
                <div class="form-group">
                    <div class><label for="mobile_GB">必要なGB数（スマホ）</label></div>
                        <select class="form-control" name="mobile_GB">
                            @foreach((array)$mobile_GBs as $key => $mobile_GB)
                              <option value="{{ $key }}" @if( isset($old_mobile_GB) && (int)$old_mobile_GB === $key ) selected @endif>
                                  {{ $mobile_GB }}
                              </option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <div class><label for="mobile_limited_speed">通信制限時の速度</label></div>
                        <select class="form-control" name="mobile_limited_speed">
                            @foreach((array)$mobile_limited_speeds as $key => $mobile_limited_speed)
                              <option value="{{ $key }}" @if( isset($old_mobile_limited_speed) && (int)$old_mobile_limited_speed === $key ) selected @endif>
                                  {{ $mobile_limited_speed }}
                              </option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <div class><label for="mobile_fees">月額の携帯料金</label></div>
                        <select class="form-control" name="mobile_fees">
                            @foreach((array)$mobile_feess as $key => $mobile_fees)
                              <option value="{{ $key }}" @if( isset($old_mobile_fees) && (int)$old_mobile_fees === $key ) selected @endif>
                                  {{ $mobile_fees }}
                              </option>
                            @endforeach
                        </select>
                </div>
                

                <div class="form-group">
                    <div class><label for="internet_type">光回線かWi-fiかの選択</label></div>
                        <select class="form-control" name="internet_type">
                            @foreach((array)$internet_types as $key => $internet_type)
                              <option value="{{ $key }}" @if( isset($old_internet_type) && (int)$old_internet_type === $key ) selected @endif>
                                  {{ $internet_type }}
                              </option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <div class><label for="internet_GB">インターネットの容量</label></div>
                        <select class="form-control" name="internet_GB">
                            @foreach((array)$internet_GBs as $key => $internet_GB)
                              <option value="{{ $key }}" @if( isset($internet_GB) && (int)$internet_GB === $key ) selected @endif>
                                  {{ $internet_GB }}
                              </option>
                            @endforeach
                        </select>
                </div>
                
  
                <div class="form-group">
                    <div class><label for="internet_speed">インターネットの回線速度</label></div>
                        <select class="form-control" name="internet_speed">
                            @foreach((array)$internet_speeds as $key => $internet_speed)
                              <option value="{{ $key }}" @if( isset($old_internet_speed) && (int)$old_internet_speed === $key ) selected @endif>
                                  {{ $internet_speed }}
                              </option>
                            @endforeach
                        </select>
                </div>

                
                <div class="form-group">
                    <div class><label for="internet_fees">インターネット回線の料金</label></div>
                        <select class="form-control" name="internet_fees">
                            @foreach((array)$internet_feess as $key => $internet_fees)
                              <option value="{{ $key }}" @if( isset($old_internet_fees) && (int)$old_internet_fees === $key ) selected @endif>
                                  {{ $internet_fees }}
                              </option>
                            @endforeach
                        </select>
                </div>
                
                
             <div class="col-md-6 offset-md-3 text-center">
                 <input type="submit" class="btn btn-secondary mt-2" value="検索">
             </div>
    

          </form>  
        </div>    
      </div>    
  </body>
</html>