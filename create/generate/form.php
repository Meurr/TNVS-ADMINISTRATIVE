<!DOCTYPE html>
<html>
<head lang="en-US">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generate PDF</title>
	<link rel="stylesheet" href="css/styles.css"/>
	<script>document.addEventListener('contextmenu', event => event.preventDefault());</script>

	<!-- magrerestart uli pag narefresh -->
	<script>
		// Add event listener for pageshow event
		window.addEventListener("pageshow", function(event)
		{
			// Check if the user navigated back to this page
			if (event.persisted)
			{
				// Reload the page
				location.reload();
			}
		});
	</script>

</head>

<body oncontextmenu="return false">
	<h1>Generate a Case</h1>
    <p>Please fill out this form with the required information</p>
    <form method="POST" action='../generate/generate.php'>
    	<fieldset>
    		<label for="pdf_title">Title: <input id="pdf_title" name="pdf_title" type="text" required /></label>
	      <label for="pdf_author">Author: <input disabled id="pdf_author" name="pdf_author" type="text" placeholder="Legal Manager" required /></label>
	      <label for="pdf_subject">Subject: <input disabled id="pdf_subject" name="pdf_subject" type="text" placeholder="Complaint" required /></label>
	    </fieldset>

	    <fieldset>
	        <label for="civil-case"><input id="civil-case" type="radio" name="case" value="1" class="inline" /> Civil Case</label>
	        <label for="criminal-case"><input id="criminal-case" type="radio" name="case" value="2" class="inline" /> Criminal Case </label>
	    </fieldset>

	    <fieldset>
        <label for="pdf_orientation">File Orientation
          <select id="pdf_orientation" name="pdf_orientation">
            <option value="P" selected>Portrait</option>
            <option value="L">Landscape</option>
          </select>
        </label>
        <label for="pdf_size">File Size
          <select id="pdf_size" name="pdf_size">
            <option value="A3">A3</option>
            <option value="A4" selected>A4</option>
            <option value="A5">A5</option>
            <option value="Letter">Letter</option>
            <option value="Legal">Legal</option>
          </select>
        </label>
      </fieldset>

      <h1>Case Details for Civil</h1>
      <fieldset>
    		<label for="defendant-name">Defendant Name <input id="defendant-name" name="defendant-name" type="text" required /></label>
	      <label for="defendant-position">Nature of business <input id="defendant-position" name="defendant-position" type="text" required /></label>
	      <label for="cause-of-action">Cause of Action <input id="cause-of-action" name="cause-of-action" type="text" required /></label>
	    </fieldset>

	    <fieldset>
    		<label for="plaintiff-name">Plaintiff Name <input id="plaintiff-name" name="plaintiff-name" type="text" required /></label>
	      <label for="plaintiff-position">Nature of business <input id="plaintiff-position" name="plaintiff-position" type="text" required /></label>
	    </fieldset>

      <fieldset>
      	<label for="factual-background">Factual Background
          <textarea required id="factual-background" name="factual-background" rows="3" cols="30" placeholder="State the facts that support the cause of action. Be concise and specific."></textarea>
        </label>
      </fieldset>

      <fieldset>
      	<label for="legal-grounds">Cause of Action
          <textarea required id="legal-grounds" name="legal-grounds" rows="3" cols="30" placeholder="State the legal grounds for the cause of action. Be concise and specific."></textarea>
        </label>
      </fieldset>

      <h1>Case Details for Criminal</h1>
      <fieldset>
    		<label for="defendant-name">Defendant Name <input id="defendant-name" name="defendant-name" type="text" required /></label>
	      <label for="defendant-position">Nature of business <input id="defendant-position" name="defendant-position" type="text" required /></label>
	      <label for="cause-of-crime">Cause of Action <input id="cause-of-crime" name="cause-of-crime" type="text" required /></label>
	    </fieldset>

	    <fieldset>
    		<label for="plaintiff-name">Plaintiff Name <input id="plaintiff-name" name="plaintiff-name" type="text" required /></label>
	      <label for="plaintiff-position">Nature of business <input id="plaintiff-position" name="plaintiff-position" type="text" required /></label>
	    </fieldset>

      <fieldset>
      	<label for="factual-background">Factual Background
          <textarea required id="factual-background" name="factual-background" rows="3" cols="30" placeholder="State the facts that support the cause of action. Be concise and specific."></textarea>
        </label>
      </fieldset>

      <fieldset>
      	<label for="criminal-offense">Criminal Offense
          <textarea required id="criminal-offense" name="criminal-offense" rows="3" cols="30" placeholder="State the legal grounds for the cause of action. Be concise and specific."></textarea>
        </label>
      </fieldset>

      <fieldset>
      	<label for="crim-evidence">Evidence
          <textarea required id="crim-evidence" name="crim-evidence" rows="3" cols="30" placeholder="Provide the evidence that supports the criminal offense committed by the Defendant. This may include documents, videos, or other supporting material."></textarea>
        </label>
      </fieldset>

      <fieldset>
      	<label for="terms-and-conditions" name="terms-and-conditions">
	        	<input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" /> I confirm that I read and agree to the <a href="../LULAN-TOS.php">terms and conditions</a>
	      </label>
	      <label for="privacy-policy" name="privacy-policy">
	        	<input id="privacy-policy" type="checkbox" required name="privacy-policy" class="inline" /> I confirm that I read and agree to the <a href="../LULAN-PP.php">privacy policy</a>
	      </label>
      </fieldset>

	    <input type="submit" value="Generate PDF">
	</form>

</body>
</html>