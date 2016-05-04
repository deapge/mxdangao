<?php if ($this->_var['hot_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="xm-box">
<h4 class="title"><span>热销排行</span> <a class="more" href="search.php?intro=hot">更多</a></h4>
<div id="show_hot_area" class="clearfix">
  <?php endif; ?>
  <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_31242300_1462375975');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_31242300_1462375975']):
?>
    <div class="goodsItem">
        <a href="<?php echo $this->_var['goods_0_31242300_1462375975']['url']; ?>"><img src="<?php echo $this->_var['goods_0_31242300_1462375975']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_31242300_1462375975']['name']); ?>" class="goodsimg"/></a><br/>

        <div class="proText">
            <div class="proTextName">
                <p class="f1"><a href="<?php echo $this->_var['goods_0_31242300_1462375975']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_31242300_1462375975']['name']); ?>"><?php echo $this->_var['goods_0_31242300_1462375975']['short_style_name']; ?></a>
                </p>
            </div>
            <div class="jiage">
                <font class="f1"><?php if ($this->_var['goods_0_31242300_1462375975']['promote_price'] != ""): ?>
                    <?php echo $this->_var['goods_0_31242300_1462375975']['promote_price']; ?>
                    <?php else: ?>
                    <?php echo $this->_var['goods_0_31242300_1462375975']['shop_price']; ?>
                    <?php endif; ?></font>
            </div>
            <div class="jiage0">
                <a href="<?php echo $this->_var['goods_0_31242300_1462375975']['url']; ?>">查看&gt;&gt;</a>
            </div>
            <div class="jiage1">
                <a href="<?php echo $this->_var['goods_0_31242300_1462375975']['url']; ?>">购买&gt;&gt;</a>
            </div>
        </div>

    </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>

</div>
<div class="blank"></div>
  <?php endif; ?>
<?php endif; ?>
