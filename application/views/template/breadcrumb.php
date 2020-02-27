<div class="row">
    <div class="page-header">
        <h1 class="title-page"><?=$page["title"]?></h1>
        <?=breadcrumbs($page["home"], $page["homelink"])?>
    </div>
</div>
<?php require_once(APPPATH."views/template/flashdata.php") ?>

<?php
function breadcrumbs($home = 'Inicio', $homelink = "/index") {
    $home = empty($home) ? "Inicio" : $home;
    $homelink = empty($homelink) ? "/index" : $homelink;

    $html =   '<ol class="breadcrumb">';
    $crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
    // $html .=  '<li><a href="'.$homelink.'"><i class="fa fa-home"></i> '.$home.'</a></li>';
    
    $site =   '';
    $index = 1;
    foreach($crumbs as $crumb){
        $link    =  ucfirst( str_replace( array(".php","-","_"), array(""," "," ") ,$crumb) );
        $querystring = strrpos($link,"?");
        if($querystring)
            $link = substr($link, 0, $querystring);
        if($link == "Index" || is_numeric($link))
                break;
        $site   .=  '/'.$crumb;

        if($index == 1 && isset($homelink)){
            $html .=  '<li><a href="'.$site.$homelink.'"><i class="fa fa-home"></i> '.$home.'</a></li>';
        }else if($index == count($crumbs)){
            $html     .=  '<li class="active">'.$link.'</li>';
        } else {
            $html     .=  '<li><a href="'.$site.'">'.$link.'</a></li>';
        }
        $index++;
    }
    $html .=  '</ol>';
    return $html;
}
?>