<? include ('includes/headA.php') ?>

<? include ('includes/hits.php') ?>


	<div id='body'>
<!-- <a href='index.php?p=proj1' title='KNOWAtlanta Web Site'>
  <img class="proj1" align="right" alt="KNOWAtlanta Web Site" src="./images/project1.jpg" /></a> -->
		<img class="proj1" align="right" alt="will" src="./images/me_blkwht.jpg" /> 
		<h3>Contact Me :: </h3> 

	<form method="post" action="<? echo 'contact.php'; ?>" onSubmit="return valNameEmailPhone(this);">


	<!-- <form method="post" action="<? echo 'contact.php?source=$_GET[source]&kw=$_GET[kw]&ag=$_GET[ag]'; ?>" onSubmit="return valNameEmailPhone(this);"> -->
	
		<input name="browser" type="hidden" value="<?=$_SERVER['HTTP_USER_AGENT']?>" />
        <input name="ipaddress" type="hidden" value="<?=$_SERVER['REMOTE_ADDR']?>"  />
                       
        <p>Name *<br />
			<input type="text" name="name" size="15" /></p>
		<p>Email *<br />
        	<input name="email" type="text" size="15" /></p>
        <p>Phone Number *<br />
        	<input name="phone" type="text" size="15" /></p>
        <p>Message <br />
        	<textarea name="comment" rows="5" cols="30"></textarea>
        </p>
                                <p>*Required fields</p>

                                <p><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Clear" /></p>
                            </form>


<? include ('includes/footer.php'); ?>