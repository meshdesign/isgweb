<?php/*Template Name: iMIS Test Template*/ $test = 0;$create = 0; //include "simple_html_dom.php";include ('includes/aeh_config.php'); include ("includes/aeh-functions.php");get_header();global $wpdb;?><div id="membernetwork">	<div class="container">		<h1 class="title"><span class="grey">Essential Hospitals</span> Maintenance Page</h1>			<div id="registrationcontent" class="group">			<div class="gutter clearfix">				<h2 class='heading'>Diagnostic Pages</h1><?php//ORDER FOR IMIS SYNC//import_imis();//update_wp_users();//find_new_wp_users();//insert_new_wp_users();//get_imis_tables();global $current_user;      get_currentuserinfo();      $token = get_user_meta($current_user->ID , 'isg_token', true );      echo 'Username: ' . $current_user->user_login . "<br>";      echo 'Email: ' . $current_user->user_email . "<br>";      echo 'ID: ' . $current_user->ID . "<br>";      echo 'Token: ' . $token . "<br><br>";        //authenticate_user('mcampbell@essentialhospitals.org', 'aeh1301a'); ?><!-- <div class="err" id="add_err"> </div><fieldset>	<form action="" >		<ul>			<li> <label for="name">Username </label><input type="text" size="30"  name="name" id="name"  /></li>			<li> <label for="name">Password</label><input type="password" size="30"  name="word" id="word"  /></li>			<li> <label></label> 			<button id="loginbtn">login</button>		</ul>    </form></fieldset> --><!-- <div id="loginBoxPanel">	<div class="container">	    <div id='loginForm'>			<div align="center"  style="display: none;" id="wpmem_msg">				<h2 id="wpmemloginfail">Login Failed!</h2>				<p id="wpmemloginmsg">You entered an invalid username or password.</p>			</div>	      <div id="wpmem_login">			<a name="login"></a>			<form action="" id="loginform_new" method="POST" class="form">				<fieldset> 					<label for="username">Email</label>					<div class="div_text">						<input name="log" type="text" id="namenew" value="" class="username" placeholder="email address">					</div>					<label for="password">Password</label>					<div class="div_text">						<input name="pwd" type="password" id="wordnew" class="password" placeholder="password">					</div> 					<div class="button_div">		 						<div class="submit-reg"><input type="submit" name="Submit" value="Login" class="buttons"></div>					</div>					<div class="clear"></div>					<div align="right" class="pass-reg "><a href="http://localhost/essentialhospitals/membernetwork/my-profile/?a=pwdreset">Forgot your password?</a></div>					<div align="right" class="new-reg ">Don't have an account?&nbsp;<a href="http://localhost/essentialhospitals/membernetwork/registration/">Sign up</a></div>					<div class="clear"></div>					<div class="tester"> test</div>				</fieldset>			</form>		</div>	      <?php //echo do_shortcode('[wp-members page="login"]'); ?>	    </div>	</div></div> --> <?php // Process:// 1. Authenticate User //       -- If wrong password, display link to isgweb reset password iframe page// 2. Get IMIS User ID and Token // 3. Find user id based on imis_id user meta//       -- If imis_id does not exists, create wp user// 4. Update temp token in user meta // 5. Update usermeta from imis data.// 6. login to WP // 7. Attached token to isgweb URL anytime linked to isgweb// https://isgweb.essentialhospitals.org/ISGweb/LogIn/login.aspx?Token=23A62620-904A-4A11-AD86-691DEE47C122ReturnUrl=%2fisgweb%2fconference%2fregistrationprocessoverview.aspx%3fid%3d42&id=42// On logout:// 1. Clear Token user meta// 2. Call DeleteUserSession web service?> <!--  <iframesrc='https://isgweb.essentialhospitals.org/ISGweb/Profile/ViewProfile.aspx?'isgwebsite="1" name="ISGwebContainer" id="ISGwebContainer" marginwidth="1"marginheight="0" frameborder="0" vspace="0" hspace="0" scrolling="no" width="100%"style="overflow:visible; height: 4000px; display:block;">Sorry, your browser doesn't support iframes.</iframe>  --> <?php /*$f = fsockopen('smtp.essentialhospitals.org', 25) ;if ($f !== false) {    $res = fread($f, 1024) ;    if (strlen($res) > 0 && strpos($res, '220') === 0) {        echo "Success" ;        var_dump($f);    }    else {        echo "Error: " . $res ;    }}fclose($f) ; */ 	// Send a POST request to ibridge	//$result = post_request('http://isgweb.naph.org/ibridge/DataAccess.asmx/ExecuteDatasetStoredProcedure', $params);	//$result_stat = $result['status'];		/*------------USERS TO OPEN REAL MODULE----------------// 	$results = $wpdb->get_col("SELECT user_id FROM `wp_usermeta` where meta_key = 'REAL-Track-Start' ORDER BY `wp_usermeta`.`user_id` ASC");	 	echo "<table>"; 	foreach($results as $id) 	{		echo "</tr>"; 		$user_info = get_userdata($id);     	$email = $user_info->user_email;      	$first_name = $user_info->first_name;      	$last_name = $user_info->last_name;		echo "<td>".$id ."</td><td>". $email."</td><td>".$first_name." ".$last_name."</td>";		echo "</tr>"; 	}	echo "</table>";  */	/*------------LOGGED IN USERS TO ACCESS  REAL MODULE LANDING----------------*/	// $results = $wpdb->get_col("SELECT user_id FROM `wp_usermeta` where meta_key = 'REAL' ORDER BY `wp_usermeta`.`user_id` ASC");	 	// echo "<table>"; 	// foreach($results as $id) 	// {	// 	echo "</tr>"; 	// 	$user_info = get_userdata($id); //     	$email = $user_info->user_email; //      	$first_name = $user_info->first_name; //      	$last_name = $user_info->last_name;	// 	echo "<td>".$id ."</td><td>". $email."</td><td>".$first_name." ".$last_name."</td>";	// 	echo "</tr>"; 	// }	// echo "</table>"; 	//get_imis_tables(); */ ?>  