
    <?php
        $message = '';
        $t=time();
        if(isset($_POST['name'])) {
            $arr = array(
                'properties' => array(
                    array(
                        'property' => 'firstname',
                        'value' => $_POST['name']
                    ),
                    array(
                        'property' => 'phone',
                        'value' => $_POST['phone']
                    ),
                    array(
                        'property' => 'address',
                        'value' => $_POST['address']
                    ),
                    array(
                        'property' => 'quantity',
                        'value' => $_POST['quantity']
                    ),
                    array(
                        'property' => 'ghi_chu',
                        'value' => $_POST['ghi_chu']
                    ),
                    array(
                        'property' => 'hs_lead_status',
                        'value' => "NEW"
                    ),
                    array(
                        'property' => 'ten_san_pham',
                        'value' => "Titan gel Nga"
                    )
                )
            );

            $post_json = json_encode($arr);
            $endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=e988575f-7359-4f0a-a128-4a9e0b9c3fa4";
            $ch = @curl_init();
            @curl_setopt($ch, CURLOPT_POST, true);
            @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
            @curl_setopt($ch, CURLOPT_URL, $endpoint);
            @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = @curl_exec($ch);
            $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curl_errors = curl_error($ch);
            @curl_close($ch);
            if ($status_code == 200) {
                header('Location: thank.php');
                die();
            }else{
                $message = 'Lỗi hệ thống';
            }
        }
    ?>


    <!DOCTYPE html>
    <!-- saved from url=(0020)http://titangel.com/ -->
    <html lang="vi"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
        <link rel="stylesheet" href="files/bootstrap.min.css">
<!--        <link rel="stylesheet" href="files/bootstrap-theme.min.css">-->
        <link rel="stylesheet" href="files/magnific-popup.css">
        <link rel="stylesheet" href="files/owl.carousel.css">
        <link rel="stylesheet" href="files/jquery.countdown.css">
        <link rel="stylesheet" href="files/style.css">
        <link rel="stylesheet" href="files/responsive.css">
        <link rel="stylesheet" href="files/style(1).css">
        <title>Nhà cung cấp Titan Gel Nga ở Việt Nam. Titan Gel kem làm Dương Vật to dài, kéo dài thời gian quan hệ</title>
        <meta name="description" content="100% Thành phần tự nhiên, giao hàng nhanh, thanh toán khi nhận hàng.">
        <meta name="keywords" content="титан гель, titan gel, купить титан гель">
        <meta name="yandex-verification" content="4f5e61227da0398e">
        <meta name="google-site-verification" content="MXU_h-hQNFdYFIv9CigBI8kKrKgRphn9hA3strvqF3Q">
        <link rel="shortcut icon" href="img/favicon.png" />
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-86937922-1', 'auto');
            ga('require', 'linkid', 'linkid.js');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');

        </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1840988602805891', {
                em: 'insert_email_variable,'
            });
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1840988602805891&ev=PageView&noscript=1"
            /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->


    </head>

    <!-- Google Code for Gel Titan Conversion Page -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1020901928;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "4O-JCOTeum0QqPTm5gM";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1020901928/?label=4O-JCOTeum0QqPTm5gM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>


    <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <header class="header">
        <div class="header_top">
            <div class="inner">
                <div class="row header-top">
                    <div class="col-xs-4 col_logo">
                        <a href="http://titangelrussia.com/" class="logo">
                            <img src="files/logo-top.png" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4 col_exp">
                        <div class="exp_effect">
                            <img src="files/titan_sm.png" alt="" class="img-left">
                            <div class="exp_text">
                                <div class="exp_bold">Hiệu quả.</div>
                                <div class="exp_desc">Chỉ trong 4 tuần, Dương vật tăng 3-5 cm chiều dài!</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col_text">
                        <div class="text-right">
                            <div class="addr_name">
                                <div class="oo_name">&lt;Titan Gel Nga&gt;</div>
                                <div class="sub_addres"><h4>Kem số 1 làm tăng kích thước Dương Vật, kéo dài thời gian quan hệ. Thể hiện bản lĩnh đàn ông</h4></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="form-header">
        <div class="inner">
            <div class="row">
                <div class="col-xs-4 list-results">
                    <div class="list_title">Cam kết 100% hiệu quả:</div>
                    <ul class="results">
                        <li><img src="files/icon-list-1.png" alt=""> 1 lần duy nhất trong ngày</li>
                        <li><img src="files/icon-list-2.png" alt=""> Phát triển một cách tự nhiên</li>
                        <li><img src="files/icon-list-3.png" alt=""> Kéo dài thời gian quan hệ</li>
                        <li><img src="files/icon-list-4.png" alt=""> Cải thiện độ cương cứng</li>
                        <li><img src="files/icon-list-5.png" alt=""> Giúp bạn tự tin trong mỗi cuộc yêu</li>
                    </ul>
                    <div class="garants_sub">
                        <span class="garant_n">Mua 2</span>
                        <div class="garant_t">/&nbspTặng 1</div>
                    </div>
                </div>
                <div class="col-xs-4 col_image">
                    <div class="titan-image text-right">
                        <img src="files/titan_big.png" alt="" class="titan_big">
                    </div>
                </div>
                <div class="col-xs-4 col_form">
                    <!--noindex-->
