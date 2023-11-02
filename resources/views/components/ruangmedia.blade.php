<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Infinite Bootstrap Carousel</title>
</head>
<body>
    <div class="container">
        <div id="infiniteCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image1.jpg" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="image2.jpg" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="image3.jpg" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="image4.jpg" alt="Image 4">
                </div>
                <div class="carousel-item">
                    <img src="image5.jpg" alt="Image 5">
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#infiniteCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#infiniteCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        // Initialize the carousel
        $('#infiniteCarousel').carousel();

        // Enable continuous scrolling
        $('#infiniteCarousel').on('slide.bs.carousel', function () {
            const $e = $(this);
            const $items = $e.find('.carousel-item');
            const $active = $e.find('.carousel-item.active');
            const $next = $active.next();
            if (!$next.length) {
                $items.first().before($items.last());
            }
        });
    </script>
</body>
</html>
