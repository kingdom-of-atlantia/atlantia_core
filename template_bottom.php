<?php
$proto = 'http';
if($_SERVER["HTTPS"] = "on")
{
	$proto = 'https';
}
?>
<!-- CONTENT ABOVE -->
</div>


			<div class="jsn-article-toolbar">
			<div class="article-info muted" style="float:none">
				<dl class="article-info" style="float:none">
								<dt class="article-info-term">Details</dt>






				</dl>
			</div>
		</div>

					</div>
													</div>
																									</div></div>
										        											</div></div></div></div>
										</div>
													</div>
								</div>
							</div>
							<div class="clearbreak"></div>
						</div>
							<div id="jsn-leftsidecontent" class="span3 order1 offset-12">
						<div id="jsn-leftsidecontent_inner">
							<div id="jsn-pos-left">

<!-- LEFT NAVIGATION -->

<div class="richbox-2 jsn-modulecontainer">
 <div class="jsn-modulecontainer_inner">
  <div>
   <div>
    <h3 class="jsn-moduletitle">
     <span class="jsn-moduleicon">
      <?=$SITE_TITLE_MENU ?>
     </span>
    </h3>
    <div class="jsn-modulecontent">
     <div class="jsn-mod-custom">
      <ul class="menu-treemenu menu-richmenu">
       <li>
        <a href="/">
        <?

         if(isset($SITE_OFFICE_IMAGE)){
	           printf("<center><img src=\"%s\" width=\"100\" /></center>",
	           	$SITE_OFFICE_IMAGE
	           	);
         }else{
           echo("<span><span class=\"jsn-menutitle\">Home Page</span></span>");
         }

         ?>
        </a>
       </li>

       <!-- begin nav loop -->
       <?
			// label, link, new_window
			foreach($SITE_MENU as $menu_item){
			    if(isset($menu_item[1])){
					printf("<li class=\"%s\"><a href=\"%s\" target=\"%s\" class=\"clearfix\">%s<span><span class=\"jsn-menutitle\">%s</span></span></a></li>",
						$menu_item[3] ? "parent external-white" : "parent",
						$menu_item[1],
						$menu_item[2] ? "_blank" : "_self",
						$menu_item[3] ? "<i class=\"external-white\"></i>" : "",
						$menu_item[0]
						);
				}else{
					# if there is no link then just make a label
					printf("<li> <span><span class=\"jsn-menutitle\"><b>%s</b></span></span></li>",
						$menu_item[0]
						);
				}
			}
       ?>

       <!-- end nav loop -->
      </ul>
     </div>
     <div class="clearbreak"></div>
    </div>
   </div>
  </div>
 </div>
</div>

<!-- end nav -->
							</div>
						</div>
					</div>
						</div>
			</div></div></div></div></div>
		</div>
					</div>
		</div>
		<div class="clearbreak"></div>
				<div id="jsn-footer">
				<div id="jsn-footer-inner">
				<div id="jsn-footermodules" class="jsn-modulescontainer jsn-modulescontainer1 row-fluid">
								<div id="jsn-pos-footer" class="span12">
						<div class=" jsn-modulecontainer"><div class="jsn-modulecontainer_inner"><div class="jsn-modulecontent">
<div class="jsn-mod-custom">
	<div class="grid-layout" style="font-size: .9em;">
<div style="text-align: center;">Members of the news media, please see the <a href="<?=$proto ?>://sca.org/media" target="_blank">Society Media Relations web site</a> for more information.<br />Site Owners looking for information about the SCA, please see <a href="<?=$proto ?>://sca.org/docs/pdf/for-siteowners.pdf" target="_blank">this page</a>.</div>
<div style="text-align: center;">Copyright 2002-2019 Kingdom of Atlantia, SCA, Inc.<br /> Please report any broken links or issues with content to the
<a href="mailto:<?=$SITE_WEBMIN_ADDRESS ?>"><?=$SITE_WEBMIN_LABEL ?></a>. &#x2611;
<br /> <!-- START: Tooltips --><span class="rl_tooltips-link nn_tooltips-link hover top" data-toggle="popover" data-html="true" data-template="&lt;div class=&quot;popover rl_tooltips nn_tooltips &quot;&gt;&lt;div class=&quot;arrow&quot;&gt;&lt;/div&gt;&lt;div class=&quot;popover-inner&quot;&gt;&lt;h3 class=&quot;popover-title&quot;&gt;&lt;/h3&gt;&lt;div class=&quot;popover-content&quot;&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;" data-placement="top" data-content="
&lt;p&gt;This is the recognized website for the Kingdom of Atlantia of the &lt;a href=&quot;http://www.sca.org/&quot; target=&quot;_blank&quot;&gt;Society for Creative Anachronism&lt;/a&gt;, Inc. and is maintained by the Atlantian Web Minister &lt;a href=&quot;mailto:webminister@atlantia.sca.org&quot;&gt;Melchior zum grauen Wolf (Kevin Baun)&lt;/a&gt;. This site may contain electronic versions of the branch's governing documents. Any discrepancies between the electronic version of any information on this site and the printed version that is available from the originating office will be decided in favor of the printed version.&lt;/p&gt;
&lt;p&gt;Copyright © 2002-2018 Kingdom of Atlantia. The original contributors retain the copyright of certain portions of this site.&lt;/p&gt;
&lt;p&gt;For information on using photographs, articles, or artwork from this website, please contact the web minister at &lt;a href=&quot;mailto:webminister@atlantia.sca.org&quot;&gt;webminister AT atlantia.sca.org&lt;/a&gt;. They will assist you in contacting the original creator of the piece. Please respect the legal rights of our contributors.&lt;/p&gt;
&lt;p&gt;All external links are not part of the Kingdom of Atlantia website. Inclusion of a page or site here is neither implicit nor explicit endorsement of the site. Further, SCA, Inc. is not responsible for content outside of &lt;a href=&quot;http://atlantia.sca.org&quot; target=&quot;_blank&quot;&gt;http://atlantia.sca.org&lt;/a&gt;.&lt;/p&gt;" title="&lt;a href=&quot;more/disclaimer&quot;&gt;Contact, disclaimer and copyright information&lt;/a&gt;"><a href="<?=$proto ?>://atlantia.sca.org/more/disclaimer">Contact, disclaimer and copyright information</a></span><!-- END: Tooltips --></div>
</div>
<!-- remember to edit the disclaimers page when editing the legal disclaimers --></div><div class="clearbreak"></div></div></div></div>
					</div>
								<div class="clearbreak"></div>
				</div>
				</div>
			</div>
			</div>
			<a id="jsn-gotoplink" href="#top">
			<span>Go to top</span>
		</a>

<!-- Piwik -->
<script type="text/javascript">
//var pkBaseURL = (("https:" == document.location.protocol) ? "<?=$proto ?>://www.atlantia.sca.org/piwik/" : "<?=$proto ?>://www.atlantia.sca.org/piwik/");
var pkBaseURL = <?=$proto ?>://www.atlantia.sca.org/piwik/";
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="<?=$proto ?>://www.atlantia.sca.org/piwik/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tag --></body>
</html>
