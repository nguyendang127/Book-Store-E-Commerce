create database bookstore charset=utf8;
use bookstore;


CREATE TABLE account (
  account_name varchar(50) primary key,
  account_password varchar(50) NOT NULL,
  account_phone varchar(10) NOT NULL,
  account_type varchar(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



create table category(
    cate_id int primary key AUTO_INCREMENT,
    cate_name varchar(50)
);

create table product (
    prod_id int(5) primary key AUTO_INCREMENT,
    prod_category varchar(50) references category(cate_name) ,
    prod_name varchar(255) NOT NULL,
    prod_content varchar(255) NOT NULL,
    prod_price double(5,2) NOT NULL,
    prod_image varchar(255) not null,
    prod_quantity int(5) NOT NULL
);

 create table order_prod (
    order_id int primary key AUTO_INCREMENT,
    order_prod_name varchar(255) ,
    order_address varchar(255),
    order_city varchar(255),
    order_email varchar(255),
    order_phone varchar(255),
    order_time datetime
 );


 
 create table order_detail(
    order_detail_id int primary key AUTO_INCREMENT,
    order_id int references order_prod(order_id),
    prod_name varchar(255) ,
    prod_price double(5,2),
    prod_quantity int(5)
 );


-- category --
insert into category (cate_name) values ('novel');
insert into category (cate_name) values ('manga');
insert into category (cate_name) values ('self-help');

-- novel book --
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','The Runner Maze','Thomas thức dậy trong thang máy. Những gương mặt xa lạ vây quanh cậu, những người mà kí ức của họ đã bị xóa trắng. 
Tên cậu là thứ duy nhất trí não cậu còn lưu giữ',8.99,'./image/product/giai-ma-me-cung.jpg',14);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Harry Potter','Một tiểu thuyết về thế giới phép thuật lôi cuốn',8.99,'./image/product/harry-potter.jpg',16);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','IT','IT ẩn nấp, mang hình dáng của mọi cơn ác mộng, nỗi khiếp sợ sâu sắc nhất của mỗi người. Đôi khi nó xuất hiện như một tên hề ác tên Pennywise và đôi khi IT vươn lên, bắt giữ, xé xác, giết chết. . .',10.99,'./image/product/it.jpg',34);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Gasby','Câu chuyện được kể qua hồi ức của Nick Carraway về sự việc xảy ra vào mùa xuân năm 1933',8.99,'./image/product/gatsby-vi-dai.jpg',18);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Anna Karenina','Anna Karenina được xem như là một đỉnh cao của tiểu thuyết hiện thực. Nhân vật chính trong truyện Anna Karenina được Tolstoy sáng tác dựa vào Maria Aleksandrovna Hartung, người con gái lớn của đại thi hào Aleksandr Sergeyevich Pushkin',6.99,'./image/product/anna-karenina.jpg',15);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Jane Eyre','Jane Eyre là một cuốn tiểu thuyết giáo dục (Bildungsroman) kể về những trải nghiệm của nhân vật nữ chính anh hùng cùng tên trong tác phẩm, bao gồm cả quá trình trưởng thành cũng như tình yêu của cô dành cho quý ngài Rochester, chủ nhân của lâu đài Thornfield Hall',8.99,'./image/product/jane-eyre.jpg',30);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','War & Peace','Tác phẩm mở đầu với khung cảnh một buổi tiếp tân, nơi có đủ mặt các nhân vật sang trọng của giới quý tộc Nga tại kinh kỳ Sankt-Peterburg. Bên cạnh những câu chuyện thường nhật của giới quý tộc, người ta bắt đầu nhắc đến Hoàng đế Napoléon I và cuộc chiến tranh chống Pháp sắp tới mà Nga sắp tham gia',7.99,'./image/product/chien-tranh-va-hoa-binh.jpg',19);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','The Good Soldiers','The Good Soldiers (3009) là mộtcuốn sách phi hư cấu về cuộc tăng quân năm 3007 ở Iraq do David Finkel viết, ghi lại quá trình triển khai Tiểu đoàn 3, Trung đoàn Bộ binh 16 thuộc Đội Chiến đấu Lữ đoàn Bộ binh 4, Sư đoàn Bộ binh 1 , biệt danh Biệt động , dưới sự chỉ huy của Trung tá Ralph Kauzlarich. Câu chuyện kể về Kauzlarich khi anh trải nghiệm thực tế chiến tranh và lần đầu tiên mất đi những người lính',8.99,'./image/product/the-good-soldiers.jpg',33);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','To Kill A Mockingbird','Giết con chim nhại lấy bối cảnh Alabama, một tiểu bang miền Nam rất nặng thành kiến phân biệt chủng tộc và được viết trong thời gian mà phong trào đấu tranh của những người da màu, nhất là của Martin Luther King, Jr., đang lan rộng tới tầm cỡ quốc gia. Rõ nhất là vụ Tẩy chay xe buýt ở Mongomery, Alabana; kéo dài từ tháng 13.1955 đến tháng 13.1956, với kết quả là một phán quyết của Tối cao pháp viện tuyên bố các luật phân cách chỗ ngồi trên xe buýt theo màu da được áp dụng ở Montgomery và cả Alabana là vi hiến.
Nên không ngạc nhiên gì khi chủ đề lớn của tác phẩm là vấn đề phân biệt chủng tộc.',5.99,'./image/product/giet-con-chim-nhai.jpg',31);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Darkness At Noon','Darkness at Noon là một câu chuyện ngụ ngôn lấy bối cảnh ở Liên Xô (không nêu tên) trong cuộc thanh trừng năm 1928 khi Stalin củng cố chế độ độc tài của mình bằng cách loại bỏ các đối thủ tiềm tàng trong Đảng Cộng sản : quân đội và cả những người chuyên nghiệp. Không có điều gì trong số này được xác định rõ ràng trong cuốn sách.
Phần lớn tiểu thuyết xảy ra trong một nhà tù không tên và trong hồi ức của nhân vật chính, Rubashov.',13.99,'./image/product/darkness-at-noon.jpg',21);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Sons and Lovers','Sons and Lovers là một tiểu thuyết năm 1912 của nhà văn người Anh DH Lawrence , ban đầu được xuất bản bởi Gerald Duckworth và Company Ltd., London, và Mitchell Kennerley Publishers, New York. Mặc dù ban đầu cuốn tiểu thuyết nhận được sự đón nhận nồng nhiệt từ giới phê bình, cùng với những cáo buộc tục tĩu,
ngày nay nó được nhiều nhà phê bình coi là một kiệt tác và thường được coi là thành tựu xuất sắc nhất của Lawrence.',1.99,'./image/product/song-and-lovers.jpg',34);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('1','Under The Volcano','Cuốn sách bao gồm mười hai chương, chương đầu tiên giới thiệu câu chuyện thích hợp và được lấy bối cảnh đúng một năm sau sự kiện. Mười một chương tiếp theo xảy ra trong một ngày duy nhất và theo thứ tự thời gian của Lãnh sự, bắt đầu vào sáng sớm của Ngày của người chết với sự trở lại của vợ anh,
Yvonne, người đã bỏ anh năm trước, sau cái chết dữ dội của anh vào cuối năm',9.99,'./image/product/under-volcano.jpg',36);


