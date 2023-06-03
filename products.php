<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php';?>
    <title>Trade Era | Products</title>
</head>

<body>
    <?php include 'include/header.php';?>
    <main class="main-content homePage">
        <section class="tradeExperiance py-85">
            <div class="container">
                <div class="trade">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/equity-icon.png" alt="">
                                </div>
                                <h3>Equity</h3>
                                <p>On all delivery based trades
                                    Flat 20/- for intraday and F&O trades</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/derivatives-icon.png" alt="">
                                </div>
                                <h3>Derivatives</h3>
                                <p>Avail High Limits and personalised
                                    Services under Premium Plans</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/commodity-icon.png" alt="">
                                </div>
                                <h3>Commodity</h3>
                                <p>Avail funds for trading using our
                                    Margin Trading Facility for stocks</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trade mt-3">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/currency-icon.png" alt="">
                                </div>
                                <h3>Currency</h3>
                                <p>Avail funds for trading using our
                                    Margin Trading Facility for stocks</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/mutual-fund-icon.png" alt="">
                                </div>
                                <h3>Mutual Fund</h3>
                                <p>Avail funds for trading using our
                                    Margin Trading Facility for stocks</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/pre-ipo-icon.png" alt="">
                                </div>
                                <h3>Pre-IPO</h3>
                                <p>Avail funds for trading using our
                                    Margin Trading Facility for stocks</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trade mt-3">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 list position-relative">
                            <div class="trade-box">
                                <div class="trade-img">
                                    <img src="<?php echo IMAGES_URL?>/slbm-icon.png" alt="">
                                </div>
                                <h3>SLBM</h3>
                                <p>Avail funds for trading using our
                                    Margin Trading Facility for stocks</p>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#readMore"
                                    class="btn btn-sm btn-primary ripple-effect text-uppercase submit">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'include/quote-form.php';?>
        <?php include 'include/call-toaction.php';?>
        <?php include 'include/footer.php';?>
    </main>

    <?php include 'include/script.php';?>
</body>
<!-- Modal -->
<div class="modal fade" id="readMore" tabindex="-1" aria-labelledby="readMoreLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="readMoreLabel">Equity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus officiis magnam quia quod sint sapiente quis, dolor pariatur reprehenderit magni autem consequatur tempora dolorum excepturi cupiditate neque ab in.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus officiis magnam quia quod sint sapiente quis, dolor pariatur reprehenderit magni autem consequatur tempora dolorum excepturi cupiditate neque ab in.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus officiis magnam quia quod sint sapiente quis, dolor pariatur reprehenderit magni autem consequatur tempora dolorum excepturi cupiditate neque ab in.</p>
      </div>
    </div>
  </div>
</div>
</html>