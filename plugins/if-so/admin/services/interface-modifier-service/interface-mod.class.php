<?php
namespace IfSo\Admin\Services\InterfaceModService;

use IfSo\Services\PluginSettingsService\PluginSettingsService;

require_once(IFSO_PLUGIN_BASE_DIR . 'services/plugin-settings-service/plugin-settings-service.class.php');

class InterfaceModService{

    private static $instance;

    private function __construct(){
    }

    public static function get_instance(){
        if (NULL == self::$instance)
            self::$instance = new InterfaceModService();

        return self::$instance;
    }

    public function replace_newtrigger_title_placeholder($title,$post){

        if($post->post_type == 'ifso_triggers'){
            $ret = __('Add title (optional)','if-so');
            return $ret;
        }

        return $title;
    }

    public function add_export_button($actions,$post){
        if ($post->post_type=='ifso_triggers' && current_user_can('edit_posts')) {
            $actions['export'] = '<a href="' . admin_url('admin-ajax.php?action=trigger_export_req&exporttrigger&postid=' . $post->ID, basename(__FILE__)) . '" title="'. __('Export this trigger', 'if-so').'" rel="permalink">'. __('Export', 'if-so') .'</a>';
        }
        return $actions;
    }

    public function add_import_button($arr){
        if (current_user_can('edit_posts')) {
            $html = '<div class="wrap" style="margin-bottom:0;color: #0073aa;"> <form action="' . admin_url('admin-ajax.php?action=trigger_export_req&importtrigger=true') . '" method="post" enctype="multipart/form-data"><label for="triggerToImport" style="font-weight:normal"><span>+ '. __('Import  trigger', 'if-so') .'</span><input style="display:none" type="file" onchange="form.submit()" name="triggerToImport" id="triggerToImport"></label></form></div>';
        }
        echo $html;
        return $arr;
    }

    public function add_duplicate_button($arr,$post){
        if($post->post_type=='ifso_triggers'){
            if (current_user_can('edit_posts')) {
                $html = '<a href="' . admin_url('admin-ajax.php?action=trigger_export_req&duplicatetrigger=true&postid='.$post->ID) . '">'. __('Duplicate', 'if-so') .'</a>';
            }
            $arr[] = $html;
        }
        return $arr;
    }

    public function trigger_imported_notice(){
        if(isset($_REQUEST['ifsoTriggerImported'])){
            if($_REQUEST['ifsoTriggerImported'] =='success'){
            ?>
                <div class="notice notice-success is-dismissible">
                    <p><?php _e('Trigger imported successfully', 'if-so'); ?></p>
                </div>
                <?php
            }
            if($_REQUEST['ifsoTriggerImported'] =='fail'){
                ?>
                <div class="notice notice-warning is-dismissible">
                    <p><?php _e('Failed at importing trigger', 'if-so'); ?></p>
                </div>
                <?php
            }
        }
    }

    public function add_editor_modal_button(){
        global $post;
        if(isset($post) && $post->post_type !=='ifso_triggers' && !(isset($_GET['action']) && $_GET['action'] === 'elementor')){
            echo '<a href="'. admin_url( 'edit.php' ).'?post_type=ifso_triggers&TB_iframe=true&width=1024&height=600" id="ifso-editor-button" class="button thickbox" title="If-So triggers"><img style="bottom:1px;position:relative;width:11px;" src="'. plugin_dir_url(__FILE__) . '../../images/logo-256x256.png">'. __('Dynamic Content', 'if-so') .'</a>';
        }

    }

    public function do_shortcode($content,$param=false){
       return do_shortcode($content,$param);
    }

    public function groups_page_notices(){
        if(!empty($_COOKIE['ifso-group-action-notice'])){
            $notice = $_COOKIE['ifso-group-action-notice'];
            $ret = '';

            if($notice === 'no-name-to-add'){
                $ret = '
                <div class="notice error is-dismissible" >
                    <p>'. __( 'You did not enter an audience name.', 'if-so' ) . '</p>
                </div>';
            }

            elseif($notice === 'already-exists'){
                $ret = '
                <div class="notice error is-dismissible" >
                    <p>'. __( 'An audience with that name already exists.', 'if-so' ) . '</p>
                </div>';
            }

            elseif($notice === 'successfully-added'){
                $ret = '
                <div class="notice updated is-dismissible" >
                    <p>'. __( 'The audience has been successfully created', 'if-so' ) . '</p>
                </div>';
            }

            elseif($notice === 'successfully-removed'){
                $ret = '
                <div class="notice error is-dismissible" >
                    <p>'. __( 'The audience has been successfully removed.', 'if-so' ) . '</p>
                </div>';
            }

            setcookie('ifso-group-action-notice','no-name-to-add',time() - 3600*24,'/');

            echo $ret;
        }

    }

