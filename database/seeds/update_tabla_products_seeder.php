<?php

use Illuminate\Database\Seeder;

class update_tabla_products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
            ->where('id', 1)
            ->update(['info' => "Qua đôi bàn tay khéo léo của người làng Nguyễn, Thái Bình, các nguyên liệu như gạo nếp, lạc, vừng, gấc, mỡ lợn, vỏ quýt… hòa quyện với nhau tạo nên thứ bánh quê dân dã, vừa béo, vừa bùi.
Nhắc tới Thái Bình, ngoài điểm đến chùa Keo cổ kính, đền Trần linh thiêng, du khách còn ấn tượng với nhiều món ăn ngon đậm chất quê dân dã. Ngoài canh cá Quỳnh Côi, nem chạo Vị Thủy, bún bung, nộm sứa hay bánh giò Bến Hiệp… thì bánh cáy cũng được xem là thức quà quê bình dị với không ít người. "]);

//        DB::table('products')
//            ->where('id', 3)
//            ->update(['image' => "image/banhdauxanh.jpg"]);
    }
}
