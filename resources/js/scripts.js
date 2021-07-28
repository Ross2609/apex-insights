function get_player_stats(username, platform) {
    var myHeaders = new Headers();
    myHeaders.append("TRN-Api-Key", "5ce23af8-c76e-4127-862a-1cfc384b03d2");
    myHeaders.append("Cookie", "__cflb=02DiuFQAkRrzD1P1mdjW28WYn2UPf2uF9iZiww19dMzf6");

    var requestOptions = {
    method: 'GET',
    headers: myHeaders,
    redirect: 'follow'
    };

    fetch(`/player-stats`, requestOptions)
    .then(response => response.text())
    .then(result => console.log(result))
    .catch(error => console.log('error', error));
}
