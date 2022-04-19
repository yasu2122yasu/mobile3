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
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2, 
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & auひかり',
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 3,  
            'recommendation' => '',  
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & ソフトバンク光',
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',  
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & NURO光',
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 4,  
            'recommendation' => '',  
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & 楽天ひかり',
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2, 
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 2,  
            'internet_fees' => 2,  
            'recommendation' => '',
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & OCN光',
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',  
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & GMO光アクセス',
            'mobile_GB' => 1,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 1,  
            'recommendation' => '',
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(1GB未満) & WiMAX',
            'mobile_GB' => 1,   
            'mobile_limited_speed' => 2, 
            'mobile_fees' => 1,   
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & ドコモ光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & au光',
            'mobile_GB' => 2,   
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => 'ドコモの最新格安プラン・ahamoとNuro光の組み合わせ',  
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & ソフトバンク光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2, 
            'mobile_fees' => 1,   
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & NURO光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & 楽天ひかり',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 2,  
            'internet_fees' => 2,  
            'recommendation' => '',
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & OCN光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & GMO光アクセス',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 1,  
            'recommendation' => '',
        ]);

        DB::table('plans')->insert([
            'plan_name' => '楽天モバイル(3GB未満) & WiMAX',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,   
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & ドコモ光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 2,  
            'recommendation' => '',
        ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & au光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
            
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & ソフトバンク光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
            
            
        
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & NURO光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 4,  
            'recommendation' => '',  
            ]);
            
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & 楽天ひかり',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 2,  
            'internet_fees' => 2,  
            'recommendation' => '',  
            ]);
            
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & OCN光',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
            
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & GMO光アクセス',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 1,  
            'recommendation' => '',  
            ]);
            
        DB::table('plans')->insert([
            'plan_name' => 'LINEMO(スマホプラン) & WiMAX',
            'mobile_GB' => 2,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 1,
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
            
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& ドコモ光',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
            
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& au光',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
        
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& ソフトバンク光',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& NURO光',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 4,  
            'internet_fees' => 4,  
            'recommendation' => '',  
            ]);
            
            
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& 楽天ひかり',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 2,  
            'internet_fees' => 2,  
            'recommendation' => '',  
            ]);
            
            
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& OCN光',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
            
        
        
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& GMO光アクセス',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4, 
            'internet_type' => 1, 
            'internet_GB' => 1, 
            'internet_speed' => 3,  
            'internet_fees' => 1,  
            'recommendation' => '',  
            ]);
            
            
            
        DB::table('plans')->insert([
            'plan_name' => 'ドコモ5Gギガホ プレミア& WiMAX',
            'mobile_GB' => 4,    
            'mobile_limited_speed' => 2,  
            'mobile_fees' => 4,  
            'internet_type' => 2, 
            'internet_GB' => 1, 
            'internet_speed' => 1,  
            'internet_fees' => 3,  
            'recommendation' => '',  
            ]);
        
        
        

    }
}
