<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Ingo Pfennigstorf <pfennigstorf@sub-goettingen.de>
 *         & Sven-S. Porst <porst@sub.uni-goettingen.de>
 *      Göttingen State and University Library
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * RealUrl Hook for automatic URL generation
 */
class Tx_SolrFrontend_Hooks_RealUrl {

	/**
	 * Create automatic RealUrl Configuratoin
	 *
	 * @param $params
	 * @param $pObj
	 * @return array
	 */
	public function addRealUrlConfiguration($params, &$pObj) {
		return array_merge_recursive($params['config'], array(
				'postVarSets' => array(
					'_DEFAULT' => array(
						'a' => array(
							array(
								'GETvar' => 'tx_solrfrontend_solrfrontend[action]',
							),
						),
						'c' => array(
							array(
								'GETvar' => 'tx_solrfrontend_solrfrontend[controller]',
							),
						),
						'docid' => array(
							array(
								'GETvar' => 'tx_solrfrontend_solrfrontend[id]',
							),
						),
						'q' => array(
							array(
								'GETvar' => 'tx_solrfrontend_solrfrontend[q]',
							),
						),
					)
				)
			)
		);
	}

}