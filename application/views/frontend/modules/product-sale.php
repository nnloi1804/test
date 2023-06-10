<div class="col-xs-16 col-sm-16 col-md-16 col-lg-16 products-sale-off">
    <div class="widget">
        <p>Sản phẩm khuyến mãi</p>
        <div class="panel-left-body">
            <?php
                $list = $this->Mproduct->product_sale('15');
                $html_menu='<div id="post-list-footer" class="sidebar_menu">';
                foreach ($list as $menu) {
                    if($menu['sale'] > 0){
                        $html_menu.="<div class = 'spost clearfix'>";
                            $html_menu.="<div class='entry-image'>";
                                $html_menu.="<a href=".$menu['alias']." title=' ".$menu['name']."'>";
                                    $html_menu.="<img src='public/images/products/".$menu['avatar']."'>";
                                $html_menu.="</a>";
                            $html_menu.='</div>';
                            $html_menu.='<div class="entry-c" style="width: 177px;">';
                                $html_menu.='<div class="entry-title">';
                                    $html_menu.="<a class='ws-nw overflow ellipsis' href=".$menu['alias']." title=' ".$menu['name']."'>";
                                        $html_menu.=$menu['name'];
                                    $html_menu.="</a>";
                                $html_menu.='</div>';
                                $html_menu.='<ul class="entry-meta">';
                                    $html_menu.='<li class="color">';
                                        $html_menu.="<ins>".number_format($menu['price_sale']).'₫'."</ins>";
                                        $html_menu.="<del>".number_format($menu['price']).'₫'."</del>";
                                    $html_menu.='</li>';
                                $html_menu.='</ul>';
                            $html_menu.='</div>';
                        $html_menu.="</div>";
                    }
                }
                $html_menu.="</div>";
            echo $html_menu;
            ?>
        </div>
    </div>
</div>