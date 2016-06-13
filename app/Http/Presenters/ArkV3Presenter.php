<?php 
namespace App\Http\Presenters;

use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use Illuminate\Pagination\UrlWindow;
use Illuminate\Pagination\UrlWindowPresenterTrait;
use Illuminate\Support\HtmlString;


class ArkV3Presenter implements PresenterContract {
	use UrlWindowPresenterTrait;
	/**
     * The paginator implementation.
     *
     * @var \Illuminate\Contracts\Pagination\Paginator
     */
    protected $paginator;

    /**
     * The URL window data structure.
     *
     * @var array
     */
    protected $window;

    /**
     * Create a new Bootstrap presenter instance.
     *
     * @param  \Illuminate\Contracts\Pagination\Paginator  $paginator
     * @param  \Illuminate\Pagination\UrlWindow|null  $window
     * @return void
     */
    public function __construct(PaginatorContract $paginator, UrlWindow $window = null)
    {
        $this->paginator = $paginator;
        $this->window = is_null($window) ? UrlWindow::make($paginator) : $window->get();
    }

    // <div class="paginations-v3 text-center margin-b-60">
    //             <ul class="paginations-v3-list">
    //                 <li class="previous">
    //                     <a href="#" aria-label="Previous">
    //                         <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
    //                     </a>
    //                 </li>
    //                 <li><a href="#">1</a></li>
    //                 <li><a href="#">2</a></li>
    //                 <li class="active"><a href="#">3</a></li>
    //                 <li><a href="#">4</a></li>
    //                 <li><a href="#">5</a></li>
    //                 <li class="next">
    //                     <a href="#" aria-label="Next">
    //                         <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
    //                     </a>
    //                 </li>
    //             </ul>
    //         </div>
	/**
     * Render the given paginator.
     *
     * @return \Illuminate\Contracts\Support\Htmlable|string
     */
    public function render(){
    	if ($this->hasPages()) {
            return new HtmlString(sprintf(
                '<div class="paginations-v3 text-center margin-b-60"><ul class="paginations-v3-list">%s %s %s</ul></div>',
                $this->getPreviousButton('<i class="fa fa-angle-double-left"></i>'),
                $this->getLinks(),
                $this->getNextButton('<i class="fa fa-angle-double-right"></i>')
            ));
        }

        return '';
    }

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages(){
    	return $this->paginator->hasPages();
    }
    /**
     * Get HTML wrapper for an available page link.
     *
     * @param  string  $url
     * @param  int  $page
     * @param  string|null  $rel
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page, $rel = null)
    {
    	$class= $rel;
        $rel = is_null($rel) ? '' : ' rel="'.$rel.'"';

        return '<li class="'.$class.'"><a class="page-link" href="'.htmlentities($url).'"'.$rel.'>'.$page.'</a></li>';
    }

    /**
     * Get HTML wrapper for disabled text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<li class="page-item disabled"><a class="page-link">'.$text.'</a></li>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<li class="page-item active"><a class="page-link">'.$text.'</a></li>';
    }

    /**
     * Get a pagination "dot" element.
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('...');
    }

    /**
     * Get the current page from the paginator.
     *
     * @return int
     */
    protected function currentPage()
    {
        return $this->paginator->currentPage();
    }

    /**
     * Get the last page from the paginator.
     *
     * @return int
     */
    protected function lastPage()
    {
        return $this->paginator->lastPage();
    }
    /**
     * Get the previous page pagination element.
     *
     * @param  string  $text
     * @return string
     */
    public function getPreviousButton($text = '&laquo;')
    {
        // If the current page is less than or equal to one, it means we can't go any
        // further back in the pages, so we will render a disabled previous button
        // when that is the case. Otherwise, we will give it an active "status".
        if ($this->paginator->currentPage() <= 1) {

            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->paginator->url(
            $this->paginator->currentPage() - 1
        );

        return $this->getPageLinkWrapper($url, $text, 'previous');
    }

    /**
     * Get the next page pagination element.
     *
     * @param  string  $text
     * @return string
     */
    public function getNextButton($text = '&raquo;')
    {
        // If the current page is greater than or equal to the last page, it means we
        // can't go any further into the pages, as we're already on this last page
        // that is available, so we will make it the "next" link style disabled.
        if (! $this->paginator->hasMorePages()) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->paginator->url($this->paginator->currentPage() + 1);

        return $this->getPageLinkWrapper($url, $text, 'next');
    }
}