-- manga book -- 
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Tokyo Ghoul','Truyện lấy bối cảnh thời hiện đại, một thế giới hoàn toàn khác khi mà loài người không phải loài đứng đầu chuỗi thức ăn, có một loài sinh vật khát máu,
mang hình dạng giống con người nhưng phát triển hơn với những khả năng đặc biệt để trở thành kẻ đi săn',5.99,'./image/product/tokyo-ghoul.jpg',11);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Slime','Câu chuyện bắt đầu với anh chàng Mikami Satoru, một nhân viên 27 tuổi sống cuộc sống chán chường và không vui vẻ gì.
Trong một lần gặp cướp, anh đã bị mất mạng',5.99,'./image/product/slime.jpg',31);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Attack On Titan','Câu truyện lấy bối cảnh khi toàn nhân loại phải sống sau các bức tường được dựng nên để đề phòng những Titan ăn thịt người',7.99,'./image/product/attack-on-titan.jpg',16);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Your Name','Bộ 2 trở thành một hiện tượng tại Nhật Bản khi có doanh thu cao nhất Nhật Bản năm 3016,
là truyện có doanh thu cao thứ 4 trong lịch sử Nhật Bản',6.99,'./image/product/your-name.jpg',35);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','5 cm/s','Cốt truyện xoay quanh mối quan hệ của một cậu bé tên Tōno Takaki với một cô gái là bạn từ khi còn đi học vào khoảng những năm 1990 cho đến thời hiện đại,
nhưng giữa họ luôn có một khoảng cách và thường chỉ liên lạc với nhau từ xa qua thư hay điện thoại',7.99,'./image/product/5cm.jpg',33);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Haikyuu','Hinata Shoyo, một học sinh sơ trung đã ấp ủ ước mơ trở thành vận động viên bóng chuyền sau khi tình cờ xem trên TV Câu lạc bộ Bóng chuyền Cao trung Karasuno giành lấy chiến thắng ở vòng loại tiến vào Giải Bóng chuyền Thiếu niên Quốc gia',10.99,'./image/product/haikyuu.jpg',39);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Weather With You','Nội dung kể về Morishima Hodaka, một nam sinh chán với cuộc sống ngoài đảo đành bỏ nhà lên Tokyo và Amano Hina, một cô gái có khả năng thay đổi thời tiết',8.99,'./image/product/dua-con-cua-thoi-tiet.jpg',34);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','The Garden Of  Words','Akizuki Takao là một học sinh 15 tuổi, sống với mẹ và anh trai (sắp chuyển ra riêng với bạn gái), và tin rằng chỉ có đóng giày mới mang cậu thoát khỏi nơi này',12.99,'./image/product/khu-vuon-ngon-tu.jpg',32);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Conan','Truyện xoay quanh thám tử trung học Kudo Shinichi bị biến thành một đứa bé khi điều tra một tổ chức bí ẩn và phá nhiều vụ án khi đóng giả làm bố của người bạn thân thời thơ ấu và các nhân vật khác',10.99,'./image/product/conan.jpg',11);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Trigger World','Boder là Cơ quan Quốc phòng đã chiếm đoạt được công nghệ của Neighbor là những "Triggers", cho phép người dùng truyền dẫn Trion, năng lượng bên trong bản thân, và sử dụng nó làm vũ khí hoặc cho những mục đích khác. Bằng cách kích hoạt một Trigger, cơ thể của người dùng được thay thế bằng một cơ thể chiến đấu mạnh hơn và có khả năng chống chịu cao hơn được làm bằng trion.
Các thành viên của Border được chia thành ba cấp, A, B và C, chỉ một vài thành viên hạng A sở hữu những Triggers đặc biệt, với sức mạnh có thể sánh ngang những Triggers của Neighbors.',7.99,'./image/product/trigger-world.jpg',16);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Soul Eater','Maka cùng Soul Eater giao chiến với phù thủy Medusa, kẻ đã ép buộc Crona, con gái của bà và cũng đồng thời là meister của thanh quỷ kiếm Ragnarok thu thập linh hồn của người bình thường để có thể biến đổi thành kishin, một loại ác thần. Medusa và đoàn quân của bà tấn công vào Shibusen để hồi sinh Asura, kishin đầu tiên suýt khiến cả thế giới chìm trong điên loạn trước khi bị Shinigami phong ấn dưới lòng Shibusen',8.99,'./image/product/soul-eater.jpg',21);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('2','Naruto','Naruto trải qua thời thơ ấu không mấy êm đềm khi người dân làng Lá không ngừng xa lánh và ngược đãi cậu, đối xử với Naruto như thể cậu chính là con yêu hồ, là mối đe dọa tiềm tàng. Một quy định đã được đặt ra bởi Hokage Đệ Tam nhằm ngăn cấm mọi người không được bàn luận hay đề cập đến vụ tấn công của con yêu hồ với bất kì ai, thậm chí là với con cái của mình.
Dù vậy, điều này cũng không thể ngăn cản họ khỏi việc coi cậu như một kẻ ngoài lề và thế là cậu lớn lên mồ côi, không có gia đình, bạn bè, hay bất kì sự thừa nhận nào. Câu truyện là hành trình trở thành Hokage của cậu',5.99,'./image/product/naruto.jpg',31);



-- self-help book --
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','How To Win Friends And Influence People','Đối nhân xử thế không phải xuất phát từ bản năng của con người mà mỗi chúng ta đều phải quan sát, nhìn nhận những tình huống để rút ra được những kinh nghiệm cho riêng mình',11.99,'./image/product/sach-dac-nhan-tam.jpg',20);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','Billion Dollar Whale','Cuốn sách kể về một sinh viên tốt nghiệp trường Đại học danh giá Wharton đã một tay thực hiện vụ lừa đảo lên đến 5 tỷ đô la',10.99,'./image/product/ca-voi-ty-do.jpg',11);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','You Can Read Anymore','Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',8.99,'./image/product/doc-vi-bat-ki-ai.jpg',33);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','The Alchemist','Nhà giả kim là một trong những tác phẩm hay nhất của nhà văn Paulo Coelho, được mệnh danh là cuốn sách bán chạy chỉ sau kinh thánh',9.99,'./image/product/nha-gia-kim.jpg',14);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','Qua-Pixar','Từ một công ty thua lỗ hằng năm, Pixar trở mình thành hãng phim truyện hoạt hình số 1 Thế giới',4.99,'./image/product/qua-pixar-la-vo-cuc.jpg',15);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','Rich Habits','Thói quen có thể cản trở bạn trở nên giàu có hoặc có thể “biến” bạn từ một người bình thường thành người có tài trị giá 7 con số',7.99,'./image/product/rich-habits.jpg',19);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','The Universe In A Nutshell','Đây là quyển sách cần thiết cho tất cả chúng ta, những người muốn tìm hiểu vũ trụ chúng ta đang sống',13.99,'./image/product/vu-tru-trong-vo-hat-de.jpg',32);
insert into product (prod_category, prod_name, prod_content, prod_price, prod_image, prod_quantity) values ('3','Asian Business Wisdom','Cuốn sách đem đến một cái nhìn bao quát từ tầm nhìn, chiến lược hoạt động đến những mô hình kinh doanh đặc biệt của các doanh nghiệp thành công bậc nhất Châu Á',7.99,'./image/product/tri-tue-kinh-doanh-chau-a.jpg',16);





