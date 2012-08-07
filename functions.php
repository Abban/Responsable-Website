<?

// Set up site variables
$base_url = "http://" . $_SERVER['HTTP_HOST'];
$current_page = str_replace('/', '', $_SERVER['REQUEST_URI']);



/**
 * site_url
 *
 * Generates a printable site url
 * 
 * @param  string $uri
 * @return string
 */
function site_url($uri = ''){
	
	return $base_url .'/' .$uri;

}
switch($current_page){
	
	case 'usage':

		$page_heading = 'Using Responsable couldnt be easier.';
		$page_subheading = 'We think its one of the simplest frameworks around to use.';

		break;

	case 'typography':

		$page_heading = 'A gateway to beautiful typography on your projects.';
		$page_subheading = 'Mixing the power of normalize css with a typographic baseline to jumpstart your layout.';

		break;

	case 'grid':

		$page_heading = 'One column to rule them all and on the page divide them.';
		$page_subheading = 'You can set as many columns as you like, below is a 12 column grid layout.';

		break;

	default:

		$page_heading = 'A clean responsive grid with a typographic baseline you say?';
		$page_subheading = 'Responsable uses the power of less to bring you a perfect responsive framework.';

}