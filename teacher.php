<!doctype html>
<html lang="en">

<head>
    <title>Teacher</title>
    <!-- css -->
    <?php include("layouts/css.php") ?>



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/pricing/pricing.css" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php include("layouts/header.php") ?>

    <!-- content -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Teacher</h1>
        <p class="lead d-none">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
        <div class="text-center">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อสกุล</th>
                        <th>รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>อาจารย์สุนี ปัญจะเทวคุปก์ </td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>อาจารย์วิวัฒน์ ชินนาทศิริกุล์</td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>3 </td>
                        <td>อาจารย์ดาวรถา วีระพันธ์</td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>อาจารย์ณัฎฐิรา ศุขไพบูลย์์</td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>5 </td>
                        <td>อาจารย์ประณมกร อัมพรพรรดิ์</td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>6 </td>
                        <td>อ่าจารย์วิศรุต ขวัญคุ้ม</td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>7 </td>
                        <td>อาจารย์ณัฐรดี อนุพงค์ </td>
                        <td><a href="#">คลิก</a></td>
                    </tr>
                    <tr>
                        <td>8 </td>
                        <td>อาจารย์ชวลิต โควีระวงศ์</td>
                        <td><a href="#">คลิก</a></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- footer -->
        <?php include("layouts/footer.php") ?>
    </div>
    <!-- script -->
    <?php include("layouts/script.php") ?>
</body>

</html>