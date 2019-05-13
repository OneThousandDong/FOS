# Báo cáo bài tập cá nhân


#### Họ và tên: Nguyễn Hữu Minh Quang
#### Mã số sinh viên: 17020978
#### Nhóm: 9

## User story chịu trách nhiệm 
### 1. User story 1: Là một học sinh, tôi muốn có các môn thi đại học trên trang web miễn phí để tôi thuận lợi học tập có hiệu quả và tiết kiệm tri phí
  * ### Quy tắc INVEST
     - Independent: đây là một chức năng hiển thị khóa học không phụ thuộc vào chức năng khác 
     - Negotiable: có thể được chỉnh sửa, bổ sung bất kì khi nào
     - Valuable: mang lại những kiến thức mới nhất, đầy đủ và chính xác cho người học
     - Estimable: ước lượng thời gian thực hiển khoảng 4-5 tuần
     - Small: user story đủ nhỏ và đơn giản 
     - Testable: user story có thể kiểm tra và đánh giá được
  * ### Công việc cần làm 
    * Nắm bắt được yêu cầu ([requirement process](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)) của user story (30 phút)
    * Làm rõ yêu cầu ([requirement elicitation](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)) của user story (30 phút) 
    * Lựa chọn mẫu thiết kế [MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)  (30 phút)
    * [Thiết kế giao diện các màn hình chính](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/resources/views/layouts/home.blade.php) (3 ngày) 
      * Học các kiến thức cơ bản về [HTML](https://www.w3schools.com/html/default.asp) (2 ngày)
      * Học các kiến thức cơ bản về [CSS](https://www.w3schools.com/css/default.asp)  (2 ngày)
      * Học các kiến thức cơ bản về [JavaScript](https://www.w3schools.com/js/default.asp) (2 ngày)
      * Học các kiến thức cơ bản về [jQuery](https://www.w3schools.com/jquery/default.asp) (1 ngày)
      * Học các kiến thức cơ bản về Framework [Bootstrap 3](https://www.w3schools.com/bootstrap/default.asp) (2 ngày)
    * [Xây dựng cơ sở dữ liệu để quản lý dữ liệu](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/database/migrations/2019_03_19_082347_create_1500441827_courses_table.php) (3 ngày)
      * Học kiển thức cơ bản về [MySQL](http://www.mysqltutorial.org/)  (2 ngày)
    * Xây dựng Back-end cho trang web
      * [Thiết kế màn hình admin để quản lý môn khóa học](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/resources/views/layouts/app.blade.php) (2 ngày)
      * Học kiến thức cơ bản về [PHP 5](https://www.w3schools.com/php/default.asp) (2 ngày)
      * Học kiến thức cơ bản về Framework [Laravel](https://www.youtube.com/watch?v=XJwhQumKCxU&list=PLzrVYRai0riQ-K705397wDnlhhWu-gAUh) (2 ngày)
      * Thiết lập môi trường và liên kết với cơ sở dữ liệu (sử dụng phpMyAdmin để xử lý cơ sở dữ liệu) (20 phút)
      * [Xây dựng chức năng thêm, xóa sửa môn khóa học](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/app/Http/Controllers/Admin/CoursesController.php) (2 ngày)
      * [Quản lý các chức năng tạo môn khóa học](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/resources/views/admin/courses/create.blade.php) (2 ngày)
      * [Quản lý các chức năng xóa môn khóa học](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/resources/views/admin/courses/edit.blade.php) (1 ngày)
      * [Quản lý các chức năng sửa môn khóa học](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/resources/views/admin/courses/index.blade.php) (1 ngày)
      * [Quản lý hiển thị hình ảnh của môn khóa học](https://github.com/quangnguyen99/INT2208-8-2019/blob/master/nhom-9/FoS%20-%20B%C3%A0i%20T%E1%BA%ADp%20L%E1%BB%9Bn/resources/views/admin/courses/create.blade.php) (1 ngày)
    * Kiểm thử sản phẩm
      * [Kiểm thử hộp đen](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd) (1 ngày)
      * Xây dựng các ca [kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1). Yêu cầu độ bao phủ của bộ kiểm thử phải trên 70%. Nếu dưới 70% thì sửa lại test case để đạt yêu cầu về độ bao phủ (1 ngày)
      * Cho các thành viên trong nhóm kiểm tra
    * Sửa các lỗi và cập nhật  
      * Tối ưu hóa mã code (1 ngày)
      * [Loại bỏ các mã xấu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit?fbclid=IwAR0h1nK4Z9Kwlen4pAHPK_Gcp1ieENDhV9ERr_FIwqmf2_wDqrLb_GrIMeg#heading=h.x5jzfha6cshw) (5 tiếng)
      * [Thêm các comment cho code, chỉnh sửa cho mã dễ đọc hơn](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit?fbclid=IwAR0h1nK4Z9Kwlen4pAHPK_Gcp1ieENDhV9ERr_FIwqmf2_wDqrLb_GrIMeg#heading=h.bxti8dsihgwm) (1 tiếng)
      
## Hướng dẫn sử dụng
   * [Video hướng dẫn sử dụng](https://youtu.be/YQDAzpK79fw)
## Tổng kết
  * Nắm được những kiến thức cơ bản về quy trình tạo sản phẩm 
  * Hoàn thành các công việc được giao
  * Một số công việc vẫn còn chậm
  
