<?php if(isset($_POST['submit'])){
	echo '<pre>';print_r($_POST);exit;
	$info = pathinfo($_FILES['userFile']['name']);
	$ext = $info['extension']; // get the extension of the file
	$newname = time().$ext; 
	$target = 'files/'.$newname;
	move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
	
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Career</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <?php include 'elements/header_include.php'; ?>
    <link rel="stylesheet" href="css/mailform.css"/>
</head>
<body>
<div class="page">
<style>
.mail-wrap label {
    float: none;
	width: 350px;
}
.mail-wrap label + label {
    margin-top: 0;
    margin-left: 0px;
}
address{
	padding:20px 0px;
}
label{
	margin:10px 0px;
}
.mail-secondary{
	width:330px;text-align:justify;
}
</style>
   <!--========================================================
                              HEADER
    =========================================================-->
     <?php include 'elements/header.php'; ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well-4 well-4__off divider-xs well-xs-1">
            <div class="container">
                <h3><strong>Career</strong></h3>
				<p>Itechmatic specializes in providing complete enterprise mobile solutions for insurance companies.
				We have got the experience and knowledge to provide with complete solutions for all the mobile platforms.</p>
                <div class="row row__off-2">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <address class="addr"><p class="h5">Career Opportunities</p></address>
                        <p class="mail-secondary">
						Welcome to Careers at Itechmatics Interesting work brings people to Itechmatics. Variety, teamwork and growth keep people here as they build their careers.
						Itechmatics welcomes Senior Software Developers to work on part-time free lancing basis. The advantage is that the Developer can work from Home too
                        </p>
						<address class="addr"><p class="h5">Client Appreciation</p></address>
                        <p class="mail-secondary">
						Client visited our company recently and highly acclaimed our deliverables and quality product which satisfied them with in a quick round of time line.
                        </p>
						
                    </div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<address class="addr"><p class="h5">Our Values at Work</p></address>
                        <p class="mail-secondary">
						We at Itechmatics have an excellent work culture and a satisfying work experience; our employees have opportunities to 
						prove their talent in every field they desire.Dedication to every client's success. Innovation that matters - for our company.Trust and personal responsibility in all relationships.
                        </p>
						<address class="addr"><p class="h5">On Shore Opportunities</p></address>
                        <p class="mail-secondary">
						Itechmatics has tied up with many US Clients and intends to provide Onshore opportunities to eligible candidates. 
						We have a past record of sponsoring H1-B Visas for good number of prospective candidates.
                        </p>
					</div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                       <address class="addr"><p class="h5">Apply For a Job ?</p></address>

                        <form class='mailform' method="post" action="">
						<input type="hidden" name="form-type" value="career"/>
                            <fieldset>
                                <div class="mail-wrap">


                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="name"
                                               placeholder="Name*:"
                                               data-constraints="@LettersOnly @NotEmpty"/>
                                    </label>
                                    <label data-add-placeholder>
                                        
									  <select name="position">
										<option>Select your positions*:</option>
										<option>Software Engineer</option>
										<option>Graphics Designer</option>
										<option>HR</option>
										<option>Admin</option>
									  </select>
                                    </label>
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="phone"
                                               placeholder="Phone*:"
                                               data-constraints="@Phone @NotEmpty"/>
                                    </label>
									<label data-add-placeholder>
                                    <input type="file"
                                               name="userFile"
                                               data-constraints="@NotEmpty"/>
                                </label>

                                </div>

                                
                                <div class="mfControls">
                                    <button class="btn-primary" type="submit" name="submit">Submit</button>
                                </div>
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
       <?php //include 'elements/map.php'; ?>


    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
 <?php include 'elements/footer.php'; ?>
</div>

<script src="js/script.js"></script>
</body>
</html>