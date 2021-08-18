<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link type="text/css" rel="stylesheet" href="/blog/view/css/list.css">
    <title>CodePen - &lt;Table&gt; Responsive</title>


    <style>
    </style>

    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">
<a href="index.php?page=insert"><h3>Add Blogs</h3></a>
<table class="container">
    <?php foreach ($posts as $post): ?>
        <thead>
        <tr>
            <th>
                <h1>Page Heading<?php echo $post->title; ?></h1>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $post->content . "<br>" . "Date" . "<br>" . $post->created; ?> </td>

        </tr>
        </tbody>
    <?php endforeach; ?>
</table>


</body>

</html>
