function getUser(googleUser)
{
    var id_token = googleUser.getAuthResponse().id_token;
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
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    // This is null if the 'email' scope is not present.
    console.log('Email: ' + profile.getEmail());
    getUser(googleUser);
}
