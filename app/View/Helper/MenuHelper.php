 <?php 
/*
 * menu helper.  
 * Author: Ashist Bhagat.
 */
class MenuHelper extends AppHelper{
	var $helpers = array('Html');
	
    function menu($data=array(), $type='list', $url = '/'){
        global $menu;
        $out ='';
        if($menu != true){
            $menu = true;
            $out .= $this->Html->css('cat_menu');
        }
        return $this->output($out . $this->_menu_render($data, $type, $url));
    }

    /* render a menu. 
     * This is a helper for recursion.  The arguments are the 
     * same as for $this->menu().
     */
    function _menu_render($data=array(), $type='list', $url = '/'){
        $out='';
        if($data == array()) return;
        if(is_array($data)){
            $out .= "<ul class=\"cat_menu $type\">\n";
            foreach($data as $key => $item){
	//	pr($item);
                if(!empty($item['children'])){
                    $out .= '<li class="parent">';
					$out .= '<a href="'.$url.'/'.$item['Category']['id'].'">'.$item['Category']['name'].'</a>';
                    $out .= $this->_menu_render($item['children'], $type, $url);
                    $out .= "</li>\n";
                }else{
                    $out .= '<li class="item">';
					$out .= '<a href="'.$url.'/'.$item['Category']['id'].'">'.$item['Category']['name'].'</a>';
                    $out .= "</li>\n";
                }
            }
            $out .=  "</ul>\n";
        }
        return $out;
    }
}
?> 