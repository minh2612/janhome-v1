@extends('frontend.layouts.master')
@section('content')
            <body>
                <!--22-4 Giỏ hàng mobile-->
                <div class="cart-mobile dropdown-cart-mobile">
                    <!--Sum-->
                    <div class="_binding_dropdown_cart">
                    </div>
                    <div class="d-flex px-3">
                        <div class="text-uppercase">
                            Tổng tiền:
                        </div>
                        <div class="h6 font-weight-bold ml-auto color-EE7D22 small-total-cart">
                            21.000đ
                        </div>
                    </div>
                    <div class="bottom-dropdown d-flex  ">
                        <div class="small mr-3">
                            Bạn còn <span class="dropdown-quantity-cart"></span> sản phẩm trong giỏ hàng
                        </div>
                        <div class="h6 ml-auto">
                            <a rel="nofollow" href="gio-hang.html" id="link-target-cart-mobile" class="btn-link link-view-more text-uppercase">XEM GIỎ HÀNG</a><br />
                            <a rel="nofollow" href="javascript:void(0)" id="link-clear-cart" class="btn-link link-view-more text-uppercase">Clear Cart Teserd</a><br />
                        </div>
                    </div>
                </div>
                <!--22-4 danh mục mobile popup-->
                <section class="cate-mobile ">
                    <div class="bg-fff p-3 m-auto">
                        <div class="tree-menu-mobile">
                            <ul>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/san-go-cong-nghiep">Sàn gỗ công nghiệp</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-malaysia" data-sp=1>Sàn gỗ Malaysia</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-janmi" data-sp=1>Sàn gỗ Janmi</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janmi-8mm-ac4" data-sp=1>Sàn gỗ Janmi 8mm Ac4</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janmi-12mm-ban-to" data-sp=1>Sàn gỗ Janmi 12mm bản to</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janmi-12mm-ban-nho" data-sp=1>Sàn gỗ janmi 12mm bản nhỏ</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-woodman" data-sp=1>Sàn gỗ Woodman</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-woodman-8mm" data-sp=1>Sàn gỗ woodman 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-woodman-12mm-ban-to" data-sp=1>Sàn gỗ Woodman 12mm bản to</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-woodman-12mm-ban-nho" data-sp=1>Sàn gỗ Woodman 12mm bản nhỏ</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-masfloor" data-sp=1>Sàn gỗ Masfloor</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-trung-quoc" data-sp=1>Sàn gỗ Trung Quốc</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-viet-nam" data-sp=1>Sàn gỗ Việt Nam</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-florton" data-sp=1>Sàn gỗ Florton</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-florton-8mm" data-sp=1>Sàn gỗ Florton 8MM</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-florton-12mm" data-sp=1>Sàn gỗ Florton 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-newsky" data-sp=1>Sàn gỗ Newsky</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-d-class" data-sp=1>Sàn gỗ NewSky D-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-ea-class" data-sp=1>Sàn gỗ Newsky EA-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-u-class" data-sp=1>Sàn gỗ Newsky U-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-k-class" data-sp=1>Sàn gỗ Newsky K-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-s-class" data-sp=1>Sàn gỗ Newsky S-Class</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-newsky-wpu-class" data-sp=1>Sàn gỗ Newsky WPu-Class</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-janwood" data-sp=1>Sàn gỗ Janwood</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-xuong-ca" data-sp=1>Sàn Gỗ xương Cá</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-xuong-ca-janhome" data-sp=1>Sàn gỗ xương cá Janhome</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-xuong-ca-jawa" data-sp=1>Sàn gỗ xương cá Jawa</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-cot-xanh" data-sp=1>Sàn gỗ cốt xanh</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-cot-xanh-aqua-janhome-chiu-nuoc" data-sp=1>Sàn gỗ cốt xanh Janhome chịu...</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-viet-nam-sieu-chiu-nuoc" data-sp=1>Sàn gỗ Việt Nam Siêu chịu...</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-janhome-sieu-chiu-nuoc" data-sp=1>Sàn gỗ JanHome Floor Aqua siêu...</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-xuong-ca-janhome-san-go-viet-nam-sieu-chiu-nuoc" data-sp=1>Sàn gỗ xương cá JanHome</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-kendax" data-sp=1>Sàn gỗ Kendax</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-kendax-8mm" data-sp=1>Sàn gỗ Kendax 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-kendax-12mm" data-sp=1>Sàn gỗ Kendax 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-gia-re" data-sp=1>Sàn gỗ công nghiệp giá rẻ</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-harotex" data-sp=1>Sàn gỗ Harotex</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-ecofloor" data-sp=1>Sàn gỗ EcoFloor</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-ecofloor-8mm" data-sp=1>Sàn gỗ Ecofloor 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-ecofloor-12mm" data-sp=1>Sàn gỗ Ecofloor 12mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-ecofloor-van-tu-nhien" data-sp=1>Sàn gỗ ECOFLOOR vân tự nhiên</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-wilson" data-sp=1>Sàn gỗ Wilson</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-floor-8mm-ban-nho" data-sp=1>Sàn gỗ Wilson Floor 8mm bản...</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-8mm-ban-to" data-sp=1>Sàn gỗ Wilson 8mm bản to</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-mat-san" data-sp=1>Sàn gỗ Wilson mặt sần</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wilson-mat-bong" data-sp=1>Sàn gỗ Wilson mặt bóng</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-kosmos" data-sp=1>Sàn gỗ Kosmos</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-glomax" data-sp=1>Sàn gỗ Glomax</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-galamax" data-sp=1>Sàn gỗ Galamax</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-kronomax" data-sp=1>Sàn gỗ Kronomax</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-royal-floor" data-sp=1>Sàn gỗ Royal Floor</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-eurohome" data-sp=1>Sàn gỗ Eurohome</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-han-quoc" data-sp=1>Sàn gỗ Hàn Quốc</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-han-quoc-san-go-dongwha" data-sp=1>Sàn Gỗ DongWha</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-floorart" data-sp=1>Sàn gỗ FloorArt</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-floorart-8mm" data-sp=1>Sàn gỗ FloorArt 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-floorart-12mm" data-sp=1>Sàn gỗ FloorArt 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-thai-lan" data-sp=1>Sàn gỗ Thái Lan</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-thaigreen" data-sp=1>Sàn gỗ ThaiGreen</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaigreen-8mm" data-sp=1>Sàn gỗ ThaiGreen 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaigreen-12mm" data-sp=1>Sàn gỗ ThaiGreen 12mm</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-thaixin" data-sp=1>Sàn gỗ Thaixin</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaixin-8mm" data-sp=1>Sàn gỗ Thaixin 8mm</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-thaixin-12mm-ban-to" data-sp=1>Sàn gỗ Thaixin 12mm bản to</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-thairoyal" data-sp=1>Sàn gỗ ThaiRoyal</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-an-do" data-sp=1>Sàn gỗ Ấn Độ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-chau-au" data-sp=1>Sàn gỗ Châu Âu</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-duc" data-sp=1>Sàn gỗ Đức</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-kronotex" data-sp=1>Sàn Gỗ Kronotex</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-classen" data-sp=1>Sàn gỗ Classen</span><ul class="ul-tree-lv-4"><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-7mm" data-sp=1>Sàn gỗ Classen 7mm</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-8mm-ban-nho" data-sp=1>Sàn gỗ Classen 8mm bản nhỏ</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-8mm-ban-to" data-sp=1>Sàn gỗ Classen 8mm bản to</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-8mm-ban-to-khe-v" data-sp=1>Sàn gỗ Classen 8mm bản to...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-12mm-ban-nho" data-sp=1>Sàn gỗ Classen 12mm bản nhỏ</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-classen-san-go-classen-12mm-ban-to" data-sp=1>Sàn gỗ Classen 12mm bản to</span><ul class="ul-tree-lv-5"></ul></li></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-wineo" data-sp=1>Sàn gỗ wineo</span><ul class="ul-tree-lv-4"><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-to-8mm" data-sp=1>Sàn gỗ WINEO 500 bản to...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-to-v2-8mm" data-sp=1>Sàn gỗ WINEO 500 bản to...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-vua-v4-8mm" data-sp=1>Sàn gỗ WINEO 500 bản vừa...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-500-ban-dai-v4-10mm" data-sp=1>Sàn gỗ WINEO 500 bản dài...</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-aqua-stop-rockngo" data-sp=1>Sàn gỗ Wineo Aqua-Stop ROCK'N'GO</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/san-go-wineo-aqua-stop-xlv4" data-sp=1>Sàn gỗ Wineo AquaStop</span><ul class="ul-tree-lv-5"></ul></li></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-hornitex" data-sp=1>Sàn gỗ Hornitex</span><ul class="ul-tree-lv-4"><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/hornitex-8mm" data-sp=1>Hornitex 8mm</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/hornitex-10mm" data-sp=1>Hornitex 10mm</span><ul class="ul-tree-lv-5"></ul></li><li class="li-tree-lv-4"><span class="span-tree-node tree-lv-4" data-url="/hornitex-12mm" data-sp=1>Hornitex 12mm</span><ul class="ul-tree-lv-5"></ul></li></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-phap" data-sp=1>Sàn gỗ Pháp</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/san-go-alsafloor" data-sp=1>Sàn gỗ Alsafloor</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/san-nhua">Sàn nhựa vinyl</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-galaxy" data-sp=1>Sàn nhựa Galaxy</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-galaxy-plus" data-sp=1>Sàn nhựa GALAXY Plus</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-railflex" data-sp=1>Sàn nhựa Railflex</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-dan-keo-railflex" data-sp=1>Sàn nhựa dán keo Railflex</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-hem-khoa-railflex-4-2mm" data-sp=1>Sàn nhựa hèm khóa Railflex 4.2mm</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-chong-tinh-dien" data-sp=1>Sàn nhựa chống tĩnh điện</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-hem-khoa-railflex-5mm" data-sp=1>Sàn nhựa hèm khóa RailFlex 5mm</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-vinyl-railflex-dang-cuon" data-sp=1>Sàn nhựa vinyl Railflex dạng cuộn</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-the-thao-railflex" data-sp=1>Sàn nhựa thể thao Railflex</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-ibt" data-sp=1>Sàn nhựa IBT</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-ecost" data-sp=1>Sàn nhựa ECO'ST</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecost-tu-dan" data-sp=1>Sàn nhựa ECO’ST tự dán</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecost-dan-keo" data-sp=1>Sàn nhựa ECO’ST dán keo</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecost-hem-khoa" data-sp=1>Sàn nhựa ECO’ST hèm khóa</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-thanh-ly" data-sp=1>Sàn nhựa thanh lý</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-dongwha-han-quoc-khuyen-mai" data-sp=1>Sàn nhựa dongwha hàn quốc khuyến...</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-go" data-sp=1>Sàn nhựa vân gỗ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-da" data-sp=1>Sàn nhựa vân đá</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-tham" data-sp=1>Sàn nhựa vân thảm</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-tu-dan" data-sp=1>Sàn nhựa tự dán</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-van-da-san-nhua" data-sp=1>Sàn nhựa vân da</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-aimaru" data-sp=1>Sàn nhựa AIMARU</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-gia-re" data-sp=1>Sàn nhựa giá rẻ</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-ecofloor" data-sp=1>Sàn nhựa Ecofloor Vinyl</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-gia-re-mines" data-sp=1>Sàn nhựa giá rẻ Mines</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-hem-khoa" data-sp=1>Sàn nhựa hèm khóa</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-hem-khoa-mines" data-sp=1>Sàn nhựa hèm khóa mines</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-7mm-mega" data-sp=1>Sàn nhựa 7mm MEGA</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-bpc" data-sp=1>Sàn nhựa BPC</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-nhua-florton-spc" data-sp=1>Sàn nhựa hèm khóa Florton SPC</span><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/san-go-tu-nhien">Sàn gỗ tự nhiên</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-cam-xe" data-sp=1>Sàn gỗ Căm xe</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-chiu-liu" data-sp=1>Sàn gỗ Chiu Liu</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-go-do" data-sp=1>Sàn gỗ gõ đỏ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-giang-huong" data-sp=1>Sàn gỗ Giáng Hương</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-soi" data-sp=1>Sàn gỗ Sồi</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-teak" data-sp=1>Sàn gỗ Teak</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-oc-cho" data-sp=1>Sàn gỗ Óc chó</span><ul class="ul-tree-lv-2"></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/phu-kien">Phụ kiện</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-go-tu-nhien" data-sp=1>Phào gỗ tự nhiên</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/xop-foam-san-go" data-sp=1>Xốp, Foam sàn gỗ</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phu-kien-phao-nhua-chan-tuong" data-sp=1>Phào nhựa chân tường</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-nep-thanh-ly" data-sp=1>Phào nẹp thanh lý</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phu-kien-op-tuong-op-tran" data-sp=1>Phụ kiện ốp tường - ốp...</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/phu-kien-tam-op-nano-timberman" data-sp=1>Phụ kiện tấm Ốp Nano TimberMan</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-bang-phao-nhua-op-tran-trong-nha" data-sp=1>Phụ kiện ốp trần trong nhà</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tam-hdf" data-sp=1>Tấm HDF</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-nhua-janmi" data-sp=1>Phào nhựa JANMI</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/phao-nep-kim-loai" data-sp=1>Phào nẹp kim loại</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/nep-nhua" data-sp=1>Nẹp nhựa</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/keo-dan" data-sp=1>Keo dán</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/keo-dan-san-nhua" data-sp=1>Keo dán sàn nhựa giá rẻ</span><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/san-go-ngoai-troi">Sàn gỗ ngoài trời</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-ban-cong" data-sp=1>Sàn gỗ ban công</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-be-boi" data-sp=1>Sàn gỗ bể bơi</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-san-vuon" data-sp=1>Sàn gỗ sân vườn</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-timberman" data-sp=1>Sàn gỗ TimberMan</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-timberman-nhap-khau" data-sp=1>Sàn gỗ Timberman Nhập khẩu</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-timberman-trong-nuoc" data-sp=1>Sàn gỗ Timberman Trong nước</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-ngoai-troi-biowood" data-sp=1>Sàn gỗ ngoài trời Biowood</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-tu-nhien-ngoai-troi-timberman" data-sp=1>Sàn gỗ tự nhiên ngoài trời...</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-san-thuong" data-sp=1>Sàn gỗ sân thượng</span><ul class="ul-tree-lv-2"></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/san-go-thanh-ly">Sàn gỗ thanh lý</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-victory" data-sp=1>Sàn gỗ Victory</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-prince" data-sp=1>Sàn gỗ Prince</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-thanh-ly-tong-hop" data-sp=1>Sàn Gỗ Thanh lý Tổng Hợp</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-viet-nam-thanh-ly-san-go-thanh-ly" data-sp=1>Sàn gỗ Việt Nam thanh lý</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-viet-nam-thanh-ly-8mm" data-sp=1>Sàn gỗ Việt Nam thanh lý...</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-viet-nam-thanh-ly-12mm" data-sp=1>Sàn gỗ Việt Nam thanh lý...</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-thanh-ly-8mm" data-sp=1>Sàn gỗ thanh lý 8mm</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-nhua-thanh-ly-san-go-thanh-ly" data-sp=1>Sàn nhựa thanh lý</span><ul class="ul-tree-lv-2"></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/trang-tri-noi-that">Trang trí nội thất</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/giay-dan-tuong" data-sp=1>Giấy dán tường</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-thanh-ly" data-sp=1>Giấy dán tường thanh lý</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-trung-quoc" data-sp=1>Giấy dán tường Trung Quốc</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-luca" data-sp=1>Giấy dán tường Luca</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-dio" data-sp=1>Giấy dán tường DIO</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-champagne" data-sp=1>Giấy dán tường Champagne</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-piedra" data-sp=1>Giấy dán tường Piedra</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-han-quoc" data-sp=1>Giấy dán tường Hàn Quốc</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-andante" data-sp=1>Giấy dán tường Andante</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-mida" data-sp=1>Giấy dán tường Mida</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-edroom" data-sp=1>Giấy dán tường Eroom</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-darae" data-sp=1>Giấy dán tường Darae</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-zinnia" data-sp=1>Giấy dán tường Zinnia</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-hera" data-sp=1>Giấy dán tường Hera</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-besti" data-sp=1>Giấy dán tường Besti</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-gracia-ii" data-sp=1>Giấy dán tường Gracia II</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-montana" data-sp=1>Giấy dán tường Montana</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-feliz" data-sp=1>Giấy dán tường Feliz</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-q-pid" data-sp=1>Giấy dán tường Q.PID</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-regina" data-sp=1>Giấy dán tường Regina</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-living" data-sp=1>Giấy dán tường Living</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-symphony" data-sp=1>Giấy dán tường Symphony</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-natural" data-sp=1>Giấy dán tường Natural</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-giay-dan-tuong-phoenix" data-sp=1>Giấy dán tường Phoenix</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-classico" data-sp=1>Giấy dán tường Classico</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-place" data-sp=1>Giấy dán tường Place</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-rhapsody" data-sp=1>Giấy dán tường RHAPSODY</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/giay-dan-tuong-nhat-ban" data-sp=1>Giấy dán tường Nhật Bản</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/giay-dan-tuong-pinebull-s" data-sp=1>Giấy dán tường Pinebull S</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-tran-trong-nha" data-sp=1>Ốp trần trong nhà</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-tam-tran-tha-pvc" data-sp=1>Ốp trần bằng tấm trần thả...</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-cn-op-tran-trong-nha" data-sp=1>Ốp trần bằng gỗ công nghiệp</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-tu-nhien-op-tran-trong-nha" data-sp=1>Ốp trần bằng gỗ tự nhiên</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tran-gia-re" data-sp=1>Ốp trần giá rẻ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-tran-pvc" data-sp=1>Tấm ốp trần PVC TimberMan</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-tran-bang-tam-pvc-timberman" data-sp=1>Ốp trần bằng tấm PVC Timberman</span><ul class="ul-tree-lv-4"></ul></li></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/rem-cua" data-sp=1>Rèm cửa</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-go-wood-blinds-origine-bass" data-sp=1>Rèm gỗ Wood Blinds Origine Bass</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-la-doc-vertical" data-sp=1>Rèm lá dọc Vertical</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-cau-vong-combi" data-sp=1>Rèm cầu vồng - Combi</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/rem-cuon-1-lop-roll-screen" data-sp=1>Rèm cuốn 1 lớp Roll Screen</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-tuong-trong-nha" data-sp=1>Ốp tường trong nhà</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-cn" data-sp=1>Ốp tường gỗ công nghiệp</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-bang-tam-florton" data-sp=1>Ốp tường bằng tấm Florton</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-bang-go-tu-nhien" data-sp=1>Ốp tường gỗ tự nhiên</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tuong-bang-tam-3d" data-sp=1>Tấm ốp tường 3D</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tuong-biowood" data-sp=1>Ốp tường Biowood</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-tran-tuong" data-sp=1>Tấm ốp trần tường</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-tuong-van-da" data-sp=1>Ốp tường vân đá</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-nano" data-sp=1>Tấm ốp Nano TimberMan</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-op-tuong-pvc" data-sp=1>Tấm ốp tường PVC</span><ul class="ul-tree-lv-3"><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-bang-tam-pvc-3-song-6-song" data-sp=1>Tấm ốp trần tường PVC Timberman</span><ul class="ul-tree-lv-4"></ul></li><li class="li-tree-lv-3"><span class="span-tree-node tree-lv-3" data-url="/op-tuong-pvc-gia-da" data-sp=1>Ốp tường PVC giả đá</span><ul class="ul-tree-lv-4"></ul></li></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tam-nhua-op-tuong" data-sp=1>Tấm nhựa ốp tường</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tham-trai-san" data-sp=1>Thảm trải sàn</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tham-tho-nhi-ky" data-sp=1>Thảm Thổ Nhĩ Kỳ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tham-bi" data-sp=1>Thảm Bỉ</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tranh-gach-3d" data-sp=1>Tranh Gạch 3D</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-vi-tinh-3d" data-sp=1>Gạch Vi Tinh 3D</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-3d-cham-khac-noi" data-sp=1>Gạch 3D Chạm Khắc Nổi</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-3d-phu-men-uv" data-sp=1>Gạch 3D Phủ Men UV</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-kinh-5d" data-sp=1>Gạch Kính 5D</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/tranh-kinh-3d" data-sp=1>Tranh Kính 3D</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/bac-cau-thang-go-cong-nghiep" data-sp=1>Bậc cầu thang gỗ công nghiệp</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-go-noi-that" data-sp=1>Sàn gỗ Nội Thất</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-phong-ngu" data-sp=1>Sàn gỗ phòng ngủ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/san-go-phong-khach" data-sp=1>Sàn gỗ phòng khách</span><ul class="ul-tree-lv-3"></ul></li></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/trang-tri-ngoai-that">Trang trí ngoại thất</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/go-nhua-ngoai-troi" data-sp=1>Gỗ nhựa ngoài trời</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gian-hoa-ngoai-troi" data-sp=1>Giàn hoa ngoài trời</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/hang-rao-ngoai-troi" data-sp=1>Hàng rào ngoài trời</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/lan-can-ban-cong" data-sp=1>Lan can - ban công</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/ban-ghe-ngoai-troi" data-sp=1>Bàn ghế ngoài trời</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/go-nhua-ngoai-troi-chau-hoa-go" data-sp=1>Chậu hoa gỗ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/lam-go-trang-tri" data-sp=1>Lam gỗ trang trí che nắng</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/thung-rac-ngoai-troi-timberman" data-sp=1>Thùng rác ngoài trời TimberMan</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/op-cot-biowood" data-sp=1>Ốp cột Biowood</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/gach-go" data-sp=1>Gạch Gỗ</span><ul class="ul-tree-lv-3"></ul></li><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/go-nhua-ngoai-troi-timberman" data-sp=1>Gỗ nhựa ngoài trời TimberMan</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/op-tuong-ngoai-troi" data-sp=1>Ốp tường ngoài trời</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/tieu-canh-vuon-cay" data-sp=1>Tiểu cảnh vườn cây</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/thanh-che-nang" data-sp=1>Thanh che nắng</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/trang-tri-ban-cong" data-sp=1>Trang trí ban công</span><ul class="ul-tree-lv-2"></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/vi-gach-da" data-sp=1>Vỉ gạch đá</span><ul class="ul-tree-lv-2"></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/do-gia-dung">Đồ gia dụng</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/cham-soc-bao-duong" data-sp=1>Chăm sóc bảo dưỡng</span><ul class="ul-tree-lv-2"><li class="li-tree-lv-2"><span class="span-tree-node tree-lv-2" data-url="/nuoc-lau-san-layer-clean" data-sp=1>Nước lau sàn Layer Clean</span><ul class="ul-tree-lv-3"></ul></li></ul></li><li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/may-loc-nuoc" data-sp=1>Máy lọc nước</span><ul class="ul-tree-lv-2"></ul></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="span-tree-node tree-lv-0" data-url="/san-tre">Sàn tre</span>
                                    <ul>
                                        <li class="li-tree-lv-1"><span class="span-tree-node tree-lv-1" data-url="/san-tre-ali" data-sp=1>Sàn tre ali</span><ul class="ul-tree-lv-2"></ul></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class=" align-self-md-center d-flex  ">
                            <div class="font-weight-bold">
                                Hotline:
                            </div>
                            <img src="images/hot-line-red-icon.svg" class="img-fluid mx-2 icon-nav align-self-center wow tada infinite " style="width: 20px;" />
                            <div class="align-self-center">
                                <a rel="nofollow" href="javascript:void(0)">
                                    <div class=" font-weight-bold mb-0">1800 0022</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class=" btn close-popup" onclick="$('.cate-mobile').toggle(100, 'swing');">
                    <img src="images/times-icon.svg" />
                    </button>
                </section>
                
                <div class="banner-page py-3 mb-4" style="
                    background: url(../cms.janhome.vn/uploads/thumb/2020/04/22/Banner.jpg) no-repeat center;
                    min-height: 200px;
                    background-size: cover;
                    display: flex;
                    ">
                    <div class="container align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-12 ">
                                <h1 class="text-center">KHÔNG GIAN NỘI THẤT</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row flex-md-row-reverse">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                            
                            <div class="list-menu-right">
                                <div class="heading">
                                    <img src="images/menu-icon8bd3.svg?v=qef7cssZHgAquLTKdp4RlX3HxrirbSXXNcb4nv352dM" class="img-fluid mr-2" />Danh mục
                                </div>
                                <ul class="list">
                                    <li><a href="tin-khuyen-mai.html" title="TIN KHUYẾN MẠI">TIN KHUYẾN MẠI</a></li>
                                    <li><a href="bao-gia-thi-cong-lap-dat.html" title="BÁO GIÁ THI CÔNG LẮP ĐẶT">BÁO GIÁ THI CÔNG LẮP ĐẶT</a></li>
                                    <li><a href="tu-van.html" title="TƯ VẤN">TƯ VẤN</a></li>
                                    <li><a href="tai-catalogue.html" title="Tải Catalogue">TẢI CATALOGUE</a></li>
                                    <li><a href="nha-cung-cap-vat-lieu.html" title="NHÀ CUNG CẤP VẬT LIỆU">NHÀ CUNG CẤP VẬT LIỆU</a></li>
                                    <li><a href="thu-vien-3d-kien-truc-su.html" title="Thư viện 3D kiến trúc sư">THƯ VIỆN 3D KIẾN TRÚC SƯ</a></li>
                                    <li><a href="video-janhome.html" title="VIDEO JANHOME">VIDEO JANHOME</a></li>
                                    <li><a href="he-thong-san-go-vat-lieu-hoan-thien-janhome.html" title="Hệ thống sàn gỗ - vật liệu hoàn thiện JANHOME">HỆ THỐNG SÀN GỖ - VẬT LIỆU HOÀN THIỆN JANHOME</a></li>
                                    <li><a href="tuyen-dung.html" title="TUYỂN DỤNG">TUYỂN DỤNG</a></li>
                                    <li><a href="tin-janhome.html" title="TIN JANHOME">TIN JANHOME</a></li>
                                </ul>
                            </div>
                            <div class="list-menu-right">
                                <div class="heading mb-md-3">
                                    <img src="images/giftc829.svg?v=9SyPI8n17F7AMeX1L1ifHuyq4N7RRpl6-lxBALqXHbM" class="img-fluid mr-2" />Khuyến mại
                                </div>
                                <div class="list lastest-news">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="image mb-3">
                                                    <a href="mung-ngay-doc-lap-giam-gia-cuc-soc-tai-janhome-he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho.html" title="Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho">
                                                        <img src="../cms.janhome.vn/uploads/thumb/2020/09/04/khuyen-mai-thang-9-2020-tai-janhome.jpg" class="img-fluid" alt="Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="title">
                                                <a href="mung-ngay-doc-lap-giam-gia-cuc-soc-tai-janhome-he-thong-ban-le-san-go-vat-lieu-hoan-thien-tai-kho.html" title="Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho">Mừng ngày độc lập, giảm giá cực sốc tại JanHome, hệ thống bán lẻ sàn gỗ, vật liệu hoàn thiện tại kho</a>
                                                </h6>
                                                <div class="des ">
                                                    <p>Trong th&aacute;ng 9/2020, JanHome đưa ra rất nhiều chương tr&igrave;nh khuyến m&atilde;i hấp dẫn, vừa giảm gi&aacute;, vừa tặng qu&agrave;</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="title">
                                                <a href="khuyen-mai-thang-8-nhieu-bat-ngo-tai-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html" title="Khuyến mãi tháng 8 nhiều bất ngờ tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho.">Khuyến mãi tháng 8 nhiều bất ngờ tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho.</a>
                                                </h6>
                                                <div class="time ">
                                                    2020/08/03
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="title">
                                                <a href="chao-don-thang-7-voi-con-mua-khuyen-mai-tai-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html" title="Chào đón tháng 7 với cơn mưa khuyến mãi tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho">Chào đón tháng 7 với cơn mưa khuyến mãi tại JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho</a>
                                                </h6>
                                                <div class="time ">
                                                    2020/07/03
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="title">
                                                <a href="vui-tet-thieu-nhi-1-6-hoan-hi-nhan-qua-khuyen-mai-lon-cua-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html" title="Vui tết thiếu nhi (1/6), hoan hỉ nhận quà khuyến mãi lớn của JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho">Vui tết thiếu nhi (1/6), hoan hỉ nhận quà khuyến mãi lớn của JanHome, hệ thống bán lẻ vật liệu hoàn thiện tại kho</a>
                                                </h6>
                                                <div class="time ">
                                                    2020/07/02
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-menu-right">
                                <div class="heading mb-3">
                                    <img src="images/flag-iconf002.svg?v=GoDAQeasQ5QDI54pnNLz0oiRudBV9A0ehf63EdEb_1Y" class="img-fluid mr-2" />Mới cập nhật
                                </div>
                                <div class="list lastest-news">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="image mb-3">
                                                    <a href="vi-gach-go-nhua-lat-san-nha-tam-ban-cong-san-thuong-sieu-chiu-nuoc.html" title="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">
                                                        <img src="../cms.janhome.vn/uploads/thumb/2020/09/18/vi-gach-go-nhua-lat-san-ban-cong-san-thuong-sieu-chiu-nuoc.jpg" class="img-fluid" alt="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="title">
                                                <a href="vi-gach-go-nhua-lat-san-nha-tam-ban-cong-san-thuong-sieu-chiu-nuoc.html" title="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước</a>
                                                </h6>
                                                <div class="des ">
                                                    <p>Vỉ gạch gỗ nhựa l&agrave; vật liệu l&aacute;t s&agrave;n hiện đại, được tạo n&ecirc;n từ sợi gỗ, nhựa c&ugrave;ng c&aacute;c...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class=" col-md-12 ">
                                                    <h6 class="title">
                                                    <a href="6-bi-quyet-tao-nen-mot-khong-gian-song-yen-binh-de-chiu.html" title="6 bí quyết tạo nên một không gian sống yên bình, dễ chịu">6 bí quyết tạo nên một không gian sống yên bình, dễ chịu</a>
                                                    </h6>
                                                    <div class="time ">
                                                        2020/09/16
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class=" col-md-12 ">
                                                    <h6 class="title">
                                                    <a href="chi-tiet-ve-tieu-chuan-e0-e1-cua-san-go-cong-nghiep.html" title="Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp">Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp</a>
                                                    </h6>
                                                    <div class="time ">
                                                        2020/09/15
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class=" col-md-12 ">
                                                    <h6 class="title">
                                                    <a href="thi-cong-san-go-janmi-o120-12mm-ban-nho-tai-can-ho-cao-cap-khu-do-thi-ecopark.html" title="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark">Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark</a>
                                                    </h6>
                                                    <div class="time ">
                                                        2020/09/14
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class=" col-md-12 ">
                                                    <h6 class="title">
                                                    <a href="ve-dep-thuc-te-cua-san-go-floorart-r09c-tai-p1803-toa-nha-legacy-106-nguy-nhu-kon-tum.html" title="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum">Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum</a>
                                                    </h6>
                                                    <div class="time ">
                                                        2020/09/12
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class=" col-md-12 ">
                                                    <h6 class="title">
                                                    <a href="tim-hieu-ve-tieu-chuan-ac-cua-san-go-thong-so-ac3-ac4-ac5-co-y-nghia-gihtml.html" title="Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?">Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?</a>
                                                    </h6>
                                                    <div class="time ">
                                                        2020/09/11
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                
                                <ol style="display:none" itemscope itemtype="https://schema.org/BreadcrumbList">
                                    ›
                                    <li itemprop="itemListElement" itemscope
                                        itemtype="https://schema.org/ListItem">
                                        <a itemscope itemtype="https://schema.org/WebPage"
                                            itemprop="item" itemid="janhome.vn/tu-van"
                                            href="janhome.vn/tu-van.html">
                                            <span itemprop="name">TƯ VẤN</span>
                                        </a>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                    &gt;            <li itemprop="itemListElement" itemscope
                                        itemtype="https://schema.org/ListItem">
                                        <a itemscope itemtype="https://schema.org/WebPage"
                                            itemprop="item" itemid="janhome.vn/trai-nghiem-cung-janhome"
                                            href="janhome.vn/trai-nghiem-cung-janhome.html">
                                            <span itemprop="name">TRẢI NGHIỆM CÙNG JANHOME</span>
                                        </a>
                                        <meta itemprop="position" content="3" />
                                    </li>
                                    &gt;            <li itemprop="itemListElement" itemscope
                                        itemtype="https://schema.org/ListItem">
                                        <a itemscope itemtype="https://schema.org/WebPage"
                                            itemprop="item" itemid="janhome.vn/khong-gian-noi-that"
                                            href="janhome.vn/khong-gian-noi-that.html">
                                            <span itemprop="name">KHÔNG GIAN NỘI THẤT</span>
                                        </a>
                                        <meta itemprop="position" content="4" />
                                    </li>
                                </ol>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb jan-breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="tu-van.html">TƯ VẤN</a></li>
                                        <li class="breadcrumb-item"><a href="trai-nghiem-cung-janhome.html">TRẢI NGHIỆM CÙNG JANHOME</a></li>
                                        <li class="breadcrumb-item"><a href="khong-gian-noi-that.html">KHÔNG GIAN NỘI THẤT</a></li>
                                    </ol>
                                </nav>
                                <div class="blog-content">
                                    <h1 class="title">15 mẫu thiết kế phòng làm việc tại nhà có sử dụng sàn gỗ công nghiệp lát sàn</h1>
                                    <div class="d-flex" style="align-items: center;">
                                        <div class="author color-828282 mr-4">
                                            <div class="avt align-self-center">
                                                <img src="../cms.janhome.vn/uploads/thumb/2020/08/13/15-mau-thiet-ke-phong-lam-viec-su-dung-san-go-cong-nghiep-lat-san.jpg" class="img-fluid" alt="15 mẫu thiết kế phòng làm việc tại nhà có sử dụng sàn gỗ công nghiệp lát sàn" />
                                            </div>
                                            <div class="align-self-center">
                                                
                                            </div>
                                        </div>
                                        <div class="time mb-0">
                                            13/08/2020 11:41
                                        </div>
                                        <div class="cust-likes-fb-blogs facebook-btn pl-3">
                                            <div class="small mr-3"><img src="images/eyecda8.svg?v=0XeLHLM8IpYLOQugNrIb_MnFyB1ai4jM4Sj5aZ6mtfw" class="img-fluid mr-2" />50 lượt xem</div>
                                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="detail-container" data-id="96105">
                                        <p style="text-align: justify;">L&agrave; người của c&ocirc;ng việc th&igrave; bạn lu&ocirc;n c&oacute; sẵn một ph&ograve;ng l&agrave;m việc tại nh&agrave; để bất cứ l&uacute;c n&agrave;o c&oacute; &yacute; tưởng, bạn đều c&oacute; thể bắt tay v&agrave;o l&agrave;m việc. Thiết kế ph&ograve;ng l&agrave;m việc c&oacute; rất nhiều sắc th&aacute;i, từ xa hoa đến tối giản, từ sang trọng, cổ điển tới hiện đại. D&ugrave; diện t&iacute;ch ph&ograve;ng l&agrave;m việc của bạn to hay nhỏ th&igrave; đều c&oacute; thiết kế nội thất tương xứng. H&ocirc;m nay ch&uacute;ng t&ocirc;i sẽ bật m&iacute; cho bạn 15 mẫu thiết kế ph&ograve;ng l&agrave;m việc tại nh&agrave; c&oacute; sử dụng s&agrave;n gỗ c&ocirc;ng nghiệp. Đ&acirc;y l&agrave; vật liệu l&aacute;t s&agrave;n gi&uacute;p l&agrave;m tăng hiệu quả thẩm mỹ cho căn ph&ograve;ng, đồng thời tạo cảm gi&aacute;c dễ chịu, th&acirc;n thiện hơn cho người sử dụng.</p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Mẫu thiết kế ph&ograve;ng l&agrave;m việc tại nh&agrave; đẹp, sang trọng cổ điển</span></h2>
                                        <p style="text-align: justify;">Ph&ograve;ng l&agrave;m việc tại nh&agrave; theo phong c&aacute;ch sang trọng, cổ điển thường được ứng dụng nhiều ở c&aacute;c nước phương t&acirc;y. Trong ph&ograve;ng l&agrave;m việc n&agrave;y, họ thường sử dụng tường l&agrave;m tủ s&aacute;ch. Tủ s&aacute;ch c&oacute; thiết kế trạm trần sẽ tận dụng được khoảng kh&ocirc;ng gian tối đa, gi&uacute;p lưu trữ được nhiều s&aacute;ch hơn, đồng thời thiết kế n&agrave;y gi&uacute;p cho ph&ograve;ng l&agrave;m việc trở n&ecirc;n đẹp, sang hơn.</p>
                                        <p style="text-align: justify;">Trong ph&ograve;ng sẽ bố tr&iacute; th&ecirc;m bộ b&agrave;n l&agrave;m việc, c&oacute; th&ecirc;m sofa hoặc ghế thư gi&atilde;n để đọc s&aacute;ch phục vụ mục đ&iacute;ch ch&iacute;nh của gia đ&igrave;nh. Mẫu thiết kế ph&ograve;ng l&agrave;m việc n&agrave;y c&oacute; thể biến th&agrave;nh thư viện tại nh&agrave;, rất l&yacute; tưởng cho những người y&ecirc;u th&iacute;ch đọc s&aacute;ch.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep.jpg" class="lazy"></p>
                                        <p style="text-align: center;">S&agrave;n gỗ c&ocirc;ng nghiệp gi&uacute;p ph&ograve;ng l&agrave;m việc sang trọng hơn</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-sang-trong.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-sang-trong.jpg" class="lazy"></p>
                                        <p style="text-align: center;">Thiết kế tủ s&aacute;ch kịch tường vừa tiết kiệm diện t&iacute;ch, vừa tạo sự sang trọng cho ph&ograve;ng l&agrave;m việc</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-thoang.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-thoang.jpg" class="lazy"></p>
                                        <p style="text-align: center;">Ph&ograve;ng l&agrave;m việc hướng nắng n&ecirc;n tận dụng được nguồn s&aacute;ng tự nhi&ecirc;n</p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Thiết kế ph&ograve;ng l&agrave;m việc tại nh&agrave; theo phong c&aacute;ch t&acirc;n cổ điển</span></h2>
                                        <p style="text-align: justify;">C&aacute;c ph&ograve;ng l&agrave;m việc theo phong c&aacute;ch t&acirc;n cổ điển thường to&aacute;t l&ecirc;n sự xa hoa, bề thế, n&oacute; thể hiện phong th&aacute;i lịch l&atilde;m, sang trọng v&agrave; đẳng cấp, gi&uacute;p gia chủ khẳng định vị thế của m&igrave;nh. Phong c&aacute;ch n&agrave;y đ&atilde; lược bỏ bớt c&aacute;c chi tiết cầu kỳ của phong c&aacute;ch cổ điển n&ecirc;n đem đến sự nhẹ nh&agrave;ng hơn cho ph&ograve;ng l&agrave;m việc.</p>
                                        <p style="text-align: justify;">Kết hợp với sự hiện đại trong thiết kế nội thất hiện nay, ph&ograve;ng l&agrave;m việc vừa giữ được sự sang trọng, vừa đơn giản, nhẹ nh&agrave;ng hơn.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-nha-nhan.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-nha-nhan.jpg" class="lazy"></p>
                                        <p style="text-align: center;"><a href="san-go-cong-nghiep.html">S&agrave;n gỗ c&ocirc;ng nghiệp</a> c&oacute; c&ugrave;ng t&ocirc;ng m&agrave;u với đồ nội thất v&agrave; đối nghịch với m&agrave;u tủ s&aacute;ch trắng, điều n&agrave;y gi&uacute;p t&ocirc;n l&ecirc;n vẻ đẹp lịch l&atilde;m cho kh&ocirc;ng gian ph&ograve;ng l&agrave;m việc</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-lich-su.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-lich-su.jpg" class="lazy"></p>
                                        <p style="text-align: center;">S&agrave;n gỗ c&ocirc;ng nghiệp gi&uacute;p kh&ocirc;ng gian ph&ograve;ng l&agrave;m việc thoải m&aacute;i, dễ chịu hơn</p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Trang tr&iacute; ph&ograve;ng l&agrave;m việc tại nh&agrave; đẹp hiện đại</span></h2>
                                        <p style="text-align: justify;">Ph&ograve;ng l&agrave;m việc được thiết kế theo phong c&aacute;ch hiện đại với s&agrave;n gỗ c&ocirc;ng nghiệp cũng những đồ nội thất đơn giản, gọn g&agrave;ng.</p>
                                        <p style="text-align: justify;">Thiết kế n&agrave;y gi&uacute;p kh&ocirc;ng gian trở n&ecirc;n trẻ, năng động v&agrave; c&oacute; sức s&aacute;ng tạo hơn.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-hien-dai.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-hien-dai.jpg" class="lazy"></p>
                                        <p style="text-align: center;">Kết hợp <strong><a href="tham-trai-san.html">thảm trải s&agrave;n</a></strong> v&agrave; s&agrave;n c&ocirc;ng nghiệp mang đến cảm gi&aacute;c sang trọng cho ph&ograve;ng l&agrave;m việc</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-chuyen-nghiep.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-chuyen-nghiep.jpg" class="lazy"></p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-sang.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-sang.jpg" class="lazy"></p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">&nbsp;C&aacute;ch bố tr&iacute; ph&ograve;ng l&agrave;m việc tại nh&agrave; đơn giản</span></h2>
                                        <p style="text-align: justify;">Kiểu ph&ograve;ng l&agrave;m việc tại nh&agrave; đơn giản ph&ugrave; hợp với gia chủ c&oacute; lối sống giản dị v&agrave; c&oacute; diện t&iacute;ch ph&ograve;ng kh&ocirc;ng lớn. Chỉ cần một g&oacute;c nhỏ trong nh&agrave;, ch&uacute;ng ta c&oacute; thể tạo n&ecirc;n ph&ograve;ng l&agrave;m việc với đầy đủ tiện nghi tủ s&aacute;ch, b&agrave;n l&agrave;m việc, ghế ngồi.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-don-gian.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-don-gian.jpg" class="lazy"></p>
                                        <p style="text-align: center;">Chỉ cần một chiếc b&agrave;n l&agrave;m việc, một chiếc ghế đơn giản v&agrave; một tủ s&aacute;ch gi&aacute;p tường l&agrave; c&oacute; một kh&ocirc;ng gian l&agrave;m việc l&yacute; tưởng</p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Mẫu ph&ograve;ng l&agrave;m việc tại nh&agrave; độc đ&aacute;o</span></h2>
                                        <p style="text-align: justify;">Nếu l&agrave;m c&ocirc;ng việc li&ecirc;n quan đến sự s&aacute;ng tạo, bạn h&atilde;y thiết kế ph&ograve;ng l&agrave;m việc của m&igrave;nh thật độc đ&aacute;o. T&ugrave;y theo đặc trưng của từng loại h&igrave;nh c&ocirc;ng việc m&agrave; bạn c&oacute; &yacute; tưởng ri&ecirc;ng cho ph&ograve;ng l&agrave;m việc của m&igrave;nh. Với những c&ocirc;ng việc đ&ograve;i hỏi sự s&aacute;ng tạo, t&acirc;m hồn bay bổng như c&aacute;c lĩnh vực nghệ thuật, s&aacute;ng t&aacute;c, nh&agrave; văn, designer&hellip;.th&igrave; bạn h&atilde;y l&ecirc;n những &yacute; tưởng ph&ugrave; hợp cho c&ocirc;ng việc của m&igrave;nh, hay đơn giản l&agrave; bố tr&iacute; ph&ograve;ng l&agrave;m việc c&oacute; c&aacute;c g&oacute;c view đẹp để tạo cảm hứng,...</p>
                                        <p style="text-align: justify;">Ngược lại đối với những người hoạt động trong c&aacute;c lĩnh vực đ&ograve;i hỏi sự tập trung cao th&igrave; cần thiết kế đơn giản để tr&aacute;nh sự ph&acirc;n t&acirc;m.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-doc-dao.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-doc-dao.jpg" class="lazy"></p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Thiết kế ph&ograve;ng l&agrave;m việc nhỏ tại nh&agrave;</span></h2>
                                        <p style="text-align: justify;">Nếu bạn chỉ c&oacute; một g&oacute;c nhỏ tại nh&agrave; d&agrave;nh cho thiết kế ph&ograve;ng l&agrave;m việc, th&igrave; h&atilde;y bố tr&iacute; kh&ocirc;ng gian thật khoa học để kh&ocirc;ng gian được đẹp v&agrave; đủ nhu cầu sử dụng.</p>
                                        <p style="text-align: justify;">Nếu căn ph&ograve;ng của bạn c&oacute; cửa sổ, h&atilde;y tận dụng điều đ&oacute; để căn ph&ograve;ng trở n&ecirc;n rộng r&atilde;i, tho&aacute;ng đ&atilde;ng hơn. Bạn chỉ cần c&oacute; một sofa đọc s&aacute;ch, một chiếc gi&aacute; s&aacute;ch, một b&agrave;n l&agrave;m việc.</p>
                                        <p style="text-align: justify;">Sau đ&oacute;, h&atilde;y bố tr&iacute; như sau: Gi&aacute; s&aacute;ch đặt 2 b&ecirc;n, sofa ph&iacute;a dưới cửa sổ v&agrave; b&agrave;n l&agrave;m việc đối diện sofa. Nhiều người th&iacute;ch k&ecirc; b&agrave;n l&agrave;m việc, b&agrave;n học dưới cửa sổ để c&oacute; nhiều &aacute;nh s&aacute;ng tự nhi&ecirc;n, tuy nhi&ecirc;n việc nh&igrave;n ra cửa sổ đ&ocirc;i khi c&oacute; thể khiến ch&uacute;ng ta ph&acirc;n t&acirc;m.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-nho-tai-nha.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-nho-tai-nha.jpg" class="lazy"></p>
                                        <p style="text-align: justify;">Đối với ph&ograve;ng kh&ocirc;ng c&oacute; cửa sổ th&igrave; phương &aacute;n b&agrave;n l&agrave;m việc k&egrave;m tủ s&aacute;ch h&igrave;nh chữ L đặt s&aacute;t g&oacute;c sẽ gi&uacute;p hạn chế g&oacute;c chết, gi&uacute;p tận dụng được kh&ocirc;ng gian một c&aacute;ch tối đa hơn.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-tuoi-sang.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-tuoi-sang.jpg" class="lazy"></p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Thiết kế văn ph&ograve;ng l&agrave;m việc tại nh&agrave; đẹp</span></h2>
                                        <p style="text-align: justify;">Nếu bạn muốn bố tr&iacute; văn ph&ograve;ng l&agrave;m việc ngay tại nh&agrave; để tiết kiệm chi ph&iacute; thu&ecirc; văn ph&ograve;ng ngo&agrave;i th&igrave; bạn c&oacute; thể tham khảo &yacute; tưởng dưới đ&acirc;y.</p>
                                        <p style="text-align: justify;">Văn ph&ograve;ng n&agrave;y c&oacute; phần d&agrave;nh cho ph&ograve;ng gi&aacute;m đốc v&agrave; ph&ograve;ng cho nh&acirc;n vi&ecirc;n.</p>
                                        <p style="text-align: justify;">&nbsp;Ph&ograve;ng d&agrave;nh cho nh&acirc;n vi&ecirc;n th&igrave; đơn giản hơn, thiết kế b&agrave;n d&agrave;i lắp dọc theo tường sẽ gọn g&agrave;ng v&agrave; linh động khi sử dụng, nếu c&oacute; th&ecirc;m hoặc bớt người chỉ cần bố tr&iacute; th&ecirc;m hoặc bớt ghế. Bố tr&iacute; th&ecirc;m kệ để đồ hoặc để t&agrave;i liệu, đồ trang tr&iacute; nữa l&agrave; đ&atilde; c&oacute; một văn ph&ograve;ng đẹp.</p>
                                        <p style="text-align: justify;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-nho.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-nho.jpg" class="lazy"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-an-tuong.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-an-tuong.jpg" class="lazy"></p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-gon-gang.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-gon-gang.jpg" class="lazy"></p>
                                        <h2 style="text-align: justify;"><span style="color:#e67e22;">Ph&ograve;ng kh&aacute;ch kết hợp ph&ograve;ng l&agrave;m việc</span></h2>
                                        <p style="text-align: justify;">Nhiều gia đ&igrave;nh th&iacute;ch kiểu ph&ograve;ng kh&aacute;ch kết hợp ph&ograve;ng l&agrave;m việc để vừa tiết kiệm kh&ocirc;ng gian, vừa gi&uacute;p nh&agrave; ở trở n&ecirc;n đẹp, sang trọng hơn.</p>
                                        <p style="text-align: center;"><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-thong-thoang.jpg" srcset="https://cms.janhome.vn/uploads/2020/08/13/phong-lam-viec-lat-san-go-cong-nghiep-thong-thoang.jpg" class="lazy"></p>
                                        <p>Tr&ecirc;n đ&acirc;y l&agrave; 15 mẫu thiết kế nội thất ph&ograve;ng l&agrave;m việc tại nh&agrave; c&oacute; sử dụng s&agrave;n gỗ c&ocirc;ng nghiệp. Ch&uacute;ng theo rất nhiều phong c&aacute;ch, từ cổ điển, hiện đại đến đơn giản. C&aacute;c bạn h&atilde;y chọn cho m&igrave;nh mẫu ph&ograve;ng l&agrave;m việc ưng &yacute; v&agrave; ứng dụng cho ng&ocirc;i nh&agrave; m&igrave;nh nh&eacute;.</p>
                                        <p style="text-align: justify;">&nbsp;</p>
                                    </div>
                                    
                                    <!--Bài viết liên quan-->
                                    <div class="my-3">
                                        <div class="row mb-3  ">
                                            <div class="col-12">
                                                <a href="#" class="h5 font-weight-bold ">Bài viết liên quan</a>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-xl-3 col-md-6 col-sm-6 col-6">
                                                <div class="item-blog-km xem-them-bai-lq">
                                                    <div class="image mb-3">
                                                        <a href="thi-cong-san-go-janmi-o120-12mm-ban-nho-tai-can-ho-cao-cap-khu-do-thi-ecopark.html"><img src="../cms.janhome.vn/uploads/thumb/2020/09/14/cong-trinh-lat-san-go-janmi-0120-dep.jpg" class="img-fluid" alt="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark" /></a>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="title h6 font-weight-bold">
                                                        <a href="thi-cong-san-go-janmi-o120-12mm-ban-nho-tai-can-ho-cao-cap-khu-do-thi-ecopark.html" title="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark">Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-sm-6 col-6">
                                                <div class="item-blog-km xem-them-bai-lq">
                                                    <div class="image mb-3">
                                                        <a href="ve-dep-thuc-te-cua-san-go-floorart-r09c-tai-p1803-toa-nha-legacy-106-nguy-nhu-kon-tum.html"><img src="../cms.janhome.vn/uploads/thumb/2020/09/12/cong-trinh-lat-san-go-floorart-r09c-chat-luong.jpg" class="img-fluid" alt="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum" /></a>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="title h6 font-weight-bold">
                                                        <a href="ve-dep-thuc-te-cua-san-go-floorart-r09c-tai-p1803-toa-nha-legacy-106-nguy-nhu-kon-tum.html" title="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum">Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-sm-6 col-6">
                                                <div class="item-blog-km xem-them-bai-lq">
                                                    <div class="image mb-3">
                                                        <a href="thi-cong-san-go-janhome-cot-xanh-jhg1208-tai-nha-anh-tung-dinh-cong.html"><img src="../cms.janhome.vn/uploads/thumb/2020/08/24/cong-trinh-lat-san-go-janhome-cot-xanh-jhg1208.jpg" class="img-fluid" alt="Thi công sàn gỗ JanHome Cốt xanh JHG1208 tại nhà Anh Tùng Định Công" /></a>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="title h6 font-weight-bold">
                                                        <a href="thi-cong-san-go-janhome-cot-xanh-jhg1208-tai-nha-anh-tung-dinh-cong.html" title="Thi công sàn gỗ JanHome Cốt xanh JHG1208 tại nhà Anh Tùng Định Công">Thi công sàn gỗ JanHome Cốt xanh JHG1208 tại nhà Anh Tùng Định Công</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-sm-6 col-6">
                                                <div class="item-blog-km xem-them-bai-lq">
                                                    <div class="image mb-3">
                                                        <a href="10-mau-san-go-cong-nghiep-van-oc-cho-tuyet-dep.html"><img src="../cms.janhome.vn/uploads/thumb/2020/08/22/10-mau-san-go-cong-nghiep-van-oc-cho-tuyet-dep.jpg" class="img-fluid" alt="10 mẫu sàn gỗ công nghiệp vân óc chó tuyệt đẹp" /></a>
                                                    </div>
                                                    <div class="">
                                                        <h5 class="title h6 font-weight-bold">
                                                        <a href="10-mau-san-go-cong-nghiep-van-oc-cho-tuyet-dep.html" title="10 mẫu sàn gỗ công nghiệp vân óc chó tuyệt đẹp">10 mẫu sàn gỗ công nghiệp vân óc chó tuyệt đẹp</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Tag-->
                                    <div class="tags">
                                        <label class="">Từ khóa:</label>
                                    </div>
                                    <!--Gửi Comment-->
                                    
                                    <div class="comment_binding">
                                        <div class="row mb-3">
                                            <div class="col-md-8 col-sm-8 col-8 ">
                                                <h5 class="font-weight-600 mb-0 mt-1">0 Bình luận</h5>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-4 text-right">
                                                <div class="search-comment">
                                                    <input class="form-control " type="text" placeholder="Search" />
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="border border-r-4 mb-4 upload-parent" id="comment-form" data-type="comment" data-object-id="96105" data-object-type="2" data-lang="vi-VN">
                                            <textarea class="form-control txt_content" rows="5" placeholder="Type your topic here"
                                            style="border: 0;" minlength="50"></textarea>
                                            <div class="border-top">
                                                <div class="form-row p-2 ">
                                                    <div class="col-xl-2 col-md-2 col-12">
                                                        <div class="position-relative form-control text-center mb-2 mb-md-0"
                                                            style="font-size: 14px;">
                                                            <img src="images/camera76b3.svg?v=uzA-a65s3aL1-wYwtH3MvhhBjkxH_9yLA4nhYQFRRyk" class="img-fluid" />
                                                            <input type="file" class="input-choose-file " accept="image/*" data-target-url="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-4 col-12">
                                                        <input type="text" style="font-size: 14px;" class="form-control mb-2 mb-md-0 txt_name" placeholder="Tên (bắt buộc)" required>
                                                    </div>
                                                    <div class="col-xl-4 col-md-4 col-12">
                                                        <input type="text" style="font-size: 14px;" class="form-control mb-2 mb-md-0 txt_phoneOrEmail" placeholder="Email (bắt buộc)" required>
                                                    </div>
                                                    <div class="col-xl-2 col-md-2 col-12">
                                                        <button class="btn btn-save px-5 mb-2 mb-md-0 send-comment w-100" data-type="comment" data-object-id="96105" data-object-type="2" data-lang="vi-VN" type="submit">Gửi</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_binding_pickup_img" style="display:none; position:relative">
                                                <div style="">
                                                    <img class="_place-img" />
                                                </div>
                                                <div class="_close_customize" style="position:absolute; top:0px; right: 0px">
                                                    <button class="_place-img-close" type="button" style="background-color: transparent; border: 0;"><i class="fal fa-times-circle"></i></button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        <div class="list-comment mb-4 comment-binding">
                                        </div>
                                        
                                    </div>
                                    <div class="comment-paging" data-total="0" data-size="10" data-object-id="96105" data-object-type="2">
                                    </div>
                                    
                                    <div class="fb-comments" data-href="https://janhome.vn/15-mau-thiet-ke-phong-lam-vien-tai-nha-co-su-dung-san-go-cong-nghiep-lat-san.html" data-numposts="5" data-width="100%"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="fb-root"></div>

                    <!--Modal chọn khu vực-->
                    <div class="modal jan-modal fade" id="modal-khu-vuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <h6 class="modal-title font-weight-bold">Khu vực</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <select id="location-selectbox" class="form-control department-location">
                                        <option value="22">Hà Nội</option>
                                        <option value="550">Bắc Giang</option>
                                        <option value="654">Bắc Ninh</option>
                                        <option value="18">Cao Bằng</option>
                                        <option value="19">Đà Nẵng</option>
                                        <option value="20">Đắk Lắk</option>
                                        <option value="21">Điện Biên</option>
                                        <option value="549">Gia Lai</option>
                                        <option value="23">Hà Tĩnh</option>
                                        <option value="24">Hải Dương</option>
                                        <option value="548">Hải Phòng</option>
                                        <option value="25">Hồ Chí Minh</option>
                                        <option value="26">Hòa Bình</option>
                                        <option value="27">Hưng Yên</option>
                                        <option value="1180">Nghệ An</option>
                                        <option value="703">Nha Trang</option>
                                        <option value="551">Phú Thọ</option>
                                        <option value="653">Quảng Bình</option>
                                        <option value="28">Quảng Ninh</option>
                                        <option value="29">Sơn La</option>
                                        <option value="1242">Thái Bình</option>
                                        <option value="30">Thái Nguyên</option>
                                        <option value="700">Thanh hoá</option>
                                        <option value="1202">Tuyên Quang</option>
                                        <option value="1243">Vĩnh Phúc</option>
                                    </select>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-save save-location" data-dismiss="modal" data-toggle="modal"
                                    data-target="#modal-xn">
                                    Xác nhận
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal jan-modal fade" id="modal-xn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="mb-3">
                                        <img src="images/logoe209.png?v=1.0.0" class="img-fluid" />
                                    </div>
                                    <h5 class="mb-3 font-weight-bold">Xách nhận thành công!</h5>
                                    <div>
                                        <img src="images/checke209.svg?v=1.0.0" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center border-0">
                                    <button type="button" class="btn btn-save px-lg-5" data-dismiss="modal">Hoàn tất</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal liên hệ -->
                    <form class="modal jan-modal fade" id="modal-lien-he" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-0">
                                    <h6 class="modal-title font-weight-bold">Liên hệ bảo hành</h6>
                                </div>
                                <div class="modal-body">
                                    <div class="">
                                        <h6 class="font-weight-bold">Khu vực</h6>
                                        <div class="mb-3">
                                            <select id="location-selectbox" class="form-control department-location">
                                                <option value="22">Hà Nội</option>
                                                <option value="550">Bắc Giang</option>
                                                <option value="654">Bắc Ninh</option>
                                                <option value="18">Cao Bằng</option>
                                                <option value="19">Đà Nẵng</option>
                                                <option value="20">Đắk Lắk</option>
                                                <option value="21">Điện Biên</option>
                                                <option value="549">Gia Lai</option>
                                                <option value="23">Hà Tĩnh</option>
                                                <option value="24">Hải Dương</option>
                                                <option value="548">Hải Phòng</option>
                                                <option value="25">Hồ Chí Minh</option>
                                                <option value="26">Hòa Bình</option>
                                                <option value="27">Hưng Yên</option>
                                                <option value="1180">Nghệ An</option>
                                                <option value="703">Nha Trang</option>
                                                <option value="551">Phú Thọ</option>
                                                <option value="653">Quảng Bình</option>
                                                <option value="28">Quảng Ninh</option>
                                                <option value="29">Sơn La</option>
                                                <option value="1242">Thái Bình</option>
                                                <option value="30">Thái Nguyên</option>
                                                <option value="700">Thanh hoá</option>
                                                <option value="1202">Tuyên Quang</option>
                                                <option value="1243">Vĩnh Phúc</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-control form-group h-100">
                                        <div class="dropdown h-100" style="word-wrap:break-word">
                                            <!--Trigger-->
                                            <button class="btn btn-primary dropdown-toggle cust-btn-sec h-100" style="font-size:16px;" type="button" id="dropdownMenu1-1"
                                            data-toggle="dropdown">
                                            Chọn Showroom
                                            </button>
                                            <!--Menu-->
                                            <div class="dropdown-menu dropdown-primary cust-popbh" id="your-custom-id">
                                                <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                    Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                    <input type="checkbox" checked />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                    Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                    <input type="checkbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                    Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                    <input type="checkbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                    Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                    <input type="checkbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                    Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                    <input type="checkbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                    Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                    <input type="checkbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="txt-name-bh" class="form-control" placeholder="Họ và tên (bắt buộc)" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="txt-phone-bh" class="form-control" placeholder="Số điện thoại" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="txt-yc-bh" class="form-control" placeholder="Yêu cầu" />
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" rows="5" class="form-control" id="txt-nd-bh" placeholder="Nội dung chi tiết"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-save">
                                    Xác nhận
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Modal showrom gần nhất -->
                    <form class="modal jan-modal fade" id="modal-showromm-ganhat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  cust-modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bdb-modal">
                                    <h6 class="modal-title font-weight-bold">Kiểm tra siêu thị có hàng trưng bày</h6>
                                    <div class="">
                                        <select id="location-selectbox" class="form-control department-location">
                                            <option value="22">Hà Nội</option>
                                            <option value="550">Bắc Giang</option>
                                            <option value="654">Bắc Ninh</option>
                                            <option value="18">Cao Bằng</option>
                                            <option value="19">Đà Nẵng</option>
                                            <option value="20">Đắk Lắk</option>
                                            <option value="21">Điện Biên</option>
                                            <option value="549">Gia Lai</option>
                                            <option value="23">Hà Tĩnh</option>
                                            <option value="24">Hải Dương</option>
                                            <option value="548">Hải Phòng</option>
                                            <option value="25">Hồ Chí Minh</option>
                                            <option value="26">Hòa Bình</option>
                                            <option value="27">Hưng Yên</option>
                                            <option value="1180">Nghệ An</option>
                                            <option value="703">Nha Trang</option>
                                            <option value="551">Phú Thọ</option>
                                            <option value="653">Quảng Bình</option>
                                            <option value="28">Quảng Ninh</option>
                                            <option value="29">Sơn La</option>
                                            <option value="1242">Thái Bình</option>
                                            <option value="30">Thái Nguyên</option>
                                            <option value="700">Thanh hoá</option>
                                            <option value="1202">Tuyên Quang</option>
                                            <option value="1243">Vĩnh Phúc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-body" style="background-color: #F6F6F7;">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="modal-title font-weight-bold">Đăng ký xem hàng trưng bày tại</h6>
                                            <p class="_picking_address"></p>
                                            <div class="d-flex">
                                                <label class="label-checkbox mb-2 pr-4">
                                                    Anh
                                                    <input type="radio" name="_cus_gender" checked required />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox  mb-2 ">
                                                    Chị
                                                    <input type="radio" name="_cus_gender" />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="txt-name-bh-1" class="form-control" placeholder="Họ và tên" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="txt-phone-bh-1" class="form-control" placeholder="Số điện thoại" required />
                                            </div>
                                            <h6 class="modal-title font-weight-bold">Thời gian ghé</h6>
                                            <div class="form-group">
                                            </div>
                                            <div class="customer form-control">
                                                <div class="cus-name">
                                                    <label for="name-input" class="cus-ic-box">
                                                        <i class="fal fa-calendar-alt "></i>
                                                    </label>
                                                    <input type="text" name="txtName" id="txt-time-input" class="w-100 ip-css" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 cust-bg-mdal">
                                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                <input type="checkbox" checked />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                <input type="checkbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                <input type="checkbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="label-checkbox mb-2 pr-4 dropdown-item cust-drop-item">
                                                Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội.(Bên cạnh Big C Hồ Gươm)
                                                <input type="checkbox" />
                                                <span class="checkmark"></span>
                                            </label>
                                            <div>
                                            </div>
                                        </div>
                                        <div class="w-100 mt-3 modal-footer justify-content-between">
                                            <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-save">
                                            Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social-button">
                        <div class="social-button-content">
                            <a rel="nofollow" href="tel: 1800.0022" class="call-icon" rel="nofollow">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="animated alo-circle"></div>
                                <div class="animated alo-circle-fill"></div>
                                <span>1800.0022</span>
                            </a>
                            <!-- Load Facebook SDK for JavaScript -->
                            <div id="fb-root"></div>
                            <!-- Your Chat Plugin code -->
                            <div class="fb-customerchat"
                                attribution=setup_tool
                                page_id="1608844646076677"
                                theme_color="#ef822a"
                                logged_in_greeting="Janhome xin chào ! Chúng tôi có thể giúp gì cho bạn?"
                                logged_out_greeting="Janhome xin chào ! Chúng tôi có thể giúp gì cho bạn?">
                            </div>
                            <a rel="nofollow" target="_blank" href="https://zalo.me/0902480222" class="zalo">
                                <i class="fa" aria-hidden="true">
                                <img src="../stc-zaloprofile.zdn.vn/pc/v1/images/zalo_sharelogo.png" width="25px" />
                                </i>
                                <span>Zalo: 0902480222</span>
                            </a>
                        </div>
                    </div>
                    <div class="btn-fixed">
                        <div class="text-center mb-3">
                            <a rel="nofollow" href="javascript:;" onclick=" topFunction() " class="">
                                <img src="images/scroll3860.svg?v=1" class="img-fluid " />
                            </a>
                        </div>
                    </div>
                    <div id="cover-spin"></div>
                    <div id="full-load-img" class="modal modal-img">
                        <button class="close-load-img"><i class="far fa-window-close"></i></button>
                        <img class="modal-content modal-content-full-img?v=1" id="img01">
                        <div id="caption"></div>
                    </div>
                    
                    <div style="display:none" itemscope itemtype="https://schema.org/WebSite">
                        <meta itemprop="url" content="janhome.vn" />
                        <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
                            <meta itemprop="target" content="janhome.vn/Product/Get?keyword={search_term_string}" />
                            <input itemprop="query-input" type="text" name="search_term_string" required />
                            <input type="submit" />
                        </form>
                    </div>
                    <script type="application/ld+json">
                    {
                    "@context": "https://schema.org",
                    "@type": "Organization",
                    "url": "janhome.vn",
                    "logo": "/2020/04/28/logo.png"
                    }
                    </script>
                    <script type="application/ld+json">
                    {
                    "@context": "https://schema.org",
                    "@type": "Store",
                    "image": [
                    "https://cms.janhome.vn//uploads/2020/06/05/san-go-cong-nghiep.jpg"
                    ],
                    "@id": "janhome.vn",
                    "name": "Janhome",
                    "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Tầng 3 Nhà C2 Vinaconex 1 289A Khuất Duy Tiến, Q Cầu giấy, TP Hà Nội",
                    "addressLocality": "Hà Nội",
                    "addressRegion": "HN",
                    "postalCode": "10000",
                    "addressCountry": "VN"
                    },
                    "review": {
                    "@type": "Review",
                    "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                    },
                    "author": "admin"
                    },
                    "url": "janhome.vn",
                    "telephone": "1800.0022",
                    "servesCuisine": "VietNam",
                    "priceRange": "$$$",
                    "acceptsReservations": "True"
                    }
                    </script>
                    <script>    document.addEventListener("DOMContentLoaded", function(event) {     gtag('config', 'AW-830211279');       jQuery('[href^="tel:"]').click(function() {          gtag('event', 'conversion', {'send_to': 'AW-830211279/tVQrCMnmsYYBEM-J8IsD'});     });   }); </script>
                    <script type="text/javascript" src="vendor/jquery-3.3.1.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/jquery-ui.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="vendor/popper.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="vendor/bootstrap.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="vendor/swiper.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="vendor/wow.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/libs/momentjs/momentJSe209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/libs/daterangepicker-master/daterangepickere209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/libs/paginationjs/paginationJSe209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/libs/vakata-jstree-6dce227/jstree.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/appe209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/core/coree209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/controller/menuControllere209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/controller/orderControllere209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/controller/extraControllere209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/libs/yall-js/dist/yall.mine209.js?v=1.0.0"></script>
                    <script type="text/javascript" src="js/libs/jquery.lazy-master/jquery.lazye209.js?v=1.0.0"></script>
                    <script type="text/javascript">
                    //document.addEventListener("DOMContentLoaded", yall);
                    $('.lazy').Lazy({
                    scrollDirection: 'vertical',
                    effect: 'fadeIn',
                    visibleOnly: true,
                    onError: function (element) {
                    console.log('error loading ' + element.data('src'));
                    }
                    });
                    </script>
                    <script>
                    $(document).ready(function () {
                    $('.save-location').off('click').on('click',
                    function () {
                    var currentUrl = window.location.href;
                    var location_id = $('#location-selectbox').val();
                    var location_name = $('#location-selectbox option:selected').html();
                    localStorage.setItem("_LocationId", location_id);
                    localStorage.setItem("_LocationName", location_name);
                    var params = {
                    location_id: localStorage.getItem("_LocationId"),
                    location_name: localStorage.getItem("_LocationName"),
                    currentUrl: currentUrl
                    }
                    $.post('/Cookie/ChangeCurrentLocation',
                    params,
                    function () {
                    console.log(100);
                    location.reload(true);
                    })
                    });
                    sessionStorage.setItem("current-js-tree", localStorage.getItem("jstree"));
                    $('.tree-menu-mobile').jstree({
                    "core": {
                    "animation": 100,
                    "check_callback": true,
                    "multiple": false, // no multiselection
                    "themes": {
                    "dots": false, // no connecting dots between dots
                    "icons": false
                    },
                    },
                    "plugins": ["state", "wholerow", "types"],
                    'types': {
                    'default': {
                    'icon': 'fa fa-angle-right fa-fw'
                    },
                    'f-open': {
                    'icon': 'fa fa-folder-open fa-fw'
                    },
                    'f-closed': {
                    'icon': 'fa fa-folder fa-fw'
                    }
                    }
                    });
                    if (window.location.pathname == "" || window.location.pathname === "index.html") {
                    localStorage.setItem("jstree", "");
                    }
                    //var jstreelocal = JSON.parse(localStorage.getItem("jstree"));
                    //if (jstreelocal != "" || jstreelocal !== 'undefinde') {
                    //}
                    //var current_selected_node =
                    $('.tree-menu-mobile').on("select_node.jstree", function (e, data) {
                    var r = data.node;
                    //console.log(r);
                    var nodesToKeepOpen = [];
                    // get all parent nodes to keep open
                    $('#' + data.node.id).parents('.jstree-node').each(function () {
                    nodesToKeepOpen.push(this.id);
                    });
                    // add current node to keep open
                    nodesToKeepOpen.push(data.node.id);
                    // close all other nodes
                    $('.jstree-node').each(function () {
                    if (nodesToKeepOpen.indexOf(this.id) === -1) {
                    $(".tree-menu-mobile").jstree().close_node(this.id);
                    }
                    })
                    if (r.state.opened == false && r.children.length > 0) {
                    $('.tree-menu-mobile').jstree("toggle_node", data.node);
                    return false;
                    }
                    if (r.state.opened == true || r.children.length == 0) {
                    var id = r.id;
                    var url = $('#' + id).find('.span-tree-node').data('url');
                    var old_node = $(id).find('.jstree-clicked');
                    if (sessionStorage.getItem('current-js-tree') == "" || sessionStorage.getItem('current-js-tree') === "undefined") {
                    window.location.href = url;
                    } else {
                    var ss = JSON.parse(sessionStorage.getItem('current-js-tree'));
                    console.log(ss);
                    if (ss == null) {
                    window.location.href = url;
                    }
                    var seleced_current = ss.state.core.selected;
                    if (seleced_current.length > 0) {
                    if (seleced_current[0] != id) {
                    //console.log("Khac roi nay");
                    //sessionStorage.setItem("current-js-tree", localStorage.getItem("jstree"));
                    window.location.href = url;
                    }
                    if (seleced_current[0] == id) {
                    //console.log("Trung roi nay")
                    }
                    }
                    }
                    //if (ss == "1") {
                    //}
                    return false;
                    }
                    });
                    $('#txt-time-input').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    //minYear: 1901,
                    //maxYear: parseInt(moment().format('YYYY'), 10),
                    locale: {
                    "format": "DD/MM/YYYY"
                    }
                    //}, function (start, end, label) {
                    //    var years = moment().diff(start, 'years');
                    //    alert("You are " + years + " years old!");
                    });
                    var url = window.location.pathname;
                    $('.menu-cate-mobile div a[href="' + url + '"]').addClass('active');
                    $('.find-product').keydown(function (e) {
                    if ($(this).val().length < 2) {
                    $(".suggest-text.suggest-text-2").hide();
                    $(".suggest-text.suggest-text-1").show();
                    } else {
                    $(".suggest-text.suggest-text-2").show();
                    $(".suggest-text.suggest-text-1").hide();
                    $(this).autocomplete({
                    delay: 300,
                    source: function (request, response) {
                    $.ajax({
                    url: "/Product/Get",
                    dataType: "json",
                    data: {
                    keyword: request.term
                    },
                    success: function (data) {
                    //debugger
                    response(data);
                    }
                    });
                    },
                    minLength: 1,
                    }).autocomplete("instance")._renderItem = function (div, item) {
                    //--debugger
                    $(".suggest-text.suggest-text-2").empty();
                    var lstItem = "";
                    lstItem += "<div class='h6 px-3'>Sản phẩm gợi ý</div>"
                    $.each(item, function (index, im) {
                    var name = im.name.charAt(0).toUpperCase() + im.name.slice(1);
                    lstItem += '<div class="item-cart"><div class="image-product"><img src="' + im.avatar + '" class="" /></div>';
                    lstItem += '<div class="text px-2 "> <h6 class="name-product mb-1"><a href="' + im.url + '">' + name + '</a></h6>';
                    if (im.discountPrice.length > 0) {
                    lstItem += '<div class="price d-inline-block">' + im.discountPrice + 'đ ' + im.unit + '</div>';
                    }
                    if (im.discountPrice.price > 0) {
                    lstItem += ' <div class=" price-old d-inline-block">' + im.price + 'đ ' + im.unit + '</div>';
                    }
                lstItem += "</div></div>";
                });
                $(div).removeClass("ui-menu");
                return $(lstItem).appendTo(".suggest-text.suggest-text-2");
                };
                if (e.which == 13) {
                //console.log(data);
                var kw = $(this).val();
                var index = 1;
                var size = 24;
                var p = {
                keyword: kw,
                index: index,
                size: size
                }
                console.log(p);
                sessionStorage.setItem("esSearch", JSON.stringify(p));
                window.location.href = "tim-kiem.html";
                //$.get("/Product/GetElasticAll?keyword="+kw+"&index="+index+"&size="+size+"", function (response) {
                //    console.log(response);
                //})
                //$("#go").click();
                }
                $('.es-search-button').off('click').on('click', function () {
                var kw = $(this).closest('.input-group').find('.find-product').val();
                var index = 1;
                var size = 24;
                var p = {
                keyword: kw,
                index: index,
                size: size
                }
                console.log(p);
                sessionStorage.setItem("esSearch", JSON.stringify(p));
                window.location.href = "tim-kiem.html";
                })
                }
                })
                $('.es-search-button').off('click').on('click', function () {
                var kw = $(this).closest('.input-group').find('.find-product').val();
                var index = 1;
                var size = 24;
                var p = {
                keyword: kw,
                index: index,
                size: size
                }
                console.log(p);
                sessionStorage.setItem("esSearch", JSON.stringify(p));
                window.location.href = "tim-kiem.html";
                })
                $('.find-product').on("focusout", function () {
                setTimeout(function () {
                $(".suggest-text.suggest-text-2").hide();
                $(".suggest-text.suggest-text-1").hide();
                }, 1000);
                });
                $('.find-product').on("focus", function () {
                if ($(this).val().length < 3) {
                $(".suggest-text.suggest-text-1").show();
                }
                });
                $('.cust-ag').off('click').on('click', function () {
                var url_image = $(this).data('original');
                if (typeof url_image === 'undefined')
                url_image = $(this).data('src');
                //var url_image = $(this).parent().data('url');
                $('#img01').attr('src', url_image);
                $('.modal-img').modal('show');
                $('.modal-backdrop').replaceWith("");
                })
                $('.close-load-img').off('click').on('click', function () {
                $('.modal-img').modal('hide');
                })
                $('#modal-id').on('shown.bs.modal', function () {
                $(".modal-backdrop.in").hide();
                })
                })
                </script>
                <script>
                window.fbAsyncInit = function () {
                setTimeout(function () {
                FB.init({
                xfbml: true,
                version: 'v7.0'
                });
                }, 12000);
                };
                setTimeout(function () {
                (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = '../connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
                }, 1200);
                </script>
                <!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98267825-1"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-98267825-1'); </script>              
            </body>
            <!-- Mirrored from janhome.vn/15-mau-thiet-ke-phong-lam-vien-tai-nha-co-su-dung-san-go-cong-nghiep-lat-san.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 08:01:20 GMT -->
        </html>
        @stop