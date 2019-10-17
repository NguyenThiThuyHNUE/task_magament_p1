<?php

use Illuminate\Database\Seeder;

class citiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities= new \App\City();
        $cities->name ='Thái Bình';
        $cities-> info='Thái Bình sản sinh ra những đặc sản bình dị, đơn sơ như chính con người nơi đây.

Không mang vẻ hùng vĩ, rợn ngợp như nhiều địa danh khác trên dải đất hình chữ S, quê lúa Thái Bình hiền hòa như chính cái tên của mình. Khắp tỉnh đều mượt mà đồng ruộng bằng phẳng, nhiều sông ngòi hồ ao và khí hậu mát mẻ. Điểm cuốn hút của Thái Bình là những di tích lịch sử và văn hóa, các lễ hội, trò chơi, điệu múa dân gian hấp dẫn. Đặc biệt, Thái Bình có riêng nhiều món ăn ngon, lành như cốm làng Thanh Hương, canh cá Quỳnh Côi, ổi Bo, bánh cáy...';
        $cities->save();

        $cities= new \App\City();
        $cities->name ='Hà Giang';
        $cities-> info='Hà Giang không chỉ được biết đến là một tỉnh miền núi với nhiều phong cảnh hùng vĩ, phong tục tập quán, những lễ hội phong phú, những dãy núi đá cao thật cao mà ở đây chúng ta còn thấy đó là một mảnh đất với nhiều sản vật của tự nhiên rất hấp dẫn và một trong những điểm hấp dẫn du khách đó chính là văn hóa ẩm thực là những món ăn được làm từ nhiều nguồn nguyên liệu có sẵn trong tự nhiên, trở thành món ăn lạ miệng, thú vị và ấn tượng đặc biệt chỉ có ở cao nguyên vùng cao Hà Giang. Cùng điểm qua những món ăn ngon ở Hà Giang mà bạn khó lòng có thể bỏ qua khi đã tới với mảnh đất này.';
        $cities->save();
    }
}
