<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/9/16
 * Time: 5:16 PM
 */
?>
<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 col-sm-3">
                <h3>Contact</h3>
                <ul>
                    <?php 
                        $mobile = Yii::$app->setting->get('mobile'); 
                        if($mobile != null){ ?>
                        <li>
                            <a href="tel:<?=$mobile?>">
                                <i class="icon_headphones" style="margin-right:4px;"></i><?=$mobile?>
                            </a>
                        </li>
                    <?php } ?>
                    
                    <?php 
                        $phone = Yii::$app->setting->get('phone'); 
                        if($phone != null){?>
                        <li>
                            <a href="tel:<?=$phone?>">
                                <i class="icon_headphones" style="margin-right:4px;"></i><?=$phone?>
                            </a>
                        </li>
                    <?php } ?>
                    
                    <?php 
                        $email = Yii::$app->setting->get('email'); 
                        if($email != null){?>
                        <li>
                            <a href="tel:<?=$email?>">
                                <i class="icon_mail_alt" style="margin-right:4px;"></i><?=$email?>
                            </a>
                        </li>
                    <?php } ?>   
                    
                    <?php 
                        $address = Yii::$app->setting->get('address'); 
                        if($address != null){?>
                        <li>
                            <i class="icon_pin_alt" style="margin-right:4px;"></i><?=$address?>
                        </li>
                    <?php } ?>                               
                </ul>
            </div>     
            
            <div class="col-md-3 col-sm-3">
                <h3><i class='icon_clock_alt' style="margin-right:4px;"></i>Opening Hour</h3>
                <ul style="">
                    <?php 
                        $openinghour = Yii::$app->getHtmlBlock('openinghour-footer'); 
                        if($openinghour != null){
                            echo($openinghour->content);
                        }
                    ?>
                </ul>
            </div>                       
            
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <!--li><a href="about.html">About us</a></li>
                    <li><a href="menu.html">Menu</a></li-->
                        <?php
                        foreach (Yii::$app->params['mainMenu'] as $item) {
                            $sons = \funson86\blog\models\BlogCatalog::find()->where(['parent_id' => $item['id']])->andWhere(['status' => \funson86\blog\models\Status::STATUS_ACTIVE])->all();
                            if (count($sons) == 0) {
                                ?>
                                <li>
                                    <a href="<?= Yii::$app->urlManager->getHostInfo() . $item['url'] ?>">
                                        <?= $item['surname'] ?>
                                    </a>
                                </li>
                            <?php } else { ?>
                                <li> 
                                    <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['blog/default/catalog', 'id' => $item['id']]) ?>" class="show-submenu"><?= $item['surname'] ?>
                                    </a>
                                </li>                        
                            <?php } ?>
                        <?php } ?>                    
                    
                    <li><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['site/login'])?>" >Login</a></li>
                    <li><a href="<?=Yii::$app->urlManager->createAbsoluteUrl(['site/signup'])?>" >Register</a></li>
                </ul>
            </div>
            
            <div class="col-md-3 col-sm-3">
                <h3><i class='icon_creditcard' style="margin-right:4px;"></i>Supported Payment</h3>
                <img src="/images/cards.png" alt="" class="img-responsive">
            </div>            
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <?php 
                            $facebook = Yii::$app->setting->get('facebook');
                            if($facebook != null){ ?>
                        <li><a href="<?=$facebook?>" target="_blank"><i class="icon-facebook"></i></a></li>
                        <?php } ?>

                        <?php 
                            $google = Yii::$app->setting->get('google');
                            if($google != null){ ?>
                            <li><a href="<?=$google?>" target="_blank"><i class="icon-google"></i></a></li>
                        <?php } ?>

                        <?php 
                            $instagram = Yii::$app->setting->get('instagram');
                            if($instagram != null){ ?>
                            <li><a href="<?=$instagram?>"  target="_blank"><i class="icon-instagram"></i></a></li>
                        <?php } ?>
                            
                        <?php 
                            $twitter = Yii::$app->setting->get('twitter');
                            if($twitter != null){ ?>
                            <li><a href="<?=$twitter?>"  target="_blank"><i class="icon-twitter"></i></a></li>
                        <?php } ?>
                            
                        <?php 
                            $pinterest = Yii::$app->setting->get('pinterest');
                            if($pinterest != null){ ?>
                            <li><a href="<?=$pinterest?>"  target="_blank"><i class="icon-pinterest"></i></a></li>
                        <?php } ?>
                            
                        <?php 
                            $vimeo = Yii::$app->setting->get('vimeo');
                            if($vimeo != null){ ?>
                            <li><a href="<?=$vimeo?>"  target="_blank"><i class="icon-vimeo"></i></a></li>
                        <?php } ?>
                            
                        <?php 
                            $youtube = Yii::$app->setting->get('youtube');
                            if($youtube != null){ ?>
                            <li><a href="<?=$youtube?>"  target="_blank"><i class="icon-youtube-play"></i></a></li>
                        <?php } ?>
                    </ul>
                    <?php 
                        $copyright = Yii::$app->setting->get('copyright'); 
                        if($copyright != null){ ?>
                        <p>
                            <?= $copyright?><?=date("Y")?>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
 </footer>
<!-- End Footer =============================================== -->

<?php
$google_analysis = Yii::$app->getHtmlBlock('google-analysis');

if($google_analysis != null){
    echo($google_analysis->content);
}
?>