<!DOCTYPE html>
<html>
<head>
<title>BlackRockProject - Facebook Login</title>
<meta charset="UTF-8">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&appId=1313124642128214&version=v2.2";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{1313124642128214}',
    cookie     : true,                         
    xfbml      : true,  
    version    : 'v2.2' 
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function testAPI() {
    FB.api('/me?fields=email,name,first_name,last_name,age_range,link,gender,locale', function(response) {
		window.location = 'facebook_oauth.php?email='+response.email+"&full_name="+response.name+"&first_name="+response.first_name+"&last_name="+response.last_name+"&age_range="+response.age_range+"&link="+response.link+"&gender="+response.gender+"&locale="+response.locale;
    });
  }
</script>
</body>
</html>