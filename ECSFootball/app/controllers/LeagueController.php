<?php

/**
 * Controller for the league table page. Displays the league table loaded from the inter mural sports page.
 *
 * @package LeagueController
 */
class LeagueController extends BaseController {

	/**
	 * Returns the built league table view. Gets the league table and removes the broken links.
	 *
	 * @return View the view to be displayed
	 */
	public function showLeaguePage() {

		//Create new dom doc and load the league table page
		$dom = new DOMDocument();
		@$dom->loadHTMLfile('http://soton.imsports.co.uk/league/leaguetable_ajax.php');

		//Get all the hyperlinks to be removed
		$links = $dom->getElementsByTagName('a');

		//Loop over all the links and replace them with 'p' tags with the same text
		$i = $links->length - 1;
		while ($i > -1) {
			$link = $links->item($i);

			$text = $dom->createElement('p', $link->nodeValue);
			$link->parentNode->replaceChild($text, $link); 
			$i--;
		}

		//Get all the headings to be replaced
		$headings = $dom->getElementsByTagName('h2');

		//Loop over all the headings and replace them with 'h3' tags with the same text
		$i = $headings->length - 1;
		while ($i > -1) {
			$heading = $headings->item($i);

			$text = $dom->createElement('h3', $heading->nodeValue);
			$heading->parentNode->replaceChild($text, $heading); 
			$i--;
		}

		//Save an updated copy of the page
		$leagueTable = $dom->saveHTML($dom);

		return View::make('league', array('leagueTable' => $leagueTable));
	}

}