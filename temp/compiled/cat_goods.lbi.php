

<div class="xm-box">
<h4 class="title"><span><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></span> <a class="more" href="<?php echo $this->_var['goods_cat']['url']; ?>">更多</a></h4>
<div id="show_hot_area" class="clearfix">
    <?php if ($this->_var['goods_cat']['area_ads']): ?>
    <ul class="hot_area_ads">
        <li class="pro_ad_left f_l"><a href="<?php echo $this->_var['goods_cat']['area_ads']['0']['ad_link']; ?>"><img src="<?php echo $this->_var['goods_cat']['area_ads']['0']['ad_code']; ?>"></a></li>
        <li class="pro_ad_mid f_l"><a href="<?php echo $this->_var['goods_cat']['area_ads']['1']['ad_link']; ?>"><img src="<?php echo $this->_var['goods_cat']['area_ads']['1']['ad_code']; ?>"></a></li>
        <li class="pro_ad_rit f_r"><a href="<?php echo $this->_var['goods_cat']['area_ads']['2']['ad_link']; ?>"><img src="<?php echo $this->_var['goods_cat']['area_ads']['2']['ad_code']; ?>"></a></li>
    </ul>
    <?php endif; ?>

      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <div class="goodsItem">
        <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg"/></a><br/>

        <div class="proText">
            <div class="proTextName">
                <p class="f1"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_name']; ?></a>
                </p>
            </div>
            <div class="jiage">
                <font class="f1"><?php if ($this->_var['goods']['promote_price'] != ""): ?>
                    <?php echo $this->_var['goods']['promote_price']; ?>
                    <?php else: ?>
                    <?php echo $this->_var['goods']['shop_price']; ?>
                    <?php endif; ?></font>
            </div>
            <div class="jiage0">
                <a href="<?php echo $this->_var['goods']['url']; ?>">查看&gt;&gt;</a>
            </div>
            <div class="jiage1">
                <a href="<?php echo $this->_var['goods']['url']; ?>">购买&gt;&gt;</a>
            </div>
        </div>

    </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
 
 
</div>
<div class="blank"></div>
