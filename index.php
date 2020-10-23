<?php 
include "config.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <meta name="og:image" content="<?php echo $icon?>">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo $icon?>">
    <meta name="description" content="<?php echo $description?>">
    <meta name="theme-color" content="<?php echo $color?>">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body><div class="discord">
<a href="<?php echo $discord?>">
<img src="<?php echo $discordimg?>"/></a>
</div> 

<script type="text/javascript" src="https://cdn.sellix.io/static/js/embed.js"></script>

    <script>document.body.className += ' fade-out';</script>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" id="Nav">
        <div class="container"><a class="navbar-brand" id="NavBrand" href="#"><img id="icon" src="<?php echo $logo?>" style="max-width: 168px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="filter: invert(100%) sepia(90%) saturate(1%) hue-rotate(107deg) brightness(107%) contrast(100%);"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                <?php foreach ($navbar as $r2): ?>
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="NavItem" href="<?php echo htmlentities($r2["href"]) ?>"><?php echo htmlentities($r2["item"]) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        </div>
    </nav>
    <div style="margin-top: 8rem;text-align: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="title"><?php echo $STitle?>&nbsp;<span class="highlight"><?php echo $STitle2?></span></h1>
                    <h1 id="desc"><?php echo $SSubtitle?></h1>
                    <?php foreach ($btns as $r2): ?>
                    <a href="<?php echo htmlentities($r2["link"]) ?>">
                    <button class="btn btn-primary" id="btn" type="button"><?php echo htmlentities($r2["Txt"]) ?></button>
                    </a><?php endforeach; ?>
                    </div>

                    
            </div>
        </div>
    </div>
    <div style="text-align: center;margin-top: 16rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sections"><?php echo $FTitle ?>&nbsp;<span class="highlight"><?php echo $FHighlight?></span></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 4rem;margin-bottom: 4rem;">
        <div class="container">
            <div class="row">
            <?php foreach ($Features as $r2): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body"><img class="featureicon" src="<?php echo $r2["Icon"] ?>">
                            <h4 class="card-title" id="featuretitle"><?php echo $r2["Title"] ?></h4>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div style="text-align: center;margin-top: 8rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sections">All Of Our<span class="highlight">&nbsp;Products</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 4rem;">
        <div class="container">
            <div class="row">
	     <?php foreach ($Products as $r2): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" id="head">
                            <h1 id="productitle"><?php echo $r2["Title"] ?></h1><img id="proudctimg" src="<?php echo $r2["Image"] ?>"></div>
                        <div class="card-body productbody">
                            <p class="card-text" id="price"><?php echo $r2["Price"] ?></p><button class="btn btn-primary productbtn" data-sellix-product="<?php echo $r2["ID"] ?>" type="button">Purchase</button></div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <footer></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

    <?php if (!empty($youtubeMusicLink)) {
    embedMusic($youtubeMusicLink);
} ?>

</body>

</html>