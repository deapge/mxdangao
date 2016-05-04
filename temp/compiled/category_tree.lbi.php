
<div id="category_tree11">
  <div class="tit">商品筛选</div>
  <dl class="clearfix" style="overflow:hidden;" >
  <div class="box">
	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_56245200_1459953909');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_56245200_1459953909']):
        $this->_foreach['no']['iteration']++;
?>
	<div class="box_1">
	  <div class="screeBox">
		<strong><?php echo htmlspecialchars($this->_var['cat_0_56245200_1459953909']['name']); ?></strong>
		<?php $_from = $this->_var['cat_0_56245200_1459953909']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_56255600_1459953909');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_56255600_1459953909']):
?>
		    <?php if ($this->_var['child_0_56255600_1459953909']['id'] == $this->_var['cat_id']): ?>
		        <span><?php echo htmlspecialchars($this->_var['child_0_56255600_1459953909']['name']); ?></span>
		    <?php else: ?>
                <a href="<?php echo $this->_var['child_0_56255600_1459953909']['url']; ?>&pid=<?php echo $this->_var['cat_0_56245200_1459953909']['id']; ?>"><?php echo htmlspecialchars($this->_var['child_0_56255600_1459953909']['name']); ?></a>
            <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  </div>
	</div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div style="clear:both"></div>  
</div>
<style type="text/css">
.box_1{border-bottom:none;}
</style>