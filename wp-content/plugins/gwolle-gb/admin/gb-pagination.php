<?php

// No direct calls to this script
if ( strpos($_SERVER['PHP_SELF'], basename(__FILE__) )) {
	die('No direct calls allowed!');
}


/*
 * gwolle_gb_pagination_admin
 * Pagination of the entries for the page-entries.php
 *
 * @args: $pageNum, int with the number of the requested page.
 *        $pages_total, int with the total number of pages.
 *        $count, int with total number of entries. Relative to the $show variable.
 *        $show, string with the tab of the page that is shown.
 *  @return: $pagination, string with the html of the pagination.
 */
function gwolle_gb_pagination_admin( $pageNum, $pages_total, $count, $show ) {

	$num_entries = get_option('gwolle_gb-entries_per_page', 20);

	$book_id = 0;
	if ( isset( $_GET['book_id'] ) ) {
		$book_id = (int) $_GET['book_id'];
	}

	// Calculate written text with info "Showing 1 – 25 of 54"
	if ($count == 0) {
		$firstentry = 0;
		$lastentry = 0;
	} else {
		$firstentry = ($pageNum - 1) * $num_entries + 1;
		$total_on_this_page = $count - ( ($pageNum - 1) * $num_entries );
		if ( $total_on_this_page > $num_entries ) {
			$total_on_this_page = $num_entries;
		}
		$lastentry = $firstentry + $total_on_this_page -1;
	}

	$pagination = '<div class="tablenav-pages">';

	$highDotsMade = false;
	$pages_done = array();

	$pagination .= '<span class="displaying-num">' . __('Showing:', 'gwolle-gb') .
		' ' . $firstentry . ' &#8211; ' . $lastentry . ' ' . __('of', 'gwolle-gb') . ' ' . $count . '</span>
		';


	if ($pageNum > 1) {
		$pagination .= '<a class="first page-numbers" href="admin.php?page=' . GWOLLE_GB_FOLDER . '/entries.php&show=' . $show . '&pageNum=' . round($pageNum - 1) . '&book_id=' . $book_id . '" rel="prev">&laquo;</a>';
	}

	if ($pageNum < 5) {
		$showRange = 5;
		if ($pages_total < 6) {
			$showRange = $pages_total;
			$highDotsMade = true; // no need for highdots.
		}
		for ($i = 1; $i < ($showRange + 1); $i++) {
			if ($i == $pageNum) {
				if ( in_array( $i, $pages_done ) ) { continue; }
				$pagination .= '<span class="page-numbers current">' . $i . '</span>';
				$pages_done[] = $i;
			} else {
				if ( in_array( $i, $pages_done ) ) { continue; }
				$pagination .= '<a class="page-numbers" href="admin.php?page=' . GWOLLE_GB_FOLDER . '/entries.php&show=' . $show . '&pageNum=' . $i . '&book_id=' . $book_id . '">' . $i . '</a>';
				$pages_done[] = $i;
				if ( $i == $pages_total ) { break; }
			}
		}

		if ( ($pageNum + 4 < $pages_total) && ( ! $highDotsMade) ) {
			$pagination .= '<span class="page-numbers dots">...</span>';
			$highDotsMade = true;
		}
	} elseif ($pageNum > 4) {
		$pagination .= '<a class="page-numbers" href="admin.php?page=' . GWOLLE_GB_FOLDER . '/entries.php&show=' . $show . '&pageNum=1&book_id=' . $book_id . '">1</a>';
		if ($pages_total > 4) {
			$pagination .= '<span class="page-numbers dots">...</span>';
		}
		if ($pageNum + 2 < $pages_total) {
			$minRange = $pageNum - 2;
			$showRange = $pageNum + 2;
		} else {
			$minRange = $pageNum - 3;
			$showRange = $pages_total - 1;
		}
		for ($i = $minRange; $i <= $showRange; $i++) {
			if ($i == $pageNum) {
				$pagination .= '<span class="page-numbers current">' . $i . '</span>';
			} else {
				$pagination .= '<a class="page-numbers" href="admin.php?page=' . GWOLLE_GB_FOLDER . '/entries.php&show=' . $show . '&pageNum=' . $i . '&book_id=' . $book_id . '">' . $i . '</a>';
			}
		}
		if ($pageNum == $pages_total) {
			$pagination .= '<span class="page-numbers current">' . $pageNum . '</span>';
		}
	}

	if ($pageNum < $pages_total) {
		if ( ($pageNum + 3 < $pages_total) && ( ! $highDotsMade) ) {
			$pagination .= '<span class="page-numbers dots">...</span>';
			$highDotsMade = true;
		}
		if ( ! in_array( $pages_total, $pages_done ) ) {
			$pagination .= '<a class="page-numbers" href="admin.php?page=' . GWOLLE_GB_FOLDER . '/entries.php&show=' . $show . '&pageNum=' . $pages_total . '&book_id=' . $book_id . '">' . $pages_total . '</a>';
		}
		$pagination .= '<a class="last page-numbers" href="admin.php?page=' . GWOLLE_GB_FOLDER . '/entries.php&show=' . $show . '&pageNum=' . round($pageNum + 1) . '&book_id=' . $book_id . '" rel="next">&raquo;</a>';
	}

	$pagination .= '</div>';

	return $pagination;

}