<!--                    <div class="title_form">Đặt hàng chỉ cần điền vào mẫu</div>-->
                    <div  width="100%" scrolling="no" height="460" class="" frameborder="0">
                        <?php if(isset($message)){ ?>
                            <p style="color: red; text-align: center;"> <?php echo $message; ?></p>
                        <?php } ?>
                        <form action="index.php" method="post" id="dat_hang" class="feedback orderformcdn orderformcdn_nonds" name="feedback">
                            <div class="order_form" style="color:#000 !important;">
                                <div class="block_form">
                                    <input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" placeholder='Họ và tên *' required oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')"/>
                                </div>

                                <div class="block_form">
                                    <input type="text" id="phone" name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" placeholder='Số điện thoại *' required pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')"/>
                                </div>

                                <div class="block_form">
                                    <input type="text" id="address" name="address" value="<?php if(isset($_POST['address'])) { echo $_POST['address']; } ?>"  placeholder='Địa chỉ *' required oninvalid="setCustomValidity('Địa chỉ không để trống')" oninput="setCustomValidity('')"/>
                                </div>

                                <div class="block_form">
                                    <select name="quantity" style="height:35px; width: 100%; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(136, 136, 136); border-radius: 5px;">
                                        <option value="1">
                                            1 Tuýp
                                        </option>
                                        <option value="2">
                                            2 Tuýp
                                        </option>
                                        <option value="3">
                                            3 Tuýp
                                        </option>
                                        <option value="4">
                                            4 Tuýp
                                        </option>
                                        <option value="5">
                                            5 Tuýp
                                        </option>
                                        <option value="6">
                                            6 Tuýp
                                        </option>
                                        <option value="7">
                                            7 Tuýp
                                        </option>
                                        <option value="8">
                                            8 Tuýp
                                        </option>
                                        <option value="9">
                                            9 Tuýp
                                        </option>
                                        <option value="10">
                                            10 Tuýp
                                        </option>
                                    </select>
                                </div>

                                <div class="block_form">
                                    <textarea name="ghi_chu" rows="2" cols="0" placeholder="Ghi chú" style="width: 100%;padding: 10px;border: #888 1px solid; border-radius: 5px;"></textarea>
                                </div>
                                <p>Hotline: <strong style="font-size: 23px;color: red;">01635 243 892</strong></p>
                                <p>Giá: <b>750.000 đ</b></p>

                                <div class="clear"></div>
                            </div>
                            <button class="ifr_button" type="submit">ĐẶT HÀNG NGAY</button>
                        </form>

                    </div>
                    <!--/noindex-->
                </div>
            </div>
        </div>
    </div>
    <div class="advants-block">
        <div class="inner">
            <div class="advants owl-carousel">

                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_1.jpg" alt="">
                        <div class="adv_text">Kéo dài thời gian yêu 1 cách rõ rệt</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_2.jpg" alt="">
                        <div class="adv_text">Tăng chiều dài và chu vi dương vật</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_3.jpg" alt="">
                        <div class="adv_text">Tăng khả năng và thời gian cương cứng</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_4.jpg" alt="">
                        <div class="adv_text">Đem lại cảm giác mạnh về độ cực khoái</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_5.jpg" alt="">
                        <div class="adv_text">Việc sử dụng thường xuyên có thể tăng số lần yêu</div>
                    </div></div>

                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_1.jpg" alt="">
                        <div class="adv_text">Kéo dài thời gian yêu 1 cách rõ rệt</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_2.jpg" alt="">
                        <div class="adv_text">Tăng chiều dài và chu vi dương vật</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_3.jpg" alt="">
                        <div class="adv_text">Tăng khả năng và thời gian cương cứng</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_4.jpg" alt="">
                        <div class="adv_text">Đem lại cảm giác mạnh về độ cực khoái</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_5.jpg" alt="">
                        <div class="adv_text">Việc sử dụng thường xuyên có thể tăng số lần yêu</div>
                    </div></div>

                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_1.jpg" alt="">
                        <div class="adv_text">Kéo dài thời gian yêu 1 cách rõ rệt</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_2.jpg" alt="">
                        <div class="adv_text">Tăng chiều dài và chu vi dương vật</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_3.jpg" alt="">
                        <div class="adv_text">Tăng khả năng và thời gian cương cứng</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_4.jpg" alt="">
                        <div class="adv_text">Đem lại cảm giác mạnh về độ cực khoái</div>
                    </div></div>
                <div class="owl-item " style="width: 150.8px; margin-right: 60px;"><div class="adv_item">
                        <img src="files/adv_5.jpg" alt="">
                        <div class="adv_text">Việc sử dụng thường xuyên có thể tăng số lần yêu</div>
                    </div></div>
            </div>
            <div class="wrapper">
                <div class="sidebar-left">
                    <div class="consist_side">
                        <div class="titan">Titan Gel</div>
                        <div class="title_res">Cam kết hiệu quả:</div>
                        <div class="list-consist">
                            <div class="select_no">
                                <p><b>Triethanolamine</b> – làm cho quan hệ tình dục kéo dài, trì hoãn xuất tinh.</p>
                                <p><b>Thủy phân protein và axit amin</b> - củng cố các mô và tăng trưởng.</p>
                                <p><b>Hỗn hợp Elastin-collagen</b> - làm tăng tính nhạy cảm và linh hoạt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="subscribe_side">
                        <div class="subs_title">Hơn <span>1,000,000 khách hàng hài lòng!</span></div>
                        <div class="subs_time">Kết quả lý tưởng trong 4 tuần!</div>
                        <a href="#dat_hang" class="redbtn">Đặt hàng</a>
                    </div>
                </div>
                <div class="content-right">
                    <div class="warning-section">
                        <div class="war-title"><span>Cảnh báo!</span></div>
                        <div class="war-text">
                            <p>
                                Trang web của chúng tôi là nhà cung cấp Titan Gel Nga ở Việt Nam. Cảnh báo các sản phẩm Titan Gel bên ngoài - nó không phải là hoàn toàn phù hợp với các Bạn, Nó không những làm bạn mất tiền mà còn ảnh hưởng đến sức khỏe của bạn, nói cách khác đó là hàng kém chất lượng, không cho kết quả mong muốn.
                            </p>

                            <p>
                                Sự nhầm lẫn của đa số khách hàng là mua nhầm phải Titan Gel giả, kém chất lượng mà nghĩ đó là Titan Gel, khi sử dụng không hiệu quả lại nghĩ Titan Gel lừa
                            </p>

                            <p>
                                Hãy coi chừng hàng giả và hãy đặt hàng trên website của chúng tôi để được một sản phẩm chất lượng với giá cả phải chăng!
                            </p>
                        </div>
                    </div>
                    <div class="text-section">
                        <div class="title_sect"><h1>TITAN GEL - biện pháp tự nhiên cho sức mạnh nam tính</h1></div>
                        <div class="text_wrap">
                            <img src="files/titan_norm.png" class="image-left" alt="">
                            <div class="text">
                                <div class="select_no">
                                    <p>
                                        <strong>Titan Gel</strong> dẫn đầu thị trường công nghệ tăng thời gian quan hệ tình dục và kích thước dương vật, đảm bảo tăng kích thước của nó lên đến 3-5 cm. Nó là một sản phẩm an toàn mà không gây phản ứng phụ và dị ứng, không dẫn đến sự xuất hiện của tác dụng gây nghiện, vì trong thành phần của nó - có các nguyên liệu tự nhiên đã được phê duyệt bởi các bác sĩ.
                                    </p>
                                    <p>
                                        Mua Titan Gel - là bước đầu tiên trong việc giải quyết một vấn đề mà nhiều phụ nữ than phiền(cụ thể là kích thước không đủ để mang đến cực khoái của đối tác của bạn). Kem Titan gel sẽ giúp tăng đáng kể kích thước dương vật và mang đến cho bạn cơ hội để làm cho cuộc sống tình dục của bạn sáng hơn nhiều, quan hệ tình dục sẽ đem lại cho bạn sự hài lòng đến kinh ngạc và đạt độ cực khoái với cường độ cao nhất, bền và độc đáo, có thể thay đổi cuộc sống của bạn mãi mãi!
                                    </p>
                                    <p>
                                        Titan Gel Nó sẽ mang đến cho bạn sự tự tin, luôn sẵn sàng để yêu và làm đối tác hài lòng! Loại kem này sẽ cho một kết quả mà chắc chắn sẽ là một nguyên nhân của nam giới tự hào. Kích thước mới sẽ ở lại với bạn cho cuộc sống, ngay cả sau khi chấm dứt việc sử dụng nó. Để chở thành một người đàn ông thực thụ hãy đặt hàng trên trang web của chúng tôi. Chúc may mắn và kích thước lớn!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="title_sect"><h2>Thành phần hữu cơ của Kem Titan Gel</h2></div>
                        <div class="row consist_list">
                            <div class="col-xs-3 consist_item">
                                <img src="files/cons_1.jpg" alt="">
                                <div class="org_name">Thistle</div>
                                <div class="org_text">Tăng mức testosterone</div>
                            </div>
                            <div class="col-xs-3 consist_item">
                                <img src="files/cons_2.jpg" alt="">
                                <div class="org_name">Extract juice lichen</div>
                                <div class="org_text">Tăng cường cơ bắp</div>
                            </div>
                            <div class="col-xs-3 consist_item">
                                <img src="files/cons_3.jpg" alt="">
                                <div class="org_name">Peruvian Maca</div>
                                <div class="org_text">Trị chứng yếu sinh lý</div>
                            </div>
                            <div class="col-xs-3 consist_item">
                                <img src="files/cons_4.jpg" alt="">
                                <div class="org_name">Goryanka</div>
                                <div class="org_text">Có các tính chất của Viagra</div>
                            </div>
                        </div>

                        <div class="subscribe_side cont">
                            <div class="subs_title">Hơn <span>1,000,000 khách hàng hài lòng!</span></div>
                            <div class="subs_time">Kết quả lý tưởng trong 4 tuần!</div>
                            <a href="#dat_hang" class="redbtn">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ws_results">
        <div class="inner">
            <div class="title-block"><h3>Kết quả sau khi sử dụng titan gel?</h3></div>
            <div class="row">
                <div class="col-xs-6 chart">
                    <div class="chart_image">
                        <img src="files/chart.png" alt="">
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="weeks-list">
                        <div class="week_item">
                            <span class="week_n">2 tuần</span>
                            <div class="text">
                                <div class="select_no">
                                    Sự cương cứng sẽ trở nên vững chắc hơn và bền, độ nhạy dương vật tăng gấp đôi. Đường kính và chiều dài được tăng thêm 2 cm trong 2 tuần đầu tiên.
                                </div>
                            </div>
                        </div>
                        <div class="week_item">
                            <span class="week_n">3 tuần</span>
                            <div class="text">
                                <div class="select_no">
                                    Dương vật được gia tăng đáng kể về kích thước, nhận được một hình dạng giải phẫu chính xác. Quan hệ tình dục kéo dài lâu hơn 70%.
                                </div>
                            </div>
                        </div>
                        <div class="week_item">
                            <span class="week_n">4 tuần</span>
                            <div class="text">
                                <div class="select_no">
                                    Chiều cao 3-5 cm! Sex trở nên tốt hơn. Thời hạn của một cực khoái đang phát triển và nó đến nhanh hơn, trong khi duy trì kiểm soát.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="inner">
            <div class="row footer-row">
                <div class="col-xs-4 ls-footer">
                    <div class="size_title" style="text-align: center;">Một lần và cho tất cả!</div>
                    <div class="sub_st" style="text-align: center;">kết quả rõ rệt trong 4 tuần</div>
                    <div class="support">
                        <p>Hotline: 01635 243 892</p>
                        <p>718 Đường Láng - Đống Đa - Hà Nội</p>
                        <p>Cách dùng TITAN GEL cùng với 3 bài tập: </p>
                        <p>&nbsp;&nbsp;&nbsp;Bài tập 1 - <a href="https://www.youtube.com/watch?v=9Ci-noZzgqo&feature=youtu.be" target="_blank">Stretching</a></p>
                        <p>&nbsp;&nbsp;&nbsp;Bài tập 2 - <a href="https://www.youtube.com/watch?v=8s8KZx11M7E" target="_blank">jelqing</a></p>
                        <p>&nbsp;&nbsp;&nbsp;Bài tập 3 - <a href="https://www.youtube.com/watch?v=2ozo7nv4Axg" target="_blank">Kegel</a></p>
                    </div>
