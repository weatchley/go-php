<?php
//echo "<p>Footer</p>";
?>
			<div id="footer">
<CENTER>
	<TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=2 STYLE="page-break-before: always">
		<TR>
			<TD COLSPAN=3 WIDTH=100% VALIGN=TOP>
				<H6 ALIGN=CENTER>
                <?php echo (($pageId == "home") ? "<i>" : "") ?><A HREF="index.php">Home</A><?php echo (($pageId == "home") ? "</i>" : "") ?> &middot;
                <?php echo (($pageId == "internet") ? "<i>" : "") ?><A HREF="internet.php">Internet Services</A><?php echo (($pageId == "internet") ? "</i>" : "") ?> &middot;
				<?php echo (($pageId == "computerservices") ? "<i>" : "") ?><A HREF="computerservices.php">Computer Services </A><?php echo (($pageId == "computerservices") ? "</i>" : "") ?> &middot;
				<?php echo (($pageId == "database") ? "<i>" : "") ?><A HREF="database.php">Database Design</A><?php echo (($pageId == "database") ? "</i>" : "") ?></H6>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=34%>
				<P ALIGN=CENTER STYLE="margin-bottom: 0in">For more information
				or just to say hi,<BR>use our <A HREF="<?php echo $siteRoot; ?>/contact">contact form</A></P>
				<ADDRESS STYLE="text-align: center">
				<FONT SIZE=1>Last Updated -<!--webbot bot="Timestamp" s-type="REGENERATED" s-format="%m/%d/%y" startspan -->
			    11/20/2012 </FONT><BR>
				<BR>
				</ADDRESS>
			</TD>
			<TD WIDTH=33%>
				<P ALIGN=CENTER><A HREF="http://www.golden-op.com/" TARGET="_top"><IMG SRC="<?php echo $siteRoot; ?>/images/GO_button.GIF" NAME="Graphic1" ALT="GO_button.GIF (2829 bytes)" ALIGN=BOTTOM width=90 height=33 BORDER=0></A>
			  </P>
			</TD>
			<TD WIDTH=33% valign="top">
				<!--P ALIGN=CENTER STYLE="margin-bottom: 0in">To send a text message,<br>
				  use our <a href="pagerform.htm">pager form</a> <br>
				</P-->
		  </TD>
		</TR>
	</TABLE>
</CENTER>
<P><BR><BR>
</P>
			</div>
		</div>
