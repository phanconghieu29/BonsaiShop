<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/about.css'])
    <title>Document</title>
</head>
<body>
    @extends('layouts.layout')
    @section('content')
        <div class="container py-4">
            <div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
                    </ol>
                </nav>
            </div>
            <h1>Giới thiệu</h1>
            <h2>I. Định hướng phát triển:</h2>
            <p>Xây dựng một công ty đa ngành chuyên về lĩnh vực cảnh quan, vệ sinh công nghiệp và san lấp mặt bằng.<br>Với khác khao và hoài bão&nbsp; lớn. Chúng tôi mong muốn đưa công ty lên một tầm cao mới, mở rộng hệ thống khắp cả nước. Sở dĩ chúng tôi chọn các sản phẩm phát triển công ty bởi những nét tương đồng và liên quan với nhau cả về khách hàng và dịch vụ cung cấp.</p>
            <h3>1. Lĩnh vực cảnh quan:</h3>
            <p>Mở rộng hệ thống vườn ươm, trở thành năng lực cung cấp lớn nhất cả nước.<br>Xây dựng đội ngũ thiết kế cảnh quan chuyên nghiệp<br>Xây dựng đội ngũ thi công,&nbsp;bảo dưỡng cảnh quan&nbsp;chuyên nghiệp</p>
            <h3>2. Lĩnh vực san lấp mặt bằng:</h3>
            <p>Hiện nay việc phá dở các công trình lâu năm ngày càng nhiều để tái cấu trúc xây dựng, hàng loạt chung cư, các công trình xây dựng mới rất cần đến dịch vụ san lấp mặt bằng. Hoặc các nhà máy ở các KCN ồ ạt mọc lên vì nền kinh tế mở của nhà nước đã thu hút khá nhiều vốn đầu tư nước ngoài, chúng tôi đã phá dở và san lấp nhiều khu vực khác nhau trên cả nước, không chỉ riêng khu vực Hồ Chí Minh, chúng tôi còn trải dài dịch vụ san lấp mặt bằng và đổ đất đến các tỉnh thành lân cận như Đồng Nai, Bình Dương, Bình Phước, Long An, Bến Tre, Tiền Giang, Tây Ninh, … hầu như các khu vực Phía Nam và Đông Nam và Tây Nam đều cung ứng dịch vụ san lấp và cung cấp đất. Trong tương lai không xa chúng tôi sẽ mở rộng khu vực miền Trung và Miền Bắc – hiện nay ở 2 khu vực này chúng tôi chủ yếu là liên kết với các đối tác uy tín đã gắn bó lâu dài với chúng tôi&nbsp;&nbsp;</p>
            <h3>3. Lĩnh vực vệ sinh công nghiệp:</h3>
            <p>Chúng tôi cung cấp tất cả các dịch vụ liên quan đến làm sạch như dịch vụ daily, Tổng vệ sinh trước và sau khi xây dựng, xử lý và phục hồi các loại sàn đá, gỗ, gạch tàu…giặt thảm ghế, làm sạch kính, xử lý silicon kính, diệt côn trùng</p>
            <h2>II. &nbsp;Tầm nhìn – Sứ mệnh – Giá trị cốt lõi</h2>
            <h3>1. Tầm nhìn</h3>
            <p>Phát triển công ty đa ngành bao gồm dịch vụ cảnh quan, san lấp mặt bằng và vệ sinh công nghiệp. Mở rộng chi nhánh ra các tỉnh miền Trung và miền Bắc.<br>Trở thành công ty hàng đầu trong lĩnh vực cảnh quan tại Việt Nam đến năm 2020.<br>Phát triển mạnh lĩnh vực san lấp mặt bằng và vệ sinh công nghiệp đến năm 2024.<br><strong>2. Sứ mệnh</strong><br>Đặt khách hàng làm trung tâm. Đáp ứng hiệu quả nhất mọi nhu cầu vì lợi ích khách hàng và chất lượng dịch vụ<br>Đặt nhân sự là yếu tố quyết định và là nền tảng của sự phát triển. Không ngừng đào tạo và xây dựng đội ngũ kế thừa.<br>Chia sẽ các quyền lợi với các thành viên trong công ty, cùng xây dựng và phát triển vì mục tiêu chung của công ty.</p>
        </div>
    @endsection
</body>
</html>