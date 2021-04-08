// validate user name
function user_val(userName) {
  var letters = /^[A-Za-z]+$/;
  if (userName.value.match(letters)) return true;
  else {
    alert("Username must have alphabet characters only");
    userName.focus();
    return false;
  }
}

// validate pw
function pw_val(psw, mx, my) {
  var pw_len = psw.value.length;
  if (pw_len == 0 || pw_len <= x || pw_len >= y) {
    alert("Password has length between " + mx + "-" + my);
    psw.focus();
    return false;
  }
  return true;
}

// validate address
function add_val(address) {
  var letters = /^[0-9a-zA-Z] + $/;
  if (address.value.match(letters)) return true;
  else {
    alert("User address must have alphanumeric characters only");
    address.focus();
    return false;
  }
}

// validate email
function email_val(email) {
  var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.value.match(letters)) return true;
  else {
    alert("Your email address is invalid! Try again.");
    email.focus();
    return false;
  }
}

// validate phone number
function phone_val(phone) {
  var nums = /[0-9]/;
  if (phone.value.match(nums)) return true;
  else {
    alert("Your phone number is invalid. Try again.");
    phone.focus();
    return false;
  }
}

function form_val() {
  var userName = document.getElementsByName(userName);
  var pw = document.getElementsByName(psw);
  var address = document.getElementsByName(address);
  var email = document.getElementsByName(email);
  var phone = document.getElementsByName(phone);

  if (user_val(userName)) {
    if (pw_val(pw)) {
      if (email_val(email)) {
        if (phone_val(phone)) {
          if (phone_val(phone)) {
            return false;
          }
        }
      }
    }
  }
}
