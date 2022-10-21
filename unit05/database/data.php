<?php

$dataCategory =[
    [
        'id' => 1,        'parent_id' => 0,        'name' => 'Thể Thao'],
    
    [
        'id' => 2,        'parent_id' => 0,        'name' => 'Thời Trang'],

    [
        'id' => 3,        'parent_id' => 0,        'name' => 'Giải Trí'],

    [
        'id' => 4,        'parent_id' => 1,        'name' => 'Bóng đá Anh'],

    [
        'id' => 5,        'parent_id' => 1,        'name' => 'Bóng đá Pháp'],

    [
        'id' => 6,        'parent_id' => 2,        'name' => 'Thời Trang Công Sở'],

     [
        'id' => 7,        'parent_id' => 2,        'name' => 'Thời Trang Dạo Phố'],

    [
        'id' => 8,        'parent_id' => 3,        'name' => 'Phim ảnh'], 
    [       

        'id' => 9,        'parent_id' => 3,        'name' => 'Ca Nhạc']   ,

    [       
        'id' => 10,        'parent_id' => 9,        'name' => 'Ca Nhạc Nước Ngoài'] ,

    [       
        'id' => 11,        'parent_id' => 9,        'name' => 'Ca Nhạc VN'],

    [       
        'id' => 12,        'parent_id' => 8,        'name' => 'Phim hành Động']  ,
];

// Xây dựng mảng để hiện thị được menu
// Cần lấy ra được tất cả những menu to nhất(parent_id = 0);
    function buildMenuCatagory(){
        global $dataCategory;

        $tmpMenu = [];
        //c1
        foreach($dataCategory as $key => $item){
            if($item['parent_id'] == 0){
                $tmpMenu[] = $item;
                //loại bỏ những thằng đó ra khỏi mảng cha ban đầu
                unset($dataCategory[$key]);//hủy biến
            }
        }
        //c2
        foreach($tmpMenu as $key => $item){
            foreach($dataCategory as $k => $val){
                if($item['id'] == $val['parent_id']){
                $tmpMenu[$key]['subMenu'][] = $val;
                unset($dataCategory[$k]);
                }
            }
        }

        //c3
        foreach($tmpMenu as $key => $item){
           if(!empty($item['subMenu'])){
            foreach($item['subMenu'] as $k => $val){
                foreach($dataCategory as $i => $v){
                    if($val['id'] == $v['parent_id']){
                        $tmpMenu[$key]['subMenu'][$k]['sub'][] = $v;
                        unset($dataCategory[$i]);
                    }
                }       
            }           
        }     
    }
    //  echo "<pre>";
    //  print_r($tmpMenu);
     return $tmpMenu;
    }
       
    



    
   