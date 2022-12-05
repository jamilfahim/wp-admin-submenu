/*********************************************
 *       Wp Admin Sub Menu Page
 *********************************************/

    function wp_main_menu_page() {
        add_menu_page(
            __( 'Mail Menu', 'maildoll' ),
            'Main Menu',
            'manage_options',
            'menu_link',
            'menu_call_back_functions_display',
            'dashicons-image-filter',
            //plugins_url( 'myplugin/images/icon.png' ),
            58
        );
        //add_menu_page('My Custom Page', 'My Custom Page', 'manage_options', 'my-top-level-slug');

        add_submenu_page(
            'menu_link', 
            'submenu 1',
            'submenu 1',
           'manage_options', 
           'menu_link');

        add_submenu_page(
            'menu_link', 
            'submenu 2',
            'submenu 2',
           'manage_options', 
           'submenu2_link',
           'submenu2_call_back_functions_display'
        );
  
       add_submenu_page(
            'menu_link', 
            'Sub Menu 3',
            'Sub menu 3',
            'manage_options', 
            'submenu_link_3',
            'submenu3_link_callback_function_display'
        );
    }

   add_action( 'admin_menu','wp_main_menu_page' );
   
   function menu_call_back_functions_display(){
   //your code here for display submenu 1
   }
   
   function submenu2_call_back_functions_display(){
   //your code here for display submenu 2
   }
   
   function submenu3_link_callback_function_display(){
   //your code here for display submenu 3
   }
      
       
       
   
