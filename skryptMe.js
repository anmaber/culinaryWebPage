function validateForm() {
    let email = document.forms["send"]["femail"].value;
    if (email == "") {
      window.alert("Email must be filled out");
      return false;
    }

    let msg = document.forms["send"]["fmsg"].value;
    if (msg == "") {
      window.alert("Dont send empty message");
      return false;
    }

    return(window.confirm("are you sure to send?"));
  } 