<!--                    <div class="social">-->
<!--                        <ul>-->
<!--                            <li><a href="https://www.youtube.com/watch?v=9Ci-noZzgqo&feature=youtu.be" class="ok" target="_blank"></a></li>-->
<!--                            <li><a href="https://www.youtube.com/watch?v=8s8KZx11M7E" class="ok" target="_blank"></a></li>-->
<!--                            <li><a href="https://www.youtube.com/watch?v=2ozo7nv4Axg" class="ok" target="_blank"></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                    <div class="copy-footer" style="text-align: center;">
                        <div>«Titan Gel» - Tăng kích thước dương vật</div>
                        <div>Trang web cung cấp Titan Gel ở Việt Nam</div>

                    </div>
                </div>

                <div class="col-xs-4 fm-footer">
                    <div class="fb-page" data-href="https://www.facebook.com/titangelrussia.comm/"  data-height="280" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Gel-Titan-Nga-01635243892-2251750111630563/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Gel-Titan-Nga-01635243892-2251750111630563/">Gel Titan Nga</a></blockquote></div>
                </div>

                <div class="col-xs-4 fm-footer">
                    <!--                    <img src="files/titan_footer.png" class="t_footer" alt="">-->
                    <div class="form-footer">
                        <div class="title_form">Thời gian còn lại để mua:</div>
                        <div id="countdown" class="countdownHolder"><span class="countDays"><span class="position"></span></span></div>
                        <a href="#dat_hang" class="redbtn">Đặt hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="files/analytics.js"></script>
    <script src="files/watch.js"></script>
    <script src="files/jquery-1.11.3.min.js"></script>
    <script src="files/bootstrap.min.js"></script>
    <script src="files/jquery.magnific-popup.min.js"></script>
    <script src="files/owl.carousel.min.js"></script>
    <script src="files/jquery.countdown.js"></script>
    <script src="files/script.js"></script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            autoPlay: 3000,
            items : 5,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
    </script>
    </body></html>