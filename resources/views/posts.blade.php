<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MyLaptop | Posts</title>
</head>
<body>
    @include('sidenav')
    <!-- posts section starts  -->
    <section class="about" id="posts">
        <h1 class="heading" data-aos="fade-up"> <span>Laptop</span> </h1>
        <div class="biography">
            <p>List Laptops</p>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Laptop</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($laptops as $laptop)
                        <tr>
                            <td>{{ $laptop->id }}</td>
                            <td>{{ $laptop->nama_laptop }}</td>
                            <td>{{ $laptop->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!-- posts section ends -->

    <div class="credit"> &copy; Copyright <?php echo date('Y'); ?> <span style="font-weight: 700;"> Naufal Taufiq</span> </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- aos js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>

        AOS.init({
            duration:800,
            delay:300
        });

    </script>
   
</body>
</html>