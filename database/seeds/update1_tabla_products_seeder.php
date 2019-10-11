<?php

use Illuminate\Database\Seeder;

class update1_tabla_products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
            ->where('id', 3)
            ->update(['info' => "Sau tết Nguyên đán thì Rằm tháng Bảy là ngày tết lớn thứ hai của nhiều dân tộc. Đối với người Tày ba Phương (Phương Thiện, Phương Độ, Phương Tiến - Hà Giang) từ xa xưa đã có truyền thống làm bánh chuối vào dịp này hàng năm để dâng cúng tổ tiên."]);

        DB::table('products')
            ->where('id', 4)
            ->update(['info' => "  Bánh phở ở đâu cũng có nhưng có lẽ chỉ duy nhất người Hà Nội mới làm món đó cầu kỳ như vậy. Cầu kỳ trong cách pha cơm nguội vào bột để tạo độ dai, tráng từng chiếc bánh rồi lại thái bằng tay, tất cả những công đoạn tỉ mỉ này đã tạo nên nét rất riêng, góp phần gìn giữ và lưu truyền tinh hoa món phở cho người Tràng An."]);

        DB::table('products')
            ->where('id', 6)
            ->update(['info' => "Theo lời kể của những người làm bánh đậu xanh tại Hải Dương, khi xưa, vua Bảo Đại kinh lý qua trấn Hải Dương được nhân dân dâng lên một loại bánh làm từ đỗ xanh có vị ngọt thanh đạm. Sau khi thưởng thức, vua thấy ngon, ban sắc lệnh khen ngợi. Trên sắc có hình rồng vàng, tượng trưng cho hoàng gia. Từ đó, bánh đậu xanh rồng vàng ra đời. "]);
        DB::table('products')
            ->where('id', 7)
            ->update(['info' => "Bất kể thời điểm nào trong năm, thị trường mật ong luôn sôi động. Trong đó, loại mật ong rừng U Minh Cà Mau là hút hàng nhất.

Mật ong rừng U Minh chiếm được lòng tin của khách hàng không chỉ bởi tiếng tăm lâu nay mà còn bởi chất lượng của sản phẩm. Hai yếu tố này hình thành đặc sản của vùng đất mũi. Nếu giới khoa học phân tích được giá trị dinh dưỡng của mật ong tốt cho sức khỏe như thế nào thì những người dùng thực tế lại là chứng minh sống cho quan điểm này. Họ áp dụng công dụng của mật ong trong nhiều lĩnh vực từ sức khỏe cho đến làm đẹp và đôi khi cả chế biến thực phẩm. Và tự họ đã cảm nhận về sản phẩm và rút kinh nghiệm sử dụng cho chính bản thân mình. "]);
        DB::table('products')
            ->where('id', 8)
            ->update(['info' => "Nhắc đến đặc sản Đà Lạt, người địa phương sẽ giới thiệu ngay cho bạn đặc sản mứt Đà Lạt nức tiếng. Các loại mứt có cách làm gần giống nhau nhưng khác ở vị tự nhiên của các loại cây trái nổi tiếng xứ cao nguyên này"]);
        DB::table('products')
            ->where('id', 9)
            ->update(['info' => "Đối với người dân Nam Định, khi nhắc đến nem nắm giao thủy thì ai cũng biết bởi nó là đặc sản đặc trưng của vùng miền Nam Định. Nhưng với những người ngoại tỉnh Nam Định thì sao? Chắc hẳn đối với họ thì đây là một món ăn lạ mắt họ chưa từng thưởng thức bao giờ!"]);
        DB::table('products')
            ->where('id', 10)
            ->update(['info' => "BTừ xa xưa người dân phường Mỹ Độ, TP Bắc Giang vẫn duy trì được những bí quyết làm món chè kho, còn gọi là chè đỗ đãi nức tiếng thơm ngon. Vào ngày lễ tết, món ăn truyền thống này trở thành lễ vật quan trọng dâng lên tổ tiên và cũng là món quà ý nghĩa biếu tặng những người thân."]);
        DB::table('products')
            ->where('id', 12)
            ->update(['info' => "Người Tày ở Tuyên Quang có món bánh nếp nhân trứng kiến rất lạ, chế biến từ nếp nương và ấu trùng kiến. Tuy cách làm dân dã, độc đáo nhưng bánh nếp nhân trứng kiến rất bổ dưỡng và là đặc sản trứ danh của đất Tuyên Quang anh hùng. "]);
        DB::table('products')
            ->where('id', 13)
            ->update(['info' => "Tỉnh Cao Bằng nước ta cũng có một món vịt quay mà khi ăn ai cũng phải tấm tắc đó là món vịt quay 7 vị. Gọi là món vịt quay 7 vị vì người Cao Bằng dùng đến 7 loại gia vị khác nhau để ướp món thịt vịt này."]);
        DB::table('products')
            ->where('id', 14)
            ->update(['info' => "Gỏi cá bỗng sông Lô – một cái tên có vẻ xa lạ nhưng lại là một món ăn nổi tiếng bậc nhất của vùng đất Tuyên Quang. Gỏi được làm từ loại cá đặc biệt chỉ có ở sông Lô. Hương vị đặc trưng của núi rừng Tây Bắc cùng sự tự nhiên tươi mát sẽ khiến bạn không thể nào cưỡng lại được."]);
    }
}
