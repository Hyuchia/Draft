<?php
	include_once("Parsedown.php");

	function buildMain(){
		if(file_exists("docs/main.php")){
			return file_get_contents ("docs/main.php");
		}elseif(file_exists("docs/main.html")){
			return file_get_contents ("docs/main.html");
		}elseif(file_exists("docs/main.md")){
			$Parsedown = new Parsedown();
			return $Parsedown->text(file_get_contents ("docs/main.md"));
		}
	}

	function build($directory){
		$menu = "";
		$pages = "";
    foreach (glob("$directory/*", GLOB_MARK) as $f) {
			$find = array(".html", ".md",".php");
			$replace = array("","","");
			$nice_name = str_replace($find, $replace, basename($f));
			$cap_name =  ucwords(strtolower((str_replace("_"," ", $nice_name))));
      if (substr($f, -1) === '/') {
				$content = build($f);
				$pages.= $content[1];
				$menu .=  "<li>
					<span data-menu='submenu'><i class='fa fa-plus-circle'></i> <span>$cap_name</span></span>
					<ul>";
				$menu.= $content[0];
				$menu.="</ul></li>";
      } else {
				if($cap_name != "Main"){
					$pages .= "<section class='doc' data-doc='$nice_name'>";
					$menu .= "<li data-show='$nice_name'> $cap_name</li>";
					if(end(explode('.', basename($f))) == "md"){
						$Parsedown = new Parsedown();
						$pages .= $Parsedown->text(file_get_contents ($f));
					}else{
						$pages .= file_get_contents ($f);

					}
					$pages.= "</section>";
				}

      }
    }
  return [$menu, $pages];
	}

	$content = build("docs");
?>