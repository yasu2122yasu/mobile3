<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
         DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & ドコモ光',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 4,  //5段階くらいに分ける予定
            'internet_fees' => 3,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & auひかり',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 4,  //5段階くらいに分ける予定
            'internet_fees' => 3,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & ソフトバンク光',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 3,  //5段階くらいに分ける予定
            'internet_fees' => 3,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & NURO光',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 4,  //5段階くらいに分ける予定
            'internet_fees' => 4,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & 楽天ひかり',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 2,  //5段階くらいに分ける予定
            'internet_fees' => 2,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & OCN光',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 3,  //5段階くらいに分ける予定
            'internet_fees' => 3,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & GMO光アクセス',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 1, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 3,  //5段階くらいに分ける予定
            'internet_fees' => 1,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & WiMAX',
            'mobile_GB' => 1,    //1は3GB以下
            'mobile_limited_speed' => 2,  //通信制限時の速度、128Kbps,1Mbpsのいずれかで選択
            'mobile_fees' => 1,   //携帯料金。~1000円 ~2000円 ~3000円 ~4000円 ~5000円 5000円~  6択
            'internet_type' => 2, //光回線かwifiかを選択 光回線は1、wifiは2
            'internet_GB' => 1, //無制限か無制限でないのみ記載、無制限は1、制限ありは2
            'internet_speed' => 1,  //5段階くらいに分ける予定
            'internet_fees' => 3,  //インターネット接続料金、~4000円 ~4500円  ~5000円  ~5500円  ~6000円 6000円以上  7択
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  //コメント
        ]);

    }
}
