<?php

/**
 * Controller for the home page. Displays the home page.
 *
 * @package HomeController
 */
class HomeController extends BaseController {

	/**
	 * Returns the built home page view
	 *
	 * @return View the view to be displayed
	 */
	public function showHomePage() {
		$latestArticles = Article::orderBy('display_date', 'desc')
						->take(5)
						->get();


		//featuredFilm is called film so that the homepage can use the filmDetails partial
		//return $this->buildPage('home', array('recentFilms' => $recentFilms, 'film' => $featuredFilm));
                
                if ( Auth::check() && Auth::user()->is_admin ){
			return View::make('homeAdmin', array('articles' => $latestArticles));
		}else {
			return View::make('home', array('articles' => $latestArticles));
		}
	}

        public function showArticlesPage($articleID = null) {
		if (!$articleID == null) {
			return $this->showArticle($articleID);
		} else {
			return $this->showHomePage();
		}
	}

	public function showArticle($articleID) {
		$article = Article::where('article_id', '=', $articleID)
					->first();
                                        
		return View::make('article', array('article' => $article));
	}
        
        public function deleteArticle(){
		
		$article = Article::find(Input::get('article_id'))
						->delete();	

		return Redirect::action('HomeController@showHomePage')->with('success', 'The article has been deleted.');
	}
        
        public function showArticlePage($articleID = null) {
		if (!$articleID == null) {
			return $this->showArticleUpdate($articleID);
		} else {
			return $this->showHomePage();
		}
	}

	public function showArticleUpdate($articleID) {
		$article = Article::where('article_id', '=', $articleID)
					->first();

		if ( Auth::check() && Auth::user()->is_admin ){
			return View::make('articleUpdate', array('article' => $article));
		} else {
			return Redirect::action('HomeController@showHomePage');
		}
	}
        
        
        public function updateArticle() {
		$validator = Article::validate(Input::all());

		if ($validator->passes()) {
			$article = Article::find(Input::get('article_id'));
			$article->title = Input::get('title');
			$article->display_date = Input::get('display_date');
			$article->picture_URL = Input::get('picture_URL');
			$article->description = Input::get('description');
			$article->pin = Input::get('pin');
			$article->save();

			return Redirect::action('HomeController@showHomePage')->with('success', 'The fixture has been updated.');
		} else {
			Input::flash();
			return Redirect::action('HomeController@showHomePage', Input::get('id'))->withErrors($validator->messages());
		}	
	}
        
        
        public function addArticle(){
		$validator = Article::validate(Input::all());

		if($validator->passes()){
			$display_date_old = Input::get('display_date');
			$display_date_new = date("Y-m-d", strtotime($display_date_old));

			$article = new Article;
			$article->title = Input::get('title');
			$article->display_date = $display_date_new;
			$article->picture_URL = Input::get('picture_URL');
			$article->description = Input::get('description');
			$article->pin = Input::get('pin');
			$article->save();

			return Redirect::action('HomeController@showHomePage')->with('success', 'The article has been added.');
		}else{
			Input::flash();
			return Redirect::action('HomeController@showHomePage')->withErrors($validator->messages());
		}
	}
}