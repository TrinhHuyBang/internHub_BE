<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_postings')->insert([
            ["business_id" => 1,"title" => "Thực Tập Sinh Tư Vấn Đầu Tư Chứng Khoán","description" => "Tìm kiếm KH tiềm năng, được hỗ trợ data và kịch bản telesale trên nền tảng đào tạo chuyên nghiệp.\nTư vấn, gửi thông tin tham khảo chi tiết cho khách hàng dưới sự hỗ trợ của trưởng nhóm, trưởng phòng.
                Có các buổi đào tạo kiến thức vào cuối tuần hàng tuần.","salary" => 5000000,"industry" => "Kinh doanh","field" => "Chứng khoán","internship_duration" => 2,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 25,"is_closed" => 0],
            ["business_id" => 1,"title" => "Thực Tập Sinh Quản lý nhân sự","description" => "Kiểm soát công, OT, nghỉ vắng của nhân viên\nThực hiện các công việc liên quan đến tính lương.
                Thực hiện các báo cáo lương theo yêu cầu của các phòng ban.","salary" => 7000000,"industry" => "Nhân sự","field" => "Chứng khoán","internship_duration" => 9,"internship_method" => "online","internship_type" => "parttime","recruitment_number" => 17,"is_closed" => 0],
            ["business_id" => 1,"title" => "Thực tập Sinh Bảo mật CNTT","description" => "Tham gia các hoạt động quản lý và điều hành Bảo mật CNTT hàng ngày.\n
                Tham gia thử nghiệm thâm nhập và dò quét lỗ hổng 
                Báo cáo cho quản lý các sự cố do xâm nhập mạng và / hoặc các nỗ lực tấn công","salary" => 4000000,"industry" => "IT/Phần mềm","field" => "Chứng khoán","internship_duration" => 2,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 17,"is_closed" => 0],
            ["business_id" => 2,"title" => "Thực tập Sinh Tư Vấn Giải Pháp CN ","description" => "Ứng dụng các nền tảng xã hội để Nghiên cứu thị trường tìm kiếm khách hàng cũng như quảng bá sản phẩm\n
                Thực hiện cold call/gửi email giới thiệu công ty và sản phẩm/dịch vụ đến các khách hàng tiềm năng
                Nhận biết, nắm bắt nhu cầu của khách hàng để từ đó giới thiệu các dịch vụ phù hợp
                Giải quyết các vấn đề, vướng mắc của khách hàng để luôn đảm bảo được sự tin cậy, hài long của khách hàng.
                Thực hiện các hoạt động chăm sóc khách hàng, quản lý cơ sở dữ liệu khách hàng trước và sau bán hàng","salary" => 3000000,"industry" => "Tư vấn","field" => "Y tế","internship_duration" => 6,"internship_method" => "hybrid","internship_type" => "parttime","recruitment_number" => 18,"is_closed" => 1],
            ["business_id" => 2,"title" => "Thực tập kế toán","description" => "Tiếp nhận thông tin, lập chứng từ hồ sơ kế toán\nTheo dõi hạch toán, định khoản lên sổ sách
                Cân đối doanh thu chi phí, lên báo cáo tài chính
                Kê khai thuế, quyết toán thuế cuối quý, cuối năm","salary" => 8000000,"industry" => "Kế toán","field" => "Y tế","internship_duration" => 1,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 23,"is_closed" => 1],
            ["business_id" => 2,"title" => "Thực tập Kinh doanh","description" => "Tìm kiếm, tiếp cận các KHDN tiềm năng\nTư vấn và hỗ trợ khách hàng sử dụng sản phẩm
                 Hoàn tất hồ sơ khách hàng
                 Duy trì quan hệ, chăm sóc và theo dõi khách hàng.","salary" => 5000000,"industry" => "Kinh doanh","field" => "Y tế","internship_duration" => 1,"internship_method" => "online","internship_type" => "parttime","recruitment_number" => 19,"is_closed" => 0],
            ["business_id" => 3,"title" => "Thực tập sinh .NET","description" => " Tiếp nhận, phân tích yêu cầu từ cán bộ tư vấn nghiệp vụ, hỗ trợ giải pháp cho các yêu cầu chức năng\n Thiết kế, lập trình, làm tài liệu và sửa lỗi chương trình
                 Nghiên cứu các công nghệ và sản phẩm mới và đề xuất ứng dụng vào thực tiễn.
                 Đào tạo, hỗ trợ các thành viên mới trong team
                 Tham gia các dự án phát triển phần mềm với các khách hàng lớn của Công ty","salary" => 4000000,"industry" => "IT/Phần mềm","field" => "CNTT","internship_duration" => 8,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 17,"is_closed" => 0],
            ["business_id" => 3,"title" => "Thực tập Backend Developer (NodeJS /NestJS)","description" => "Tham gia xây dựng các platforms có khả năng scaling tốt, performance cao, mang lại trải nghiệm tốt cho khách hàng.\nGiải quyết các bài toán về Data Realtime, A/B Testing, các nghiệp vụ phức tạp.
                Thiết kế Domain Driven Design, triển khai Clean Code, Unit Test, Deployment và đảm bảo an toàn hệ thống","salary" => 500000,"industry" => "IT/Phần mềm","field" => "CNTT","internship_duration" => 4,"internship_method" => "hybrid","internship_type" => "parttime","recruitment_number" => 17,"is_closed" => 0],
            ["business_id" => 3,"title" => "Thực tập Frontend Developer (Angular/ ReactJS )","description" => "Hỗ trợ tiếp nhận, phân tích yêu cầu từ các stakeholders cùng Business Analysist Team.\nNghiên cứu các công nghệ mới, các best practices và đề xuất ý tưởng cải tiển sản phẩm.","salary" => 500000,"industry" => "IT/Phần mềm","field" => "CNTT","internship_duration" => 6,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 19,"is_closed" => 1],
            ["business_id" => 4,"title" => "Thực tập lập kế hoạc kinh doanh","description" => "Lên kế hoạch doanh số và lợi nhuận tháng/ tuần/ ngày\nQuản lý chi phí khuyến mãi theo chỉ tiêu yêu cầu
                Thực hiện các công việc khác theo yêu cầu của cấp trên","salary" => 200000,"industry" => "Kinh doanh","field" => "Thực phẩm","internship_duration" => 6,"internship_method" => "online","internship_type" => "parttime","recruitment_number" => 23,"is_closed" => 1],
            ["business_id" => 4,"title" => "Thực tập Sale","description" => "Tìm kiếm, nghiên cứu thị trường.\nTư vấn, mở điểm
                Hướng dẫn, hỗ trợ công cụ bán hàng cho đối tác như banner/poster/hình ảnh sản phẩm","salary" => 300000,"industry" => "Tư vấn","field" => "Thực phẩm","internship_duration" => 1,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 16,"is_closed" => 0],
            ["business_id" => 4,"title" => "Thực tập Tiếp Thị Mô Hình","description" => "Tư vấn, giới thiệu mô hình Sendo Farm 'ĐI CHỢ ONLINE' đến nhóm đối tượng tiềm năng \nTham gia tổ chức các chương trình khuyến mãi và duy trì hỗ trợ khách hàng trong khu vực được phân công để thúc đẩy tăng doanh số","salary" => 400000,"industry" => "Tư vấn","field" => "Thực phẩm","internship_duration" => 5,"internship_method" => "hybrid","internship_type" => "parttime","recruitment_number" => 18,"is_closed" => 0],
            ["business_id" => 5,"title" => "Thực tập Kế Toán Tổng Hợp Phụ Trách","description" => "Kiểm soát đối chiếu và chịu trách nhiệm với số liệu chi tiết và tổng hợp về Thuế - Nội Bộ.\n
                Cân đối, hạch toán lương, BHXH, chi phí phát sinh một cách hợp lý
                Theo dõi quản lý khấu hao tài sản, phân bổ chi phí","salary" => 500000,"industry" => "Kế toán","field" => "Dược phẩm","internship_duration" => 1,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 22,"is_closed" => 0],
            ["business_id" => 5,"title" => "Thực tập Digital\n Marketing","description" => "Lập kế hoạch, triển khai và theo dõi quảng cáo sản phẩm, dịch vụ của Công ty trên các kênh Online: Google, Facebook, Zalo\nNắm rõ kỹ thuật của từng kênh digital để tối ưu hóa nội dung, hình ảnh và chất lượng quảng cáo.
                 Phát triển các kênh quảng cáo mới trên nền tảng digital
                Phối hợp với các phòng ban liên quan để đảm bảo tiến độ công việc và kết quả đề ra. ","salary" => 600000,"industry" => "Marketing","field" => "Dược phẩm","internship_duration" => 6,"internship_method" => "online","internship_type" => "parttime","recruitment_number" => 15,"is_closed" => 1],
            ["business_id" => 5,"title" => "Thực tập Kế Toán \nPhụ Trách Kho Dược","description" => "Quản lý Xuất - Nhập - Tồn kho hàng hóa gồm : Thuốc - TBYT - TPCN ...\nKiểm tra hàng hóa ( số lô, hạn dùng) trước khi nhập kho, sắp sếp hàng hóa  gọn gàng theo từng nhóm.
                Nhận đơn hàng, lập chứng từ và xuất hàng theo đơn ( số lô,hạn dùng gần đến hạn xuất trước).
                Kiểm tra thường xuyên các lô hàng gần hết hạn sử dụng, báo cáo tổng hợp xuất nhập tồn kho.","salary" => 500000,"industry" => "Kế toán","field" => "Dược phẩm","internship_duration" => 10,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 19,"is_closed" => 1],
            ["business_id" => 6,"title" => "Thực tập Kinh doanh","description" => "Tìm kiếm khách hàng có nhu cầu nhập hàng tận xưởng bên Trung Quốc.\n
                Lập kế hoạch và thực hiện kế hoạch phát triển khách hàng mới, duy trì khách hàng cũ.
                Tư vấn các giải pháp liên quan đến dịch vụ order hộ, vận chuyển hàng hoá trên sàn TMĐT 1688, taobao, alibaba.
                Xây dựng sự hiểu biết và mối quan hệ tốt với các khách hàng mục tiêu chính.","salary" => 500000,"industry" => "Kinh doanh","field" => "Logistics","internship_duration" => 4,"internship_method" => "hybrid","internship_type" => "parttime","recruitment_number" => 24,"is_closed" => 0],
            ["business_id" => 6,"title" => "Thực tập kế toán","description" => "Thu thập và xử lý các chứng từ số liệu, chứng từ kế toán thông qua các nghiệp vụ kinh tế\nHạch toán thu/ chi, các khoản khấu hao, ghi chép thuế GTGT/ TNDN,...
                Theo dõi và quản lý công nợ","salary" => 400000,"industry" => "kế toán","field" => "Logistics","internship_duration" => 5,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 19,"is_closed" => 0],
            ["business_id" => 6,"title" => "Thực tập Kinh Doanh ","description" => "Tìm kiếm khách hàng có nhu cầu nhập hàng.\n
                 Gọi điện hoặc nhắn tin zalo tiếp cận các chủ cửa hàng  trên shopee, lazada, tiki.
                 Liên hệ shop Trung, đàm phán, báo giá và thương lượng cùng khách hàng.
                 Tư vấn các giải pháp liên quan đến dịch vụ order hộ, vận chuyển hàng hoá trên sàn TMĐT 1688, taobao, alibaba.","salary" => 500000,"industry" => "Kinh doanh","field" => "Logistics","internship_duration" => 9,"internship_method" => "online","internship_type" => "fulltime","recruitment_number" => 19,"is_closed" => 0],
            ["business_id" => 7,"title" => "Thực tập Tư Vấn Tuyển Sinh","description" => "Tham gia hoạt động tuyển sinh cho các lớp học tại Hệ thống\n
                Giới thiệu và tư vấn về các khóa học TOEIC, Giao tiếp, IELTS, Ms.Hoa Junior, tiếng Anh online,... theo nhu cầu khách hàng
                Chủ động liên hệ với khách hàng tiềm năng theo danh sách được cung cấp sẵn hoặc tự khai thác thông qua điện thoại, email","salary" => 500000,"industry" => "Tư vấn","field" => "Giáo dục","internship_duration" => 1,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 16,"is_closed" => 1],
            ["business_id" => 7,"title" => "Thực tập PHP","description" => " Phát triển các ứng dụng web trên nền PHP\n
                 Phân tích và đưa ra các giải pháp kỹ thuật cho các dự án của Tổng công ty được giao
                 Triển khai các dự án  phần mềm nội bộ
                 Thực hiện các công việc từ Trưởng phòng, Giám đốc Công nghệ.","salary" => 500000,"industry" => "IT/Phần mềm","field" => "Giáo dục","internship_duration" => 6,"internship_method" => "hybrid","internship_type" => "parttime","recruitment_number" => 20,"is_closed" => 1],
            ["business_id" => 7,"title" => "Thực tập Chăm Sóc Khách Hàng Online","description" => "Trực page, trả lời toàn bộ tin nhắn của Page, Web, Youtube,...\nĐảm bảo không để lỡ tin nhắn của khách hàng
                Hàng ngày đi comment vào các bài post trên Facebook, Web, Youtube,...
                Tạo ra những nội dung các câu trả lời sáng tạo, phù hợp với các câu hỏi của học viên","salary" => 300000,"industry" => "Tư vấn","field" => "Giáo dục","internship_duration" => 8,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 24,"is_closed" => 0],
            ["business_id" => 8,"title" => "Thực tập Kinh doanh","description" => "Gặp gỡ, tiếp xúc khách hàng tìm hiểu thông tin, báo cáo, đề xuất cấp quản lý các phương án kinh doanh phù hợp.\nTham gia lập hồ sơ dự thầu, hồ sơ năng lực công ty.
                Thực hiện nhiệm vụ được phân công trong quá trình tổ chức các chương trình hội thảo, quảng cáo, quảng bá thương hiệu.","salary" => 400000,"industry" => "Kinh doanh","field" => "Sinh học","internship_duration" => 8,"internship_method" => "online","internship_type" => "parttime","recruitment_number" => 18,"is_closed" => 0],
            ["business_id" => 8,"title" => "Thực tập Marketing","description" => " Nắm bắt thông tin thị trường về dòng sản phẩm mình phụ trách thông qua điều tra thị trường và làm việc với hãng cung cấp\n
                Tổ chức hội thảo, hội nghị nhằm nâng cao kiến thức sản phẩm cho khách hàng.
                Thiết lập và duy trì mối quan hệ tốt với các chuyên gia đầu ngành (KOL), các khách hàng quan trọng liên quan đến các sản phẩm công ty phân phối.","salary" => 400000,"industry" => "Marketing","field" => "Sinh học","internship_duration" => 5,"internship_method" => "offline","internship_type" => "fulltime","recruitment_number" => 20,"is_closed" => 0],
            ["business_id" => 8,"title" => "Thực tập kế toán","description" => "Tiếp nhận thông tin, lập chứng từ hồ sơ kế toán\nTheo dõi hạch toán, định khoản lên sổ sách
                Cân đối doanh thu chi phí, lên báo cáo tài chính
                Kê khai thuế, quyết toán thuế cuối quý, cuối năm
                Hỗ trợ trưởng nhóm làm việc với cơ quan thuế, bảo hiểm.","salary" => 400000,"industry" => "kế toán","field" => "Sinh học","internship_duration" => 4,"internship_method" => "hybrid","internship_type" => "parttime","recruitment_number" => 19,"is_closed" => 1]
        ]);
    }
}
