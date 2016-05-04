<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="xm-box">
<h4 class="title"><span>精品推荐</span> <a class="more" href="search.php?intro=best">更多</a></h4>
<div id="show_best_area" class="clearfix">
  <?php endif; ?>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <div class="goodsItem">
        <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg"/></a><br/>

        <div class="proText">
            <div class="proTextName">
                <p class="f1"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
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
 
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>

</div>
<div class="blank"></div>
  <?php endif; ?>
<?php endif; ?>
