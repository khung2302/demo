<!-- Main Container -->
<div class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
            <div class="shop-inner">
              <div class="page-title">
                <h2>Sản phẩm: <?=$data['type']?></h2>
              </div>

              <div class="product-grid-area">
                <ul class="products-grid">
                  <?php foreach($data['products'] as $product):?>
                  <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                    <div class="product-item" style="height:350px">
                      <div class="item-inner">
                        <div class="product-thumbnail">
                          <?php if($product->promotion_price!=0):?>
                          <div class="icon-sale-label sale-left">Sale</div>
                          <?php endif?>
                          <?php if($product->new==1):?>
                          <div class="icon-new-label new-right">New</div>
                          <?php endif?>
                          <div class="pr-img-area">
                            <a title="<?=$product->name?>" 
                              href="<?=$product->url?>-<?=$product->id?>.html">
                              <figure>
                                <img class="first-img" src="public/images/products-images/<?=$product->image?>" alt="html template">
                                <img class="hover-img" src="public/images/products-images/<?=$product->image?>" alt="html template">
                              </figure>
                            </a>
                            <button type="button" class="add-to-cart-mt" data-id="<?=$product->id?>">
                              <i class="fa fa-shopping-cart"></i>
                              <span> Add to Cart</span>
                            </button>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title">
                              <a title="<?=$product->name?>" 
                              href="<?=$product->url?>-<?=$product->id?>.html"><?=$product->name?></a>
                            </div>
                            <div class="item-content">
                              <div class="item-price">
                                <div class="price-box">
                                  <?php if($product->promotion_price!=0):?>
                                  <p class="special-price">
                                    <span class="price"> <?=number_format($product->promotion_price)?> </span>
                                  </p>
                                  <p class="old-price">
                                    <span class="price"> <?=number_format($product->price)?> </span>
                                  </p>
                                  <?php else:?>
                                  <p class="special-price">
                                    <span class="price"> <?=number_format($product->price)?> </span>
                                  </p>
                                  <?php endif?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php endforeach?>

                </ul>
              </div>
              <div class="pagination-area ">
               <?=$data['pagination']?>
              </div>
            </div>
          </div>
          <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div class="block shop-by-side">
              <div class="sidebar-bar-title">
                <h3>Shop By</h3>
              </div>
              <div class="block-content">
                <div class="layered-Category">
                  <h2 class="saider-bar-title">Categories</h2>
                  <div class="layered-content">
                    <ul class="check-box-list">
                      <?php foreach($categories as $menu):?>
                      <li>
                        <input type="checkbox" id="type<?=$menu->id?>" name="jtvc" class="input-type" data-id="<?=$menu->id?>">
                        <label for="type<?=$menu->id?>">
                          <span class="button"></span> 
                          <?=$menu->name?>
                          <span class="count">(<?=$menu->qty?>)</span>
                        </label>
                      </li>
                      <?php endforeach?>
                    </ul>
                  </div>
                </div>
                <div class="layered-Category">
                  <h2 class="saider-bar-title">Price</h2>
                  <div class="layered-content">
                    <ul class="check-box-list">
                      <li>
                        <input type="checkbox" id="p1" name="cc" />
                        <label for="p1">
                          <span class="button"></span> $20 - $50
                          <span class="count">(0)</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="p2" name="cc" />
                        <label for="p2">
                          <span class="button"></span> $50 - $100
                          <span class="count">(0)</span>
                        </label>
                      </li>
                      <li>
                        <input type="checkbox" id="p3" name="cc" />
                        <label for="p3">
                          <span class="button"></span> $100 - $250
                          <span class="count">(0)</span>
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
            <div class="single-img-add sidebar-add-slider ">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="public/images/add-slide1.jpg" alt="slide1">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="#" class="info">shopping Now</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="public/images/add-slide2.jpg" alt="slide2">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Smartwatch Collection</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="#" class="info">All Collection</a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="public/images/add-slide3.jpg" alt="slide3">
                    <div class="carousel-caption">
                      <h3>
                        <a href="single_product.html" title=" Sample Product">Summer Sale</a>
                      </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="block special-product">
              <div class="sidebar-bar-title">
                <h3>Special Products</h3>
              </div>
              <div class="block-content">
                <ul>
                  <li class="item">
                    <div class="products-block-left">
                      <a href="single_product.html" title="Sample Product" class="product-image">
                        <img src="public/images/products/img01.jpg" alt="Sample Product ">
                      </a>
                    </div>
                    <div class="products-block-right">
                      <p class="product-name">
                        <a href="single_product.html">Lorem ipsum dolor sit amet Consectetur</a>
                      </p>
                      <span class="price">$19.99</span>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="products-block-left">
                      <a href="single_product.html" title="Sample Product" class="product-image">
                        <img src="public/images/products/img02.jpg" alt="Sample Product ">
                      </a>
                    </div>
                    <div class="products-block-right">
                      <p class="product-name">
                        <a href="single_product.html">Consectetur utes anet adipisicing elit</a>
                      </p>
                      <span class="price">$89.99</span>
                      <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="link-all" href="shop_grid.html">All Products</a>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <!-- Main Container End -->

<script>
  $(document).ready(function(){
    var oldContent = $('.products-grid').html();
    $('.input-type').click(function(){
      var check = $(this).prop('checked')
      var idType = $(this).attr('data-id')
      if(check){
        $.ajax({
          url:'type-product.php',
          type:'POST',
          data:{
            idType
          },
          success:function(response){         
            //response: server response
            $('.pagination-area').hide()
            if($('.products-grid').hasClass('append')){
              $('.products-grid').append(response)
            }
            else{
              $('.products-grid').html(response)
              $('.products-grid').addClass('append')
            }
            
          },
          error:function(error){
            console.log(error.getResponseHeader())
          }
        })
      } 
      else{
        $('.product-'+idType).remove()
        if($('.products-grid').find('li').length==0){
          $('.products-grid').html(oldContent)
          $('.pagination-area').show()
          $('.products-grid').removeClass('append')
        }
      }
    })
  })
</script>