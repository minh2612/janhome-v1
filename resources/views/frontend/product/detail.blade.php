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
                
                <div class="container my-3">
                    
                    <ol style="display:none" itemscope itemtype="https://schema.org/BreadcrumbList">
                        ›
                        <li itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a itemscope itemtype="https://schema.org/WebPage"
                                itemprop="item" itemid="janhome.vn/san-go-cong-nghiep"
                                href="janhome.vn/san-go-cong-nghiep.html">
                                <span itemprop="name">Sàn gỗ công nghiệp</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        &gt;            <li itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a itemscope itemtype="https://schema.org/WebPage"
                                itemprop="item" itemid="janhome.vn/san-go-viet-nam"
                                href="janhome.vn/san-go-viet-nam.html">
                                <span itemprop="name">Sàn gỗ Việt Nam</span>
                            </a>
                            <meta itemprop="position" content="3" />
                        </li>
                        &gt;            <li itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem">
                            <a itemscope itemtype="https://schema.org/WebPage"
                                itemprop="item" itemid="janhome.vn/san-go-florton"
                                href="janhome.vn/san-go-florton.html">
                                <span itemprop="name">Sàn gỗ Florton</span>
                            </a>
                            <meta itemprop="position" content="4" />
                        </li>
                    </ol>
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb jan-breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="san-go-cong-nghiep.html">Sàn gỗ công nghiệp</a></li>
                            <li class="breadcrumb-item"><a href="san-go-viet-nam.html">Sàn gỗ Việt Nam</a></li>
                            <li class="breadcrumb-item"><a href="san-go-florton.html">Sàn gỗ Florton</a></li>
                        </ol>
                    </nav>
                </div>
                <section class="product-detail" data-id="44575" data-properties="">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-lg-9 col-md-9 col-12 align-self-center">
                                <h1 class="title mb-3 mb-lg-0 d-inline-block mr-4 ">Sàn gỗ Florton FL669-1 </h1>
                                <div class="small d-inline-block p-2 ">
                                    <div class="star-rating d-inline-block  text-center mb-3" data-id="44575" data-rate-type="1">
                                        
                                        <div class="star-rating  text-center mb-3" data-id="44575" data-type="1">
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                            <i class="fas fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-inline-block text-primary px-2">0 Rate</div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 facebook-btn">
                                
                                <div class="fb-like" data-href="https://janhome.vn/san-go-florton-fl669.html" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9 col-lg-12 col-md-7 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-12 pr-lg-0 ">
                                        <div class="slide-product-detail mb-4">
                                            <div class="swiper-container gallery-top">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="img-magnifier-container">
                                                            <img id="myimage-1" src="../cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-1.jpg" width="100%" height="auto" alt="Sàn gỗ Florton FL669-1">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <img src="../cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-1.jpg" class="img-fluid w-100 " alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oqjcrRjE3oI" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mb-BAkEpFv4" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-link  btn-sm mb-2" data-toggle="modal"
                                                data-target="#modal-slide-imge">
                                                Xem kích thước lớn
                                                </button>
                                            </div>
                                            <div class="swiper-container gallery-thumbs px-3">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="image">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2018/03/san-go-florton-fl669-1.jpg" class="img-fluid w-100 " alt="Sàn gỗ Florton FL669-1" />
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image p-3">
                                                            <a href="https://drive.google.com/open?id=14FkNfkWh_0dgzaOA1BUA-Lreca7q1q4F" target="_blank">
                                                                <img src="images/download-con-thumbf430.svg?v=XdaOvOrrIh8LwF_tskYwkMAYdy0LaDeMFB84LXqK7Yo" class="img-fluid w-100 " alt="" />
                                                            </a>
                                                        </div>
                                                        Download Brochure
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image p-3">
                                                            <img src="images/change/360do-icon-thumb98a3.svg?v=4e9kXT2F3MV1IMeUeYNlpotkzlymjIQAXizYqfMO05o" class="img-fluid w-100 " alt="" />
                                                        </div>
                                                        Hình 360 độ
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="image p-3">
                                                            <img src="images/youtube-icon-thumb9f97.svg?v=JYyePGuaK5qmu-3M_SvUVjoQ2YqgMILV8vnWLct9dpc" class="img-fluid w-100 " alt="" />
                                                        </div>
                                                        Video
                                                    </div>
                                                </div>
                                                <div class="swiper-button-prev" tabindex="0" role="button"
                                                    aria-label="Previous slide">
                                                    <button class="btn btn-link color-828282">
                                                    <i class="fas fa-chevron-left"
                                                    aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                                <div class="swiper-button-next" tabindex="0" role="button"
                                                    aria-label="Previous slide">
                                                    <button class="btn btn-link color-828282 ">
                                                    <i class="fas fa-chevron-right"
                                                    aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-12 pl-xl-4">
                                        <label style="font-size: 14px;" class="d-inline-block">Giá tại</label>
                                        <div class="dropdown d-inline-block select-local">
                                            <a class="btn btn-link dropdown-toggle" href="javascript:;" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Hà Nội
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="213000" data-location-id="18" data-product-id="44575" data-unit="m2">Cao Bằng</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="19" data-product-id="44575" data-unit="m2">Đà Nẵng</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="20" data-product-id="44575" data-unit="m2">Đắk Lắk</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="21" data-product-id="44575" data-unit="m2">Điện Biên</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="198000" data-location-id="22" data-product-id="44575" data-unit="m2">Hà Nội</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="218000" data-location-id="23" data-product-id="44575" data-unit="m2">Hà Tĩnh</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="203000" data-location-id="24" data-product-id="44575" data-unit="m2">Hải Dương</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="198000" data-location-id="25" data-product-id="44575" data-unit="m2">Hồ Chí Minh</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="26" data-product-id="44575" data-unit="m2">Hòa Bình</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="203000" data-location-id="27" data-product-id="44575" data-unit="m2">Hưng Yên</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="28" data-product-id="44575" data-unit="m2">Quảng Ninh</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="29" data-product-id="44575" data-unit="m2">Sơn La</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="30" data-product-id="44575" data-unit="m2">Thái Nguyên</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="203000" data-location-id="548" data-product-id="44575" data-unit="m2">Hải Phòng</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="549" data-product-id="44575" data-unit="m2">Gia Lai</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="550" data-product-id="44575" data-unit="m2">Bắc Giang</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="551" data-product-id="44575" data-unit="m2">Phú Thọ</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="653" data-product-id="44575" data-unit="m2">Quảng Bình</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="654" data-product-id="44575" data-unit="m2">Bắc Ninh</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="198000" data-location-id="700" data-product-id="44575" data-unit="m2">Thanh hoá</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="703" data-product-id="44575" data-unit="m2">Nha Trang</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="1180" data-product-id="44575" data-unit="m2">Nghệ An</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="1202" data-product-id="44575" data-unit="m2">Tuyên Quang</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="1242" data-product-id="44575" data-unit="m2">Thái Bình</a>
                                                <a class="dropdown-item location-item" href="javascript:;" data-price="0" data-sale-price="208000" data-location-id="1243" data-product-id="44575" data-unit="m2">Vĩnh Phúc</a>
                                            </div>
                                        </div>
                                        <div class="price-product-detail">
                                            <span class="new" id="price-sale">
                                                <span id="price-sale-detail" data-sale-price="198000">198.000đ</span> <span>đ/m2</span>
                                            </span>
                                            <span class="tag"></span>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="font-weight-600 text-uppercase align-self-center mr-3">
                                                Còn hàng
                                            </div>
                                            <div class="group-amount d-flex align-self-center">
                                                <button class="btn" id="minus" type="button">
                                                <i class="fas fa-minus" aria-hidden="true"></i>
                                                </button>
                                                <input type="number" class="form-control mx-2" id="quantity" value="1">
                                                <button class="btn " id="plus" type="button">
                                                <i class="fas fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="box-km mb-3">
                                            <h6 class="font-weight-600 mb-3">Khuyến mại</h6>
                                            <label class="label-checkbox">
                                                Miễn phí công TƯ VẤN, KHẢO SÁT tại nhà
                                                <a href="vui-tet-thieu-nhi-1-6-hoan-hi-nhan-qua-khuyen-mai-lon-cua-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html"> - (<span class="extra-link-promotion">Xem chi tiết</span>)</a>
                                                <input type="checkbox" class="choose_promotion" checked="checked" data-promotion-id="2" data-is-discount="0" data-type="free-setup" data-value="5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="label-checkbox">
                                                Đơn hàng trên 15tr hoặc trên 70m2 thì miễn phí vận chuyển bán kính 15km
                                                <a href="vui-tet-thieu-nhi-1-6-hoan-hi-nhan-qua-khuyen-mai-lon-cua-janhome-he-thong-ban-le-vat-lieu-hoan-thien-tai-kho.html"> - (<span class="extra-link-promotion">Xem chi tiết</span>)</a>
                                                <input type="checkbox" class="choose_promotion" checked="checked" data-promotion-id="8" data-is-discount="0" data-type="free-setup" data-value="0">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="mr-2">
                                                <img src="images/change/caculator-iconf128.svg?v=J5AZEEi7duf0VCkNyom8I_SH--9B1T2is2S9WdiRXw8" class="img-fluid" />
                                            </div>
                                            <div class="">
                                                <div>Lát sàn gỗ nhà bạn chi phí hết bao nhiêu? </div>
                                                <a href="javascript:void(0)"
                                                    data-id="44575"
                                                    data-material="1"
                                                    data-price="198000"
                                                    data-sale-price="198000"
                                                    data-avatar="../cms.janhome.vn/uploads/thumb/2018/03/san-go-florton-fl669-1.jpg"
                                                    data-spec-name="Kích thước"
                                                    data-spec-value="12    x    128    x    1221"
                                                    data-title="Sàn gỗ Florton FL669-1"
                                                class="btn-link font-weight-600" id="picking-estimates">Tính toán chi phí dự kiến ngay</a>
                                            </div>
                                        </div>
                                        <div class="area_order mb-3">
                                            <div class="row">
                                                <div class="col-sm-6 col-12 pr-sm-2">
                                                    <a href="javascript:void(0)" class="btn btn-order w-100  mb-3" id="buy-now" data-product-id="44575" data-quantit="10000">
                                                        <img src="images/Cartae69.svg?v=ZRc4SSL-epYZ6iz_rSu7x0fmZGGpnXJBp7W7vn2o99s" class="img-fluid mr-2" />MUA HÀNG NGAY
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 col-12 pl-sm-2  ">
                                                    <button href="#" class="btn btn-order-2 w-100   mb-3" id="add-to-cart"  data-product-id="44575">THÊM VÀO GIỎ</button>
                                                </div>
                                                <div class="col-12  ">
                                                    <div class="bg-tuvan">
                                                        <label class="mb-3">
                                                            <i class="fas fa-phone-alt mr-2"></i> TƯ VẤN MUA HÀNG
                                                        </label>
                                                        <div class="form-row">
                                                            <div class="col-9">
                                                                <input type="text" class="form-control" placeholder="SĐT">
                                                            </div>
                                                            <div class="col-3">
                                                                <button href="#" class="btn btn-outline-light w-100  text-uppercase  ">Gửi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-km product-suggest mb-3" id="list_combo">
                                            <h6 class="font-weight-600 mb-3 text-uppercase">Thường được mua cùng</h6>
                                            <label class="label-checkbox d-flex">
                                                <div class="image-product mr-2">
                                                    <img src="../cms.janhome.vn/uploads/thumb/2018/03/san-go-florton-fl669-1.jpg" class="" alt="Sàn gỗ Florton FL669-1" />
                                                </div>
                                                <div class="align-self-center mr-2">Sàn gỗ Florton FL669-1</div>
                                                <div class="align-self-center font-weight-600 ml-auto nowrap" id="default_price">198.000đ đ/m2</div>
                                                <input id="default-sale-price" class="choose_combo" data-product-id="44575" data-sale-price="198000" type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div id="_binding_combo">
                                                <label class="label-checkbox d-flex">
                                                    <div class="image-product mr-2">
                                                        <img src="../cms.janhome.vn/uploads/thumb/2019/07/xop-bac-lot-san-janmi-ixpe-2mm.jpg" class="" alt="Xốp bạc lót sàn JANMI IXPE 2mm" />
                                                    </div>
                                                    <div class="align-self-center mr-2"><a href="xop-bac-lot-san-janmi-2mm.html" alt="Xốp bạc lót sàn JANMI IXPE 2mm">Xốp bạc lót sàn JANMI IXPE 2mm</a></div>
                                                    <div class="align-self-center font-weight-600 ml-auto nowrap combo-item-price">35.000đ đ/m2</div>
                                                    <input class="choose_combo" data-sale-price="35000" data-product-id="84338" type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox d-flex">
                                                    <div class="image-product mr-2">
                                                        <img src="../cms.janhome.vn/uploads/thumb/2017/11/phao-janmi-jm01.jpg" class="" alt="Phào nhựa JANMI JM01" />
                                                    </div>
                                                    <div class="align-self-center mr-2"><a href="phao-nhua-janmi-jm01.html" alt="Phào nhựa JANMI JM01">Phào nhựa JANMI JM01</a></div>
                                                    <div class="align-self-center font-weight-600 ml-auto nowrap combo-item-price">20.000đ đ/m2</div>
                                                    <input class="choose_combo" data-sale-price="20000" data-product-id="34731" type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="label-checkbox d-flex">
                                                    <div class="image-product mr-2">
                                                        <img src="../cms.janhome.vn/uploads/thumb/2020/04/phao-san-go-jm11.jpg" class="" alt="Phào nhựa JANMI JM11" />
                                                    </div>
                                                    <div class="align-self-center mr-2"><a href="phao-nhua-janmi-jm11.html" alt="Phào nhựa JANMI JM11">Phào nhựa JANMI JM11</a></div>
                                                    <div class="align-self-center font-weight-600 ml-auto nowrap combo-item-price">20.000đ đ/m2</div>
                                                    <input class="choose_combo" data-sale-price="20000" data-product-id="95745" type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="text-right">
                                                <div class="mb-3">Tổng dự toán:<span class="font-weight-600 color-EE7D22 mx-2" id="total_combo_price" data-total="273000">273.000đ đ</span></div>
                                                <button role="button" class="btn btn-save " id="add-cart-combo">Thêm <span id="count_combo">4</span> sản phẩm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-12 col-md-5 col-sm-12 col-12 d-none d-md-block">
                                <a type="button" class="btn border btn-sm w-100 mb-3 py-2 btn-sm btn-link find-showroom" >
                                    <i class="fas fa-map-marker-alt mr-2" style="color: #007DFF;"></i>Tìm showroom Gần bạn nhất
                                </a>
                                <div class="policy-new border border-r-4 py-2 px-3 mb-3">
                                    <div class="item">
                                        <div class="icon"><img src="../cms.janhome.vn/uploads/2020/06/18/price%201.png" class="img-fluid" /></div>
                                        <div class="text">
                                            <p>Gi&aacute; b&aacute;n tại kho chưa bao gồm&nbsp;lắp đặt vận chuyển&nbsp;<span style="color:#3498db;">(Xem chi tiết)</span></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon"><img src="../cms.janhome.vn/uploads/2020/06/18/stock%201.png" class="img-fluid" /></div>
                                        <div class="text">
                                            <p>Nhập khẩu v&agrave; ph&acirc;n phối trực tiếp - H&agrave;ng c&oacute; sẵn tại kho</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon"><img src="../cms.janhome.vn/uploads/2020/06/19/location.png" class="img-fluid" /></div>
                                        <div class="text">
                                            <p>Hệ thống trung t&acirc;m&nbsp;Janhome to&agrave;n quốc <span style="color:#3498db;">( Xem hệ thống Janhome)</span></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon"><img src="../cms.janhome.vn/uploads/2020/06/19/contact.png" class="img-fluid" /></div>
                                        <div class="text">
                                            <p>Đội ngũ tư vấn tr&ecirc;n 10 năm kinh nghiệm</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon"><img src="../cms.janhome.vn/uploads/2020/06/19/label.png" class="img-fluid" /></div>
                                        <div class="text">
                                            <p>Sản phẩm được&nbsp;đảm bảo nguồn gốc xuất xứ<span style="color:#3498db;"> (Xem chi tiết nguồn gốc)</span></p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon"><img src="../cms.janhome.vn/uploads/2020/06/19/shield.png" class="img-fluid" /></div>
                                        <div class="text">
                                            <p>Ch&iacute;nh s&aacute;ch bảo h&agrave;nh tốt nhất - Bảo h&agrave;nh sản phẩm&nbsp;bất k&igrave; tr&ecirc;n to&agrave;n bộ hệ thống&nbsp;<a href="chi-nhanh.html"><span style="color:#3498db;">( Hệ thống bảo h&agrave;nh)</span></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Sản phẩm tương tự-->
                        <div class="mb-4 d-none d-md-block">
                            <div class="row mb-3  ">
                                <div class="col-8">
                                    <a href="#" class="h5 font-weight-bold ">Sản phẩm tương tự</a>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="san-go-florton.html" class="link-view-more">
                                        *Xem thêm <i class="fas fa-chevron-right ml-1 small"
                                        aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                                    <div class="item-product" data-id="22240" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="san-go-florton-fl666.html">
                                                <img src="../cms.janhome.vn/uploads/thumb/2017/09/san-go-florton-fl666-moi-1.jpg" class="img-fluid  w-100" alt="Sàn gỗ Florton FL666-1" />
                                            </a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <h5 class="title">
                                        <a href="san-go-florton-fl666.html" title="Sàn gỗ Florton FL666-1">
                                            Sàn gỗ Florton FL666-1
                                        </a>
                                        </h5>
                                        <div class="text-left">
                                            <div class="price-new">
                                                198.000đ đ
                                            </div>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 12    x    128    x    1221
                                        </div>
                                        <div class="review d-flex">
                                            <div class="color-FFAB1B mr-2">
                                                0,0/5<i class="fas fa-star ml-1"></i>
                                            </div>
                                            <div class="color-828282">
                                                0 đánh giá
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                                    <div class="item-product" data-id="22226" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="san-go-florton-fl662.html">
                                                <img src="../cms.janhome.vn/uploads/thumb/2017/09/san-go-florton-fl662-1-1.jpg" class="img-fluid  w-100" alt="Sàn gỗ Florton FL662-1" />
                                            </a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <h5 class="title">
                                        <a href="san-go-florton-fl662.html" title="Sàn gỗ Florton FL662-1">
                                            Sàn gỗ Florton FL662-1
                                        </a>
                                        </h5>
                                        <div class="text-left">
                                            <div class="price-new">
                                                198.000đ đ
                                            </div>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 12    x    128    x    1221
                                        </div>
                                        <div class="review d-flex">
                                            <div class="color-FFAB1B mr-2">
                                                0,0/5<i class="fas fa-star ml-1"></i>
                                            </div>
                                            <div class="color-828282">
                                                0 đánh giá
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                                    <div class="item-product" data-id="22211" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="san-go-florton-fl661.html">
                                                <img src="../cms.janhome.vn/uploads/thumb/2017/09/san-go-florton-fl661-1.jpg" class="img-fluid  w-100" alt="Sàn gỗ Florton FL661-1" />
                                            </a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <h5 class="title">
                                        <a href="san-go-florton-fl661.html" title="Sàn gỗ Florton FL661-1">
                                            Sàn gỗ Florton FL661-1
                                        </a>
                                        </h5>
                                        <div class="text-left">
                                            <div class="price-new">
                                                198.000đ đ
                                            </div>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 12    x    128    x    1221
                                        </div>
                                        <div class="review d-flex">
                                            <div class="color-FFAB1B mr-2">
                                                0,0/5<i class="fas fa-star ml-1"></i>
                                            </div>
                                            <div class="color-828282">
                                                0 đánh giá
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                                    <div class="item-product" data-id="22196" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="san-go-florton-flo208.html">
                                                <img src="../cms.janhome.vn/uploads/thumb/2017/09/san-go-florton-flo208.jpg" class="img-fluid  w-100" alt="Sàn gỗ Florton FLO208" />
                                            </a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <h5 class="title">
                                        <a href="san-go-florton-flo208.html" title="Sàn gỗ Florton FLO208">
                                            Sàn gỗ Florton FLO208
                                        </a>
                                        </h5>
                                        <div class="text-left">
                                            <div class="price-new">
                                                198.000đ đ
                                            </div>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 12    x    123    x    802
                                        </div>
                                        <div class="review d-flex">
                                            <div class="color-FFAB1B mr-2">
                                                0,0/5<i class="fas fa-star ml-1"></i>
                                            </div>
                                            <div class="color-828282">
                                                0 đánh giá
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                                    <div class="item-product" data-id="9063" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="san-go-florton-fl305.html">
                                                <img src="../cms.janhome.vn/uploads/thumb/2017/04/san-go-florton-fl305.jpg" class="img-fluid  w-100" alt="Sàn gỗ Florton FL305" />
                                            </a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <h5 class="title">
                                        <a href="san-go-florton-fl305.html" title="Sàn gỗ Florton FL305">
                                            Sàn gỗ Florton FL305
                                        </a>
                                        </h5>
                                        <div class="text-left">
                                            <div class="price-new">
                                                198.000đ đ
                                            </div>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 12    x    130    x    808
                                        </div>
                                        <div class="review d-flex">
                                            <div class="color-FFAB1B mr-2">
                                                0,0/5<i class="fas fa-star ml-1"></i>
                                            </div>
                                            <div class="color-828282">
                                                0 đánh giá
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                                    <div class="item-product" data-id="9061" data-properties="">
                                        <div class="tag-1">
                                        </div>
                                        <div class="image">
                                            <a href="san-go-florton-fl606.html">
                                                <img src="../cms.janhome.vn/uploads/thumb/2017/04/san-go-florton-fl606-moi.jpg" class="img-fluid  w-100" alt="Sàn gỗ Florton FL606" />
                                            </a>
                                            <div class="tag-2">
                                                <img src="#" class="img-fluid tag-2-thumb" />
                                            </div>
                                        </div>
                                        <h5 class="title">
                                        <a href="san-go-florton-fl606.html" title="Sàn gỗ Florton FL606">
                                            Sàn gỗ Florton FL606
                                        </a>
                                        </h5>
                                        <div class="text-left">
                                            <div class="price-new">
                                                198.000đ đ
                                            </div>
                                        </div>
                                        <div class="size small mb-1">
                                            Kích thước: 12    x    130    x    808
                                        </div>
                                        <div class="review d-flex">
                                            <div class="color-FFAB1B mr-2">
                                                0,0/5<i class="fas fa-star ml-1"></i>
                                            </div>
                                            <div class="color-828282">
                                                0 đánh giá
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Sản phẩm tương tự end-->
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                                <div class="d-md-none">
                                    <div class="pb-2 border-bottom h5 font-weight-600 mb-3">
                                        <i class="far fa-clock mr-2"></i> Chi tiết kỹ thuật
                                    </div>
                                    <div class="tech-detail border py-2 border-r-4 px-3 mb-4">
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Code
                                            </div>
                                            <div class=" ml-auto text-right">
                                                Florton-FL669-1
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Unit
                                            </div>
                                            <div class="ml-auto  text-right">
                                                m2
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Kích thước
                                            </div>
                                            <div class="ml-auto  text-right">
                                            12    x    128    x    1221                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Ứng dụng
                                            </div>
                                            <div class="ml-auto  text-right">
                                            Lát sàn phòng khách, phòng ngủ, biệt thự, chung cư...                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Đóng hộp
                                            </div>
                                            <div class="ml-auto  text-right">
                                            16 Tấm/ Hộp (2.5006m2)                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Cấp độ chống mài mòn
                                            </div>
                                            <div class="ml-auto  text-right">
                                            AC4                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Độ dày
                                            </div>
                                            <div class="ml-auto  text-right">
                                            12 mm                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <div class="pb-2 border-bottom h5 font-weight-600 mb-3">
                                        Mô tả sản phẩm
                                    </div>
                                    <div class="content">
                                        <p>&nbsp;</p>
                                        <p><strong><a href="san-pham/san-go-florton-fl669.html">S&agrave;n gỗ Florton FL669-1</a></strong> l&agrave; m&atilde; s&agrave;n gỗ Florton c&oacute; m&agrave;u x&aacute;m, họa tiết v&acirc;n gỗ r&otilde; n&eacute;t v&agrave; nổi bật, tạo cảm gi&aacute;c ch&acirc;n thật như s&agrave;n gỗ tự nhi&ecirc;n</p>
                                        <p>&nbsp;</p>
                                        <p>S&agrave;n gỗ được sản xuất tại Việt Nam theo c&ocirc;ng nghệ hiện đại đạt ti&ecirc;u chuẩn Ch&acirc;u &Acirc;u n&ecirc;n c&oacute; chất lượng tốt nhưng gi&aacute; th&agrave;nh hợp l&yacute; với đại đa số người ti&ecirc;u d&ugrave;ng Việt nam</p>
                                        <p><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/07/27/san-go-florton-fl669-1-voi-tong-mau-an-tuong.jpg" srcset="https://cms.janhome.vn/uploads/2020/07/27/san-go-florton-fl669-1-voi-tong-mau-an-tuong.jpg" class="lazy"></p>
                                        <p>S&agrave;n gỗ Florton FL669-1 với t&ocirc;ng m&agrave;u ấn tượng</p>
                                        <p><strong>Ưu điểm của s&agrave;n gỗ Florton&nbsp;FL669:</strong></p>
                                        <ul class="maintain-ul">
                                            <li>Độ ổn định của s&agrave;n gỗ cao, kh&ocirc;ng bị biến dạng khi thời tiết thay đổi</li>
                                            <li>Khả năng chống trầy xước tốt, chịu lực cao v&agrave; kh&ocirc;ng bị cong v&ecirc;nh hay nứt g&atilde;y khi bị va chạm mạnh.</li>
                                            <li>Sản phẩm c&oacute; Khả năng chịu nước ở mức trung b&igrave;nh, n&ecirc;n s&agrave;n gỗ chỉ th&iacute;ch hợp lắp đặt ở những nơi tho&aacute;ng m&aacute;t để tuổi thọ sử dụng l&acirc;u d&agrave;i hơn.</li>
                                            <li>V&aacute;n s&agrave;n Florton FL669 kh&ocirc;ng bị bay m&agrave;u, m&agrave;i m&ograve;n, chịu ẩm tốt, th&iacute;ch hợp để sử dụng cho m&ocirc;i trường tại Việt Nam.</li>
                                            <li>Đ&acirc;y l&agrave; s&agrave;n gỗ th&acirc;n thiện an to&agrave;n cho sức khỏe người sử dụng.</li>
                                            <li>&nbsp;Dễ d&agrave;ng l&agrave;m sạch bụi bẩn với khăn kh&ocirc; v&agrave; nước tẩy rửa chuy&ecirc;n dụng.</li>
                                            <li>Hệ thống h&egrave;m kh&oacute;a gi&uacute;p khả năng li&ecirc;n kết chặt chẽ hơn, lắp đặt dễ d&agrave;ng nhanh ch&oacute;ng, tiết kiệm thời gian.</li>
                                        </ul>
                                        <p><strong><a href="san-go-florton.html">S&agrave;n gỗ Florton</a></strong> thuộc s&agrave;n gỗ c&ocirc;ng nghiệp gi&aacute; rẻ nhưng chất lượng kh&ocirc;ng thua k&eacute;m g&igrave; những s&agrave;n gỗ nhập khẩu kh&aacute;c. Janhome &ndash; Hệ thống b&aacute;n lẻ vật liệu ho&agrave;n thiện nội thất tại kho l&agrave; nh&agrave; ph&acirc;n phối số lượng lớn cung cấp sản phẩm cho mọi đối tượng sử dụng, ngo&agrave;i ra c&ograve;n c&oacute; nhiều những thương hiệu s&agrave;n gỗ nổi tiếng được nhập khẩu ch&iacute;nh h&atilde;ng. Janhome &ndash; nh&agrave; cung cấp s&agrave;n gỗ đ&atilde; c&oacute; uy t&iacute;n hơn 10 năm tr&ecirc;n thị trường. H&atilde;y đến với Janhome để chọn lựa những <strong><a href="san-go-cong-nghiep.html">s&agrave;n gỗ c&ocirc;ng nghiệp</a></strong> ch&iacute;nh h&atilde;ng cũng như được kiểm chứng chất lượng tận tay tận mắt.</p>
                                        <p>Một số h&igrave;nh ảnh thực tế s&agrave;n gỗ Florton FL669:</p>
                                        <p><img src="_/images/gray.html" style="max-width:90%" data-src="https://cms.janhome.vn/uploads/2020/07/27/san-go-florton-fl669-1-duoc-thi-cong-thuc-te-tai-phong-gym.jpg" srcset="https://cms.janhome.vn/uploads/2020/07/27/san-go-florton-fl669-1-duoc-thi-cong-thuc-te-tai-phong-gym.jpg" class="lazy"></p>
                                        <p>S&agrave;n gỗ Florton FL669-1 được thi c&ocirc;ng tại ph&ograve;ng Gym</p>
                                        <figure aria-describedby="caption-attachment-44593" class="wp-caption aligncenter" id="attachment_44593" style=""><img alt="Ảnh thực tế mã Florton FL669 sau thi công" class="lazy wp-image-44593 size-full cust-ag" data-original="https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong.jpg" height="602" sizes="(max-width: 800px) 100vw, 800px" srcset="https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong.jpg 800w, https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong-300x226.jpg 300w, https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong-768x578.jpg 768w" width="800" src="_/images/gray.html" data-src="">
                                            <figcaption class="wp-caption-text" id="caption-attachment-44593"><noscript><img class="wp-image-44593 size-full lazy" src="_/images/gray.html" data-lazy-src="https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong.jpg" alt="Ảnh thực tế mã Florton FL669 sau thi công" width="800" height="602" data-lazy-srcset="https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong.jpg 800w, https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong-300x226.jpg 300w, https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong-768x578.jpg 768w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" srcset="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs="><noscript><img class="wp-image-44593 size-full lazy" src="_/images/gray.html" alt="Ảnh thực tế mã Florton FL669 sau thi công" width="800" height="602" srcset="https://cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong.jpg" sizes="(max-width: 800px) 100vw, 800px" data-src="../cms.janhome.vn/uploads/2018/03/anh-thuc-te-ma-florton-fl669-sau-thi-cong.jpg"></noscript>Ảnh thực tế m&atilde; Florton FL669 sau thi c&ocirc;ng</noscript></figcaption>
                                        </figure>
                                        <figure aria-describedby="caption-attachment-44594" class="wp-caption aligncenter" id="attachment_44594" style=""><img alt="Sàn gỗ Florton FL669 có tone màu sáng và sang trọng" class="lazy wp-image-44594 size-full cust-ag" data-original="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong.jpg" height="602" sizes="(max-width: 800px) 100vw, 800px" srcset="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong.jpg 800w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong-300x226.jpg 300w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong-768x578.jpg 768w" width="800" src="_/images/gray.html" data-src="">
                                            <figcaption class="wp-caption-text" id="caption-attachment-44594"><noscript><img class="wp-image-44594 size-full lazy" src="_/images/gray.html" data-lazy-src="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong.jpg" alt="Sàn gỗ Florton FL669 có tone màu sáng và sang trọng" width="800" height="602" data-lazy-srcset="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong.jpg 800w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong-300x226.jpg 300w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong-768x578.jpg 768w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" srcset="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs="><noscript><img class="wp-image-44594 size-full lazy" src="_/images/gray.html" alt="Sàn gỗ Florton FL669 có tone màu sáng và sang trọng" width="800" height="602" srcset="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong.jpg" sizes="(max-width: 800px) 100vw, 800px" data-src="../cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-co-tone-mau-sang-va-sang-trong.jpg"></noscript>S&agrave;n gỗ Florton FL669 c&oacute; tone m&agrave;u s&aacute;ng v&agrave; sang trọng</noscript></figcaption>
                                        </figure>
                                        <figure aria-describedby="caption-attachment-44595" class="wp-caption aligncenter" id="attachment_44595" style=""><img alt="Sàn gỗ Florton FL669 vân gỗ tự nhiên" class="lazy wp-image-44595 size-full cust-ag" data-original="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien.jpg" height="602" sizes="(max-width: 800px) 100vw, 800px" srcset="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien.jpg 800w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien-300x226.jpg 300w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien-768x578.jpg 768w" width="800" src="_/images/gray.html" data-src="">
                                            <figcaption class="wp-caption-text" id="caption-attachment-44595"><noscript><img class="wp-image-44595 size-full lazy" src="_/images/gray.html" data-lazy-src="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien.jpg" alt="Sàn gỗ Florton FL669 vân gỗ tự nhiên" width="800" height="602" data-lazy-srcset="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien.jpg 800w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien-300x226.jpg 300w, https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien-768x578.jpg 768w" data-lazy-sizes="(max-width: 800px) 100vw, 800px" data-src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" srcset="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs="><noscript><img class="wp-image-44595 size-full lazy" src="_/images/gray.html" alt="Sàn gỗ Florton FL669 vân gỗ tự nhiên" width="800" height="602" srcset="https://cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien.jpg" sizes="(max-width: 800px) 100vw, 800px" data-src="../cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-van-go-tu-nhien.jpg"></noscript>S&agrave;n gỗ Florton FL669 v&acirc;n gỗ tự nhi&ecirc;n</noscript></figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="text-center my-4">
                                    <button class="btn btn-outline-view-more" onclick="expandProductDes()">
                                    Xem thêm<i class="fas fa-chevron-down ml-2 "></i>
                                    </button>
                                </div>
                                <!--Phụ kiện đi kèm end-->
                                <!--Đánh giá-->
                                <div class="row mb-3">
                                    <div class="col-md-8 col-sm-8 col-8 ">
                                        <h5 class="font-weight-600 mb-0">Đánh giá sản phẩm</h5>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-4 text-right">
                                        <button type="button" class="btn btn-save" data-toggle="modal"
                                        data-target="#modal-danh-gia">
                                        Đánh giá ngay
                                        </button>
                                    </div>
                                </div>
                                <!--Rating-->
                                <div class="border-r-4 border py-3 mb-4">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                            <div class="star-average p-3 border-right">
                                                <h2 class="mb-1 font-weight-600">0</h2>
                                                <div class="star-rating d-inline-block  text-center mb-3">
                                                    
                                                    <div class="star-rating  text-center mb-3" data-id="44575" data-type="1">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div><a href="javascript:;" class="btn-link">0 đánh giá</a></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                            <aside class="rating-left">
                                                <div class="star-line">
                                                    <span class="star-type left align-self-center">5 </span>
                                                    <div class="star-bar align-self-center">
                                                        <div class="star-barsub" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                    <span class="star-type right align-self-center ">0%</span>
                                                </div>
                                                <div class="star-line">
                                                    <span class="star-type left align-self-center">4</span>
                                                    <div class="star-bar align-self-center">
                                                        <div class="star-barsub" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                    <span class="star-type right align-self-center ">0%</span>
                                                </div>
                                                <div class="star-line">
                                                    <span class="star-type left align-self-center">3</span>
                                                    <div class="star-bar align-self-center">
                                                        <div class="star-barsub" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                    <span class="star-type right align-self-center ">0%</span>
                                                </div>
                                                <div class="star-line">
                                                    <span class="star-type left align-self-center">2</span>
                                                    <div class="star-bar align-self-center">
                                                        <div class="star-barsub" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                    <span class="star-type right align-self-center ">0%</span>
                                                </div>
                                                <div class="star-line">
                                                    <span class="star-type left align-self-center">1</span>
                                                    <div class="star-bar align-self-center">
                                                        <div class="star-barsub" style="width: 0%;">
                                                        </div>
                                                    </div>
                                                    <span class="star-type right align-self-center ">0%</span>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
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
                                    <form class="border border-r-4 mb-4 upload-parent" id="comment-form" data-type="comment" data-object-id="44575" data-object-type="1" data-lang="vi-VN">
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
                                                    <button class="btn btn-save px-5 mb-2 mb-md-0 send-comment w-100" data-type="comment" data-object-id="44575" data-object-type="1" data-lang="vi-VN" type="submit">Gửi</button>
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
                                <div class="comment-paging" data-total="0" data-size="10" data-object-id="44575" data-object-type="1">
                                </div>
                                <!--Đánh giá end-->
                                <div class="fb-comments" data-href="https://janhome.vn/san-go-florton-fl669.html" data-numposts="5" data-width="100%"></div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12 ">
                                <!--Chi tiết kỹ thuật-->
                                <div class="d-none d-md-block">
                                    <div class="pb-2 border-bottom h5 font-weight-600 mb-3">
                                        <i class="far fa-clock mr-2"></i> Chi tiết kỹ thuật
                                    </div>
                                    <div class="tech-detail border py-2 border-r-4 px-3 mb-4">
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Code
                                            </div>
                                            <div class=" ml-auto text-right">
                                                Florton-FL669-1
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Unit
                                            </div>
                                            <div class="ml-auto  text-right">
                                                m2
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Kích thước
                                            </div>
                                            <div class="ml-auto  text-right">
                                            12    x    128    x    1221                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Ứng dụng
                                            </div>
                                            <div class="ml-auto  text-right">
                                            Lát sàn phòng khách, phòng ngủ, biệt thự, chung cư...                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Đóng hộp
                                            </div>
                                            <div class="ml-auto  text-right">
                                            16 Tấm/ Hộp (2.5006m2)                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Cấp độ chống mài mòn
                                            </div>
                                            <div class="ml-auto  text-right">
                                            AC4                                        </div>
                                        </div>
                                        <div class="item ">
                                            <div class="label text-uppercase font-weight-600">
                                                Độ dày
                                            </div>
                                            <div class="ml-auto  text-right">
                                            12 mm                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Tin mới-->
                                <div class="lastest-news ">
                                    <div class="pb-2 border-bottom h5 font-weight-600 mb-3">
                                        <img src="images/lastest-icf002.svg?v=GoDAQeasQ5QDI54pnNLz0oiRudBV9A0ehf63EdEb_1Y" class="img-fluid mr-2" /> Tin mới
                                    </div>
                                    <div class="list-right mb-4">
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="vi-gach-go-nhua-lat-san-nha-tam-ban-cong-san-thuong-sieu-chiu-nuoc.html" title="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/18/vi-gach-go-nhua-lat-san-ban-cong-san-thuong-sieu-chiu-nuoc.jpg" class="img-fluid" alt="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title">
                                                    <a href="vi-gach-go-nhua-lat-san-nha-tam-ban-cong-san-thuong-sieu-chiu-nuoc.html" title="Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước">Vỉ gạch gỗ nhựa lát sàn nhà tắm, ban công, sân thượng siêu chịu nước</a>
                                                    </h6>
                                                    <div class="time">
                                                        18/09/2020 10:45
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="6-bi-quyet-tao-nen-mot-khong-gian-song-yen-binh-de-chiu.html" title="6 bí quyết tạo nên một không gian sống yên bình, dễ chịu">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/16/bi-quyet-tao-nen-mot-khong-gian-song-binh-yen-de-chiu.jpg" class="img-fluid" alt="6 bí quyết tạo nên một không gian sống yên bình, dễ chịu">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title">
                                                    <a href="6-bi-quyet-tao-nen-mot-khong-gian-song-yen-binh-de-chiu.html" title="6 bí quyết tạo nên một không gian sống yên bình, dễ chịu">6 bí quyết tạo nên một không gian sống yên bình, dễ chịu</a>
                                                    </h6>
                                                    <div class="time">
                                                        16/09/2020 12:01
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="chi-tiet-ve-tieu-chuan-e0-e1-cua-san-go-cong-nghiep.html" title="Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/15/chi-tiet-ve-tieu-chuan-e0-e1-cua-san-go-cong-nghiep.jpg" class="img-fluid" alt="Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title">
                                                    <a href="chi-tiet-ve-tieu-chuan-e0-e1-cua-san-go-cong-nghiep.html" title="Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp">Chi tiết về tiêu chuẩn E0, E1 của sàn gỗ công nghiệp</a>
                                                    </h6>
                                                    <div class="time">
                                                        15/09/2020 02:18
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="thi-cong-san-go-janmi-o120-12mm-ban-nho-tai-can-ho-cao-cap-khu-do-thi-ecopark.html" title="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/14/cong-trinh-lat-san-go-janmi-0120-dep.jpg" class="img-fluid" alt="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title">
                                                    <a href="thi-cong-san-go-janmi-o120-12mm-ban-nho-tai-can-ho-cao-cap-khu-do-thi-ecopark.html" title="Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark">Thi công sàn gỗ Janmi O120 12mm bản nhỏ tại căn hộ cao cấp khu đô thị Ecopark</a>
                                                    </h6>
                                                    <div class="time">
                                                        14/09/2020 10:33
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="ve-dep-thuc-te-cua-san-go-floorart-r09c-tai-p1803-toa-nha-legacy-106-nguy-nhu-kon-tum.html" title="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/12/cong-trinh-lat-san-go-floorart-r09c-chat-luong.jpg" class="img-fluid" alt="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title">
                                                    <a href="ve-dep-thuc-te-cua-san-go-floorart-r09c-tai-p1803-toa-nha-legacy-106-nguy-nhu-kon-tum.html" title="Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum">Vẻ đẹp thực tế của sàn gỗ floorart R09c tại P1803 tòa nhà LeGacy - 106 Nguy Như Kon Tum</a>
                                                    </h6>
                                                    <div class="time">
                                                        12/09/2020 10:12
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="tim-hieu-ve-tieu-chuan-ac-cua-san-go-thong-so-ac3-ac4-ac5-co-y-nghia-gihtml.html" title="Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2020/09/11/tieu-chuan-ac-cua-san-go-cong-nghiep.jpg" class="img-fluid" alt="Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title">
                                                    <a href="tim-hieu-ve-tieu-chuan-ac-cua-san-go-thong-so-ac3-ac4-ac5-co-y-nghia-gihtml.html" title="Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?">Tìm hiểu về tiêu chuẩn AC của sàn gỗ. Thông số AC3, AC4, AC5 có ý nghĩa gì?</a>
                                                    </h6>
                                                    <div class="time">
                                                        11/09/2020 03:29
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Sản phẩm ưu chuộng-->
                                <div class="list-menu-right">
                                    <div class="heading mb-3">
                                        <img src="images/icon-spuc6e21.svg?v=Ekha1wOyGV0F79MsQJFeGzHD6ER7s06hLCjkaHd1sto" class="img-fluid mr-2" />Sản phẩm ưa chuộng
                                    </div>
                                    <div class="list lastest-news">
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="san-go-janmi-ca11-12mm.html" title="Sàn gỗ JANMI CA11 - 12mm">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2017/04/san-go-janmi-ca11-nho-12mm-4.jpg" class="img-fluid" alt="/san-go-janmi-ca11-12mm.html">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title mb-1">
                                                    <a href="san-go-janmi-ca11-12mm.html" title="Sàn gỗ JANMI CA11 - 12mm">Sàn gỗ JANMI CA11 - 12mm</a>
                                                    </h6>
                                                    <div class="price color-EE7D22 font-weight-bold mb-1" style="font-size: 18px;">
                                                        495.000đ đ/m2
                                                    </div>
                                                    <div class="d-flex small">
                                                        <div class="color-FFAB1B mr-2">
                                                            5,0/5<i class="fas fa-star ml-1" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            1 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="san-go-janmi-o39.html" title="Sàn gỗ JANMI O39">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2017/04/san-go-janmi-o39-8mm-1.jpg" class="img-fluid" alt="/san-go-janmi-o39.html">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title mb-1">
                                                    <a href="san-go-janmi-o39.html" title="Sàn gỗ JANMI O39">Sàn gỗ JANMI O39</a>
                                                    </h6>
                                                    <div class="price color-EE7D22 font-weight-bold mb-1" style="font-size: 18px;">
                                                        315.000đ đ/m2
                                                    </div>
                                                    <div class="d-flex small">
                                                        <div class="color-FFAB1B mr-2">
                                                            5,0/5<i class="fas fa-star ml-1" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            1 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="san-go-go-900mm.html" title="Sàn gỗ Gõ đỏ 900mm">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2017/08/san-go-go-do-900mm-490-600x600.jpg" class="img-fluid" alt="/san-go-go-900mm.html">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title mb-1">
                                                    <a href="san-go-go-900mm.html" title="Sàn gỗ Gõ đỏ 900mm">Sàn gỗ Gõ đỏ 900mm</a>
                                                    </h6>
                                                    <div class="price color-EE7D22 font-weight-bold mb-1" style="font-size: 18px;">
                                                        1.200.000đ đ/m2
                                                    </div>
                                                    <div class="d-flex small">
                                                        <div class="color-FFAB1B mr-2">
                                                            5,0/5<i class="fas fa-star ml-1" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            1 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="san-nhua-galaxy-msw1011.html" title="Sàn nhựa Galaxy MSW1011">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2017/08/san-nhua-galaxy-msw1011-1076-600x600.jpg" class="img-fluid" alt="/san-nhua-galaxy-msw1011.html">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title mb-1">
                                                    <a href="san-nhua-galaxy-msw1011.html" title="Sàn nhựa Galaxy MSW1011">Sàn nhựa Galaxy MSW1011</a>
                                                    </h6>
                                                    <div class="price color-EE7D22 font-weight-bold mb-1" style="font-size: 18px;">
                                                        165.000đ đ/m2
                                                    </div>
                                                    <div class="d-flex small">
                                                        <div class="color-FFAB1B mr-2">
                                                            5,0/5<i class="fas fa-star ml-1" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            1 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-3 pr-0">
                                                    <div class="image">
                                                        <a href="san-go-ecofloor-0240-6.html" title="Sàn gỗ Ecofloor 0240-6">
                                                            <img src="../cms.janhome.vn/uploads/thumb/2017/08/san-go-ecofoor-0240-6-8mm.jpg" class="img-fluid" alt="/san-go-ecofloor-0240-6.html">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-9 col-9">
                                                    <h6 class="title mb-1">
                                                    <a href="san-go-ecofloor-0240-6.html" title="Sàn gỗ Ecofloor 0240-6">Sàn gỗ Ecofloor 0240-6</a>
                                                    </h6>
                                                    <div class="price color-EE7D22 font-weight-bold mb-1" style="font-size: 18px;">
                                                        138.000đ đ/m2
                                                    </div>
                                                    <div class="d-flex small">
                                                        <div class="color-FFAB1B mr-2">
                                                            5,0/5<i class="fas fa-star ml-1" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="color-828282">
                                                            2 đánh giá
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-menu-right">
                                    <div class="heading mb-3">
                                        <img src="images/sale-tag-icon693e.svg?v=be32C1CQrFxhxn3ZHg-2rsr0Zzd-RRRvkhoGZyO23IU" class="img-fluid mr-2" />Tags
                                    </div>
                                    <div class="list  list-tags-right">
                                        <div class="item">
                                            <a href="the/san-go-cong-nghiep.html">sàn gỗ công nghiệp</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua.html">sàn nhựa</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-railflex.html">sàn nhựa railflex</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tham-long-ngan.html">thảm lông ngắn</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go.html">sàn gỗ</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tham-bi.html">thảm bỉ</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-ngoai-troi.html">sàn gỗ ngoài trời</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-viet-nam.html">sàn gỗ việt nam</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/op-tuong-trong-nha.html">ốp tường trong nhà</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-florton.html">sàn gỗ florton</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tham-tho-nhi-ky.html">thảm thổ nhĩ kỳ</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-thanh-ly.html">sàn gỗ thanh lý</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-thai-lan.html">sàn gỗ thái lan</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-%c4%91uc.html">sàn gỗ đức</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-timberman.html">sàn gỗ timberman</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-malaysia.html">sàn gỗ malaysia</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-hornitex.html">sàn gỗ hornitex</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-aimaru.html">sàn nhựa aimaru</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-wilson.html">sàn gỗ wilson</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tham-trai-san.html">thảm trải sàn</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-eurohome.html">sàn gỗ eurohome</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/rem-cau-vong.html">rèm cầu vồng</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tam-op-nano.html">tấm ốp nano</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-thai-green.html">sàn gỗ thái green</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-woodman.html">san go woodman</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tam-op-tuong-tran.html">tấm ốp tường trần</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-ecofloor.html">sàn gỗ ecofloor</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/rem-cua.html">rèm cửa</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-gia-re-nhat.html">sàn nhựa giá rẻ nhất</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-gia-re-ha-noi.html">sàn nhựa giá rẻ hà nội</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-gia-re-hcm.html">sàn nhựa giá rẻ hcm</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-gia-sieu-re.html">sàn nhựa giá siêu rẻ</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-masfloor.html">sàn gỗ masfloor</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-galaxy.html">sàn nhựa galaxy</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-wineo.html">sàn gỗ wineo</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-florton.html">sàn nhựa florton</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-florton-spc.html">sàn nhựa florton spc</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-thaixin.html">sàn gỗ thaixin</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-ngoai-troi-biowood.html">sàn gỗ ngoài trời biowood</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-tu-dan.html">sàn nhựa tự dán</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-galaxy-plus.html">sàn nhựa galaxy plus</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-kendax.html">sàn gỗ kendax</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-thairoyal.html">sàn gỗ thairoyal</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-go-janmi.html">sàn gỗ janmi</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-thanh-ly.html">sàn nhựa thanh lý</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-dan-keo.html">sàn nhựa dán keo</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-nhua-ecost.html">san nhua ecost</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/tam-op-tuong-florton.html">tấm ốp tường florton</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-tre-cong-nghiep.html">sàn tre công nghiệp</a>
                                        </div>
                                        <div class="item">
                                            <a href="the/san-tre-ali-ha-noi.html">sàn tre ali hà nội</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Modal đánh giá-->
                <div class="modal jan-modal fade" id="modal-danh-gia" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content" id="rating-form" data-type="rating" data-object-id="44575" data-object-type="1" data-lang="vi-VN">
                            <div class="modal-header border-bottom-0">
                                <h6 class="modal-title font-weight-bold">Đánh giá ngay</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6 class="font-weight-600 mb-4">Bạn cảm thấy sản phẩm như thế nào?(chọn sao nhé):</h6>
                                <div class="star-rating-dynamic h4 text-center mb-4">
                                    <i class="fas fa-star checked"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="mb-4 ">
                                    <div class="form-row p-2 ">
                                        <div class="col-12">
                                            <textarea class="form-control mb-3 txt_content " minlength="50" rows="4"
                                            placeholder="Type your topic here"></textarea>
                                        </div>
                                        <div class="col-2">
                                            <div class="position-relative form-control text-center mb-2 mb-md-0"
                                                style="font-size: 14px;">
                                                <img src="images/camera76b3.svg?v=uzA-a65s3aL1-wYwtH3MvhhBjkxH_9yLA4nhYQFRRyk" class="img-fluid">
                                                <input type="file" class="input-choose-file " accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <input type="text" style="font-size: 14px;height: calc(1.5em + .75rem + 2px);"
                                            class="form-control mb-2 mb-md-0 txt_name" placeholder="Tên (bắt buộc)" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" style="font-size: 14px;height: calc(1.5em + .75rem + 2px);"
                                            class="form-control mb-2 mb-md-0 txt_phoneOrEmail" placeholder="Email (bắt buộc)" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn " data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-save" id="btn-save-xn">
                                Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal " id="modal-slide-imge" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-xl  mt-0" role="document">
                        <div class="modal-content px-3">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="row no-gutters justify-content-center">
                                <div class="col-xl-7 col-lg-7 col-md-8 col-12">
                                    <div class="slide-product-detail-2  mb-4">
                                        <div class="swiper-container gallery-top-2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="image">
                                                        <img src="../cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-1.jpg" class="img-fluid w-100 " alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="image">
                                                        <img src="../cms.janhome.vn/uploads/2018/03/san-go-florton-fl669-1.jpg" class="img-fluid w-100 " alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="image">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oqjcrRjE3oI" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="image">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mb-BAkEpFv4" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs-2 px-4">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="image">
                                                        <img src="../cms.janhome.vn/uploads/thumb/2018/03/san-go-florton-fl669-1.jpg" class="img-fluid w-100 " alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="image p-3">
                                                        <a href="https://drive.google.com/open?id=14FkNfkWh_0dgzaOA1BUA-Lreca7q1q4F" target="_blank">
                                                            <img src="images/download-con-thumbf430.svg?v=XdaOvOrrIh8LwF_tskYwkMAYdy0LaDeMFB84LXqK7Yo" class="img-fluid w-100 " alt="" />
                                                        </a>
                                                    </div>
                                                    Download Brochure
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="image p-3">
                                                        <img src="images/change/360do-icon-thumb98a3.svg?v=4e9kXT2F3MV1IMeUeYNlpotkzlymjIQAXizYqfMO05o" class="img-fluid w-100 " alt="" />
                                                    </div>
                                                    Hình 360 độ
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="image p-3">
                                                        <img src="images/youtube-icon-thumb9f97.svg?v=JYyePGuaK5qmu-3M_SvUVjoQ2YqgMILV8vnWLct9dpc" class="img-fluid w-100 " alt="" />
                                                    </div>
                                                    Video
                                                </div>
                                            </div>
                                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                                                <button class="btn btn-link color-828282">
                                                <i class="fas fa-chevron-left"
                                                aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Previous slide">
                                                <button class="btn btn-link color-828282 ">
                                                <i class="fas fa-chevron-right"
                                                aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            
            <script type="text/javascript">
            function magnify(imgID, zoom) {
            var img, glass, w, h, bw;
            img = document.getElementById(imgID);
            /*create magnifier glass:*/
            glass = document.createElement("DIV");
            glass.setAttribute("class", "img-magnifier-glass");
            /*insert magnifier glass:*/
            img.parentElement.insertBefore(glass, img);
            /*set background properties for the magnifier glass:*/
            glass.style.backgroundImage = "url('" + img.src + "')";
            glass.style.backgroundRepeat = "no-repeat";
            glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
            bw = 3;
            w = glass.offsetWidth / 2;
            h = glass.offsetHeight / 2;
            /*execute a function when someone moves the magnifier glass over the image:*/
            glass.addEventListener("mousemove", moveMagnifier);
            img.addEventListener("mousemove", moveMagnifier);
            /*and also for touch screens:*/
            glass.addEventListener("touchmove", moveMagnifier);
            img.addEventListener("touchmove", moveMagnifier);
            function moveMagnifier(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            x = pos.x;
            y = pos.y;
            /*prevent the magnifier glass from being positioned outside the image:*/
            if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
            if (x < w / zoom) { x = w / zoom; }
            if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
            if (y < h / zoom) { y = h / zoom; }
            /*set the position of the magnifier glass:*/
            glass.style.left = (x - w) + "px";
            glass.style.top = (y - h) + "px";
            /*display what the magnifier glass "sees":*/
            glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
            }
            function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return { x: x, y: y };
            }
            }
            var cnt = $(".img-magnifier-container").length;
            for (var i = 1; i < cnt; i++) {
            var idIMG = "myimage" + i.toString();
            magnify(idIMG, 2);
            }
            </script>
            <script type="text/javascript" src="js/libs/momentjs/momentJS8d01.js?v=8rj4CnOaFIZlLaVMN4pprckx3lvc1KfRhGuM0MtspBg"></script>
            <script type="text/javascript" src="js/libs/daterangepicker-master/daterangepicker8d85.js?v=iOVs1FytPbiP3HcnhtFMzo0MwYebwD5OVr6Rnf2a0ik"></script>
            <script type="text/javascript" src="js/libs/paginationjs/paginationJS270f.js?v=_GywrNV0fMW9l0mnOa6Gz8zbqp7_d5F3yBpGH6xQmEM"></script>
            <script type="text/javascript" src="js/controller/productDetailController88a2.js?v=QePaWHwNjOh9moaVkc8tT2VLuGo6eQ_JR_aZ76R4hY8"></script>
            
        </body>
        <!-- Mirrored from janhome.vn/san-go-florton-fl669.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Sep 2020 07:08:23 GMT -->
    </html>
    @stop