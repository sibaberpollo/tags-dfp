<?php 

	$tagsslots = "<script type='text/javascript'>
	
        googletag.cmd.push(function() {

        var mappingFullbanner = googletag.sizeMapping().
          addSize([980, 620 ], [970, 250]).
          addSize([740, 580 ], [728, 90]).
          addSize([1, 1 ], [300, 250]).
          build();

              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_160x600', [160, 600], 'div-gpt-ad-1449028416981-0').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-A', [300, 250], 'div-gpt-ad-1449028416981-1').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-B', [300, 250], 'div-gpt-ad-1449028416981-2').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-C', [300, 250], 'div-gpt-ad-1449028416981-3').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-cont', [300, 250], 'div-gpt-ad-1449028416981-4').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-D', [300, 250], 'div-gpt-ad-1449028416981-5').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-E', [300, 250], 'div-gpt-ad-1449028416981-6').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-F', [300, 250], 'div-gpt-ad-1449028416981-7').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x250-G', [300, 250], 'div-gpt-ad-1449028416981-8').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_300x50', [[300, 50],[300, 250]], 'div-gpt-ad-1449028416981-13').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_970x250-A', [970, 250], 'div-gpt-ad-1449028416981-14').defineSizeMapping(mappingFullbanner).addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_970x250-B', [970, 250], 'div-gpt-ad-1449028416981-15').defineSizeMapping(mappingFullbanner).addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_970x250-C', [970, 250], 'div-gpt-ad-1449028416981-16').defineSizeMapping(mappingFullbanner).addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_970x250-D', [970, 250], 'div-gpt-ad-1449028416981-17').defineSizeMapping(mappingFullbanner).addService(googletag.pubads());
              googletag.defineOutOfPageSlot('/124506296/La_Tercera_com/La_Tercera_Portada_especial-A', 'div-gpt-ad-1449028416981-18').addService(googletag.pubads());
              googletag.defineOutOfPageSlot('/124506296/La_Tercera_com/La_Tercera_Portada_especial-B', 'div-gpt-ad-1449028416981-19').addService(googletag.pubads());
              googletag.defineSlot('/124506296/La_Tercera_com/La_Tercera_Portada_barra', [1, 1], 'div-gpt-ad-1449028416981-20').addService(googletag.pubads());
              googletag.pubads().setTargeting('CxSegments',cX.getUserSegmentIds({ persistedQueryId: '1e71f5d217d2466a2c28a8f572d1e7cdb635b306' }));
              googletag.pubads().enableSingleRequest();
              googletag.pubads().enableSyncRendering();
              googletag.pubads().setTargeting('ID', ['']);
              googletag.pubads().setTargeting('CANAL', ['home']);
              googletag.enableServices();
            });
    </script>

    ";
    
    //busca los slots
    $arraykey = preg_match_all('/\(\'(.*?)\'\)/', $tagsslots, $matches);

    foreach ($matches[0] as $key) {
    	//busca el tamanno para ponerlo como campo clave
    	$size = preg_match('/\[\b(.*?)\]/', $key, $resultssize);

    	//busca el id de la pieza
    	$bannerid = preg_match('/div(.*?)\'/', $key, $resultid);
    	//echo $key."\t \n";

    	if(!$resultssize[1]):    		
    		$sizeclean = "especial";
    	else:
    		$sizeclean = str_replace(", ","x",  $resultssize[1]);
    	endif;

    	$banneridclean = rtrim($resultid[0], "'");

    	//echo $sizeclean." -- ".$banneridclean."\t \n";

    	$objectbanner[$sizeclean][] = $banneridclean;

    }

    print_r($objectbanner);

?>