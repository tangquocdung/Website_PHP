<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <form action="index.php?action=cart" method="post">
            <input type="hidden" name="action" value="cart&add_cart" />
            <div class="row">
                <?php
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    //view cần phải có thông tin của id mới hiển thị lên
                    //MOdel làm
                    $hh = new product();
                    $result = $hh->getProductId($id);
                    $hinh = $result["hinh"];
                    $tenhh = $result["tenhh"];
                    $dongia = $result["dongia"];
                    $mota = $result["mota"];
                    $nhom = $result["Nhom"];
                }
                ?>
                <div class="col-md-6">
                    <input type="hidden" name="mahh" value="<?php echo $id; ?>" />
                    <img src="Content/images/<?php echo $hinh ?>" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-black"><?php echo $tenhh; ?></h2>
                    <p><?php echo $mota; ?></p>
                    <p><strong class="text-primary h4">$<?php echo $dongia; ?></strong></p>
                    <select name="mymausac" class="form-control mb-4" style="width:150px;">
                        <?php
                        $result = $hh->getProductNhom($nhom);
                        while ($set = $result->fetch()) :
                        ?>
                            <option value="<?php echo $set["mausac"]; ?>"><?php echo $set["mausac"]; ?></option>
                        <?php
                        endwhile;
                        ?>
                    </select>
                    <div class="mb-1 d-flex">
                        <?php
                        $result = $hh->getProductNhomSize($nhom);
                        while ($set = $result->fetch()) :
                        ?>
                            <input type="radio" name="size" id="size" value="<?php echo $set['size']?>" />
                            <label for="" class="mr-3 ml-1 mt-2"><?php echo $set['size']?></label>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <input type="number" name="soluong" id="" value="1">
                        </div>
                    </div>
                    <p><button type="submit" class="btn btn-primary">Add To Cart</a></p>

                </div>
            </div>
        </form>
    </div>
</div>

<!-- <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Featured Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="Content/images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Tank Top</a></h3>
                                <p class="mb-0">Finding perfect t-shirt</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="Content/images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Corater</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="Content/images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Polo Shirt</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="Content/images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">T-Shirt Mockup</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="Content/images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a href="#">Corater</a></h3>
                                <p class="mb-0">Finding perfect products</p>
                                <p class="text-primary font-weight-bold">$50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
</div>