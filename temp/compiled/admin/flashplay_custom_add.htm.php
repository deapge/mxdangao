 <?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<div class="main-div">
  <form action="flashplay.php" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
  <table width="100%" id="general-table">
  <tbody>
    <tr>
      <td  class="label">
        <?php echo $this->_var['lang']['lable_flash_name']; ?></td>
      <td>
        <input type="text" name="ad[ad_name]" id="ad_name" value="<?php echo $this->_var['ad']['ad_name']; ?>" size="35" /><span class="require-field">*</span>
      </td>
    </tr>
    <tr>
      <td class="label"><?php echo $this->_var['lang']['lable_flash_type']; ?></td>
      <td>
       <select name="ad[ad_type]" id="ad_type" onchange="showMedia(this.value)">
       <option value='0'><?php echo $this->_var['lang']['ad_img']; ?></option>
       <option value='1'><?php echo $this->_var['lang']['ad_flash']; ?></option>
       <option value='2'><?php echo $this->_var['lang']['ad_html']; ?></option>
       <option value='3'><?php echo $this->_var['lang']['ad_text']; ?></option>
       </select>
      </td>
    </tr>
  </tbody>

  <tbody id="content_01">
    <tr>
      <td  class="label">
        <a href="javascript:showNotice('title_upload');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['lable_upload']; ?></td>
      <td>
        <input type='file' name='ad_img' id='ad_img' size='35' />
        <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="title_upload"><?php echo $this->_var['width_height']; ?></span>
      </td>
    </tr>
    <tr>
      <td class="label"><?php echo $this->_var['lang']['lable_from_web']; ?></td>
      <td><input type="text" name="content[url]" id="ad_url" value="<?php echo $this->_var['ad']['ad_url']; ?>" size="35" /></td>
    </tr>
  </tbody>

  <tbody id="edit_img">
    <tr>
      <td class="label">&nbsp;</td>
      <td><input type="text" name="content[img_url]" id="img_url" value="<?php echo $this->_var['ad']['content']; ?>" size="35" disabled="disabled"/></td>
    </tr>
  </tbody>

  <tbody id="content_23">
    <tr>
      <td class="label"><?php echo $this->_var['lang']['lable_content']; ?></td>
      <td><textarea name="content[htmls]" id="htmls" cols="50" rows="7"><?php echo $this->_var['ad']['content']; ?></textarea></td>
    </tr>
  </tbody>

  <tbody id="url_tr">
    <tr>
      <td class="label"><?php echo $this->_var['lang']['lable_url']; ?></td>
      <td><input type="text" name="ad[url]" id="url" value="<?php echo $this->_var['ad']['url']; ?>" size="35" /></td>
    </tr>
  </tbody>

  <tbody>
    <tr>
      <td class="label"><?php echo $this->_var['lang']['lable_flash_status']; ?></td>
      <td><input type="radio" name="ad[ad_status]" id="ad_status" value="0" <?php if ($this->_var['ad']['ad_status'] == 0): ?>checked="checked"<?php endif; ?>>关闭
      <input type="radio" name="ad[ad_status]" id="ad_status" value="1" <?php if ($this->_var['ad']['ad_status'] == 1): ?>checked="checked"<?php endif; ?>>启用</td>
    </tr>
    <tr>
       <td class="label">&nbsp;</td>
       <td>
        <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
        <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
        <input type="hidden" name="act" id="act" value="<?php echo $this->_var['form_act']; ?>" />
        <input type="hidden" name="ad[id]" id="ad_id" value="<?php echo $this->_var['ad']['ad_id']; ?>" />
      </td>
    </tr>
  </tbody>
  </table>
  </form>
  </div>
    <script language="JavaScript">
<!--
// 初始页面参数
var status_code = 0; //<?php echo $this->_var['ad']['ad_type']; ?>;


onload = function()
{
  // 开始检查订单
  startCheckOrder();

  // 初始化表单项
  initialize_form(status_code);
}

/**
 * 初始化表单项目
 */
function initialize_form(status_code)
{
  var nt = navigator_type();
  var display_yes = (nt == 'IE') ? 'block' : 'table-row-group';
  status_code = parseInt(status_code);
  status_code = status_code ? status_code : 0;
  document.getElementById('ad_type').options[status_code].selected = true;
  document.getElementById('edit_img').style.display = 'none';

  switch (status_code) {
    case 0 :
      document.getElementById('content_01').style.display = display_yes;
      document.getElementById('content_23').style.display = 'none';
      document.getElementById('url_tr').style.display = display_yes;
            document.getElementById('title_upload').innerHTML = '<?php echo $this->_var['width_height']; ?>';
    break;
    case 1 :

      document.getElementById('content_01').style.display = display_yes;
      document.getElementById('content_23').style.display = 'none';
      document.getElementById('url_tr').style.display = 'none';
            document.getElementById('title_upload').innerHTML = '<?php echo $this->_var['lang']['title_upload_notice']; ?>';
    break;
    case 2 :
      document.getElementById('content_01').style.display = 'none';
      document.getElementById('content_23').style.display = display_yes;
      document.getElementById('url_tr').style.display = 'none';
    break;
    case 3 :
      document.getElementById('content_01').style.display = 'none';
      document.getElementById('content_23').style.display = display_yes;
      document.getElementById('url_tr').style.display = display_yes;
    break;
  }

  return true;
}

/**
 * 类型表单项切换
 */
function showMedia(code)
{
  var obj = document.getElementById('ad_type');

  initialize_form(code);
}

/**
 * 系统设置提示
 */
function system_set()
{
  alert('<?php echo $this->_var['lang']['tab_change_alert']; ?>');
}

/**
 * 判断当前浏览器类型
 */
function navigator_type()
{
  var type_name = '';

  if (navigator.userAgent.indexOf('MSIE') != -1)
  {
    type_name = 'IE'; // IE
  }
  else if(navigator.userAgent.indexOf('Firefox') != -1)
  {
    type_name = 'FF'; // FF
  }
  else if(navigator.userAgent.indexOf('Opera') != -1)
  {
    type_name = 'Opera'; // Opera
  }
  else if(navigator.userAgent.indexOf('Safari') != -1)
  {
    type_name = 'Safari'; // Safari
  }
  else if(navigator.userAgent.indexOf('Chrome') != -1)
  {
    type_name = 'Chrome'; // Chrome
  }

  return type_name;
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>