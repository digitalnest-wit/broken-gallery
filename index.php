<?php

/**
 * Renders an HTML img tag, using the image in $path and
 * classes listed in $classes.
 * @param string $path
 * @param array[string] $classes
 * @return void
 */
function render_img($path, ...$classes)
{
  $default_classes = " rounded img-fluid";
  $classes = implode(' ', $classes) . $default_classes;
  echo "<img class=\"$classes\" src=\"$path\" alt=\"a famous painting.\" />";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Art Museum</title>
  <!-- Link the Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <!-- Link our CSS style sheet -->
  <link rel="stylesheet" href="styles/stylesheet" />
</head>

<body class="bg-dark mb-5">
  <!-- Heading for the portraits -->
  <h1 class="m-3 p-2 text-white border-bottom border-2 border-warning">
    Portraits
  </h1>
  <p class="m-3 p-2 text-white">
    Below are some of the most famous art portraits. The Mona Lisa is very
    iconic and well-recongized. The Scream as well. But I feel like the
    Farmers painting and Frida Khalo are less recongized.
  </p>
  <!-- Portraits flexbox container -->
  <div
    class="m-3 portraits flex-wrap justify-content-center gap-3 rounded">
    <?php
    $path = "assets/images/";
    render_img("$path/farmers.jpg");
    render_img("$path/mona-lisa.jpg");
    render_img("$path/scream.jpg");
    render_img("$path/frida-kahlo.jpg");
    ?>
  </div>

  <!-- Heading for the landscapes  -->
  <h1 class="m-3 p-2 text-white border-bottom border-2 border-warning">
    Landscapes
  </h1>
  <p class="m-3 p-2 text-white">
    Most famous and expensive lanscape paintings. I really love the Starry
    Night because it looks like a cozy cold night. I also like the Guernica
    painting because it reminds me of my Spanish class when I read about it in
    high school. Last but not least is the Great Wave. This painting is very
    iconic and well-recongized by many people.
  </p>
  <!-- Landscapes flexbox container -->
  <div class="landscapes flex-wrap justify-content-center gap-3">
    <?php
    $path = "assets/images/";
    render_img("$path/starry-night.jpg");
    render_img("$path/guernica.png", "img-fluid");
    render_img("$path/the-great-wave.jpg");
    ?>
  </div>

  <!-- Script to the Bootstrap JavaScript -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>