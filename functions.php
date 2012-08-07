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

		$page_heading = 'This is the usage page heading';
		$page_subheading = 'This is the usage page subheading';

		break;

	case 'typography':

		$page_heading = 'This is the type page heading';
		$page_subheading = 'This is the type page subheading';

		break;

	case 'grid':

		$page_heading = 'An Incredibly Versatile Grid';
		$page_subheading = 'Check out an example of a 12 column grid layout.';

		break;

	default:

		$page_heading = 'A clean responsive grid with a typographic baseline you say?';
		$page_subheading = 'Responsable uses the power of less to bring you a perfect responsive framework.';

}