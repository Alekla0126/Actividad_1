function getUser(googleUser)
{
    var id_token = googleUser.getAuthResponse().id_token;
    console.log(id_token);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://alekla.com/homeoffix/api/verify');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function ()
    {
        console.log('Signed in as: ' + xhr.responseText);
    };
    xhr.send('idtoken = ' + id_token);
}

function onSignIn(googleUser)
{
    var profile = googleUser.getBasicProfile();
    // Do not send to your backend! Use an ID token instead.
    console.log('ID: ' + profile.getId());
    console.log('Full Name: ' + profile.getName());
    console.log('Given Name: ' + profile.getGivenName());
    console.log('Family Name: ' + profile.getFamilyName());
    console.log('Email: ' + profile.getEmail());
    console.log('Image URL: ' + profile.getImageUrl());
    getUser(googleUser);
}
