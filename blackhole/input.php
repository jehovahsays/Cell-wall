<?php
header_remove( 'X-Powered-By' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Frame-Options: Deny' );
header( 'X-Frame-Options: Deny' );
header( 'Cache-Control: no-store, no-cache, must-revalidate');
header( 'Expires: no-cache' );
header( 'Pragma: no-cache' );
//header( 'Content-Security-Policy: default-src "self";');
header( 'Referrer-Policy:  same-origin' );
//include(realpath(getenv('DOCUMENT_ROOT')) .'/blackhole/blackhole.php');
//header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
//header( 'google-site-verification: ' );
//header( 'msvalidate.01: ' );
//header( 'norton-safeweb-site-verification: ' );
//header( 'wot-verification: ' );
//header( 'author: ' );
//header( 'description: ' );
//header( 'keywords: ' );
//header( 'Expect-CT:  enforce,max-age=30,report-uri=""' );
?>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Cache-Control" content="private, no-cache, no-store, must-revalidate, pre-check=0, post-check=0, max-age=0, s-maxage=0"/>
	<div 
	   id="&#x70;&#x61;&#x67;&#x65;&#x2D;&#x77;&#x72;&#x61;&#x70;">		
		<form 
		autocomplete="&#x6F;&#x66;" 
		action="&#x6F;&#x75;&#x74;&#x70;&#x75;&#x74;&#x2E;&#x70;&#x68;&#x70;" 
		method="&#x70;&#x6F;&#x73;&#x74;" 
		id="&#x73;&#x65;&#x63;&#x75;&#x72;&#x65;&#x2D;&#x66;&#x6F;&#x72;&#x6D;" 
		required>		               
                    <h3>
					Are you human?<br>
					Click the check box below,<br>
					to submit human verification.</h3>                    
                    <div>
                        <input 
						autocomplete="&#x6F;&#x66;" 
						type="radio" 
						name="secure-form-answer" 
						id="&#x73;&#x65;&#x63;&#x75;&#x72;&#x65;&#x2D;&#x66;&#x6F;&#x72;&#x6D;&#x2D;&#x61;&#x6E;&#x73;&#x77;&#x65;&#x72;&#x2D;&#x48;&#x75;&#x6D;&#x61;&#x6E;" 
						value="&#x48;&#x75;&#x6D;&#x61;&#x6E;" 
						required />
                        <label 
						for="&#x73;&#x65;&#x63;&#x75;&#x72;&#x65;&#x2D;&#x66;&#x6F;&#x72;&#x6D;&#x2D;&#x61;&#x6E;&#x73;&#x77;&#x65;&#x72;&#x2D;&#x48;&#x75;&#x6D;&#x61;&#x6E;">
						&#x48;&#x75;&#x6D;&#x61;&#x6E;
						</label>
                    </div><br>                        
            <input 
			type="&#x73;&#x75;&#x62;&#x6D;&#x69;&#x74;" 
			value="&#x73;&#x75;&#x62;&#x6D;&#x69;&#x74;" />		
		</form>	
	</div>
	<a rel="nofollow" style="display:none;" href="/blackhole/" title="Do NOT follow this link or you will be temporarily banned from the site! The blackhole.dat file can lift ban"><img src="/__utm.gif" alt="" /></a>

