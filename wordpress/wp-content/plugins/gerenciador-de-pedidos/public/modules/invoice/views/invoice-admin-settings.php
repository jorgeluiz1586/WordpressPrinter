<?php
if (!defined('ABSPATH')) {
    exit;
}
$wf_admin_img_path=WF_PKLIST_PLUGIN_URL . 'admin/images';
$tab_items=array(
    "general"=>__("General", 'print-invoices-packing-slip-labels-for-woocommerce'),
);
$show_qrcode_placeholder = apply_filters('wt_pklist_show_qrcode_placeholder_in_template',false,$this->module_base);
if(!$show_qrcode_placeholder){
    $tab_items['qrcode_promote'] = '<div style="display:flex;">QR Code<img src="'.$wf_admin_img_path.'/promote_crown.png" style="width: 12px;height: 12px;background: #FFA800;padding: 5px;margin-left: 4px;border-radius: 25px;"></div>';
}
$tab_items = apply_filters('wt_pklist_add_additional_tab_item_into_module',$tab_items,$this->module_base,$this->module_id);
?>
<div class="wt_wrap">
    <div class="wt_heading_section">
        <h2 class="wp-heading-inline">
        <?php _e('Settings','print-invoices-packing-slip-labels-for-woocommerce');?>: <?php _e('Invoice','print-invoices-packing-slip-labels-for-woocommerce');?>
        </h2>
         <?php
            //gerenciadordepedidos branding
            include WF_PKLIST_PLUGIN_PATH.'/admin/views/admin-settings-branding.php';
        ?>
    </div>
    
    <div class="nav-tab-wrapper wp-clearfix wf-tab-head">
    	<?php Wf_Woocommerce_Packing_List::generate_settings_tabhead($tab_items, 'module'); ?>
    </div>
    <div class="wf-tab-container">
    	<?php
    		foreach($tab_items as $target_id => $tab_item){
    			$settings_view=plugin_dir_path( __FILE__ ).$target_id.'.php';
                if(file_exists($settings_view))
                {
                    include $settings_view;
                }
    		}
    	?>
    	<!-- add additional tab view pages -->
    	<?php do_action('wt_pklist_add_additional_tab_content_into_module',$this->module_base,$this->module_id); ?>
        <?php do_action('wf_pklist_module_out_settings_form',array(
            'module_id'=>$this->module_base
        ));?>
    </div>
</div>