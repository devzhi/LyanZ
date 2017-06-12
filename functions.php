<?php
function themeConfig($form){
	#自定义顶部文字
	$headerSay = new Typecho_Widget_Helper_Form_Element_Text('headerSay',NULL,NULL,_t("顶部文字"),_t("在这里填入的文字会出现在网页标题下"));
	$form->addInput($headerSay);

	#自定义统计代码
	$accessCode = new Typecho_Widget_Helper_Form_Element_Textarea('accessCode',NULL,NULL,_t("统计代码"),_t("在这里填入统计代码"));
	$form->addInput($accessCode);

    #自定义侧边栏设置
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('sidebarLinks' => _t('显示友情链接'),
    'sidebarSearch' => _t('显示搜索框')),
    array('sidebarLinks', 'sidebarSearch'), _t('侧边栏设置'));
    
    $form->addInput($sidebarBlock->multiMode());
}

?>