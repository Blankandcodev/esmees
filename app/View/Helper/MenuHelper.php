 <?php 
/*
 * menu helper.  
 * Author: Ashist Bhagat.
 */
class MenuHelper extends AppHelper{
	var $helpers = array('Html');
	
    function qmenu(){
        $query = $this->request->query;
		$out = '';
		if(!empty($query)){
			$out = '<div class="filter"><ul class="filter-menu">';
			foreach($query as $param=>$val){
				$fullQuery = $query;
				if($param == 'cat' || $param == 'category'){
					unset($fullQuery['category']);
					unset($fullQuery['cat']);
				}else{
					unset($fullQuery[$param]);
				}
				$nquery = http_build_query($fullQuery);
				$out .= '<li class="'. $param .'"><a href="'. $this->request->here.'?'.$nquery .'"><span>'. $param .':</span> '. $val .'</a></li>';
			}
			$out .= '</ul></div>';
		}
        return $out;
    }
    function qurl($param='', $val = '', $catval = null){
        $query = $this->request->query;
		$query[$param] = $val;
		if($catval != null){
			$query['category'] = $catval;
			$query['cat'] = $val;
		}
		$here = $this->request->here;
		$here =  preg_replace('/page:\d/', '', $this->request->here);
		$qstr = http_build_query($query);		
        return $here.'?'.$qstr;
    }
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
					$out .= '<a href="'.$this->qurl('category', $item['Category']['id'], $item['Category']['name']).'">'.$item['Category']['name'].'</a>';
                    $out .= $this->_menu_render($item['children'], $type, $url);
                    $out .= "</li>\n";
                }else{
                    $out .= '<li class="item">';
					$out .= '<a href="'.$this->qurl('cat', $item['Category']['id'], $item['Category']['name']).'">'.$item['Category']['name'].'</a>';
                    $out .= "</li>\n";
                }
            }
            $out .=  "</ul>\n";
        }
        return $out;
    }
}
?> 