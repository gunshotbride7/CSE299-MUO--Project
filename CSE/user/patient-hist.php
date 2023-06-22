<!DOCTYPE html>
<html>
<head>
	<title>Patient History Form</title>
	<link rel="stylesheet"  href="patient-hist.css">
</head>
<body style = "background-color: #018ea7;">
	<h1>Patient History Form</h1>
	<form>
		<fieldset style="background-color: #93e2f0;">
			<legend>Personal Information</legend>

			<label for="firstName">First Name:</label>
			<input type="text" id="firstName" name="firstName"><br>

			<label for="lastName">Last Name:</label>
			<input type="text" id="lastName" name="lastName"><br>

			<label for="dob">Date of Birth:</label>
			<input type="date" id="dob" name="dob"><br>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select><br>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email"><br>

			<label for="phone">Phone Number:</label>
			<input type="tel" id="phone" name="phone"><br>
		</fieldset>

		<fieldset style="background-color: #93e2f0;">
			<legend>Medical Information</legend>

			<label for="symptoms">Symptoms:</label>
			<textarea id="symptoms" name="symptoms"></textarea><br>

			<label for="diagnosis">Diagnosis:</label>
			<textarea id="diagnosis" name="diagnosis"></textarea><br>

			<label for="medications">Medications:</label>
			<textarea id="medications" name="medications"></textarea><br>

			<label for="allergies">Allergies:</label>
			<textarea id="allergies" name="allergies"></textarea><br>

            <label for="drug allergies">Drug Allergies:</label>
			<textarea id="drug allergies" name="drug allergies"></textarea><br>

            <label for="adverse drug reactions">Adverse Drug Reactions:</label>
			<textarea id="adverse drug reactions" name="adverse drug reactions"></textarea><br>

			<label for="notes">Notes:</label>
			<textarea id="notes" name="notes"></textarea><br>
		</fieldset>

        <fieldset style="background-color: #93e2f0;">
			<legend>Current Medical History</legend>

			<label for="main medical problem">What do you regard as your main medical problem(s)?:</label>
			<textarea id="main medical problem" name="main medical problem"></textarea><br>

            <p>Please list all prescriptions or over the counter medications with dose and frequency taken including vitamins and herbs:</p>

			<label for="name">Name:</label>
			<textarea id="name" name="name"></textarea><br>

			<label for="dosage">Dosage:</label>
			<textarea id="dosage" name="dosage"></textarea><br>

			<label for="frequency">Frequency:</label>
			<textarea id="frequency" name="frequency"></textarea><br>

		</fieldset>

        <fieldset style="background-color: #93e2f0;">
			<legend>Personal Habits</legend>

            <label for="seatbelt">Do you wear seatbelts?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

            <br>

            <label for="exercise">Do you exercise regularly?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

            <label for="smoke">Do you smoke?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

            <label for="tobacco">Do you chew tobacco?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

            <label for="alcohol">Do you drink alcohol?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

            <label for="caffeine">Do you drink caffeine?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

            <label for="drugs">Do you experience difficulty with drugs, alcohol or other substances?</label>
            <br>
            <form>
                <label>
                    <input type="radio" name="Y/N/M" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="No">
                    No
                </label>
                <label>
                    <input type="radio" name="Y/N/M" value="Used to">
                    Used to
                </label>
            </form>

			<br>

            <label for="smoke">If you smoke, how many packs per day?</label>
			<textarea id="smoke" name="smoke"></textarea><br>

			<label for="years">For how many years?</label>
			<textarea id="years" name="years"></textarea><br>

            <label for="tobacco">If you chew tobacco, how much a day?</label>
			<textarea id="tobacco" name="tobacco"></textarea><br>

			<label for="years">For how many years?</label>
			<textarea id="years" name="years"></textarea><br>

            <label for="alcohol">If you drink, how many drinks a day?</label>
			<textarea id="alcohol" name="alcohol"></textarea><br>

			<label for="years">For how many years?</label>
			<textarea id="years" name="years"></textarea><br>

            <label for="coffee">If you drink coffee, how many cups per day?</label>
			<textarea id="coffee" name="coffee"></textarea><br>

			<label for="years">For how many years?</label>
			<textarea id="years" name="years"></textarea><br>

			<label for="other">Other:</label>
			<textarea id="other" name="other"></textarea><br>

            <p>Have you ever had:</p>

            <br>

            <label for="blood">Blood Transfusion?</label>
            <form>
                <label>
                    <input type="radio" name="Y/N" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N" value="No">
                    No
                </label>
            </form>

            <br>

            <label for="drug">I.V. Drug Use?</label>
            <form>
                <label>
                    <input type="radio" name="Y/N" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N" value="No">
                    No
                </label>
            </form>

            <br>

            <label for="sex">Unsafe Sex?</label>
            <form>
                <label>
                    <input type="radio" name="Y/N" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N" value="No">
                    No
                </label>
            </form>

            <br>

            <label for="std">Sexually Transmitted Disease?</label>
            <form>
                <label>
                    <input type="radio" name="Y/N" value="Yes">
                    Yes
                </label>
                <label>
                    <input type="radio" name="Y/N" value="No">
                    No
                </label>
            </form>

            <br>

            <label for="add info">Additional Information:</label>
			<textarea id="add info" name="add info"></textarea><br>


		</fieldset>

		<button type="submit">Submit</button>
	</form>
</body>
</html>