    private function get_active_plugins(){
        if ( ! function_exists( 'get_plugins' ) ) {
            require_once ABSPATH . 'wp-admin/includes/plugin.php';
        }
        $plugins = get_plugins();
        $active = get_option('active_plugins');
        $ret = [];
        foreach($plugins as $key=>$val){
            if (in_array($key,$active)){
                $ret[] = $val['Name'];
            }
        }

        return $ret;
    }

    public function show_pagebuilders_noticebox(){
        $active_plugins = $this->get_active_plugins();
        $page_builder_list = [
            'Elementor',
            'Fusion Builder',
            'Divi Builder',
            'Elementor Pro',
            'Page Builder by SiteOrigin',
            'Brizy',
            'Brizy Pro',
            'Beaver Builder Plugin (Lite Version)',
            'Beaver Builder Plugin (Standard Version)',
            'Visual Composer'
        ];
        $active_page_builders = array_intersect($active_plugins,$page_builder_list);
        if(empty($active_page_builders)) return false;

    ?>
        <div class="pagebuilders-noticebox purple-noticebox">
            <span class="closeX" style="border-color:#c0bc25;">X</span>
            <p>We noticed that you are using <?php echo implode(', ', $active_page_builders); ?>. If you encounter any issues after pasting the shortcode go to <a href="<?php echo admin_url( 'admin.php?page=' . EDD_IFSO_PLUGIN_SETTINGS_PAGE ); ?>" target="_blank">If-So > Settings </a> and change the status of the "the_content" filter checkbox.</p>
        </div>
    <?php
    }

    public function allow_divi_shortcodes_in_ajax_calls($actions){
        $actions[] = 'ddtest_handle_divi_section_shortcode';

        return $actions;
    }

    public function tinymce_modify_settings($settings){
        $current_post_type = get_post_type();

        if((!empty($current_post_type) && $current_post_type == 'ifso_triggers')){  //Only on if-so trigger page
            $settings['valid_elements'] = "*[*]";   //Allow all elements(don't filter out)
            $settings['relative_urls'] = false;     //Don't force url's to relative
            if(!PluginSettingsService::get_instance()->tmceForceWrapper->get())
                $settings['forced_root_block'] = false; //Don't wrap text in an html tag(p)
        }

        return $settings;
    }

    public function add_plugin_links($links,$flie){
        if($flie === basename(IFSO_PLUGIN_BASE_DIR) . '/' .basename(IFSO_PLUGIN_MAIN_FILE_NAME)){
            $new_links = [];
            $new_links['faq'] = "<a href='https://www.if-so.com/help/?utm_source=Plugin&utm_medium=Help&utm_campaign=PluginsPage' target='_blank'>Docs & FAQs</a>";
            $new_links['trigger_instructions'] = "<a href='https://www.if-so.com/help/documentation/how-to-create-dynamic-content-trigger/?utm_source=Plugin&utm_medium=Help&utm_campaign=PluginsPage' target='_blank'>Creating a Dynamic Trigger</a>";
            $new_links['dki'] = "<a href='https://www.if-so.com/help/documentation/dynamic-keyword-insertion/?utm_source=Plugin&utm_medium=Help&utm_campaign=PluginsPage' target='_blank'>DKI</a>";
            $new_links['extensions'] = "<a href='https://www.if-so.com/add-ons-and-integrations/?utm_source=Plugin&utm_medium=Help&utm_campaign=PluginsPage' target='_blank'>Extensions & Integrations</a>";
            return array_merge($links,$new_links);
        }

        return $links;

    }

    function menu_links_new_tab(){
        ?>
        <script type="text/javascript">
            if(jQuery && typeof(jQuery)!=='undefined'){
                jQuery(document).ready(function($) {
                    var links_to_change = ['.ifso-dki-menu-link-child'];
                    $.each(links_to_change,function (key,val) {
                        $(val).parent().attr('target','_blank');
                    })
                });
            }
        </script>
        <?php
    }

}

