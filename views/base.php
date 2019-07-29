<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>PRODUCTION WIRELESS CONTROL</title>
  </head>
  <body>
    <div class="wrapper">
        <nav id="sidebar">
            <div id="sidebar-header">
                Machine List:
            </div>
            <div style="background: #444; height: 1px;"></div>
            <ul class="list-unstyled components">
                <?php
                    foreach($mesin as $mesinItem){
                        if($mesinItem["idmesin"] == $selectedMesin){
                            echo '<li><a href="'.$mesinItem["idmesin"].'" class="active">Line '.$mesinItem["idmesin"].'</a></li>';
                        }
                        else {
                            echo '<li><a href="'.$mesinItem["idmesin"].'" class="">Line '.$mesinItem["idmesin"].'</a></li>';
                        }
                    }
                ?>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light pwc-card-bg" id="navbar">
                <a class="navbar-brand" href="#">Production Wireless Control</a>
                <div class="mr-auto"></div>
                <span class="navbar-text">
                    <?php echo date("Y-m-d");?>
                </span>
            </nav>
            <?php
                echo $body_content;
            ?>
        </div>
    </div>
    <script src="/vendor/components/jquery/jquery.min.js"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>