<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MyLaptop | Home</title>
</head>
<body>
    @include('sidenav')
    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="images/laptop.png" alt="MyLaptop">
        </div>
        <div class="content">
            <h3 data-aos="fade-up">Welcome to</h3>
            <span data-aos="fade-up"><b>MyLaptop</b></span>
        </div>
    </section>
    <!-- home section ends -->
    
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