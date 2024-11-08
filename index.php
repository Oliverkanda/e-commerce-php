<?php
include('server/products.php');
include('layouts/header.php');

$convert_dollar = 25304;

function setPrice($price){
	$result = "Price ".number_format($price,0,',','.')."₫";
	return $result;
}
?>
    
    <!-- Featured Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm</h2>
                        <span>Xem ngay các móc khóa mới nhất</span>
                    </div>
                </div>
            </div>
            <div class="row product__filter">
                <?php while ($row = $featured_products->fetch_assoc()) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix all-products">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="assets/img/product/<?php echo $row['product_image']; ?>">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><?php echo $row['product_name']; ?></h6>
                                <a href="<?php echo "single_product.php?product_id=" . $row['product_id']; ?>" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <h5><?php echo setPrice(($row['product_price'] * $convert_dollar)); ?></h5>
                                <div class="product__color__select">
                                    <label for="pc-7">
                                        <input type="radio" id="pc-7">
                                    </label>
                                    <label class="active black" for="pc-8">
                                        <input type="radio" id="pc-8">
                                    </label>
                                    <label class="grey" for="pc-9">
                                        <input type="radio" id="pc-9">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Featured Product Section End -->
    
    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Giá tốt <br> nhất <br>vũ trụ</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="assets/img/gift-code.jpg" alt="">
                        <div class="hot__deal__sticker">
                            <span>Giảm</span>
                            <h5>12.500₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Giờ vàng</span>
                        <h2>Chưng trình khuyến mãi</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="shop.php" class="primary-btn">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Footer Section Begin -->
<?php include ('layouts/footer.php'); ?>